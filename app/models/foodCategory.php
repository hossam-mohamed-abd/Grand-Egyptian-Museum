<?php
require_once APP_PATH . '/models/BaseModel.php';

class foodCategory extends BaseModel
{
    protected static $table = 'food_categories';

    public static function getAllOrdered()
    {
        $stmt = self::db()->query(
            "SELECT * FROM food_categories ORDER BY name ASC"
        );
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getBySlug($slug)
    {
        $stmt = self::db()->prepare(
            "SELECT * FROM food_categories WHERE slug = ?"
        );
        $stmt->execute([$slug]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
