<?php
require_once APP_PATH . '/config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Event Details – Grand Egyptian Museum</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <!-- bootstrap -->
  <link rel="stylesheet" href="<?= ASSETS ?>css/bootstrap.min.css" />
  <!-- css components -->
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/navbar.component.css">
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/footer-section.component.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/ai-component.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/event-details.css">
</head>

<body>
  <?php include VIEW_PATH . 'components/navbar.php'; ?>
  <div style="margin-top:60px" class="documentNotNavbar">
    <!-- HERO IMAGE -->
    <header class="event-hero">
      <img src="https://www.threetomatoes.com/wp-content/uploads/2023/10/common-corporate-events.jpg" alt="Event Image">
      <div class="overlay"></div>
      <div class="event-hero-text">
        <h1 id="eventTitle">Tutankhamun Exhibition</h1>
        <p id="eventDate">✦ 14 March 2025</p>
      </div>
    </header>

    <!-- EVENT CONTENT -->
    <section class="event-content container">

      <h2>About This Event</h2>
      <p id="eventDescription">
        Discover rare artifacts from the tombs of Egypt’s greatest kings.
        This exhibition showcases golden treasures, ceremonial artifacts,
        and historical secrets from the 18th dynasty.
      </p>

      <h3>Location</h3>
      <p>Grand Egyptian Museum – Main Exhibition Hall</p>

      <h3>Schedule</h3>
      <ul>
        <li>Opening at 10:00 AM</li>
        <li>Guided Tour at 12:00 PM</li>
        <li>Special Lecture at 3:00 PM</li>
      </ul>

      <h3>Reservation</h3>
      <p>Tickets will be available online and at the museum entrance.</p>

      <a href="#" class="btn back-btn">Back to Events</a>

    </section>
    <?php include VIEW_PATH . 'components/footer.php'; ?>
  </div>

  <?php include VIEW_PATH . 'components/ai.php'; ?>

  <script src="<?= ASSETS ?>js/bootstrap.bundle.min.js"></script>
  <script src="<?= ASSETS ?>js/navbar.component.js"></script>
  <script src="<?= ASSETS ?>js/ai.js"></script>
</body>

</html>