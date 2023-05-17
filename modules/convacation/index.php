<?php
include '../../api/dashboard.php';
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
                        } else if ($rows4['role'] == '3') {
                          echo 'Convacation';
                        }
                        ?>
                        </span></td>
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