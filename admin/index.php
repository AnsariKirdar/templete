<?php
include './../inc/config.php';
include './inc/config.php';
include './../dbh/conn.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="title" content="<?php echo  $TITLE; ?>">
  <meta name="description" content="<?php echo  $META_DESCRIPTION; ?>">
  <meta name="keywords" content="<?php echo  $META_DESCRIPTION_KEY; ?>">

  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <meta name="language" content="English">
  <meta name="revisit-after" content="3 days">
  <meta name="copyright" content="visiontechnology.co.in">
  <meta name="author" content="Vision technology">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="<?php echo  $OG_TYPE; ?>">
  <meta property="og:url" content="<?php echo $URL; ?>">
  <meta property="og:title" content="<?php echo  $TITLE; ?>">
  <meta property="og:description" content="<?php echo  $META_DESCRIPTION; ?>">
  <meta property="og:image"
    content="../assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">
  <meta property="profile:first_name" content="Kirdar">
  <meta property="profile:last_name" content="Ansari">
  <meta property="business:contact_data:country_name" content="India">
  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?php echo  $URL; ?>">
  <meta property="twitter:title" content="<?php echo  $TITLE; ?>">
  <meta property="twitter:description" content="<?php echo  $META_DESCRIPTION; ?>">
  <meta property="twitter:image"
    content="../assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">


  <link rel="manifest" href="visiontechnology.webmanifest">
  <link rel="shortcut icon" type="image/x-icon" href="./../img/logo/favicon.ico">
  <link href="./../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/common-variable.css" rel="stylesheet">
  <link href="./css/style.css" rel="stylesheet">
  <title>Vision Technology</title>
</head>
<style>
body {
  background-image: url("../img/bg/doodles-pattern.png");
}
</style>

<body>
  <?php include dirname(__FILE__) . '/inc/nav.php'; ?>
  <div class="container py-5">
    Admin
  </div>
  <div class="container py-5">
    Admin
  </div>
  <?php include dirname(__FILE__) . '/inc/footer.php'; ?>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="..//js/fontawsome.js"></script>
  <script src="../js/main.js"></script>
</body>

</html>