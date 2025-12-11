<?php

class Database {

    private static $instance = null;

    public static function connect() {

        if (self::$instance === null) {

            $host = "localhost";
            $db   = "gem";  // اسم الداتا بيز
            $user = "root";        // اسم المستخدم الافتراضي
            $pass = "";            // الباسورد الافتراضي في XAMPP (فارغ)

            try {
                self::$instance = new PDO(
                    "mysql:host=$host;dbname=$db;charset=utf8mb4",
                    $user,
                    $pass
                );

                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e) {
                die("Database Connection Failed: " . $e->getMessage());
            }
        }

        return self::$instance;
    }
}