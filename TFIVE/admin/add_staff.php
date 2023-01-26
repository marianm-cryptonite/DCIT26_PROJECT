<?php
session_start();
include('config/config.php');
include('config/checklogin.php');
include('config/code-generator.php');

check_login();
//Add Staff
if (isset($_POST['addStaff'])) {
  //Prevent Posting Blank Values
  if (empty($_POST["staff_number"]) || empty($_POST["staff_name"]) || empty($_POST['staff_gender']) || empty($_POST['staff_birthdate']) 
  || empty($_POST['staff_nationality']) || empty($_POST['staff_depart']) || empty($_POST['staff_status']) || empty($_POST['staff_empstatus'])) {
    $err = "Blank Values Not Accepted";
  } else {
    $staff_number = $_POST['staff_number'];
    $staff_name = $_POST['staff_name'];
    $staff_gender = $_POST['staff_gender'];
    $staff_birthdate = $_POST['staff_birthdate'];
    $staff_nationality = $_POST['staff_nationality'];
    $staff_depart = $_POST['staff_depart'];
    $staff_status = $_POST['staff_status'];
    $staff_empstatus= $_POST['staff_empstatus'];

    //Insert Captured information to a database table
    $postQuery = "INSERT INTO rpos_staff (staff_number, staff_name, staff_gender, staff_birthdate, staff_nationality, staff_depart, staff_status, staff_empstatus) VALUES(?,?,?,?,?,?,?,?)";
    $postStmt = $mysqli->prepare($postQuery);
    //bind paramaters
    $rc = $postStmt->bind_param('ssssssss', $staff_number, $staff_name, $staff_gender, $staff_birthdate, $staff_nationality, $staff_depart, $staff_status, $staff_empstatus);
    $postStmt->execute();
    //declare a varible which will be passed to alert function
    if ($postStmt) {
      $success = "Staff Added" && header("refresh:1; url=hrm.php");
    } else {
      $err = "Please Try Again Or Try Later";
    }
  }
}
require_once('partials/_head.php');
?>

<body>
  <!-- Sidenav -->
  <?php
  require_once('partials/_sidebar.php');
  ?>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <?php
    require_once('partials/_topnav.php');
    ?>
    <!-- Header -->
    <div style="background-image: url(assets/img/theme/restro00.jpg); background-size: cover;" class="header  pb-8 pt-5 pt-md-8">
    <span class="mask bg-gradient-dark opacity-8"></span>
      <div class="container-fluid">
        <div class="header-body">
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--8">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3>NEW EMPLOYEE</h3>
            </div>
            <div class="card-body">
              <form method="POST">
                <div class="form-row">
                  <div class="col-md-6">
                    <label>Employee Number</label>
                    <input type="number" name="staff_number" class="form-control" value="<?php echo $alpha; ?>-<?php echo $beta; ?>">
                  </div>
                  <div class="col-md-6">
                    <label>Employee Name</label>
                    <input type="text" name="staff_name" class="form-control" value="">
                  </div>
                </div>
                <hr>
                <div class="form-row">
                  <div class="col-md-6">
                    <label>Gender</label>
                    <input type="text" name= "staff_gender" class="form-control" value="">
                  </div>
                  <div class="col-md-6">
                    <label>Date of Birth</label>
                    <input type="date" name= "staff_birthdate" class="form-control" value="">
                  </div>
                  <div class="col-md-6">
                    <label>Nationality</label>
                    <input type="text" name= "staff_nationality" class="form-control" value="">
                  </div>
                  <div class="col-md-6">
                    <label>Civil Status</label>
                    <input type="text"  name= "staff_status" class="form-control" value="">
                  </div>
                  <div class="col-md-6">
                    <label>Department</label>
                    <input type="text" name= "staff_depart" class="form-control" value="">
                  </div>
                  <div class="col-md-6">
                    <label>Employee Status</label>
                    <input type="text" name= "staff_empstatus" class="form-control" value="">
                  </div>
                </div>
                <br>
                <div class="form-row">
                  <div class="col-md-6">
                    <input type="submit" name="addStaff" value="Add Employee" class="btn btn-success" value="">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <?php
      require_once('partials/_footer.php');
      ?>
    </div>
  </div>
  <!-- Argon Scripts -->
  <?php
  require_once('partials/_scripts.php');
  ?>
</body>

</html>