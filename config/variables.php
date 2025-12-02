<?php
// define("URL", "http://localhost/ashish_acadamy");
define("URL", "http://localhost:8000");
$validators = [];
// production
// $route_data = $_SERVER['REQUEST_URI'];
// debug
$route_data = parse_url(str_replace("/ashish_acadamy", "", $_SERVER['REQUEST_URI']));