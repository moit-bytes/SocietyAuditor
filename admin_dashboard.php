<?php
include 'backend/admin_dash.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Include FontAwesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

  <!-- Including Bulma Framework -->
  <link rel="stylesheet" href="assets/vendor/bulma/css/bulma.min.css">

  <!-- Including Styles -->
  <link rel="stylesheet" href="assets/sass/admin_dashboard.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="assets/css/admin_decor.css">


  <title>Admin Dashboard</title>
</head>

<body>
  <nav class="navbar is-fixed-top box-shadow-y">
    <div class="navbar-brand">
      <a role="button" class="navbar-burger toggler" aria-label="menu" aria-expanded="false">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>

      <a href="#" class="navbar-item has-text-weight-bold has-text-black">
        Admin Dashboard
      </a>
      <a role="button" class="navbar-burger nav-toggler" aria-label="menu" aria-expanded="false">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
    <div class="navbar-menu has-background-white">
      <div class="navbar-start">
        <a href="." class="navbar-item">
          <i class="fas fa-home icon"></i> Home
        </a>
      </div>
      <div class="navbar-end">
        <div class="navbar-item has-dropdown is-hoverable">
          <a href="#" class="navbar-link">
            Admin
          </a>
          <div class="navbar-dropdown is-right">
            <a href="admin_dashboard.html" class="navbar-item">Dashboard</a>
            <hr class="navbar-divider" />
            <a href="index.php" class="navbar-item">Log Out</a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div class="columns is-variable is-0">
    <div>
      <div class="menu-container px-1 has-background-white">
        <div class="menu-wrapper py-1">
          <aside class="menu">
            <p class="menu-label has-text-lighter">General</p>
            <ul class="menu-list">
              <li>
                <a href="#" class="is-active has-background-primary has-text-black" id="left_nav_1">
                  <i class="fas fa-tachometer-alt icon"></i>
                  Dashboard</a>
              </li>
            </ul>
            <p class="menu-label has-text-lighter">Administration</p>
            <ul class="menu-list">
              <li>
                <a href="#" class="has-text-black" id="left_nav_2">
                  <i class="fas fa-cogs icon"></i>
                  All Payments</a>
              </li>
              <li>
                <a href="#" class="has-text-black" id="left_nav_3">
                  <i class="fas fa-users-cog icon"></i>
                  Manage Security Staff</a>
              </li>
              <li>
                <a href="#" class="has-text-black" id="left_nav_4">
                  <i class="fas fa-headset icon"></i>
                  Manage Security Cameras</a>
              </li>
              <li>
                <a href="#" class="has-text-black" id="left_nav_5">
                  <i class="far fa-clipboard icon"></i>
                  Update Notice Board</a>
              </li>
              <li>
                <a href="#" class="has-text-black" id="left_nav_6">
                  <i class="fas fa-user-secret icon"></i>
                  View Complaints</a>
              </li>
            </ul>
          </aside>
        </div>
      </div>
    </div>
  </div>
  <div id="dash_1" class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile">
    <div class="p-1">
      <div class="columns is-variable is-desktop">
        <div class="column">
          <h1 class="title">
            Dashboard
          </h1>
        </div>
      </div>

      <div class="columns  is-variable is-desktop">
        <div class="column">
          <div class="card has-background-dark has-text-white">
            <div class="card-header">
              <div class="card-header-title has-text-white">
                Total Users
              </div>
            </div>
            <div class="card-content">
              <p class="is-size-3">
              <?php 
                $sql = "SELECT * FROM `residents`;";

                $result = mysqli_query($conn, $sql);
            
                $num = mysqli_num_rows($result);
                echo $num;
                ?>
              </p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card has-background-primary has-text-black">
            <div class="card-header">
              <div class="card-header-title has-text-black is-uppercase">
                Admin Name
              </div>
            </div>
            <div class="card-content">
              <p class="is-size-3">Mr. Mohit Kumar</p>
            </div>
          </div>
        </div>
      </div>
      <div class="columns is-variable">
        <div class="column is-4-desktop is-6-tablet">

        </div>
      </div>
    </div>

  </div>

  <div id="dash_2" class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile" style="display: none;">
    <div class="p-1">
      <div class="columns is-variable is-desktop">
        <div class="column">
          <h1 class="title">
            All Payments
          </h1>
        </div>
      </div>
    </div>

    <div class="table-container any-container box">
      <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" id="myTable">
        <thead>
          <tr>
            <th>SL No</th>
            <th>Paymnet ID</th>
            <th>Beneficiary Name</th>
            <th>Amount Paid</th>
            <th>Service Type</th>
            <th>Payment Date</th>
          </tr>
        </thead>

        <tbody>
          <?php
            $sql = "SELECT * FROM `payments`;";
            $result = mysqli_query($conn, $sql);
            $sno = 0;
            while ($row = mysqli_fetch_assoc($result)) {
              $sno = $sno + 1;
              echo "<tr>
                          <td>" . $sno . "</td>
                          <td>" . $row['PaymentID'] . "</td>
                          <td>" . $row['BeneficiaryName'] . "</td>
                          <td>" . "₹ " . $row['PayAmount'] . "</td>
                          <td>" . $row['ServiceType'] . "</td>
                          <td>" . $row['DateTimeOfPay'] . "</td>
                        </tr>";
            }
            ?>
        </tbody>

      </table>
    </div>

  </div>

  <div id="dash_3" class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile" style="display: none;">
    <div class="p-1">
      <div class="columns is-variable is-desktop">
        <div class="column">
          <h1 class="title">
            Add Security Staff
          </h1>
        </div>
      </div>
    </div>

    <form action="admin_dashboard.php" class="any-container box" method="post" id="form_security_staff">

      <input type="hidden" name="staffAdd" id="staffAdd" value="Hi">

      <div class="field box">
        <label class="label">Staff Name</label>
        <div class="control">
          <input class="input" type="text" name="staff_name" placeholder="Enter Security Name" required>
        </div>
      </div>

      <div class="field box">
        <label class="label">Staff Salary</label>
        <div class="control">
          <input class="input" type="number" name="staff_salary" placeholder="Enter Staff Salary" required>
        </div>
      </div>

      <div class="field box">
        <label class="label">Select Staff Post</label>
        <div class="control">
          <div class="select">
            <select name="security_type">
              <option value="Head Guard">Head Guard 1</option>
              <option value="Asst Guard">Asst Guard</option>
              <option value="GateKeeper">GateKeeper</option>
              <option value="Lift Security">Lift Security</option>
            </select>
          </div>
        </div>
      </div>

      <div class="field box">
        <label class="label">Select Staff Shift</label>
        <div class="control">
          <div class="select">
            <select name="security_shift">
              <option value=1>1 - Morning</option>
              <option value=2>2 - Afternoon</option>
              <option value=3>3 - Night</option>
            </select>
          </div>
        </div>
      </div>

      <div class="field is-grouped box">
        <div class="control">
          <input type="submit" class="button is-link" value="Add Staff">
        </div>
        <div class="control">
          <input type="reset" class="button is-link is-light" value="Cancel">
        </div>
      </div>
    </form>

    <div class="table-container any-container box">
      <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" id="myTable3">
        <thead>
          <tr>
            <th>SL No</th>
            <th>Staff ID</th>
            <th>Staff Name</th>
            <th>Staff Salary</th>
            <th>Staff Post</th>
            <th>Staff Shift</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <?php
          $sql = "SELECT * FROM `SecurityStaff`";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while ($row = mysqli_fetch_assoc($result)) {
            $sno = $sno + 1;
            echo "<tr>
                        <td>" . $sno . "</td>
                        <td>" . $row['StaffID'] . "</td>
                        <td>" . $row['StaffName'] . "</td>
                        <td>" . $row['StaffSalary'] . "</td>
                        <td>" . $row['StaffPost'] . "</td>
                        <td>" . $row['Shift'] . "</td>
                        <td> <button class='button is-small is-info is-rounded edit-staff' data-target='#modal3' id=" . $row['StaffID'] . ">Edit</button> <button class='button is-small is-danger is-rounded delete-staff' data-target='#modal8' id=d" . $row['StaffID'] . ">Delete</button></td>
                      </tr>";
          }
          ?>
        </tbody>

      </table>
    </div>

  </div>

  <div id="dash_4" class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile" style="display: none;">
    <div class="p-1">
      <div class="columns is-variable is-desktop">
        <div class="column">
          <h1 class="title">
            Add Security Cameras
          </h1>
        </div>
      </div>
    </div>

    <form action="admin_dashboard.php" class="any-container box" method="post" id="form_security_cams">

      <input type="hidden" name="camsAdd" id="camsAdd" value="Hi">

      <div class="field box">
        <label class="label">Location of CCTV</label>
        <div class="control">
          <input class="input" type="text" name="cams_location" placeholder="Building outside, Floor 1, Floor 2 etc" required>
        </div>
      </div>

      <div class="field box">
        <label class="label">CCTV Status</label>
        <div class="control">
          <div class="select">
            <select name="cams_status">
              <option value="Active">Active</option>
              <option value="Inactive">Inactive</option>
              <option value="Not Working">Not Working</option>
            </select>
          </div>
        </div>
      </div>

      <div class="field is-grouped box">
        <div class="control">
          <input type="submit" class="button is-link" value="Add CCTV">
        </div>
        <div class="control">
          <input type="reset" class="button is-link is-light" value="Cancel">
        </div>
      </div>
    </form>

    <div class="table-container any-container box">
      <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" id="myTable4">
        <thead>
          <tr>
            <th>SL No</th>
            <th>CCTV ID</th>
            <th>Location</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <?php
          $sql = "SELECT * FROM `SecurityEquipment`";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while ($row = mysqli_fetch_assoc($result)) {
            $sno = $sno + 1;
            echo "<tr>
                        <td>" . $sno . "</td>
                        <td>" . $row['CCTVNumber'] . "</td>
                        <td>" . $row['Location'] . "</td>
                        <td>" . $row['Status'] . "</td>
                        <td> <button class='button is-small is-info is-rounded edit-cctv' data-target='#modal4' id=" . $row['CCTVNumber'] . ">Edit</button> <button class='button is-small is-danger is-rounded delete-cctv' data-target='#modal8' id=d" . $row['CCTVNumber'] . ">Delete</button></td>
                      </tr>";
          }
          ?>
        </tbody>

      </table>
    </div>

  </div>

  <div id="dash_5" class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile" style="display: none;">
    <div class="p-1">
      <div class="columns is-variable is-desktop">
        <div class="column">
          <h1 class="title">
            Add A Notice
          </h1>
        </div>
      </div>
    </div>

    <form class="box any-container" method="POST">

      <input type="hidden" name="noticeAdd" id="noticeAdd" value="Hi">

      <div class="field">
        <label class="label">Notice Title</label>
        <div class="control">
          <input class="input" type="text" placeholder="Notice Title" id="notice_title" name="notice_title" required>
        </div>
      </div>

      <div class="field">
        <label class="label">Notice Description</label>
        <div class="control">
          <textarea class="textarea" name="notice_desc" id="notice_desc" placeholder="Enter Notice Body" required></textarea>
        </div>
      </div>

      <div class="field is-grouped">
        <div class="control">
          <input type="submit" class="button is-link" value="Add Notice">
        </div>
        <div class="control">
          <input type="reset" class="button is-link is-light" value="Cancel">
        </div>
      </div>

    </form>

    <div class="table-container any-container box">
      <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" id="myTable5">
        <thead>
          <tr>
            <th>SL No</th>
            <th>Notice Title</th>
            <th>Notice Description</th>
            <th>Date Published</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $sql = "SELECT * FROM `NoticeBoard`";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while ($row = mysqli_fetch_assoc($result)) {
            $sno = $sno + 1;
            echo "<tr>
                        <td>" . $sno . "</td>
                        <td>" . $row['NoticeTitle'] . "</td>
                        <td>" . $row['NoticeDescription'] . "</td>
                        <td>" . $row['DatePublished'] . "</td>
                        <td> <button class='button is-small is-info is-rounded edit-notice' data-target='#modal5' id=" . $row['NoticeID'] . ">Edit</button> <button class='button is-small is-danger is-rounded delete-notice' id=d" . $row['NoticeID'] . ">Delete</button></td>
                      </tr>";
          }
          ?>

        </tbody>
      </table>
    </div>

  </div>

  <div id="dash_6" class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile" style="display: none;">
    <div class="p-1">
      <div class="columns is-variable is-desktop">
        <div class="column">
          <h1 class="title">
            Resolve Complaints
          </h1>
        </div>
      </div>
    </div>

    <div class="table-container box any-container">
      <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" id="myTable6">
        <thead>
          <tr>
            <th>SL No</th>
            <th>Subject</th>
            <th>Description</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <?php
          $sql = "SELECT * FROM `complaintBox`";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while ($row = mysqli_fetch_assoc($result)) {
            $sno = $sno + 1;
            $status = $row['Status'];
            if ($status == 'Not Resolved') {
              echo "<tr>
                        <td>" . $sno . "</td>
                        <td>" . $row['Subject'] . "</td>
                        <td>" . $row['Description'] . "</td>
                        <td>" . $row['Status'] . "</td>
                        <td> <button class='button is-small is-success is-rounded complaint-resolve' data-target='#modal6' id=" . $row['AnonymousID'] . ">Review</button>
                      </tr>";
            } else {
              echo "<tr>
              <td>" . $sno . "</td>
              <td>" . $row['Subject'] . "</td>
              <td>" . $row['Description'] . "</td>
              <td>" . $row['Status'] . "</td>
              <td>" . "Already Resolved" . "</td>
            </tr>";
            }
          }
          ?>
        </tbody>

      </table>
    </div>

  </div>

  <div id="modal6" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
      <div class="box">
        <article class="media">
          <div class="media-content">
            <div class="content">
              <div class="box">
                Complaint View
              </div>

              <form class="box" action="admin_dashboard.php" method="POST">

                <input type="hidden" name="complaintView" id="complaintView" value="Hi">

                <div class="field">
                  <label class="label">Subject of Complaint</label>
                  <div class="control">
                    <input class="input" type="text" id="complaint_sub" readonly>
                  </div>
                </div>

                <div class="field">
                  <label class="label">Description of Complaint</label>
                  <div class="control">
                    <input class="input" type="text" id="complaint_desc" readonly>
                  </div>
                </div>

                <div class="field">
                  <label class="label">Status of Complaint</label>
                  <div class="control">
                    <input class="input" type="text" id="complaint_stat" readonly>
                  </div>
                </div>

                <div class="field is-grouped">
                  <div class="control">
                    <input type="submit" class="button is-link" value="Mark As Resolved">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </article>
      </div>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
  </div>

  <div id="modal5" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
      <div class="box">
        <article class="media">
          <div class="media-content">
            <div class="content">
              <div class="box">
                Update Notice
              </div>

              <form class="box" method="POST" action="admin_dashboard.php">

                <input type="hidden" name="noticeEdit" id="noticeEdit" value="Hi">

                <div class="field">
                  <label class="label">Notice Title</label>
                  <div class="control">
                    <input class="input" type="text" placeholder="Notice Title" id="edit_notice_title" name="edit_notice_title" required>
                  </div>
                </div>

                <div class="field">
                  <label class="label">Notice Description</label>
                  <div class="control">
                    <textarea class="textarea" name="edit_notice_desc" id="edit_notice_desc" placeholder="Enter Notice Body" required></textarea>
                  </div>
                </div>

                <div class="field is-grouped">
                  <div class="control">
                    <input type="submit" class="button is-link" value="Update Notice">
                  </div>
                  <div class="control">
                    <input type="reset" class="button is-link is-light" value="Cancel">
                  </div>
                </div>

              </form>


            </div>
          </div>
        </article>
      </div>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
  </div>

  <div id="modal4" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
      <div class="box">
        <article class="media">
          <div class="media-content">
            <div class="content">
              <div class="box">
                Update CCTV Camera
              </div>

              <form action="admin_dashboard.php" class="box" method="post">

                <input type="hidden" name="camsEdit" id="camsEdit" value="Hi">

                <div class="field box">
                  <label class="label">Location of CCTV</label>
                  <div class="control">
                    <input class="input" type="text" name="cams_location" placeholder="Building outside, Floor 1, Floor 2 etc" id="edit_cam_location" required>
                  </div>
                </div>

                <div class="field box">
                  <label class="label">CCTV Status</label>
                  <div class="control">
                    <div class="select">
                      <select name="cams_status" id="edit_cam_status">
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                        <option value="Not Working">Not Working</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="field is-grouped box">
                  <div class="control">
                    <input type="submit" class="button is-link" value="Update CCTV">
                  </div>
                  <div class="control">
                    <input type="reset" class="button is-link is-light" value="Cancel">
                  </div>
                </div>
              </form>

            </div>
          </div>
        </article>
      </div>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
  </div>

  <div id="modal3" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
      <div class="box">
        <article class="media">
          <div class="media-content">
            <div class="content">
              <div class="box">
                Update Security Staff
              </div>

              <form action="admin_dashboard.php" class="any-container box" method="post">

                <input type="hidden" name="staffEdit" id="staffEdit" value="Hi">

                <div class="field box">
                  <label class="label">Staff Name</label>
                  <div class="control">
                    <input class="input" type="text" name="staff_name" id="edit_staff_name" placeholder="Enter Security Name" required>
                  </div>
                </div>

                <div class="field box">
                  <label class="label">Staff Salary</label>
                  <div class="control">
                    <input class="input" type="number" name="staff_salary" id="edit_staff_salary" placeholder="Enter Staff Salary" required>
                  </div>
                </div>

                <div class="field box">
                  <label class="label">Select Staff Post</label>
                  <div class="control">
                    <div class="select">
                      <select name="security_type" id="edit_staff_type">
                        <option value="Head Guard">Head Guard 1</option>
                        <option value="Asst Guard">Asst Guard</option>
                        <option value="GateKeeper">GateKeeper</option>
                        <option value="Lift Security">Lift Security</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="field box">
                  <label class="label">Select Staff Shift</label>
                  <div class="control">
                    <div class="select">
                      <select name="security_shift" id="edit_staff_shift">
                        <option value=1>1 - Morning</option>
                        <option value=2>2 - Afternoon</option>
                        <option value=3>3 - Night</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="field is-grouped box">
                  <div class="control">
                    <input type="submit" class="button is-link" value="Update Staff">
                  </div>
                  <div class="control">
                    <input type="reset" class="button is-link is-light" value="Cancel">
                  </div>
                </div>
              </form>

            </div>
          </div>
        </article>
      </div>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js">
  </script>
  <script src="assets/js/admin_dashboard.js"></script>
  <script src="assets/js/admin_js_2.js"></script>

  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });

    $(document).ready(function() {
      $('#myTable3').DataTable();
    });

    $(document).ready(function() {
      $('#myTable4').DataTable();
    });

    $(document).ready(function() {
      $('#myTable5').DataTable();
    });

    $(document).ready(function() {
      $('#myTable6').DataTable();
    });

    $(".complaint-resolve").click(function() {
      var target = $(this).data("target");
      $("html").addClass("is-clipped");
      $(target).addClass("is-active");
    });

    $(".edit-notice").click(function() {
      var target = $(this).data("target");
      $("html").addClass("is-clipped");
      $(target).addClass("is-active");
    });

    $(".edit-cctv").click(function() {
      var target = $(this).data("target");
      $("html").addClass("is-clipped");
      $(target).addClass("is-active");
    });

    $(".edit-staff").click(function() {
      var target = $(this).data("target");
      $("html").addClass("is-clipped");
      $(target).addClass("is-active");
    });

    $(".modal-close").click(function() {
      $("html").removeClass("is-clipped");
      $(this).parent().removeClass("is-active");
    });
  </script>
</body>

</html>