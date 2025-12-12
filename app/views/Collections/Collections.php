<?php require_once APP_PATH . '/config/config.php'; ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Collections</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <!-- bootstrap -->
  <link rel="stylesheet" href="<?= ASSETS ?>css/bootstrap.min.css" />
  <!-- css components -->
   <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/navbar.component.css">
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/footer-section.component.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/ai-component.css" />

  <link rel="stylesheet" href="<?= ASSETS ?>css/Collections.css">
</head>

<body>

  <?php include VIEW_PATH . 'components/navbar.php'; ?>

  <div class="documentNotNavbar">

    <!-- HERO -->
    <header class="collections-hero mt-5">
      <h1>Museum Collections</h1>
      <p>Explore iconic artifacts, ancient treasures, and legendary masterpieces.</p>
    </header>

    <!-- Featured Highlights -->
    <section class="highlights">
      <h2>Featured Highlights</h2>
      <div class="highlight-grid">
        <?php foreach ($highlights as $item): ?>
          <div class="item">
            <img src="<?= $item['image'] ?>">
            <h3><?= $item['name'] ?></h3>
            <p><?= $item['description'] ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- FULL COLLECTION LIST -->
   <section class="gallery px-4">
  <h2 class="text-center text-2xl font-semibold mb-10">
    Discover More
  </h2>

  <!-- Masonry using Tailwind -->
  <div id="gallery-grid"
       class="columns-1 sm:columns-2 lg:columns-3 gap-6">

    <?php foreach ($collections as $item): ?>
      <div class="mb-6 break-inside-avoid">
        <img
          src="<?= $item['image'] ?>"
          alt="<?= htmlspecialchars($item['name'] ?? '') ?>"
          class="w-full rounded-xl shadow-md"
          loading="lazy"
        >
      </div>
    <?php endforeach; ?>

  </div>

  <div class="text-center mt-8">
    <button id="loadMoreBtn"
            class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
      Load More
    </button>
  </div>
</section>


  </div>
  <div style="position: relative; z-index: 2;">
    <?php include VIEW_PATH . 'components/footer.php'; ?>
  </div>

  <?php include VIEW_PATH . 'components/ai.php'; ?>
  <script>
let offset = 15;
const loadMoreBtn = document.getElementById("loadMoreBtn");
const grid = document.getElementById("gallery-grid");

loadMoreBtn.addEventListener("click", function () {

  fetch("/GEM_mvc/public/api/collections/load-more?offset=" + offset)
    .then(res => res.json())
    .then(data => {

      if (!data || data.length === 0) {
        loadMoreBtn.innerText = "No More Items";
        loadMoreBtn.disabled = true;
        return;
      }

      data.forEach(item => {
        grid.insertAdjacentHTML("beforeend", `
          <div class="mb-6 break-inside-avoid">
            <img
              src="${item.image}"
              alt="${item.name ?? ''}"
              class="w-full rounded-xl shadow-md"
              loading="lazy"
            >
          </div>
        `);
      });

      offset += data.length;
    })
    .catch(err => {
      console.error("Load More Error:", err);
    });

});
</script>

  <?php include VIEW_PATH . 'components/ai.php'; ?>
  <script src="<?= ASSETS ?>js/bootstrap.bundle.min.js"></script>
  <script src="<?= ASSETS ?>js/navbar.component.js"></script>
  <script src="<?= ASSETS ?>js/ai.js"></script>
    
</body>

</html>