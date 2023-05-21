<?php
include '../../api/dashboard.php';
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
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">System Users <span>| Today</span> <a href="add-user.php"><span class="badge bg-success text-white">+ Add User</span></a></h5>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
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
                        <th scope="row"><a href="#"><?php echo $rows4['id'];?></a></th>
                        <td><?php echo $rows4['email'];?></td>
                        <td><a href="#" class="text-primary"><?php echo $rows4['fullname'];?></a></td>
                        <td><span class="badge bg-success"><?php if($rows4['role'] == '1') {
                          echo 'Admin';
                        } else if ($rows4['role'] == '2') {
                          echo 'Student';
                        } else if ($rows4['role'] == '3') {
                          echo 'Convacation';
                        } else if ($rows4['role'] == '4') {
                          echo 'College Principle';
                        } else if ($rows4['role'] == '5') {
                          echo 'Hall Warden';
                        } else if ($rows4['role'] == '6') {
                          echo 'Usab';
                        } else if($rows4['role'] == '7') {
                          echo 'Daruso';
                        } else if($rows4['role'] == '8') {
                          echo 'Librarian';
                        } else if($rows4['role'] == '9') {
                          echo 'Dean';
                        }  else if($rows4['role'] == '10') {
                          echo 'Games Coach';
                        } else if($rows4['role'] == '11') {
                          echo 'Bursar';
                        } else if($rows4['role'] == '12') {
                          echo 'Smart Card';
                        }
                        ?></span></td>
                        <td><a href="update.php?id=<?php echo base64_encode($rows4['id']); ?>"><i class="bi bi-pen" style="color: green;"></i></a></td>
                        <td><a href="delete.php?id=<?php echo base64_encode($rows4['id']); ?>"><i class="bi bi-archive-fill" style="color: red;"></i></a></td>
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