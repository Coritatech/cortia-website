
<?php
function routeToController($url, $routes)
{
    if (array_key_exists($url, $routes)) {
        require $routes[$url];
    } else {
        require $routes['/404'];
    }
}
function abort($code = 404, )
{
    global $routes;
    http_response_code($code);
    die();
}

$url = parse_url($_SERVER['REQUEST_URI'])['path'];
// echo $url;
// die();
// $routes = [
//     '/cortia/' => 'controllers/index.php',
//     '/cortia/contact' => 'controllers/contact.php',
//     '/cortia/services' => 'controllers/services.php',
//     '/cortia/404' => 'controllers/404.php',
//     '/cortia/about' => 'controllers/about.php',
// ];

$routes = [
    '/' => 'controllers/index.php',
    '/contact' => 'controllers/contact.php',
    '/services' => 'controllers/services.php',
    '/404' => 'controllers/404.php',
    '/about' => 'controllers/about.php',
];
routeToController($url, $routes);