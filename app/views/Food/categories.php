<?php include VIEW_PATH . 'components/navbar.php'; ?>
<!-- fonts  -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Science+Gothic:wght@100..900&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
<!-- bootstrap -->
<link rel="stylesheet" href="<?= ASSETS ?>css/bootstrap.min.css" />
<!-- css components -->
<link rel="stylesheet" href="<?= ASSETS ?>css/components/navbar.component.css">
<link rel="stylesheet" href="<?= ASSETS ?>css/components/footer-section.component.css" />
<link rel="stylesheet" href="<?= ASSETS ?>css/components/ai-component.css" />

<link rel="stylesheet" href="<?= ASSETS ?>css/Food.css">

<div class="documentNotNavbar">
  <section class="food-hero mt-5">
    <h1>Museum Dining Experience</h1>
    <p>Explore curated food categories inspired by world cuisine.</p>
  </section>

  <section class="food-categories container">
    <div class="food-grid">

      <?php foreach ($categories as $cat): ?>
        <a href="<?= BASE_URL ?>food/items?category=<?= $cat['slug'] ?>" class="food-card">
          <img src="<?= BASE_URL . ($cat['image'] ?: 'uploads/categories/default.jpg') ?>"
            alt="<?= htmlspecialchars($cat['name']) ?>" loading="lazy">

          <div class="food-overlay">
            <h3><?= htmlspecialchars($cat['name']) ?></h3>
            <span>Explore Menu</span>
          </div>
        </a>
      <?php endforeach; ?>

    </div>
  </section>
</div>


<?php include VIEW_PATH . 'components/footer.php'; ?>
<?php include VIEW_PATH . 'components/ai.php'; ?>

<script src="<?= ASSETS ?>js/bootstrap.bundle.min.js"></script>
<script src="<?= ASSETS ?>js/navbar.component.js"></script>
<script src="<?= ASSETS ?>js/ai.js"></script>