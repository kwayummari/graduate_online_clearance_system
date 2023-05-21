<?php
include '../../api/card.php';
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
          <div class="row">
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">System Users <span>| Today</span></h5>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Full name</th>
                        <th scope="col">Registration number</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php   // LOOP TILL END OF DATA
                                                    while($rows4=$result4->fetch_assoc())
                                                         {
                                                       ?>
                      <tr>
                        <td><?php 
                        $id = $rows4['student_id'];
                        $query="select * from user where id = $id";
                        $username=mysqli_query($connect,$query);
                        $row = mysqli_fetch_assoc($username);
                        echo $row['fullname'];
                        ?></td>
                        <td>
                        <?php 
                        $id = $rows4['student_id'];
                        $query="select * from user where id = $id";
                        $username=mysqli_query($connect,$query);
                        $row = mysqli_fetch_assoc($username);
                        echo $row['id_number'];
                        ?></td>
                        <td><a class="btn btn-success w-100" href="../../api/bursar_success.php?id=<?php echo base64_encode($rows4['id']); ?>" name="submit" type="submit">Passed</a></td>
                        <td><a class="btn btn-danger w-100" href="failed.php?id=<?php echo base64_encode($rows4['id']); ?>" name="submit" type="submit">Failed</a></td>
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