<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$uri = str_replace(BASE_URL, '', $uri);


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

    // admin routes
    '/admin-login' => 'controllers/admin/admin-login.php',
    '/admin-dashboard' => 'controllers/admin/dashboard.php',
    '/admin-logout' => 'controllers/admin/admin-logout.php',

    //admin ajax routes
    '/admin/AJAX/add_category' => 'controllers/admin/AJAX/add_category.php',
    '/admin/AJAX/edit_category' => 'controllers/admin/AJAX/edit_category.php',
    '/admin/AJAX/delete_category' => 'controllers/admin/AJAX/delete_category.php',
    '/admin/AJAX/delete_food' => 'controllers/admin/AJAX/delete_food.php',

    // customer ajax routes
    '/AJAX/addToCart' => 'controllers/AJAX/addToCart.php',
    '/AJAX/cartControll' => 'controllers/AJAX/cartControll.php',
    
];

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        require 'controllers/404.php';
    }
}



routeToController($uri, $routes);