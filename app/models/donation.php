<?php
require_once APP_PATH . '/models/BaseModel.php';

class Donation extends BaseModel
{
    protected static $table = "donations";

    public static function create($data)
    {
        $stmt = self::db()->prepare("
            INSERT INTO donations 
            (user_id, amount, message, payment_method, currency) 
            VALUES (?, ?, ?, ?, ?)
        ");

        return $stmt->execute([
            $data['user_id'],
            $data['amount'],
            $data['message'],
            $data['payment_method'],
            $data['currency']
        ]);
    }
}
