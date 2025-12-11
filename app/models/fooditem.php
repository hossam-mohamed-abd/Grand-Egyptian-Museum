<?php
require_once "BaseModel.php";

class FoodItem extends BaseModel {
    
    protected static $table = "food_items";

    public static function getByCategory($category_id) {
        $stmt = self::db()->prepare("SELECT * FROM food_items WHERE category_id = ?");
        $stmt->execute([$category_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getByRestaurant($restaurant_id) {
        $stmt = self::db()->prepare("SELECT * FROM food_items WHERE restaurant_id = ?");
        $stmt->execute([$restaurant_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
