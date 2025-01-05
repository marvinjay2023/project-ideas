<?php 

$routes = [
    '/' => 'controller/index.php',
    '/info' => 'controller/info.php',
    '/about' => 'controller/about.php',
];

$route = parse_url($_SERVER['REQUEST_URI'])['path'];

if(array_key_exists($route, $routes)){

    require $routes[$route];

}else{
    abort();
}

function abort($code = 404){

    http_response_code($code);

    require "view/{$code}.php";

    die;
}