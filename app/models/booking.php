<?php
require_once "BaseModel.php";

class Booking extends BaseModel {

    protected static $table = "bookings";

    public static function getTickets($booking_id) {
        $stmt = self::db()->prepare("SELECT * FROM tickets WHERE booking_id = ?");
        $stmt->execute([$booking_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
