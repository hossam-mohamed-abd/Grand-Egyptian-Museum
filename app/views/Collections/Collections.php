<?php
require_once APP_PATH . '/config/config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Collections – Grand Egyptian Museum</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <!-- bootstrap -->
  <link rel="stylesheet" href="<?= ASSETS ?>css/bootstrap.min.css" />
  <!-- css components -->
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/navbar.component.css">
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/footer-section.component.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/ai-component.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/Collections.css">
</head>

<body>
  <?php include VIEW_PATH . 'components/navbar.php'; ?>

  <div class="documentNotNavbar">
    <!-- HERO SECTION -->
    <header class="collections-hero mt-4">
      <h1>Museum Collections</h1>
      <p>Explore iconic artifacts, ancient treasures, and legendary masterpieces from the heart of Egyptian history.</p>
    </header>


    <!-- HIGHLIGHTS SECTION -->
    <section class="highlights">
      <h2>Featured Highlights</h2>

      <div class="highlight-grid">

        <div class="item">
          <img src="https://www.swissinfo.ch/content/wp-content/uploads/sites/13/2024/04/592468480_highres.jpg" alt="">
          <h3>Ramses II Statue</h3>
          <p>A colossal masterpiece representing one of Egypt’s greatest kings.</p>
        </div>

        <div class="item">
          <img
            src="https://th-thumbnailer.cdn-si-edu.com/RimQQx1wvoYLtF24n2_a2VO-CpU=/fit-in/1600x0/filters:focal(1431x662:1432x663)/https://tf-cmsv2-smithsonianmag-media.s3.amazonaws.com/filer_public/f6/5f/f65f235b-bf7c-461b-94c4-f83703a4687a/gettyimages-501686984.jpg"
            alt="">
          <h3>Golden Mask of Tutankhamun</h3>
          <p>The world’s most iconic artifact of the young Pharaoh.</p>
        </div>

        <div class="item">
          <img
            src="https://egyptianstreets.com/wp-content/uploads/2019/05/59992248_2174956022569771_5496356080613064704_n.jpg"
            alt="">
          <h3>Royal Mummies</h3>
          <p>Preserved kings and queens revealing ancient burial secrets.</p>
        </div>

      </div>
    </section>



    <!-- CATEGORIES SECTION -->
    <section class="categories">
      <h2>Collections Categories</h2>

      <div class="cat-grid">
        <div class="cat">
          <img src="<?= ASSETS ?>image/RoyalStatues.png">
          <span>Royal Statues</span>
        </div>

        <div class="cat">
          <img src="<?= ASSETS ?>image/ancientartifacts.jpg">
          <span>Ancient Artifacts</span>
        </div>

        <div class="cat">
          <img src="<?= ASSETS ?>image/RoyalMummies.png">
          <span>Royal Mummies</span>
        </div>

        <div class="cat">
          <img src="<?= ASSETS ?>image/Jewelry&Gold.png">
          <span>Jewelry & Gold</span>
        </div>

        <div class="cat">
          <img src="<?= ASSETS ?>image/Papyrus&Scripts.png">
          <span>Papyrus & Scripts</span>
        </div>

        <div class="cat">
          <img src="<?= ASSETS ?>image/DailyLifeObjects.png">
          <span>Daily Life Objects</span>
        </div>

      </div>
    </section>


    <!-- GALLERY -->
    <section class="gallery">
      <h2>Discover More</h2>

      <div class="gallery-grid">

        <img
          src="https://egyptconcierge.travel/wp-content/uploads/2025/06/Egypt-Concierge-Grand-Egyptian-Museum-GEM.jpg">
        <img src="https://en.amwalalghad.com/wp-content/uploads/2023/09/tut.jpg">
        <img
          src="https://i.ytimg.com/vi/M3g39UZpjnY/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLCFU_2600ZR5NJgm3tzHn-Ni334DA">
        <img
          src="https://media.admiddleeast.com/photos/6807aad0b6b67e99b7b8d670/master/w_1600%2Cc_limit/GettyImages-1169987699.jpg">
        <img src="https://www.civitatis.com/f/egipto/el-cairo/galeria/salas-gran-museo-egipcio.jpg">
        <img src="https://www.fvw.de/news/media/31/GEM-Erffnung-306745.jpeg">

      </div>

      <div class="center-btn">
        <a class="more-btn" href="#">Explore Full Collections</a>
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