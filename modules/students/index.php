<?php
include '../../api/students.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<?php include "../../head/head.php"; ?>
<body>
<!-- ======= Header ======= -->
  <?php include "../../header/header.php"; ?>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../home.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
      <?php if ($total_clearance != 0) {
       ?>
       <div class="row">
        <!-- Left side columns -->
        <!-- <div class="col-lg-8"> -->
          <div class="row">
            <?php   // LOOP TILL END OF DATA
                      while($rows4=$result4->fetch_assoc())
                      {
                   ?>
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Total <span>|System Users</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $rows4['student_id'] ?></h6>
                      <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->
            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Total <span>| Admins</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-house-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $rows4['stage'] ?></h6>
                      <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Revenue Card -->
            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">
              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Total <span>| Students</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person-bounding-box"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $rows4['status'] ?></h6>
                      <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> -->
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Customers Card -->
            <?php
                    }
                 ?>
          </div>
      </div>
       <?php 
      } else if($total_clearance == 0) { ?> 
      <div class="row">
      <div class="col-xxl-12 col-md-12">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Total <span>|System Users</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                      <div class="ps-3">
                        <h6>We apologize for the inconvenience, but the clearance process has not yet been initiated. To start the process, please press the button below. Thank you for your patience.
Begin Clearance Process</h6>
                      <a class="btn btn-primary w-100" style='background-color: #1e5288' href="../../api/start_clearance.php" name="submit" type="submit">Start Clearance</a>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->
      </div>
      <?php } ?>
    </section>
  </main><!-- End #main -->
  <?php include "../../footer/index.php"; ?>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <?php include "../../js/index.php"; ?>
</body>
</html>