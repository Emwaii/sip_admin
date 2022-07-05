<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sri Insan Perkasa | Admin</title>
    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('assets/login/style.css') ?>" rel="stylesheet">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  </head>

<body>
  <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="<?= site_url('admin/login') ?>" method="POST" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="email" minlength="4" autocomplete="off" required placeholder="Username"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" minlength="4" autocomplete="off" required placeholder="Password"/>
            </div>
            <input type="submit" value="Login" class="btn solid" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Welcome Back</h3>
            <p>
              Login Page Administrator Sri Intan Perkasa,
              Have a good day
            </p>
          </div>
          <img src="<?php echo base_url('assets/img/image_4.svg') ?>" class="image" alt=""/>
        </div>
      </div>
    </div>
    <!-- Javascript file -->
    <script src="<?php echo base_url('assets/login/app.js') ?>"></script>
</body>

</html>