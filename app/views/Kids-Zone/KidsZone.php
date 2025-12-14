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
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/Kids&game-section.component.css">
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


    <!-- CATEGORIES SECTION -->
    <section class="categories">
      <h2>Kids Programs & Categories</h2>

      <div class="cat-grid">

        <div class="cat">
          <img src="<?= ASSETS ?>image/kyds/ArtWorkshops.png">
          <span>Art Workshops</span>
        </div>

        <div class="cat">
          <img src="<?= ASSETS ?>image/kyds/LearnHieroglyphs.png">
          <span>Learn Hieroglyphs</span>
        </div>

        <div class="cat">
          <img src="<?= ASSETS ?>image/kyds/Discovery Classes.png">
          <span>Discovery Classes</span>
        </div>

        <div class="cat">
          <img src="<?= ASSETS ?>image/kyds/Storytelling Sessions.png">
          <span>Storytelling Sessions</span>
        </div>

        <div class="cat">
          <img src="<?= ASSETS ?>image/kyds/Crafting & Coloring.png">
          <span>Crafting & Coloring</span>
        </div>

        <div class="cat">
          <img src="<?= ASSETS ?>image/kyds/Family Tours.png">
          <span>Family Tours</span>
        </div>

      </div>
    </section>


    <!-- GALLERY SECTION -->
    <section class="gallery">
      <h2>Kids Zone Gallery</h2>

      <div class="gallery-grid">

        <img src="<?= ASSETS ?>image/kyds/kids1.png">
        <img src="<?= ASSETS ?>image/kyds/kids2.png">
        <img src="<?= ASSETS ?>image/kyds/kids3.png">
        <img src="<?= ASSETS ?>image/kyds/kids4.png">
        <img src="<?= ASSETS ?>image/kyds/kids5.png">
        <img src="<?= ASSETS ?>image/kyds/kids6.png">
        <img src="<?= ASSETS ?>image/kyds/kids7.png">
        <img src="<?= ASSETS ?>image/kyds/kids8.png">
        <img src="<?= ASSETS ?>image/kyds/kids9.png">
        <img src="<?= ASSETS ?>image/kyds/kids10.png">
        <img src="https://kidsinmuseums.org.uk/wp-content/uploads/2021/02/Kids-in-Museums-2-scaled.jpg">
        <img src="<?= ASSETS ?>image/kyds/kids11.png">
        <img src="https://supersimple.com/wp-content/uploads/shutterstock_259843295.jpg">

      </div>
    </section>

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
    <?php include VIEW_PATH . 'components/footer.php'; ?>
  </div>
  <?php include VIEW_PATH . 'components/ai.php'; ?>
  <script src="<?= ASSETS ?>js/bootstrap.bundle.min.js"></script>
  <script src="<?= ASSETS ?>js/navbar.component.js"></script>
  <script src="<?= ASSETS ?>js/Kids&game-section.component.js"></script>
  <script src="<?= ASSETS ?>js/ai.js"></script>
</body>

</html>