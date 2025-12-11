<?php
require_once APP_PATH . "/core/Database.php";
class BaseModel {

    protected static $table = "";
    protected static $primaryKey = "id";

    protected static function db() {
        return Database::connect();
    }

    public static function all() {
        $stmt = self::db()->query("SELECT * FROM " . static::$table);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id) {
        $stmt = self::db()->prepare(
            "SELECT * FROM " . static::$table . " WHERE " . static::$primaryKey . " = ?"
        );
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function delete($id) {
        $stmt = self::db()->prepare(
            "DELETE FROM " . static::$table . " WHERE " . static::$primaryKey . " = ?"
        );
        return $stmt->execute([$id]);
    }
}
