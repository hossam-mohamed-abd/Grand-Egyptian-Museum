<?php

require_once APP_PATH . "/models/Booking.php";

class BookingController
{
    public function submit()
    {


        $data = [
            "user_id" => $_SESSION["user"]["id"] ?? null,
            "full_name" => $_POST["full_name"],
            "email" => $_POST["email"],
            "phone" => $_POST["phone"],
            "visit_date" => $_POST["visit_date"],
            "visit_time" => $_POST["visit_time"],
            "notes" => $_POST["notes"] ?? null,

            "base_price" => $_POST["base_price"] ?? 0,
            "type" => "plan",   // أو event أو kids حسب الصفحة
            "item_id" => $_POST["plan_id"],

            "tickets_adult" => $_POST["tickets_adult"],
            "tickets_child" => $_POST["tickets_child"],
            "tickets_student" => $_POST["tickets_student"],
            "total_tickets" => $_POST["total_tickets"],
            "total_price" => $_POST["total_price"],
            "promo_code_id" => null
        ];

        Booking::createBooking($data);

        header("Location: " . BASE_URL . "booking/success");

        Booking::createBooking($data);

        // بعد نجاح الحجز → Redirect إلى Home
        header("Location: " . BASE_URL);
        exit;


    }


}
