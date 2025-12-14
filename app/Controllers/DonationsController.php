<?php

class DonationsController
{
    public function store()
    {
        ob_start();
        header("Content-Type: application/json");
        session_start();

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            http_response_code(405);
            echo json_encode(['success' => false, 'msg' => 'Method Not Allowed']);
            exit;
        }

        require_once APP_PATH . '/core/database.php';

        try {
            $db = Database::connect();

            $user_id = $_SESSION['user_id'] ?? null;
            $name = $_POST['name'] ?? null;
            $email = $_POST['email'] ?? null;
            $amount = $_POST['amount'] ?? null;
            $message = $_POST['message'] ?? null;
            $payment_method = $_POST['payment_method'] ?? null;
            $currency = 'EGP';

            if (!$name || !$email || !$amount || !$payment_method) {
                echo json_encode(['success' => false, 'msg' => 'Missing required data']);
                exit;
            }

            $stmt = $db->prepare("
            INSERT INTO donations
            (user_id, name, email, amount, message, payment_method, currency)
            VALUES
            (:user_id, :name, :email, :amount, :message, :payment_method, :currency)
        ");

            $stmt->execute([
                ':user_id' => $user_id,
                ':name' => $name,
                ':email' => $email,
                ':amount' => $amount,
                ':message' => $message,
                ':payment_method' => $payment_method,
                ':currency' => $currency
            ]);

            ob_clean();
            echo json_encode(['success' => true]);
            exit;

        } catch (Throwable $e) {
            http_response_code(500);
            ob_clean();
            echo json_encode([
                'success' => false,
                'msg' => 'Server error',
                'error' => $e->getMessage()
            ]);
            exit;
        }
    }

}
