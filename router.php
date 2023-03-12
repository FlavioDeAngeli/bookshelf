<?php
//When our project is in a different path from the root (in this case bookshelf) we'll need
//a '.htaccess' file that specifies the correct path for redirect in order to make router work

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    "/bookshelf/" => "controllers/index.php",
    "/bookshelf/index.php" => "controllers/index.php",
    "/bookshelf/authors" => "controllers/authors.php",
    "/bookshelf/books" => "controllers/books.php",
    "/bookshelf/book" => "controllers/book.php",
    "/bookshelf/insertbooks" => "controllers/insertbooks.php",
    "/bookshelf/searchbooks" => "controllers/searchbooks.php",
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