<?php
include '../../api/status.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<?php include "../../head/head.php"; ?>
<body>
  <?php include "../../header/header.php"; ?>
  <?php include "../../aside/index.php" ?>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Users</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../home.php">Home</a></li>
          <li class="breadcrumb-item active">Users</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
      <div class="row">
            <div class="col-11">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">System Users <span>| Today</span> <a href="add-user.php"><span class="badge bg-success text-white">+ Add User</span></a></h5>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Email</th>
                        <th scope="col">Full name</th>
                        <th scope="col">Registration number</th>
                        <th scope="col">Program degree</th>
                        <th scope="col">status</th>
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
                        <td><?php echo $rows4['id_number'];?></td>
                        <td><?php echo $rows4['program'];?></td>
                        <td><span class="<?php  
                        $id = $rows4['id'];
                        $query = "SELECT percent FROM clearance WHERE Student_id = '$id'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
$currentValue = $row['percent'];
if($currentValue == 11) {
  echo 'badge bg-success';
} else {
  echo 'badge bg-danger';
}
   ?>">
                          <?php  
                        $id = $rows4['id'];
                        $query = "SELECT percent FROM clearance WHERE Student_id = '$id'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
$currentValue = $row['percent'];
if($currentValue == 11) {
  echo 'Finished Clearance';
} else {
  echo 'Pending';
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
        <div class="col-lg-4">
        </div><!-- End Right side columns -->
      </div>
    </section>
  </main><!-- End #main -->
  <?php include "../../footer/index.php"; ?>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <?php include "../../js/index.php"; ?>
</body>
</html>