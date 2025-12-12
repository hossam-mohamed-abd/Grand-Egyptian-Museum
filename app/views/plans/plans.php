<?php require_once APP_PATH . '/config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visit Plans – Grand Egyptian Museum</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/bootstrap.min.css" />

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
      <img class="w-100" src="<?= $plans[0]['image'] ?>" alt="">
    </div>

    <section class="plans-wrapper">
      <br><br>
      <h1>Visit Plans</h1>

      <p class="description">
        Choose the perfect tour inside the Grand Egyptian Museum and explore the wonders of ancient Egypt through
        curated routes.
      </p>

      <div class="plans-container">

        <?php foreach ($plans as $plan): ?>

          <div class="plan-card">
            <h2><?= $plan['name'] ?></h2>

            <ul>
              <li><?= $plan['halls_count'] ?> halls included</li>
              <li>Duration: <?= $plan['duration'] ?></li>
              <li><?= substr($plan['description'], 0, 80) ?>...</li>
            </ul>

            <span class="price">Price: <?= $plan['price'] ?> EGP</span>

            <button onclick="window.location.href='<?= BASE_URL ?>booking?plan=<?= $plan['id'] ?>'">
              Start Tour
            </button>

          </div>

        <?php endforeach; ?>

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