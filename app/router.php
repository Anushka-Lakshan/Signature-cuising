<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',

    // customer routes
    '/online-order' => 'controllers/online-order.php',
    '/reservation' => 'controllers/reservation.php',
    '/gallery' => 'controllers/gallery.php',
    '/facility' => 'controllers/facility.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/register' => 'controllers/register.php',
    '/login' => 'controllers/login.php',
    '/cart' => 'controllers/cart.php',
    '/my-account' => 'controllers/my-account.php',
    '/logout' => 'controllers/logout.php',
];

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        require 'controllers/404.php';
    }
}



routeToController($uri, $routes);