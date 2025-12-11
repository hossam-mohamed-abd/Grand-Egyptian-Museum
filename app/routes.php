<?php
require_once APP_PATH . '/core/Router.php';
require_once APP_PATH . '/core/Controller.php';

// Create router with base URL
$router = new Router(BASE_URL);

// Routes
$router->get('/', function () {
    require VIEW_PATH . 'home.php';
});

$router->get('/kids-zone', function () {
    require VIEW_PATH . 'Kids-Zone/KidsZone.php';
});

$router->get('/booking', function () {
    require VIEW_PATH . 'booking/booking.php';
});

$router->get('/collections', function () {
    require VIEW_PATH . 'Collections/Collections.php';
});

$router->get('/plans', function () {
    require VIEW_PATH . 'plans/plans.php';
});

$router->get('/donate', function () {
    require VIEW_PATH . 'Donate/Donate.php';
});

$router->get('/event-details', function () {
    require VIEW_PATH . 'event-details/event-details.php';
});

$router->get('/login', function () {
    require VIEW_PATH . 'regestration/login/login.php';
});
$router->get('/register', function () {
    require VIEW_PATH . 'regestration/register/register.php';
});

$router->get('/logout', function () {
    session_start();
    session_unset();
    session_destroy();
    header("Location: " . BASE_URL . "login");
    exit;
});


return $router;

