<?php
$info = [];

function layout_start($layout_name = "main")
{
    global $info;
    $info['layout'] = $layout_name;
    ob_start();
}

function layout_end()
{
    global $info,$route_data;
    if (http_response_code() === 404) {
        ob_clean();
        error_404();
    }
    $content = ob_get_clean();
    if($route_data['is_active']){
        require_once __DIR__ . "/../ui/layouts/" . $info['layout'] . ".php";
        exit;
    }
}

function wrap_start($wrapper_name)
{
    global $info;
    if (empty($info['wrapper']))
        $info['wrapper'] = [];
    array_push($info['wrapper'], $wrapper_name);
    ob_start();
}

function wrap_end()
{
    global $info;
    if (http_response_code() === 404) {
        ob_clean();
        error_404();
    }
    $wrapper = ob_get_clean();
    $current = array_pop($info['wrapper']);
    require_once __DIR__ . "/../ui/layouts/wrapper/" . $current . ".php";
}

function component($component, $data = [])
{
    include_once __DIR__ . "/../ui/components/$component.php";
}

function error_404()
{
    $custom404 = __DIR__ . "/../ui/views/errors/404.php";

    if (file_exists($custom404)) {
        include $custom404;
    }

    // No custom file? Let PHP show default 404
    header("HTTP/1.0 404 Not Found");
}
