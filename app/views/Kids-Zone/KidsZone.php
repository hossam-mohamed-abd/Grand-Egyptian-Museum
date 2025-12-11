<?php
require_once APP_PATH . '/config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kids Zone – Grand Egyptian Museum</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <!-- bootstrap -->
  <link rel="stylesheet" href="<?= ASSETS ?>css/bootstrap.min.css" />
  <!-- css components -->
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/navbar.component.css">
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/footer-section.component.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/ai-component.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/KidsZone.css">
</head>

<body>
  <?php include VIEW_PATH . 'components/navbar.php'; ?>
  <div class="documentNotNavbar">
    <!-- HERO SECTION -->
    <header class="kids-hero">
      <h1>Kids Zone</h1>
      <p>Fun, learning, games, and activities designed for young explorers of Egyptian history.</p>
    </header>


    <!-- HIGHLIGHTS SECTION -->
    <section class="highlights">
      <h2>Popular Kids Activities</h2>

      <div class="highlight-grid">

        <div class="item">
          <img
            src="https://h5p.org/sites/default/files/styles/medium-logo/public/logos/memory-game-icon.png?itok=bIQqHE7Y"
            alt="">
          <h3>Memory Game</h3>
          <p>Match ancient Egyptian symbols and test your memory skills!</p>
        </div>

        <div class="item">
          <img src="https://cdn-icons-png.flaticon.com/512/5930/5930147.png" alt="">
          <h3>Guess the Artifact</h3>
          <p>Identify hidden artifacts and learn fun historical facts.</p>
        </div>

        <div class="item">
          <img src="https://resilienteducator.com/wp-content/uploads/2020/09/childrens-museum-educator-2.jpg" alt="kidszone1">
          <h3>Kids Museum Tour</h3>
          <p>A guided trip designed for kids to explore treasures in a fun way.</p>
        </div>

      </div>
    </section>


    <!-- CATEGORIES SECTION -->
    <section class="categories">
      <h2>Kids Programs & Categories</h2>

      <div class="cat-grid">

        <div class="cat">
          <img src="https://assets.kpmg.com/is/image/kpmgcloud/ie-gaming-gains:cq5dam-web-656-656?wid=328&hei=328">
          <span>Art Workshops</span>
        </div>

        <div class="cat">
          <img src="https://assets.kpmg.com/is/image/kpmgcloud/ie-gaming-gains:cq5dam-web-656-656?wid=328&hei=328">
          <span>Learn Hieroglyphs</span>
        </div>

        <div class="cat">
          <img src="https://assets.kpmg.com/is/image/kpmgcloud/ie-gaming-gains:cq5dam-web-656-656?wid=328&hei=328">
          <span>Discovery Classes</span>
        </div>

        <div class="cat">
          <img src="https://assets.kpmg.com/is/image/kpmgcloud/ie-gaming-gains:cq5dam-web-656-656?wid=328&hei=328">
          <span>Storytelling Sessions</span>
        </div>

        <div class="cat">
          <img src="https://assets.kpmg.com/is/image/kpmgcloud/ie-gaming-gains:cq5dam-web-656-656?wid=328&hei=328">
          <span>Crafting & Coloring</span>
        </div>

        <div class="cat">
          <img src="https://assets.kpmg.com/is/image/kpmgcloud/ie-gaming-gains:cq5dam-web-656-656?wid=328&hei=328">
          <span>Family Tours</span>
        </div>

      </div>
    </section>


    <!-- GALLERY SECTION -->
    <section class="gallery">
      <h2>Kids Zone Gallery</h2>

      <div class="gallery-grid">

        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP7AAjkQN2m3pr64tBATZGofH7riSxSg5olA&s">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP7AAjkQN2m3pr64tBATZGofH7riSxSg5olA&s">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP7AAjkQN2m3pr64tBATZGofH7riSxSg5olA&s">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP7AAjkQN2m3pr64tBATZGofH7riSxSg5olA&s">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP7AAjkQN2m3pr64tBATZGofH7riSxSg5olA&s">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP7AAjkQN2m3pr64tBATZGofH7riSxSg5olA&s">

      </div>

      <div class="center-btn">
        <a class="more-btn" href="kids-activities-full.html">View All Activities</a>
      </div>

    </section>
    <?php include VIEW_PATH . 'components/footer.php'; ?>
  </div>
  <?php include VIEW_PATH . 'components/ai.php'; ?>
  <script src="<?= ASSETS ?>js/bootstrap.bundle.min.js"></script>
  <script src="<?= ASSETS ?>js/navbar.component.js"></script>
  <script src="<?= ASSETS ?>js/ai.js"></script>
</body>

</html>