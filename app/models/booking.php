<?php

require_once APP_PATH . "/models/BaseModel.php";

class Booking extends BaseModel
{
    protected static $table = "bookings";

    public static function createBooking($data)
    {
        $db = static::db();

        $stmt = $db->prepare("
            INSERT INTO bookings (
                user_id,
                full_name,
                email,
                phone,
                notes,
                base_price,
                type,
                item_id,
                tickets_adult,
                tickets_child,
                tickets_student,
                total_tickets,
                date_selected,
                time_selected,
                total_price,
                promo_code_id
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ");

        return $stmt->execute([
            $data['user_id'],
            $data['full_name'],
            $data['email'],
            $data['phone'],
            $data['notes'],
            $data['base_price'],
            $data['type'],
            $data['item_id'],
            $data['tickets_adult'],
            $data['tickets_child'],
            $data['tickets_student'],
            $data['total_tickets'],
            $data['date_selected'],     // ← بدل visit_date
            $data['time_selected'],     // ← بدل visit_time
            $data['total_price'],
            $data['promo_code_id'] ?? null
        ]);
    }
}
