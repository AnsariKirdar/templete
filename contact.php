<?php
include dirname(__FILE__) . '/inc/config.php';
include dirname(__FILE__) . '/dbh/conn.php';
?>
<!doctype html>
<html lang="en">

<head>

  <?php
  $TITLE = "Contact Us";
  include dirname(__FILE__) . "/inc/hedaerlink.php";
  ?>
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="manifest" href="visiontechnology.webmanifest">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo $BASE_URL; ?>/img/logo/favicon.ico">
  <link href="<?php echo $BASE_URL; ?>/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $BASE_URL; ?>/css/common-variable.css" rel="stylesheet">
  <link href="<?php echo $BASE_URL; ?>/css/style.css" rel="stylesheet">

</head>

<body>

  <?php
  $Contact_page  = 'active';
  include dirname(__FILE__) . '/inc/nav.php';
  ?>
  <div class="container">
    <div class="row g-4 py-5 align-items-center">
      <div class="col-12">
        <h1 class="fw-bolder sig">Contact Us</h1>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 p-3">
        <div class="bg-white shadow bg-white rounded-8 p-4">
          <?php include dirname(__FILE__) . '/inc/msg.php'; ?>
          <h2 class="fw-bold text-black"><b>Let's Talk</b></h2>
          <form action="<?php echo  $BASE_URL; ?>/dbh/contactUs/contact_handler.php" method="post">
            <div class="row g-3">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label for="" class="text-secondary">First Name</label>
                  <input type="text" name="first_name" id="first_name" class="form-control form-control-lg" placeholder="">
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label for="" class="text-secondary">Last Name</label>
                  <input type="text" name="last_name" id="last_name" class="form-control form-control-lg" placeholder="">
                </div>
              </div>
              <div class="col-12 col-sm-12">
                <div class="form-group">
                  <label for="" class="text-secondary">Phone</label>
                  <input type="text" name="phone" id="phone" class="form-control form-control-lg" placeholder="">
                </div>
              </div>
              <div class="col-12 col-sm-12">
                <div class="form-group">
                  <label for="" class="text-secondary">Email</label>
                  <input type="text" name="email_address" id="email_address" class="form-control form-control-lg" placeholder="">
                </div>
              </div>
              <div class="col-12 col-sm-12">
                <div class="form-group">
                  <label for="" class="text-secondary">Message</label>
                  <textarea name="message" id="message" cols="30" rows="3" class="form-control form-control-lg"></textarea>
                </div>
              </div>
              <div class="col-12 col-sm-12">
                <div class="form-group">
                  <button type="submit" name="contactSubmit" class="btn btn-primary btn-lg w-100">Submit</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 p-3">
        <div class="bg-white shadow bg-white rounded-8 p-4">
          <img src="./img/bg/loginRightImg.svg" alt="" class="w-100 rounded-8">
        </div>
      </div>
    </div>
  </div>
  <div class="bg-light py-5">
    <div class="row container mx-auto g-4">
      <div class="col-12">
        <h1 class="fw-bolder sig">General Contact Details</h1>
      </div>
      <div class="col-12 col-sm-6col-md-4 col-lg-4">
        <div class="bg-white rounded-20 p-3 shadow rounded-8">
          <p class="text-center mb-3">
            <span class="d-flex align-items-center justify-content-center bg-light shadow rounded-circle mx-auto" style="width: 60px; height: 60px;">
              <i class="fad fa-paper-plane text-primary h4 mb-0"></i>
            </span>
          </p>
          <p class="text-primary fw-bolder text-center h5 mb-3">
            Our headoffice address
          </p>
          <p class="text-center text-secondary">
            <a href="#" target="_blank" class="text-secondary text-decoration-none"> 501, Sai Samarth Business Park,
              Deonar, <br> Govandi East, Mumbai, Maharashtra 400088 </a>
          </p>
        </div>
      </div>
      <div class="col-12 col-sm-6col-md-4 col-lg-4">
        <div class="bg-white rounded-20 p-3 shadow rounded-8">
          <p class="text-center mb-3">
            <span class="d-flex align-items-center justify-content-center bg-light shadow rounded-circle mx-auto" style="width: 60px; height: 60px;">
              <i class="fad fa-phone-alt text-primary h4 mb-0"></i>
            </span>
          </p>
          <p class="text-primary fw-bolder text-center h5 mb-3">
            Call us
          </p>
          <p class="text-center text-secondary">
            <a href="tel:+918652434063" class="text-secondary text-decoration-none"><i class="fad fa-phone-alt"></i> +91
              91 6707 1117 </a>
            <br>
            <a href="https://wa.link/601qhe" target="_blank" class="text-secondary text-decoration-none"><i class="fab fa-whatsapp"></i> +91 22 3557 4216</a>
          </p>
        </div>
      </div>
      <div class="col-12 col-sm-6col-md-4 col-lg-4">
        <div class="bg-white rounded-20 p-3 shadow rounded-8">
          <p class="text-center mb-3">
            <span class="d-flex align-items-center justify-content-center bg-light shadow rounded-circle mx-auto" style="width: 60px; height: 60px;">
              <i class="fad fa-envelope-open-text text-primary h4 mb-0"></i>
            </span>
          </p>
          <p class="text-primary fw-bolder text-center h5 mb-3">
            Mail us for Information
          </p>
          <p class="text-center text-secondary">
            <a href="mailto:info@gmail.com" target="_blank" class="text-secondary text-decoration-none">
              info@crystalocean.in </a>
            <br>
            <a href="mailto:info@gmail.com" target="_blank" class="text-secondary text-decoration-none">partners@crystalocean.in</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container ratio ratio-21x9 rounded-8 shadow overflow-hidden my-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.3065040300908!2d72.91583801534463!3d19.050256957730596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c67698b5efe3%3A0x49756729c6d9ccf8!2sCrystal%20Ocean%20Group!5e0!3m2!1sen!2sin!4v1618830444181!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
  <?php include dirname(__FILE__) . '/inc/footer.php'; ?>
  <script src="<?php echo $BASE_URL; ?>/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $BASE_URL; ?>/js/fontawsome.js"></script>
  <script src="<?php echo $BASE_URL; ?>/js/main.js"></script>
</body>

</html>