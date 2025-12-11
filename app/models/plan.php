<?php

require_once APP_PATH . "/models/BaseModel.php";

class Plan extends BaseModel
{
    protected static $table = "plans";

    public static function getAllPlans()
    {
        $stmt = static::db()->prepare("SELECT * FROM plans ORDER BY price ASC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
