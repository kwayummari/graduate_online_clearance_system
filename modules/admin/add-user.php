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
  <section class="section">
      <div class="row">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">User Input<span style="color: green; margin-left: 6cm;"><b><?php include('submit-user.php'); ?></b></span> </h5>
              <form method="POST">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Full Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="fname" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Role</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="role" required>
                    <option selected></option>
                      <option value='1'>Admin</option>
                      <option value='2'>Student</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="password" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" name="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>
              </form><!-- End General Form Elements -->
            </div>
          </div>
      </div>
    </section>  
  </main><!-- End #main -->
  <?php include "../../footer/index.php" ?>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <?php include "../../js/index.php" ?>
</body>
</html>