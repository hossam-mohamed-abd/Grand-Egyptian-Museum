<?php

require_once APP_PATH . "/models/User.php";

class UserController
{
    // ==========================
    // SIGNUP
    // ==========================
    public function signup()
    {
        header("Content-Type: application/json");

        $name = trim($_POST["name"] ?? "");
        $email = trim($_POST["email"] ?? "");
        $password = trim($_POST["password"] ?? "");

        // FRONTEND VALIDATION موجود ولكن نعمل VALIDATION BACKEND برضو
        if (strlen($name) < 3) {
            echo json_encode(["status" => "error", "message" => "Name too short"]);
            return;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(["status" => "error", "message" => "Invalid email"]);
            return;
        }

        if (User::findByEmail($email)) {
            echo json_encode(["status" => "error", "message" => "Email already exists"]);
            return;
        }

        $hashed = password_hash($password, PASSWORD_DEFAULT);

        if (User::create($name, $email, $hashed)) {
            echo json_encode(["status" => "success"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Could not create user"]);
        }
    }


    // ==========================
    // LOGIN
    // ==========================
    public function login()
    {
        header("Content-Type: application/json");

        $email = trim($_POST["email"] ?? "");
        $password = trim($_POST["password"] ?? "");

        $user = User::findByEmail($email);

        if (!$user) {
            echo json_encode(["status" => "error", "message" => "Email not found"]);
            return;
        }

        if (!password_verify($password, $user["password_hash"])) {
            echo json_encode(["status" => "error", "message" => "Incorrect password"]);
            return;
        }

        // تسجيل الجلسة
        $_SESSION["user"] = [
            "id" => $user["id"],
            "name" => $user["name"],
            "email" => $user["email"],
            "role" => $user["role"],
            "points" => $user["points"],
            "profile_image" => $user["profile_image"]
        ];


        echo json_encode(["status" => "success"]);
    }


    // ==========================
    // LOGOUT
    // ==========================
    public function logout()
    {
        session_destroy();
        header("Location: " . BASE_URL . "login");
        exit;
    }
}
