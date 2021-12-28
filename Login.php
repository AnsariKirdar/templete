<?php
include dirname(__FILE__) . '/inc/config.php';
include dirname(__FILE__) . '/dbh/conn.php';
?>
<!doctype html>
<html lang="en">

<head>

  <?php
  $TITLE = "Login";
  include dirname(__FILE__) . "/inc/hedaerlink.php";
  ?>
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="manifest" href="visiontechnology.webmanifest">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo $BASE_URL; ?>/img/logo/favicon.ico">
  <link href="<?php echo $BASE_URL; ?>/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $BASE_URL; ?>/css/common-variable.css" rel="stylesheet">
  <link href="<?php echo $BASE_URL; ?>/css/style.css" rel="stylesheet">
  <style>
  .loginBox {
    height: 100vh;
    background-image: url("./img/bg/doodles-pattern.png");
  }
  </style>
</head>

<body>
  <?php
  $Login_page = "active";
  include dirname(__FILE__) . '/inc/nav.php';
  ?>
  <div class="loginBox bg-light">
    <div class="row align-items-center justify-content-center py-3 py-md-5 h-100">
      <div class="col-11 col-sm-8 col-md-6 col-lg-5 col-xl-3 bg-white shadow-lg rounded-8 p-3 p-md-5">
        <p class="text-center">
          <img src="<?php echo  $BASE_URL; ?>/img/logo/logo.png" class="w-25" alt="">
          <hr class="bg-primary my-1 mt-4">
          <hr class="bg-primary my-0" style="height:2px;">
        </p>
        <form action="<?php echo $BASE_URL; ?>/dbh/login_handler/login-handler.php" method="post">
          <h1 class="my-2  text-primary sig text-center display-4 fw-bold">User Log in</h1>
          <?php include dirname(__FILE__) . "/inc/msg.php"; ?>
          <div class="form-group my-3">
            <label for="" class="text-secondary">User Name</label>
            <input type="text" name="username" id="username" class="form-control   form-control-lg" placeholder="">
          </div>
          <div class="form-group my-3">
            <label for="" class="text-secondary">Password</label>
            <input type="password" name="password" id="password" class="form-control   form-control-lg" placeholder="">
          </div>
          <div class="form-group my-3">
            <button type="submit" name="LoginSubmit" class="btn btn-lg btn-primary w-100"> Login </button>
          </div>
          <div class="form-group my-3">
            <p class="text-center">
              Forget Passwod ? <a href="#" class="text-primary text-decoration-none">Click Here</a>
            </p>
            <hr class="bg-primary" style="height:3px;">
            <p class="text-center"><img src="<?php echo $BASE_URL; ?>/img/bg/move.svg" class="w-75 mx-auto"
                alt="Login way Image"></p>
          </div>
        </form>
      </div>
    </div>

  </div>

  <?php include dirname(__FILE__) . '/inc/footer.php'; ?>
  <script src="<?php echo $BASE_URL; ?>/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $BASE_URL; ?>/js/fontawsome.js"></script>
  <script src="<?php echo $BASE_URL; ?>/js/main.js"></script>
</body>

</html>