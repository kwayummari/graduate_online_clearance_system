<?php
include '../../connection/index.php';

//   $query="select * from blog";
//   $result=mysqli_query($connect,$query);
//   $count=mysqli_fetch_assoc($result);
//   $total_blogs = mysqli_num_rows($result);

//   $query="select * from carousel";
//   $result1=mysqli_query($connect,$query);
//   $count1=mysqli_fetch_assoc($result1);
//   $total_carousel = mysqli_num_rows($result1);

  $query="select * from user";
  $result4=mysqli_query($connect,$query);
  // $count=mysqli_fetch_assoc($result4);
  $total_users = mysqli_num_rows($result4);

 ?>




<!DOCTYPE html>
<html lang="en">

<?php include "../../head/head.php"; ?>

<body>

  <!-- ======= Header ======= -->
  <?php include "../../header/header.php"; ?>

  <?php include "../../aside/index.php" ?>

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
      <div class="row">

        <!-- Left side columns -->
        <!-- <div class="col-lg-8"> -->
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Total <span>|System Users</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $total_users ?></h6>
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
                  <h5 class="card-title">Total <span>| Blog Posts</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-house-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $total_users ?></h6>
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
                  <h5 class="card-title">Total <span>| Carousel Posts</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person-bounding-box"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $total_users ?></h6>
                      <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> -->

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">


                <div class="card-body">
                  <h5 class="card-title">System Users <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Email</th>
                        <th scope="col">Full name</th>
                        <th scope="col">role</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php   // LOOP TILL END OF DATA
                                                    while($rows4=$result4->fetch_assoc())
                                                         {
                                                       ?>
                      <tr>
                        <td><?php echo $rows4['email'];?></td>
                        <td><?php echo $rows4['fullname'];?></td>
                        <td><span class="badge bg-success"><?php if($rows4['role'] == '1') {
                          echo 'Admin';
                        } else if ($rows4['role'] == '2') {
                          echo 'Student';
                        }?></span></td>
                      </tr>
                      <?php
                                                     }
                                                     ?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div>
          </div>
      </div>
    </section>
  </main><!-- End #main -->
  <?php include "../../footer/index.php"; ?>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <?php include "../../js/index.php"; ?>
</body>
</html>