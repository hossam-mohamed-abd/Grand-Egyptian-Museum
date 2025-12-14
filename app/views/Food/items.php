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
  <section class="food-hero small mt-5">
    <h1><?= htmlspecialchars($category['name']) ?> Menu</h1>
    <p>Carefully selected dishes from our restaurants.</p>
  </section>

  <section class="food-items container">
    <div class="items-grid">

      <?php if (empty($items)): ?>
        <p>No items available in this category.</p>
      <?php endif; ?>

      <?php foreach ($items as $item): ?>
        <div class="item-card">
          <img src="<?= $item['image'] ?>" alt="<?= htmlspecialchars($item['name']) ?>">

          <div class="item-info">
            <h4><?= htmlspecialchars($item['name']) ?></h4>

            <small class="restaurant-name">
              <i class="fa-solid fa-utensils"></i>
              <?= htmlspecialchars($item['restaurant_name']) ?>
            </small>

            <span class="price">
              <?= number_format($item['price'], 2) ?> EGP
            </span>

            <!-- Meta Info -->
            <div class="item-meta">

              <span class="likes">
                <i class="fa-solid fa-heart"></i>
                <?= $item['likes_count'] ?? 0 ?>
              </span>

              <span class="rating">
                <i class="fa-solid fa-star"></i>
                <?= $item['avg_rating'] ?? '0.0' ?>
              </span>

              <span class="reviews">
                <i class="fa-solid fa-comment"></i>
                <?= $item['reviews_count'] ?? 0 ?>
              </span>

            </div>

            <button>Add to Order</button>
          </div>
        </div>

      <?php endforeach; ?>

    </div>
  </section>

  <?php include VIEW_PATH . 'components/footer.php'; ?>
  <?php include VIEW_PATH . 'components/ai.php'; ?>
</div>
<script src="<?= ASSETS ?>js/bootstrap.bundle.min.js"></script>
<script src="<?= ASSETS ?>js/navbar.component.js"></script>
<script src="<?= ASSETS ?>js/ai.js"></script>