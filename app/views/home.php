<?php require_once APP_PATH . '/config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Grand Egyptian Museum</title>
  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Science+Gothic:wght@100..900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <!-- bootstrap -->
  <link rel="stylesheet" href="<?= ASSETS ?>css/bootstrap.min.css" />
  <!-- css components -->
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/navbar.component.css">
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/header.component.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/events-section.component.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/Collections-section.component.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/learn-section.component.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/Kids&game-section.component.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/Donate-section.component.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/About-section.component.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/footer-section.component.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/ai-component.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/food-section-component.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/main.css" />

  
  <style>
    body{
      background-color: rgb(247, 245, 240);
    }
  </style>
</head>

<body>
  <?php $basePath = "../../../"; ?>
  <?php include VIEW_PATH . 'components/navbar.php'; ?>
  <div class="documentNotNavbar">
    <!-- start to header -->
    <header id="header_1">
      <h1>Where History Lives. Where Pharaohs Rise Again.</h1>
      <p>Unveil the treasures of Egypt’s greatest civilization at the GEM.</p>
      <div>
        <a href="<?= BASE_URL ?>plans"><button>Plan Your Visit</button></a>
      </div>
    </header>
    <!-- end to header -->

    <!-- event- -->
    <?php
    require APP_PATH . "/Controllers/EventsController.php";
    (new EventsController)->index();
    ?>

    <!-- collections-preview- -->
    <!-- Collections Preview -->
    <?php
    require_once APP_PATH . "/models/Collection.php";

    if (!isset($collections_preview)) {
      $collections_preview = Collection::limit(3); // أول 3 فقط للعرض
    }
    ?>

    <?php include VIEW_PATH . "components/collections-preview-section.php"; ?>



    <!-- learn-section- -->
    <?php
    // تأكد إن المسار للموديل صحيح
    require_once APP_PATH . '/models/LearnCourse.php';

    // جلب البيانات لو مش موجودة
    if (!isset($courses)) {
      $courses = LearnCourse::all();
    }
    ?>
    <!-- بعد كده include للـ component -->
    <?php include VIEW_PATH . 'components/learn-section.php'; ?>




    <section id="kids-zone" class="kids-zone" id="kids">
      <div class="kids-header">
        <h2>Kids Zone</h2>
        <p>
          Fun and educational experiences for young visitors inside the
          museum.
        </p>
      </div>

      <div class="kids-gallery">
        <div class="kids-photo">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTedo5CF8R8l4p5mp5fq61LffBTuL363pPReQ&s"
            alt="Kids drawing in a museum" />
        </div>

        <div class="kids-photo">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSI9yNnPRF8WFd9MY7DO1ZSdhd2YfNEAj4hbg&s"
            alt="Children looking at statues" />
        </div>

        <div class="kids-photo">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYSSNUexE9hCA1DtU9YxSiNHRrzVKnXvC0fA&s"
            alt="School group in a museum" />
        </div>

        <div class="kids-photo">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaMkGcj1h8hxDkL-zCYGSgzbjcovb9EFaXcw&s"
            alt="Kids exploring museum" />
        </div>
      </div>

      <div class="kids-btn-wrapper">
        <a href="<?= BASE_URL ?>kids-zone"><button class="kids-main-btn">See Kids Activities</button></a>

      </div>
      <section class="preview-card kids-zone row justify-content-center gap-4" id="kids">
        <!-- ... باقي سكشن الأطفال والصور ... -->
        <!-- Memory Game Card (Preview) -->
        <div class="memory-preview-card col-sm-12 col-md-6" id="openMemoryGame">
          <div class="memory-preview-top">
            <img src="<?= ASSETS ?>image/gameKids/logogame1.png" class="memory-preview-image" />
          </div>

          <h3>Memory Game</h3>
          <p>Match the Egyptian symbols and have fun!</p>
          <button>Play Now</button>
        </div>

        <!-- Guess the Artifact - Preview Card -->
        <div class="artifact-preview-card col-sm-12 col-md-6" id="openArtifactGame">
          <div class="artifact-preview-icon">🗿</div>
          <h3>Guess the Artifact</h3>
          <p>Can you identify the ancient Egyptian artifact?</p>
          <button>Play Now</button>
        </div>

        <!-- Kids Museum Tour -->
        <div class="artifact-preview-card test col-sm-12 col-md-6 coming-soon">
          <div class="memory-preview-top">
            <img src="https://resilienteducator.com/wp-content/uploads/2020/09/childrens-museum-educator-2.jpg"
              class="memory-preview-image" />
          </div>
          <h3>Kids Museum Tour</h3>
          <p>A guided trip designed for kids to explore treasures in a fun way.</p>
          <button>coming-soon</button>
        </div>

        <!-- Maze of the Sphinx -->
        <div class="artifact-preview-card test col-sm-12 col-md-6 coming-soon">
          <div class="memory-preview-top">
            <img src="https://cdn-icons-png.flaticon.com/512/8920/8920636.png" class="memory-preview-image" />
          </div>
          <h3>Maze of the Sphinx</h3>
          <p>Navigate the maze to help the Sphinx find its missing crown.</p>
          <button>coming-soon</button>
        </div>

        <!-- Hieroglyph Puzzle -->
        <div class="artifact-preview-card test col-sm-12 col-md-6 coming-soon">
          <div class="memory-preview-top">
            <img src="https://cdn-icons-png.flaticon.com/512/9855/9855619.png" class="memory-preview-image" />
          </div>
          <h3>Hieroglyph Puzzle</h3>
          <p>Arrange hieroglyph tiles to unlock the temple door.</p>
          <button>coming-soon</button>
        </div>
      </section>
    </section>

    <section id="donate-section" class="donate-section" id="donate"
      style="background-image: url('<?= ASSETS ?>image/collage.png');">
      <div class="donate-overlay"></div>

      <div class="donate-content">
        <h2>Support the Grand Egyptian Museum</h2>
        <p>
          Help us preserve Egypt’s ancient heritage and continue creating
          educational programs for future generations.
        </p>
        <a href="<?= BASE_URL ?>donate"><button class="donate-btn">Donate Now</button></a>
      </div>
    </section>

   
    <section class="home-dining-experience ">
      <div class="overlay"></div>

      <div class="container content">
        <h2>A Culinary Journey Through Time</h2>

        <p>
          Step into a dining experience as extraordinary as the history surrounding you.
          Inside the Grand Egyptian Museum, our curated restaurants and cafés bring together
          authentic flavors, international cuisines, and modern dining concepts.
        </p>

        <a href="<?= BASE_URL ?>food" class="btn explore-food-btn">
          Explore Museum Dining
        </a>
      </div>
    </section>




    <section id="about-section" class="about-section" id="about">
      <div class="about-container">
        <div class="about-image">
          <img
            src="https://wallpapers.com/images/hd/magnificent-interior-design-of-grand-egyptian-museum-z8xil4b78x08tl79.jpg"
            alt="About GEM" />
        </div>

        <div class="about-content">
          <h2>About the Grand Egyptian Museum</h2>
          <p>
            The Grand Egyptian Museum (GEM) is the world’s largest
            archaeological museum, housing thousands of ancient Egyptian
            artifacts, including the complete Tutankhamun collection. Its
            mission is to preserve Egypt’s heritage and bring history to life
            through immersive exhibitions and educational programs.
          </p>


        </div>
      </div>
    </section>

    <?php include VIEW_PATH . 'components/footer.php'; ?>

    <!-- games -->
    <!-- Memory Game Overlay -->
    <div class="memory-overlay" id="memoryOverlay">
      <div class="memory-container">
        <button class="memory-close" id="closeMemoryGame">&times;</button>

        <h2 class="memory-title">Memory Game – Egyptian Icons</h2>
        <p class="memory-subtitle">
          Click on the cards and match all Egyptian symbols.
        </p>

        <div class="memory-grid" id="memoryGrid">
          <!-- Cards هتتولد بالـ JavaScript -->
        </div>

        <div class="memory-footer">
          <span id="memoryStatus">Matches: 0</span>
          <button id="restartMemoryGame" class="memory-restart">
            Restart
          </button>
        </div>
      </div>
    </div>

    <!-- Guess the Artifact Overlay -->
    <div class="artifact-overlay" id="artifactOverlay">
      <div class="artifact-container">
        <button class="artifact-close" id="closeArtifactGame">&times;</button>

        <h2 class="artifact-title">Guess the Artifact</h2>

        <img id="artifactImage" class="artifact-image" src="" alt="Artifact" />

        <div class="artifact-options">
          <!-- الخيارات هتتبني بالـ JS -->
        </div>

        <div class="artifact-footer">
          <span id="artifactStatus">Choose the correct answer!</span>
          <button id="artifactRestart" class="artifact-restart">Next</button>
        </div>
      </div>
    </div>
  </div>
  <?php include VIEW_PATH . 'components/ai.php'; ?>

  <script src="<?= ASSETS ?>js/bootstrap.bundle.min.js"></script>
  <script src="<?= ASSETS ?>js/navbar.component.js"></script>
  <script src="<?= ASSETS ?>js/Kids&game-section.component.js"></script>
  <script src="<?= ASSETS ?>js/ai.js"></script>
</body>

</html>