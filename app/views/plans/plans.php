<?php
require_once APP_PATH . '/config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visit Plans – Grand Egyptian Museum</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <!-- bootstrap -->
  <link rel="stylesheet" href="<?= ASSETS ?>css/bootstrap.min.css" />
  <!-- css components -->
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/navbar.component.css">
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/footer-section.component.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/ai-component.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/plans.css">
</head>

<body>

  <?php include VIEW_PATH . 'components/navbar.php'; ?>

  <div class="documentNotNavbar">
    <!-- Background -->
    <div class="bg-overlay">
      <img class="w-100" src="https://egyptra.pro/uploads/products/676bf845d5926.jpeg" alt="">
    </div> 

    <!-- Content -->
    <section class="plans-wrapper">
      <br><br>
      <h1>Visit Plans</h1>
      <p class="description">
        Choose the perfect tour inside the Grand Egyptian Museum and explore the wonders of ancient Egypt through
        curated routes.
      </p>

      <div class="plans-container">

        <div class="plan-card">
          <h2>Royal Statues Tour</h2>
          <ul>
            <li>12 halls dedicated to monumental statues</li>
            <li>Ramses II Grand Statue Hall</li>
            <li>Middle Statues Corridor</li>
            <li>Includes a short break + free drink</li>
          </ul>
          <span class="price">Price: 450 EGP</span>
          <button>Start Tour</button>
        </div>

        <div class="plan-card">
          <h2>Egyptian Civilizations Route</h2>
          <ul>
            <li>18 halls from Old to New Kingdom</li>
            <li>Rare historical section access</li>
            <li>Hieroglyphic inscriptions corridor</li>
            <li>VIP entry to special halls</li>
          </ul>
          <span class="price">Price: 650 EGP</span>
          <button>Start Tour</button>
        </div>

        <div class="plan-card">
          <h2>Golden Dynasty Trail</h2>
          <ul>
            <li>10 halls of the Golden Royal Family</li>
            <li>Royal Mummies Zone</li>
            <li>Jewelry & ancient masks</li>
            <li>Includes a small souvenir</li>
          </ul>
          <span class="price">Price: 400 EGP</span>
          <button>Start Tour</button>
        </div>



      </div>

    </section>


  </div>
  <div style="position: relative; z-index: 2;">
    <?php include VIEW_PATH . 'components/footer.php'; ?>
  </div>

  <?php include VIEW_PATH . 'components/ai.php'; ?>

  <script src="<?= ASSETS ?>js/bootstrap.bundle.min.js"></script>
  <script src="<?= ASSETS ?>js/navbar.component.js"></script>
  <script src="<?= ASSETS ?>js/ai.js"></script>

</body>

</html>