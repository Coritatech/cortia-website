
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
    '/cortia/' => 'controllers/index.php',
    '/cortia/contact/' => 'controllers/contact.php',
    '/cortia/services/' => 'controllers/services.php',
    '/cortia/about/' => 'controllers/about.php',
];

routeToController($url, $routes);