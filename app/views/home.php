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

  <!-- css -->
  <link rel="stylesheet" href="<?= ASSETS ?>css/main.css" />
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

    <!-- events-section -->
    <section id="events" class="events-section">
      <div class="container">
        <h2 class="events-title">Upcoming Events</h2>

        <div class="events-grid">
          <!-- Event Card 1 -->
          <div class="event-card">
            <img
              src="https://imonkey-blog.imgix.net/blog/wp-content/uploads/2015/12/23052256/shutterstock_242036125.jpg"
              alt="Tutankhamun Exhibition" />
            <div class="event-info">
              <h3>Golden Pharaohs Exhibition</h3>

              <p>
                Discover rare artifacts from the tombs of Egypt’s greatest
                kings.
              </p>
              <span class="date">✦ 14 March 2025</span>
              <a href="<?= BASE_URL ?>event-details"><button class="event-btn">Learn More</button></a>
            </div>
          </div>

          <!-- Event Card 2 -->
          <div class="event-card">
            <img src="https://powertraveller.com/wp-content/uploads/2024/07/1_ancient-art-workshop-fresco..jpg"
              alt="Workshop" />
            <div class="event-info">
              <h3>Ancient Art Workshop</h3>
              <p>
                Join our art experts to recreate legendary Pharaonic artworks.
              </p>
              <span class="date">✦ 22 April 2025</span>
              <a href="<?= BASE_URL ?>event-details"><button class="event-btn">Learn More</button></a>
            </div>
          </div>

          <!-- Event Card 3 -->
          <div class="event-card">
            <img src="<?= ASSETS ?>image/events.png" alt="Lecture" />
            <div class="event-info">
              <h3>The Secrets of the Pyramids</h3>
              <p>
                An exclusive lecture revealing untold stories of the pyramids.
              </p>
              <span class="date">✦ 30 May 2025</span>
              <a href="<?= BASE_URL ?>event-details"><button class="event-btn">Learn More</button></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  

    <section class="collections-preview">
      <h2 class="col-title">Explore Our Collections</h2>
      <p class="col-desc">
        Discover some of the most iconic artifacts, statues, and architectural
        wonders inside the Grand Egyptian Museum.
      </p>

      <div class="col-grid">
        <div class="col-item">
          <img src="<?= ASSETS ?>image//collage.png" alt="Statues Hall" />
          <h4>Royal Statues Hall</h4>
          <p>A breathtaking view of Egypt’s colossal masterpieces.</p>
        </div>

        <div class="col-item">
          <img src="https://www.swissinfo.ch/content/wp-content/uploads/sites/13/2024/04/592468480_highres.jpg"
            alt="Artifacts" />
          <h4>Ancient Artifacts</h4>
          <p>Rare pieces showcasing Egypt’s rich cultural history.</p>
        </div>

        <div class="col-item">
          <img src="https://english.ahram.org.eg/Media/News/2019/12/17/2019-637122001154016691-401.jpg" alt="Mummies" />
          <h4>Royal Mummies Zone</h4>
          <p>Discover preserved kings and queens from ancient dynasties.</p>
        </div>
      </div>

      <div class="center-btn">
        <a href="<?= BASE_URL ?>collections" class="col-btn">View Full Collections</a>
      </div>
    </section>

    <section id="learn-section" class="learn-section">
      <!-- Background -->
      <div class="learn-bg" style="background-image: url('<?= ASSETS ?>image/learn.png');">
      </div>

      <!-- Section Title -->
      <div class="learn-header">
        <h2>Learn & Education</h2>
        <div class="learn-line"></div>
        <p>
          Explore our educational programs, workshops, and virtual learning
          experiences inspired by Ancient Egypt.
        </p>
      </div>

      <!-- Cards Container -->
      <div class="learn-cards-container">
        <!-- Card 1 -->
        <div class="learn-card">
          <h3>Schools Programs</h3>
          <p>
            Educational tours and guided workshops tailored for school groups.
          </p>
          <ul>
            <li>Guided Learning Tour</li>
            <li>Hands-on Activities</li>
            <li>Certified Educational Content</li>
          </ul>
          <a href="<?= BASE_URL ?>booking"><button class="learn-btn">Book Now</button></a>

        </div>

        <!-- Card 2 -->
        <div class="learn-card">
          <h3>Youth Workshops</h3>
          <p>
            Creative sessions and interactive activities for young explorers.
          </p>
          <ul>
            <li>Art & History Workshops</li>
            <li>Heritage Exploration</li>
            <li>Group Projects</li>
          </ul>
          <a href="<?= BASE_URL ?>booking"><button class="learn-btn">Book Now</button></a>

        </div>

        <!-- Card 3 -->
        <div class="learn-card">
          <h3>Online Learning</h3>
          <p>
            Digital lessons and virtual programs about Ancient Egyptian
            culture.
          </p>
          <ul>
            <li>Virtual Tours</li>
            <li>Interactive History Lessons</li>
            <li>Downloadable Resources</li>
          </ul>
          <a href="<?= BASE_URL ?>booking"><button class="learn-btn">Book Now</button></a>

        </div>
      </div>
    </section>

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
      <section class="kids-zone row justify-content-center gap-4" id="kids">
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
      </section>
    </section>

    <section id="donate-section" class="donate-section" id="donate" style="background-image: url('<?= ASSETS ?>image/collage.png');">
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
