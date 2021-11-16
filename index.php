<?php
include dirname(__FILE__) . '/inc/config.php';
include dirname(__FILE__) . '/dbh/conn.php';
?>
<!doctype html>
<html lang="en">

<head>
  <?php include dirname(__FILE__) . "/inc/hedaerlink.php"; ?>
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="manifest" href="visiontechnology.webmanifest">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo $BASE_URL; ?>/img/logo/favicon.ico">
  <link href="<?php echo $BASE_URL; ?>/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $BASE_URL; ?>/css/common-variable.css" rel="stylesheet">
  <link href="<?php echo $BASE_URL; ?>/css/style.css" rel="stylesheet">

</head>

<body>
  <?php include dirname(__FILE__) . '/inc/nav.php'; ?>
  <h1 class="fw-bolder sig">Hello, world!</h1>

  <?php include dirname(__FILE__) . '/inc/footer.php'; ?>
  <script src="<?php echo $BASE_URL ?>/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $BASE_URL ?>/js/fontawsome.js"></script>
  <script src="<?php echo $BASE_URL ?>/js/main.js"></script>
</body>

</html>