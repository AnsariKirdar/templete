<nav class="navbar navbar-expand-lg navbar-dark bg-primary py-0 small">
  <div class="container">
    <a class="navbar-brand fw-bold sig text-capitalize" style="font-size: xx-large;"
      href="<?php echo  $BASE_URL; ?>/index.php">Vision
      technology</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link fw-bold active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold" href="#">Contact From</a>
        </li>
      </ul>
      <form class="d-flex">

        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 align-items-center ">
          <li class="nav-item">
            <a href="./logout.php" class="btn btn-danger btn-sm rounded-pill px-4 border-0 fw-bold">
              <i class=" fad fa-sign-out-alt "></i> Logout</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class="fas fa-user-circle   fa-2x "></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item text-primary" href="#">Action</a></li>
              <li><a class="dropdown-item text-primary" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item text-primary" href="<?php echo $BASE_URL; ?>">Back to Home</a></li>
            </ul>
          </li>
        </ul>
      </form>
    </div>
  </div>
</nav>