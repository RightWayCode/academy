<?php
function hole(...$data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    die;
}

function add_validation($v)
{
    global $validators;
    if (is_array($v)) {
        return [...$validators, ...$v];
    } else {
        return [...$validators, $v];
    }
}
function get_validation($validation)
{
    global $validators;
    return $validators[$validation];
}

function validate()
{
    global $route_data, $validators;

    // param validation (middleware-like)
    foreach ($route_data['params'] as $key => $value) {

        // only validate if rule exists
        if (isset($validators[$key])) {
            // allowed values array
            $allowed = $validators[$key];

            // check match

            if (!key_exists($value, $allowed)) {
                http_response_code(404);
                return;
            }

            $route_data["page_info"][$key] = $allowed[$value];
        }
    }

}

function url($dir_route)
{
    echo URL.$dir_route;
}

function location($path=''){
    header("Location: ".URL."/$path");
}