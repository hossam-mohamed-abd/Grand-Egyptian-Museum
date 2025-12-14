<?php
require_once APP_PATH . '/config/config.php';

$name   = $_GET['name']   ?? 'Dear Supporter';
$amount = $_GET['amount'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Thank You – Grand Egyptian Museum</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="<?= ASSETS ?>css/bootstrap.min.css">

  <style>
    body {
      min-height: 100vh;
      background:
        radial-gradient(circle at top, rgba(212,175,55,0.15), transparent 60%),
        linear-gradient(180deg, #0b0b0b, #121212);
      color: #f5f5f5;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    .thank-card {
      max-width: 700px;
      width: 100%;
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(18px);
      border-radius: 20px;
      padding: 50px 40px;
      text-align: center;
      box-shadow: 0 30px 80px rgba(0, 0, 0, 0.6);
      border: 1px solid rgba(212,175,55,0.25);
    }

    .museum-seal {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      margin: 0 auto 20px;
      background: linear-gradient(135deg, #d4af37, #b8962e);
      display: flex;
      align-items: center;
      justify-content: center;
      color: #111;
      font-size: 36px;
      font-weight: bold;
      box-shadow: 0 0 30px rgba(212,175,55,0.6);
    }

    h1 {
      font-size: 2.6rem;
      margin-bottom: 10px;
      color: #d4af37;
      letter-spacing: 1px;
    }

    .subtitle {
      font-size: 1.1rem;
      color: #cfcfcf;
      margin-bottom: 30px;
    }

    .message {
      font-size: 1.2rem;
      line-height: 1.8;
      margin-bottom: 35px;
    }

    .highlight {
      color: #d4af37;
      font-weight: 600;
    }

    .donation-info {
      margin: 25px 0;
      font-size: 1.05rem;
      opacity: 0.9;
    }

    .signature {
      margin-top: 40px;
      font-style: italic;
      color: #bfae70;
    }

    .btn-home {
      margin-top: 35px;
      padding: 12px 36px;
      border-radius: 50px;
      border: none;
      background: linear-gradient(135deg, #d4af37, #b8962e);
      color: #111;
      font-weight: 600;
      text-decoration: none;
      display: inline-block;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .btn-home:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(212,175,55,0.5);
    }

    .share-note {
      margin-top: 25px;
      font-size: 0.9rem;
      color: #aaa;
    }
  </style>
</head>

<body>

  <div class="thank-card">
    <div class="museum-seal">GEM</div>

    <h1>Thank You</h1>
    <div class="subtitle">Grand Egyptian Museum</div>

    <div class="message">
      <span class="highlight"><?= htmlspecialchars($name) ?></span>,<br>
      your generosity is now part of <span class="highlight">7,000 years of history</span>.<br>
      Because of you, Egypt’s heritage will continue to inspire the world.
    </div>

    <?php if ($amount): ?>
      <div class="donation-info">
        Donation Amount: <span class="highlight"><?= htmlspecialchars($amount) ?> EGP</span>
      </div>
    <?php endif; ?>

    <div class="signature">
      — With gratitude,<br>
      The Grand Egyptian Museum Team
    </div>

    <a href="<?= BASE_URL ?>" class="btn-home">Back to Home</a>

    <div class="share-note">
      Feel free to share this moment and inspire others ❤️
    </div>
  </div>

</body>
</html>
