<section class="collections-preview">

  <h2 class="col-title">Explore Our Collections</h2>
  <p class="col-desc">
      Discover some of the most iconic artifacts, statues, and architectural wonders inside the Grand Egyptian Museum.
  </p>

  <div class="col-grid">

      <?php if (!empty($collections_preview)): ?>
          <?php foreach ($collections_preview as $item): ?>
              <div class="col-item">
                  <img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>">
                  <h4><?= $item['name'] ?></h4>
                  <p><?= substr($item['description'], 0, 90) ?>...</p>
              </div>
          <?php endforeach; ?>

      <?php else: ?>
          <p style="text-align:center; width:100%; color:#777;">No items available</p>
      <?php endif; ?>

  </div>

  <div class="center-btn">
      <a href="<?= BASE_URL ?>collections" class="col-btn">View Full Collections</a>
  </div>

</section>
