<?php
require_once "BaseModel.php";

class KidsGame extends BaseModel {

    protected static $table = "kids_games";

    public static function getAssets($game_id) {
        $stmt = self::db()->prepare("SELECT * FROM kids_game_assets WHERE game_id = ?");
        $stmt->execute([$game_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
