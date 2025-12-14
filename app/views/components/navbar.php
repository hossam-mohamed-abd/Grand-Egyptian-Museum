<nav class="custom-navbar position-fixed start-0 end-0 top-0 d-flex align-items-center justify-content-between px-5">
  <div class="d-flex h-100 align-items-center gap-3">
    <a href="<?= BASE_URL ?>" class="logo-link">
      <img class="logo" src="<?= ASSETS ?>image/logo.png" alt="GEM Logo">
    </a>
  </div>

  <div>
    <a href="#"><button class="lang-btn" id="langBtn">ع</button></a>
    <?php if (isset($_SESSION["user"])): ?>
      <img id="profileToggle" src="<?= !empty($_SESSION['user']['profile_image'])
        ? BASE_URL . $_SESSION['user']['profile_image']
        : BASE_URL . 'assets/image/default-user.apng' ?>"
        style="width:40px;height:40px;border-radius:50%;cursor:pointer;object-fit:cover;" alt="User Avatar">
    <?php else: ?>


      <a href="<?= BASE_URL ?>login" class="login-btn">Log In</a>

    <?php endif; ?>

  </div>
</nav>




<?php if (isset($_SESSION["user"])): ?>

  <div id="glassSidebar" class="glass-sidebar">

    <span class="glass-close">&times;</span>

    <div class="glass-avatar-wrapper">
      <img
        src="<?= !empty($_SESSION['user']['profile_image'])
          ? BASE_URL . $_SESSION['user']['profile_image']
          : BASE_URL . 'assets/image/default-user.apng' ?>"
        class="glass-avatar"
        alt="User Avatar"
      >
    </div>

    <h2 class="glass-name"><?= htmlspecialchars($_SESSION['user']['name']) ?></h2>
    <p class="glass-email"><?= htmlspecialchars($_SESSION['user']['email']) ?></p>

    <div class="glass-divider"></div>

    <div class="glass-info">
      <div class="glass-row">
        <span>Role</span>
        <span class="gold"><?= htmlspecialchars($_SESSION["user"]["role"]) ?></span>
      </div>

      <div class="glass-row">
        <span>Points</span>
        <span class="gold"><?= (int)$_SESSION["user"]["points"] ?></span>
      </div>
    </div>

    <a href="<?= BASE_URL ?>logout" class="glass-logout">Logout</a>

  </div>

<?php endif; ?>





<aside id="gemSidebar">
  <button id="sidebarToggle" class="btn btnSidebar btn-outline-light position-absolute top-0 m-3">
    <i class="fa-solid fa-x"></i>
  </button>
  <div class="sidebar-logo">
    <a href="<?= BASE_URL ?>" class="sidebar-logo-link">
      <img src="<?= ASSETS ?>image/logo.png" alt="GEM Logo">
    </a>
  </div>
  <nav class="sidebar-links d-flex flex-column gap-2 justify-content-between">
    <a href="<?= BASE_URL ?>#header_1">Home</a>
    <a href="<?= BASE_URL ?>plans">Visit</a>
    <a href="<?= BASE_URL ?>#events">Events</a>
    <a href="<?= BASE_URL ?>collections">Collection</a>
    <a href="<?= BASE_URL ?>#learn-section">Learn</a>
    <a href="<?= BASE_URL ?>donate">Donate</a>
    <a href="<?= BASE_URL ?>kids-zone">Kids Zone</a>
    <a href="<?= BASE_URL ?>food">Food</a>
  </nav>
</aside>
<button class="museum-menu-btn">
  <i id="icon_navbar_false_true" class="fa-solid fa-bars"></i>
</button>
<!-- end navbar & sidbar -->