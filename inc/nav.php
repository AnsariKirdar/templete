<nav class="navbar navbar-expand-lg navbar-dark bg-primary py-1">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="<?php echo  $BASE_URL; ?>/index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link <?php echo $Home_page; ?>" aria-current="page"
            href="<?php echo  $BASE_URL; ?>/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo  $BASE_URL; ?>#">Action</a></li>
            <li><a class="dropdown-item" href="<?php echo  $BASE_URL; ?>#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="<?php echo  $BASE_URL; ?>#">Something else here</a></li>
          </ul>
        </li> -->
        <li class="nav-item">
          <a class="nav-link <?php echo $About_page; ?>" href="<?php echo  $BASE_URL; ?>/About Us.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $Contact_page; ?>" href="<?php echo  $BASE_URL; ?>/Contcat Us.php">Contact
            us</a>
        </li>
      </ul>
      <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>