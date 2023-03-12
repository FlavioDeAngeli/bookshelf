<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// var_dump($_SERVER) ;

$routes = [
    "/" => "controllers/index.php",
    "index" => "controllers/index.php",
    "authors" => "controllers/authors.php",
    "books" => "controllers/books.php",
    "insertbooks" => "controllers/insertbooks.php",
    "searchbooks" => "controllers/searchbooks.php",
];

function controllerRoute($uri, $routes) {
    // echo $uri;
    // echo '<br>';
    // var_dump($routes);
    // die();
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($errorcode = 404) {
    http_response_code($errorcode);
    require "views/{$errorcode}.php";
    die();
}

controllerRoute($uri, $routes);
?>