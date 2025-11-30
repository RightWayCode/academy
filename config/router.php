<?php
// Page routing
$route_data['is_active'] = false;

function view_run($veiw_dir = "", $filter = "")
{
    global $route_data;
    if ($route_data['is_active'])
        exit;
    $route_path = $route_data['path'];
    $file_path = str_ends_with($route_path, "/") ? "index" : $route_path;
    $view = __DIR__ . "/../ui/views/$veiw_dir/$file_path.php";
    if (str_contains($route_path, $filter)) {
        if (file_exists($view)) {
            require_once $view;
            $route_data['is_active'] = true;
        } else {
            http_response_code(404);
        }
    }

}

function request_handle()
{
    global $route_data;
    if ($route_data['is_active'])
        exit;
    $file_path = $route_data['path'];
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $path = __DIR__ . "/../action/{$file_path}.php";
        if (file_exists($file_path)) {
            require_once $path;
            $route_data['is_active'] = true;
        } else {
            http_response_code(404);
        }
    }
}

function get($route, $view)
{
    global $route_data;

    if ($route_data['is_active'])
        return;

    if ($_SERVER["REQUEST_METHOD"] === "GET") {

        $request = trim($route_data['path'], "/");
        $route = trim($route, "/");


        $regex = preg_replace_callback(
            '/\{([a-zA-Z_]+)\}([\-\/_])?/',  // match {param}+optional separator
            function ($m) {
                $param = $m[1];
                $sep = $m[2] ?? null;

                // 1) Slash-based param: flexible
                if ($sep === "/") {
                    return '(?P<' . $param . '>[^\/]+)\/';
                }

                // 2) Hyphen or underscore based param: strict
                if ($sep === "-" || $sep === "_") {
                    // exact one separator:
                    return '(?P<' . $param . '>[a-zA-Z0-9]+)' . $sep;
                }

                // last param of pattern
                return '(?P<' . $param . '>[a-zA-Z0-9\-_]+)';
            },
            $route
        );

        $regex = "#^" . $regex . "$#";

        if (preg_match($regex, $request, $matches)) {

            foreach ($matches as $key => $val)
                if (!is_string($key))
                    unset($matches[$key]);

            $route_data['params'] = $matches;

            $file = __DIR__ . "/../ui/views/$view.php";

            if (file_exists($file)) {
                require_once $file;
                $route_data['is_active'] = true;
            } else {
                http_response_code(404);
            }
        }
    }
}

function post($route, $view)
{
    global $route_data;

    if ($route_data['is_active'])
        return;

    if ($_SERVER["REQUEST_METHOD"] !== "POST")
        return;

    $request = trim($route_data['path'], "/");
    $route = trim($route, "/");

    // Convert {param} to strict REGEX (only letters+numbers)
    $pattern = preg_replace(
        '/\{([a-zA-Z_]+)\}/',
        '(?P<$1>[a-zA-Z0-9]+)',
        $route
    );

    // Complete strict regex (no extra segments allowed)
    $pattern = "#^" . $pattern . "$#";

    // Match URL to pattern
    if (preg_match($pattern, $request, $matches)) {

        // Clean numeric indexes
        foreach ($matches as $key => $val)
            if (!is_string($key))
                unset($matches[$key]);

        // Save dynamic parameters
        $route_data['params'] = $matches;

        // Load action file
        $file_path = __DIR__ . "/../action/$view.php";

        if (file_exists($file_path)) {
            require_once $file_path;
            $route_data['is_active'] = true;
        } else {
            http_response_code(404);
        }
    }
}

function error_handling()
{
    global $route_data;
    $route_data['is_active'] = true;
    http_response_code(404);
}
