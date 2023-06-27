<?php
include '../../api/students.php';
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
                   <?php 
       if($rows4['status'] == 2) { ?> 
            <div class="col-xxl-12 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Remarks <span>|The following  are comments of to why your clearance to be cancelled</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-book"></i>
                    </div>
                    <div class="ps-3">
                      <h6 style="color: red;"><?php echo $rows4['remarks'] ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->
            
       <td><a class="btn btn-success w-100" href="../../api/return.php" name="submit" type="submit">Resubmit your query</a></td>
      <?php
                    } else if($rows4['status'] == 1) {
                 ?>
                 <div class="col-xxl-12 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Remarks <span>|The following  are comments of to why your clearance to be cancelled</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-book"></i>
                    </div>
                    <div class="ps-3">
                      <h6 style="color: red;">Your are waiting confirmation from 
                      <?php if($rows4['stage'] == 1) {
                        echo 'Convacation';
                      } else if($rows4['stage'] == 2){
                        echo 'College Principle';
                      } else if($rows4['stage'] == 3){
                        echo 'Other staff';
                      }  ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->
            <?php } else if($rows4['status'] == 0) { ?>
              <div class="col-xxl-12 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Remarks <span>|<?php if($rows4['percent'] != 12) { ?>
                       The following  are comments of to why your clearance to be cancelled <?php } else { ?>
                        Thank you for finishing your clearance process
                        <?php } ?></span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-book"></i>
                    </div>
                    <div class="ps-3">
                      <h6 style="color: green;">Your <?php if($rows4['stage'] == 1) {
                        echo 'Convacation';
                      } ?> has passed your clearance</h6>
                      <span class="text-success small pt-1 fw-bold"><?php $stage = $rows4['percent'];
                      $answer = ($stage / 12) * 100;
                      echo $answer;
                       ?>%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->
            <td>
            <?php if($rows4['percent'] != 12) { ?>
              <a class="btn btn-success w-100" href="<?php if($rows4['stage'] == 1){echo '../../api/college_principle.php';} else  {echo '../../api/others.php';} ?>" name="submit" type="submit">Submit <?php if($rows4['stage'] == 1) {
                        echo 'to College Principle for review';
                      } else if($rows4['stage'] == 2){
                        echo 'for review';
                      } else {
                        echo 'for review';
                      } ?></a>
                      <?php } ?>
                      </td>
              <?php
                    }
                 ?>
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
            </div>
      </div>
      <?php } ?>
    </section>
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
                        <th scope="col">Name</th>
                        <th scope="col">Remarks</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Convacation</td>
                        <?php 
                        $querys="select convacation from clearance where student_id = $user_id";
                        $fetchConvacation=mysqli_query($connect,$querys);
                        $row = mysqli_fetch_assoc($fetchConvacation);
                        if($row['convacation'] != null  && $row['convacation'] != 0) {
                        ?>
                        <td><a class="btn btn-success w-50" href="" name="submit" type="submit">Passed</a></td>
                        <?php } else { ?>
                          <td><a class="btn btn-danger w-50" href="" name="submit" type="submit">Pending</a></td>
                          <?php } ?>
                      </tr>
                      <tr>
                        <td>College Principal/SCHOOL DEAN</td>
                        <?php 
                        $querys="select principal from clearance where student_id = $user_id";
                        $fetchConvacation=mysqli_query($connect,$querys);
                        $row = mysqli_fetch_assoc($fetchConvacation);
                        if($row['principal'] != null && $row['principal'] != 0) {
                        ?>
                        <td><a class="btn btn-success w-50" href="" name="submit" type="submit">Passed</a></td>
                        <?php } else { ?>
                          <td><a class="btn btn-danger w-50" href="" name="submit" type="submit">Pending</a></td>
                          <?php } ?>
                      </tr>
                      <tr>
                        <td>Games Coach</td>
                        <?php 
                        $querys="select coach from clearance where student_id = $user_id";
                        $fetchConvacation=mysqli_query($connect,$querys);
                        $row = mysqli_fetch_assoc($fetchConvacation);
                        if($row['coach'] != null && $row['coach'] != 0) {
                        ?>
                        <td><a class="btn btn-success w-50" href="" name="submit" type="submit">Passed</a></td>
                        <?php } else { ?>
                          <td><a class="btn btn-danger w-50" href="" name="submit" type="submit">Pending</a></td>
                          <?php } ?>
                      </tr>
                      <tr>
                        <td>Hall Warden</td>
                        <?php 
                        $querys="select warden from clearance where student_id = $user_id";
                        $fetchConvacation=mysqli_query($connect,$querys);
                        $row = mysqli_fetch_assoc($fetchConvacation);
                        if($row['warden'] != null  && $row['warden'] != 0) {
                        ?>
                        <td><a class="btn btn-success w-50" href="" name="submit" type="submit">Passed</a></td>
                        <?php } else { ?>
                          <td><a class="btn btn-danger w-50" href="" name="submit" type="submit">Pending</a></td>
                          <?php } ?>
                      </tr>
                      <tr>
                        <td>Usab</td>
                        <?php 
                        $querys="select usab from clearance where student_id = $user_id";
                        $fetchConvacation=mysqli_query($connect,$querys);
                        $row = mysqli_fetch_assoc($fetchConvacation);
                        if($row['usab'] != null  && $row['usab'] != 0) {
                        ?>
                        <td><a class="btn btn-success w-50" href="" name="submit" type="submit">Passed</a></td>
                        <?php } else { ?>
                          <td><a class="btn btn-danger w-50" href="" name="submit" type="submit">Pending</a></td>
                          <?php } ?>
                      </tr>
                      <tr>
                        <td>Daruso</td>
                        <?php 
                        $querys="select daruso from clearance where student_id = $user_id";
                        $fetchConvacation=mysqli_query($connect,$querys);
                        $row = mysqli_fetch_assoc($fetchConvacation);
                        if($row['daruso'] != null  && $row['daruso'] != 0) {
                        ?>
                        <td><a class="btn btn-success w-50" href="" name="submit" type="submit">Passed</a></td>
                        <?php } else { ?>
                          <td><a class="btn btn-danger w-50" href="" name="submit" type="submit">Pending</a></td>
                          <?php } ?>
                      </tr>
                      <tr>
                        <td>Library</td>
                        <?php 
                        $querys="select library from clearance where student_id = $user_id";
                        $fetchConvacation=mysqli_query($connect,$querys);
                        $row = mysqli_fetch_assoc($fetchConvacation);
                        if($row['library'] != null  && $row['library'] != 0) {
                        ?>
                        <td><a class="btn btn-success w-50" href="" name="submit" type="submit">Passed</a></td>
                        <?php } else { ?>
                          <td><a class="btn btn-danger w-50" href="" name="submit" type="submit">Pending</a></td>
                          <?php } ?>
                      </tr>
                      <tr>
                        <td>BURSAR</td>
                        <?php 
                        $querys="select bursar from clearance where student_id = $user_id";
                        $fetchConvacation=mysqli_query($connect,$querys);
                        $row = mysqli_fetch_assoc($fetchConvacation);
                        if($row['bursar'] != null && $row['bursar'] != 0) {
                        ?>
                        <td><a class="btn btn-success w-50" href="" name="submit" type="submit">Passed</a></td>
                        <?php } else { ?>
                          <td><a class="btn btn-danger w-50" href="" name="submit" type="submit">Pending</a></td>
                          <?php } ?>
                      </tr>
                      <tr>
                        <td>Smart Card(ID SUBMISSION)</td>
                        <?php 
                        $querys="select card from clearance where student_id = $user_id";
                        $fetchConvacation=mysqli_query($connect,$querys);
                        $row = mysqli_fetch_assoc($fetchConvacation);
                        if($row['card'] != null && $row['card'] != 0) {
                        ?>
                        <td><a class="btn btn-success w-50" href="" name="submit" type="submit">Passed</a></td>
                        <?php } else { ?>
                          <td><a class="btn btn-danger w-50" href="" name="submit" type="submit">Pending</a></td>
                          <?php } ?>
                      </tr>
                      <tr>
                        <td>Loan Board/STUDENT FINANCE UNIT(SFU)</td>
                        <?php 
                        $querys="select loan from clearance where student_id = $user_id";
                        $fetchConvacation=mysqli_query($connect,$querys);
                        $row = mysqli_fetch_assoc($fetchConvacation);
                        if($row['loan'] != null && $row['loan'] != 0) {
                        ?>
                        <td><a class="btn btn-success w-50" href="" name="submit" type="submit">Passed</a></td>
                        <?php } else { ?>
                          <td><a class="btn btn-danger w-50" href="" name="submit" type="submit">Pending</a></td>
                          <?php } ?>
                      </tr>
                      <tr>
                        <td>Dean of Students/NHIF CARD</td>
                        <?php 
                        $querys="select dean from clearance where student_id = $user_id";
                        $fetchConvacation=mysqli_query($connect,$querys);
                        $row = mysqli_fetch_assoc($fetchConvacation);
                        if($row['dean'] != null && $row['dean'] != 0) {
                        ?>
                        <td><a class="btn btn-success w-50" href="" name="submit" type="submit">Passed</a></td>
                        <?php } else { ?>
                          <td><a class="btn btn-danger w-50" href="" name="submit" type="submit">Pending</a></td>
                          <?php } ?>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
  </main>
  <?php include "../../footer/index.php"; ?>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <?php include "../../js/index.php"; ?>
</body>
</html>