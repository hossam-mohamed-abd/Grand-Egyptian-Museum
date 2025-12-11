<?php





session_start();

require "../app/config/config.php";
require "../app/core/Router.php";

$router = require APP_PATH . "/routes.php";


// =======================
//         ROUTES
// =======================

// الصفحة الرئيسية



// عملية تسجيل الدخول (POST)
$router->post("/auth/login", function () {
    require APP_PATH . "/controllers/UserController.php";
    (new UserController)->login();
});

// عملية إنشاء حساب (POST)
$router->post("/auth/signup", function () {
    require APP_PATH . "/controllers/UserController.php";
    (new UserController)->signup();
});

// =========================
// تشغيل الراوتر
// =========================
// =======================
// حماية الصفحات الخاصة
// =======================

$publicRoutes = [
    "/", 
    "/login",
    "/register",
    "/auth/login",
    "/auth/signup"
];

$currentRoute = strtok($_SERVER["REQUEST_URI"], "?");  // إزالة query string

// إزالة BASE_URL من بداية المسار
if (strpos($currentRoute, BASE_URL) === 0) {
    $currentRoute = substr($currentRoute, strlen(BASE_URL));
    $currentRoute = "/" . ltrim($currentRoute, "/");
}

// لو المستخدم غير مسجل دخول وداخل على صفحة خاصة
if (!isset($_SESSION["user"]) && !in_array($currentRoute, $publicRoutes)) {
    header("Location: " . BASE_URL . "login");
    exit;
}
$router->dispatch($_SERVER["REQUEST_URI"], $_SERVER["REQUEST_METHOD"]); 


