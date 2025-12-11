<section id="events" class="events-section">
  <div class="container">
    <h2 class="events-title">Upcoming Events</h2>

    <div class="events-grid">

      <?php foreach ($events as $event): ?>
        <div class="event-card">

          <img src="<?= $event['image'] ?>" alt="<?= $event['title'] ?>">

          <div class="event-info">
            <h3><?= $event['title'] ?></h3>

            <p><?= $event['description'] ?></p>

            <span class="date">
              ✦ <?= date("d F Y", strtotime($event['date'])) ?> — <?= $event['time'] ?>
            </span>

            <a href="<?= BASE_URL ?>event-details?id=<?= $event['id'] ?>">
              <button class="event-btn">Learn More</button>
            </a>

          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>
