<?php

// -----------------------------
// GLOBAL ERROR HANDLER
// -----------------------------

// PHP born errors (warnings/notices fatal)
set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
});

// Exceptions (500)
set_exception_handler(function ($e) {

    http_response_code(500);

    $custom = __DIR__ . "/errors/500.php";

    if (file_exists($custom)) {
        include $custom;
    } else {
        // Let PHP show its default error message
        echo "500 - Server Error<br>";
        echo $e->getMessage();
    }

    exit;
});

// Fatal errors (404, 500 etc)
register_shutdown_function(function () {

    $error = error_get_last();
    if (!$error)
        return;

    // If it's fatal error → treat as 500
    if ($error['type'] === E_ERROR || $error['type'] === E_PARSE) {

        http_response_code(500);

        $custom = __DIR__ . "/errors/500.php";

        if (file_exists($custom)) {
            include $custom;
        }

        // If no custom file → PHP default output chale
        // So return without exit
    }
});


