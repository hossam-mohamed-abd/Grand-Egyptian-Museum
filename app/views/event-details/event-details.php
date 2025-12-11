<?php require_once APP_PATH . '/config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $event['title'] ?> – Grand Egyptian Museum</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/bootstrap.min.css" />

  <!-- Components CSS -->
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/navbar.component.css">
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/footer-section.component.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/ai-component.css" />

  <!-- Event details page styles -->
  <link rel="stylesheet" href="<?= ASSETS ?>css/event-details.css">
</head>

<body>

  <!-- Navbar -->
  <?php include VIEW_PATH . 'components/navbar.php'; ?>

  <div style="margin-top:60px" class="documentNotNavbar">

    <!-- HERO SECTION -->
    <header class="event-hero">
      <img src="<?= $event['image'] ?>" alt="<?= $event['title'] ?>">
      <div class="overlay"></div>

      <div class="event-hero-text">
        <h1 id="eventTitle"><?= $event['title'] ?></h1>

        <p id="eventDate">
          ✦ <?= date("d F Y", strtotime($event['date'])) ?>
          <?php if (!empty($event['time'])): ?>
            – <?= $event['time'] ?>
          <?php endif; ?>
        </p>
      </div>
    </header>

    <!-- CONTENT SECTION -->
    <section class="event-content container">

      <h2>About This Event</h2>
      <p id="eventDescription">
        <?= nl2br($event['full_details']) ?>
      </p>

      <h3>Location</h3>
      <p><?= $event['location'] ?></p>

      <h3>Schedule</h3>
      <ul>
        <li>Opening at <?= $event['time'] ?></li>
        <li>Guided Tour at 12:00 PM</li>
        <li>Special Lecture at 3:00 PM</li>
      </ul>

      <h3>Reservation</h3>
      <p>Tickets will be available online and at the museum entrance.</p>

      <a href="<?= BASE_URL ?>" class="btn back-btn">Back to Events</a>


    </section>

    <!-- Footer -->
    <?php include VIEW_PATH . 'components/footer.php'; ?>
  </div>

  <?php include VIEW_PATH . 'components/ai.php'; ?>

  <script src="<?= ASSETS ?>js/bootstrap.bundle.min.js"></script>
  <script src="<?= ASSETS ?>js/navbar.component.js"></script>
  <script src="<?= ASSETS ?>js/ai.js"></script>

</body>
</html>
