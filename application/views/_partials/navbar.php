<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Narademy</a></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="asset/img/logo-narademy.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="<?= site_url('home') ?>">Home</a></li>
          <li><a class="nav-link scrollto" href="<?= site_url('about') ?>">About</a></li>
          <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li> -->
          <li class="dropdown"><a href="<?= site_url('course') ?>"><span>Courses</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= site_url('programming') ?>">Programming</a></li>
              <li class="dropdown"><a href="#"><span>SAP ERP</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="<?= site_url('sap') ?>">SAP HCM</a></li>
                  <!-- <li><a href="<?= site_url('sap') ?>">SAP FI and CO</a></li> -->
                  <li><a href="<?= site_url('sap') ?>">SAP BASIS</a></li>
                </ul>
              </li>
              <li><a href="<?= site_url('linux') ?>">Linux Infrastructure</a></li>
              <!-- <li><a href="<?= site_url('digmar') ?>">Digital Marketing</a></li> -->
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="<?= site_url('#team') ?>">Team</a></li>
          <li><a class="nav-link scrollto" href="<?= site_url('contact') ?>">Contact</a></li>
          <a href="<?= site_url('search') ?>">Search</a>
          <li><a class="getstarted scrollto" href="<?= site_url('admin') ?>">Join Us</a></li>
          <!-- <li class="dropdown"><a href="#" class="getstarted scrollto"><span>Nama User</span><i class="bi bi-person-circle"></i></a>
            <ul>
              <li><a href="#">Settings</a></li>
              <li><a href="#">Activity Log</a></li>
              <hr>
              <li><a href="#">Logout</a></li>
            </ul>
          </li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
