<?php
require_once '../src/helpers/auth.php';
$routes = [
    "/olms" => "./home.php",
    "/olms/home/" => "./home.php"
];

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if (array_key_exists($requestUri, $routes)) {
    include $routes[$requestUri];
} else {
    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
    header("location: /enter/error");
}