<?php

require_once APP_PATH . "/models/BaseModel.php";

class Event extends BaseModel
{
    protected static $table = "events";

    public static function allEvents()
    {
        $stmt = static::db()->prepare("SELECT * FROM events ORDER BY date ASC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findEvent($id)
    {
        $stmt = static::db()->prepare("SELECT * FROM events WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
