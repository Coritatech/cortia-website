
<?php

function routeToController($url, $routes)
{
    if (array_key_exists($url, $routes)) {
        require $routes[$url];
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);

    echo "Sorry Not Found.";

    die();
}

$url = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/contact/' => 'controllers/contact.php',
];

routeToController($url, $routes);