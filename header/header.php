<header id="header" class="header fixed-top d-flex align-items-center" style='background-color: #1e5288'>

    <div class="d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <img src="../cv/images/logo/icon.png" alt="">
        <span class="d-none d-lg-block" style="color: white">GOCS-<?php 
        if($role == '1') {
          echo 'ADMIN';
        } else if($role == '2') {
          echo 'Student';
        } else if($role == '3') {
          echo 'Convacation';
        } else if($role == '4') {
          echo 'College Principle';
        } else if($role == '5') {
          echo 'Hall Warden';
        } else if($role == '6') {
          echo 'Usab';
        } else if($role == '7') {
          echo 'Daruso';
        } else if($role == '8') {
          echo 'Librarian';
        } else if($role == '9') {
          echo 'Dean';
        }
        ?></span>
      </a>
      <?php if($role != '2') {
        echo '<i class="bi bi-list toggle-sidebar-btn" style="color: white"></i>';
      }  ?>
    </div><!-- End Logo -->
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <!-- <img src="../../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> -->
            <span class="d-none d-md-block dropdown-toggle ps-2" style="color: white"><?php if($role == '1') {
          echo 'ADMIN';
        }?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <span><?php if($role == '1') {
          echo 'ADMIN';
        } else if($role == '2') {
          echo 'Student';
        } else if($role == '3') {
          echo 'Convacation';
        } else if($role == '4') {
          echo 'College Principle';
        } else if($role == '5') {
          echo 'Hall Warden';
        } else if($role == '6') {
          echo 'Usab';
        } else if($role == '7') {
          echo 'Darudo';
        } else if($role == '8') {
          echo 'Librarian';
        } else if($role == '9') {
          echo 'Dean';
        }
        ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="../../api/logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->
      </ul>
    </nav><!-- End Icons Navigation -->
  </header><!-- End Header -->