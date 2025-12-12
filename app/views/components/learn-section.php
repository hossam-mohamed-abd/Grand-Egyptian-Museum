<?php
if (empty($courses) || !is_array($courses)) {
    echo '<p style="color:#777; text-align:center; padding:20px 0;">لا توجد برامج تعليمية حالياً.</p>';
} else {
    foreach ($courses as $course):
        // ... بقية كود الكارد هنا ...
    endforeach;
}
?>

<section id="learn-section" class="learn-section">

  <div class="learn-bg" style="background-image: url('<?= ASSETS ?>image/learn.png');"></div>

  <div class="learn-header">
    <h2>Learn & Education</h2>
    <div class="learn-line"></div>
    <p>
      Explore our educational programs, workshops, and virtual learning experiences inspired by Ancient Egypt.
    </p>
  </div>

  <div class="learn-cards-container">

<?php foreach ($courses as $course): ?>
    <div class="learn-card">
        <h3><?= $course['title'] ?></h3>
        <p><?= $course['description'] ?></p>

        <ul>
            <?php 
                $features = explode(";", $course['features']);
                foreach ($features as $f): 
            ?>
                <li><?= trim($f) ?></li>
            <?php endforeach; ?>
        </ul>

        <a href="<?= BASE_URL ?>booking?learn=<?= $course['id'] ?>">
            <button class="learn-btn">Book Now</button>
        </a>

    </div>
<?php endforeach; ?>


  </div>

</section>
