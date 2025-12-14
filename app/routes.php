<?php
require_once APP_PATH . '/core/Router.php';
require_once APP_PATH . '/core/Controller.php';

$router = new Router(BASE_URL);

/* -------------------
   Public Pages
--------------------*/


// Home
$router->get('/', function () {
    require VIEW_PATH . 'home.php';
});

// Kids Zone
$router->get('/kids-zone', function () {
    require VIEW_PATH . 'Kids-Zone/KidsZone.php';
});

// Booking
$router->get('/booking', function () {
    require VIEW_PATH . 'booking/booking.php';
});

//--> Collections
// Collections main page
$router->get('/collections', function () {
    require APP_PATH . "/Controllers/CollectionsController.php";
    (new CollectionsController)->index();
});

// API Load More
$router->get('/api/collections/load-more', function () {
    require APP_PATH . "/Controllers/CollectionsController.php";
    (new CollectionsController)->loadMore();
});



// Donate
$router->get('/donate', function () {
    require VIEW_PATH . 'Donate/Donate.php';
});

$router->post('/donations/store', function () {
    require APP_PATH . "/Controllers/DonationsController.php";
    (new DonationsController)->store();
});

/* -------------------
      Authentication
--------------------*/
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

/* -------------------
      Events (Dynamic)
--------------------*/

// Events List
$router->get('/events', function () {
    require APP_PATH . "/Controllers/EventsController.php";
    (new EventsController)->index();
});

// Event Details
$router->get('/event-details', function () {
    require APP_PATH . "/Controllers/EventsController.php";
    $id = $_GET["id"] ?? null;
    (new EventsController)->show($id);
});

/* -------------------
      Plans (Dynamic)
--------------------*/

// Plans List
$router->get('/plans', function () {
    require APP_PATH . "/Controllers/PlansController.php";
    (new PlansController)->index();
});

$router->post('/booking/submit', function () {
    require APP_PATH . "/Controllers/BookingController.php";
    (new BookingController)->submit();
});


return $router;
