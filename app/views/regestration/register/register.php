<?php require_once APP_PATH . '/config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register - Grand Egyptian Museum</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/navbar.component.css">
  <link rel="stylesheet" href="<?= ASSETS ?>css/login.css">
</head>

<body>

<?php
$hideLogin = true;
include VIEW_PATH . 'components/navbar.php';
?>

<div class="row documentNotNavbar container-fluid justify-content-center m-auto h-100 align-items-center" id="login">
  <div id="form" class="col-sm-12 col-md-7 col-lg-6 py-0">

    <form id="registerForm" method="POST">

      <h2 class="address my-4 text-center">Create Your Account</h2>

      <div class="d-flex flex-column fm-pacifico gap-4 mb-3">

        <input type="text" class="form-control py-2"
               id="regName" name="name"
               placeholder="Enter your Name" />

        <input type="email" class="form-control py-2"
               id="regEmail" name="email"
               placeholder="Enter your email" />

        <input type="password" class="form-control py-2"
               id="regPassword" name="password"
               placeholder="Enter your password" />

        <div id="regErrorBox"
             class="alert alert-danger mt-3 d-none text-center"></div>

        <button type="submit" id="regSubmit">Sign Up</button>

        <p class="text-center">
          Already have an account?
          <a href="<?= BASE_URL ?>login">Log In</a>
        </p>

      </div>

    </form>

  </div>
</div>

<script src="<?= ASSETS ?>js/register.js"></script>
<script src="<?= ASSETS ?>js/bootstrap.bundle.min.js"></script>
<script src="<?= ASSETS ?>js/navbar.component.js"></script>

</body>
</html>
