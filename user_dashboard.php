<?php
include 'backend/user_dash.php';
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
  <link rel="stylesheet" href="assets/css/user_decor.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


  <title>User Dashboard</title>
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
        User Dashboard
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
        <a class="navbar-item modal-button" id="notification-model" data-target="#modal">
          Notifications
        </a>
        <div class="navbar-item has-dropdown is-hoverable">
          <a href="#" class="navbar-link">
            User
          </a>
          <div class="navbar-dropdown is-right">
            <a href="user_dashboard.php" class="navbar-item profile-trigger">Dashboard</a>
            <hr class="navbar-divider" />
            <a href="user_dashboard.php?logout=1" class="navbar-item">Log Out</a>
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
                <a class="is-active has-background-primary has-text-black" id="left_nav_1">
                  <i class="fas fa-tachometer-alt icon"></i>
                  Dashboard</a>
              </li>
            </ul>
            <p class="menu-label has-text-lighter">Administration</p>
            <ul class="menu-list">
              <li>
                <a class="has-text-black" id="left_nav_2">
                  <i class="fas fa-users-cog icon"></i>
                  Profile</a>
              </li>
              <li>
                <a class="has-text-black" id="left_nav_3">
                  <i class="far fa-credit-card icon"></i>
                  Bill Payments</a>
              </li>
              <li>
                <a class="has-text-black" id="left_nav_4">
                  <i class="fas fa-plus icon"></i>
                  Add Guests</a>
              </li>
              <li>
                <a class="has-text-black" id="left_nav_5">
                  <i class="fas fa-truck icon"></i>
                  Schedule your delivery</a>
              </li>
              <li>
                <a class="has-text-black" id="left_nav_6">
                  <i class="fas fa-store icon"></i>
                  Book Amenities</a>
              </li>
              <li>
                <a class="has-text-black" id="left_nav_7">
                  <i class="fas fa-headset icon"></i>
                  Register your Complaint</a>
              </li>
              <li>
                <a class="has-text-black" id="left_nav_8">
                  <i class="far fa-clipboard icon"></i>
                  Notice Board</a>
              </li>
              <li>
                <a class="has-text-black" id="left_nav_9">
                  <i class="far fa-hospital icon"></i>
                  Emergency Services</a>
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
                Your Flat Number
              </div>
            </div>
            <div class="card-content">
              <p class="is-size-3">
                <?php echo $session_flat ?>
              </p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card has-background-primary has-text-black">
            <div class="card-header">
              <div class="card-header-title has-text-black is-uppercase">
                Your Username
              </div>
            </div>
            <div class="card-content">
              <p class="is-size-3"><?php echo $session_username ?></p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card has-background-warning has-text-black">
            <div class="card-header">
              <div class="card-header-title has-text-black is-uppercase">
                President Name
              </div>
            </div>
            <div class="card-content">
              <p class="is-size-3">Mr Mohit Kumar</p>
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
            Profile
          </h1>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="header">
        <h2>My Profile</h2>
      </div>
      <?php
        $profile_sql = "SELECT * FROM `Residents` WHERE `UserName`='$session_username'";
        $profile_result = mysqli_query($conn, $profile_sql);
        $profile_row = mysqli_fetch_assoc($profile_result);
        $contact_sql = "SELECT * FROM `Contacts` WHERE `Username`='$session_username'";
        $contact_result = mysqli_query($conn, $contact_sql);
        $num = mysqli_num_rows($contact_result);
        $phoneNumber_1 = "";
        $phoneNumber_2 = "";
        if($num==1)
        {
          $contact_row = mysqli_fetch_assoc($contact_result);
          $phoneNumber_1 = $contact_row['PhoneNo'];
        }
        else if($num==2)
        {
          $contact_row = mysqli_fetch_assoc($contact_result);
          $phoneNumber_1 = $contact_row['PhoneNo'];
          $contact_row = mysqli_fetch_assoc($contact_result);
          $phoneNumber_2 = $contact_row['PhoneNo'];
        }
      ?>
      <form id="form" class="form" method="POST" action="user_dashboard.php">

      <input type="hidden" name="updateProfile" value="Hi">

        <div class="form-control">
          <label for="username">Username</label>
          <input type="text" value=<?php echo $profile_row['UserName'] ?> id="username" name="username" readonly />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="name">Name</label>
          <input type="text" value="<?php echo $profile_row['ResidentName']?>" id="name" name="name" />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="flat">Flat Number</label>
          <input type="number" value=<?php echo $profile_row['FlatNo'] ?> id="flat" name="flat" />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="phoneNumber">Phone Number</label>
          <input type="number" value=<?php echo $phoneNumber_1 ?> id="phoneNumber" name="phoneNumber" />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="phoneNumber2">Alternate Number</label>
          <input type="number" value=<?php echo $phoneNumber_2?> id="phoneNumber2" name="phoneNumber2" />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="password">Password</label>
          <input type="password" placeholder="Password" id="password" name="password" />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="password2">Re-enter Password</label>
          <input type="password" placeholder="Confirm Passowrd" id="password2" />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <input type="submit" value="Update" class="btn" id="sub">
      </form>
    </div>
  </div>

  <div id="dash_3" class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile" style="display: none;">
    <div class="p-1">
      <div class="columns is-variable is-desktop">
        <div class="column">
          <h1 class="title">
            Bill Payments
          </h1>
        </div>
      </div>
    </div>

    <div class="guest-container">
      <div class="box">
        Payment Window
      </div>

      <form action="backend/razorpay.php" class="box" method="post" id="form_Payment">

        <input type="hidden" name="payment" id="payment" value="Hi">

        <div class="field">
          <label class="label">Payment against</label>
          <div class="control">
            <input class="input" type="text" name="pay_type" value="Society Maintenance Charge" readonly>
          </div>
        </div>

        <div class="field">
          <label class="label">Amount required to Pay</label>
          <div class="control">
            <input class="input" type="number" name="pay_amt" value=2500 readonly>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <label class="checkbox">
              <input type="checkbox" required>
              I agree to pay the above said amount.
            </label>
          </div>
        </div>

        <div class="field is-grouped">
          <div class="control">
            <input type="submit" class="button is-link" value="Pay">
          </div>
          <div class="control">
            <input type="reset" class="button is-link is-light" value="Cancel">
          </div>
        </div>
      </form>
    </div>

    <div class="table-container guest-container box">
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
            $sql = "SELECT * FROM `payments` WHERE `Username`='$session_username';";
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

  <div id="dash_4" class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile" style="display: none;">
    <div class="p-1">
      <div class="columns is-variable is-desktop">
        <div class="column">
          <h1 class="title">
            Add Guests
          </h1>
        </div>
      </div>
    </div>

    <form action="user_dashboard.php" class="guest-container box" method="post" id="form_guestAdd">

      <input type="hidden" name="guestAdd" id="guestAdd" value="Hi">
      <div class="field">
        <label class="label">Your Flat Number</label>
        <div class="control">
          <input class="input" type="number" name="guest_flat" value=<?php echo $session_flat ?> readonly>
        </div>
      </div>

      <div class="field">
        <label class="label">Guest Name</label>
        <div class="control">
          <input class="input" type="text" name="guest_name" placeholder="Guest Name" required>
        </div>
      </div>

      <div class="field">
        <label class="label">Guest Phone Number</label>
        <div class="control">
          <input class="input" type="number" name="guest_phone" placeholder="Guest Phone Number" required>
        </div>
      </div>

      <div class="field">
        <label class="label">Guest Arrival Date</label>
        <div class="control">
          <input class="input" type="text" name="guest_arrival" placeholder="MM/DD/YYYY" id="datepicker" required>
        </div>
      </div>

      <div class="field">
        <div class="control">
          <label class="checkbox">
            <input type="checkbox" required>
            I very well know the above mentioned person.
          </label>
        </div>
      </div>

      <div class="field is-grouped">
        <div class="control">
          <input type="submit" class="button is-link" value="Add Guest">
        </div>
        <div class="control">
          <input type="reset" class="button is-link is-light" value="Cancel">
        </div>
      </div>
    </form>

    <div class="table-container guest-container box">
      <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" id="myTable4">
        <thead>
          <tr>
            <th>SL No</th>
            <th>Name</th>
            <th>Flat No</th>
            <th>Phone No</th>
            <th>Designation</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <?php
          $sql = "SELECT * FROM `guests` WHERE `VisitingFlat`='$session_flat';";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while ($row = mysqli_fetch_assoc($result)) {
            $sno = $sno + 1;
            echo "<tr>
                        <td>" . $sno . "</td>
                        <td>" . $row['GuestName'] . "</td>
                        <td>" . $row['VisitingFlat'] . "</td>
                        <td>" . $row['GuestPhoneNumber'] . "</td>
                        <td>" . $row['DateOfArrival'] . "</td>
                        <td> <button class='button is-small is-primary guest-edit' data-target='#modal4' id=" . $row['VerificationID'] . ">Edit</button> <button class='button is-small is-danger guest-delete' id=d" . $row['VerificationID'] . ">Delete</button> </td>
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
            Schedule Your Delivery
          </h1>
        </div>
      </div>
    </div>

    <form action="user_dashboard.php" class="guest-container box" method="post" id="form_product">

      <input type="hidden" name="delivery" id="delivery" value="Hi">
      <div class="field">
        <label class="label">Your Flat Number</label>
        <div class="control">
          <input class="input" type="number" name="product_flat" value=<?php echo $session_flat ?> readonly>
        </div>
      </div>

      <div class="field">
        <label class="label">Product Type</label>
        <div class="control">
          <input class="input" type="text" name="product_type" placeholder="Food, Parcel, Post, Documents" required>
        </div>
      </div>

      <div class="field">
        <label class="label">Quantity</label>
        <div class="control">
          <input class="input" type="number" name="product_qty" placeholder="Product Quantity" required>
        </div>
      </div>

      <div class="field">
        <label class="label">Product Arrival Date</label>
        <div class="control">
          <input class="input" type="text" name="product_arrival" placeholder="MM/DD/YYYY" id="datepicker2" required>
        </div>
      </div>

      <div class="field">
        <div class="control">
          <label class="checkbox">
            <input type="checkbox" required>
            I am aware that the item to be delivered is legal.
          </label>
        </div>
      </div>

      <div class="field is-grouped">
        <div class="control">
          <input type="submit" class="button is-link" value="Schedule Pickup">
        </div>
        <div class="control">
          <input type="reset" class="button is-link is-light" value="Cancel">
        </div>
      </div>
    </form>

    <div class="table-container guest-container box">
      <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" id="myTable5">
        <thead>
          <tr>
            <th>SL No</th>
            <th>Order ID</th>
            <th>Flat No</th>
            <th>Product Type</th>
            <th>Product Qty</th>
            <th>Arrival Date</th>
          </tr>
        </thead>

        <tbody>
          <?php
          $sql = "SELECT * FROM `outdoorOrders` WHERE `OrderSource`='$session_flat'";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while ($row = mysqli_fetch_assoc($result)) {
            $sno = $sno + 1;
            echo "<tr>
                        <td>" . $sno . "</td>
                        <td>" . $row['OrderID'] . "</td>
                        <td>" . $row['OrderSource'] . "</td>
                        <td>" . $row['ProductType'] . "</td>
                        <td>" . $row['Quantity'] . "</td>
                        <td>" . $row['DateOfArrival'] . "</td>
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
            Book Amenities
          </h1>
        </div>
      </div>
    </div>

    <form action="backend/razorpay.php" class="guest-container box" method="post" id="form_Amentities">

      <input type="hidden" name="payment" id="amenities" value="Hi">

      <div class="field">
        <label class="label">Select Amenity</label>
        <div class="control">
          <div class="select">
            <select name="pay_type" id="amenity_type">
              <option value="Housekeeper">HouseKeeper - Rs 700</option>
              <option value="Carpenter">Carpenter - Rs 1000</option>
              <option value="Repair">Repair Guy(AC, TV) - Rs 900</option>
              <option value="Festival">Ganpati Festival(per flat) - Rs 500</option>
            </select>
          </div>
        </div>
      </div>

      <div class="field">
        <label class="label">Amount required to pay</label>
        <div class="control">
          <input id="amenity_pay" class="input" type="number" name="pay_amt" value=700 readonly>
        </div>
      </div>

      <div class="field">
        <div class="control">
          <label class="checkbox">
            <input type="checkbox" required>
            I agree to pay the above said amount.
          </label>
        </div>
      </div>

      <div class="field is-grouped">
        <div class="control">
          <input type="submit" class="button is-link" value="Pay">
        </div>
        <div class="control">
          <input type="reset" class="button is-link is-light" value="Cancel">
        </div>
      </div>
    </form>

  </div>

  <div id="dash_7" class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile" style="display: none;">
    <div class="p-1">
      <div class="columns is-variable is-desktop">
        <div class="column">
          <h1 class="title">
            Register Your Anonymous Complaint
          </h1>
        </div>
      </div>
    </div>

    <form action="user_dashboard.php" class="guest-container box" method="post" id="form_complaint">

      <input type="hidden" name="complaint" id="complaint" value="Hi">

      <div class="field">
        <label class="label">Subject of query</label>
        <div class="control">
          <input class="input" type="text" placeholder="Enter your subject" name="subject" required>
        </div>
      </div>

      <div class="field">
        <label class="label">Description</label>
        <div class="control">
          <textarea class="textarea" placeholder="Enter your description" name="description" required></textarea>
        </div>
      </div>

      <div class="field is-grouped">
        <div class="control">
          <input type="submit" class="button is-link" value="Lodge Complaint">
        </div>
        <div class="control">
          <input type="reset" class="button is-link is-light" value="Cancel">
        </div>
      </div>
    </form>
  </div>

  <div id="dash_8" class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile" style="display: none;">
    <div class="p-1">
      <div class="columns is-variable is-desktop">
        <div class="column">
          <h1 class="title">
            Notice Board
          </h1>
        </div>
      </div>
    </div>

    <div class="table-container guest-container box">
      <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" id="myTable8">
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
                        <td> <button class='button is-small is-info is-rounded view-notice' data-target='#modal8' id=" . $row['NoticeID'] . ">View Notice</button></td>
                      </tr>";
          }
          ?>

        </tbody>
      </table>
    </div>

  </div>

  <div id="dash_9" class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile" style="display: none;">
    <div class="p-1">
      <div class="columns is-variable is-desktop">
        <div class="column">
          <h1 class="title">
            Emergency Services
          </h1>
        </div>
      </div>
    </div>
    <div class="guest-container">
      <div class="card">
        <header class="card-header">
          <p class="card-header-title">
            Sometimes Situation is out of control.
          </p>
        </header>
        <div class="card-content">
          <div class="content">
            Don't worry we have got you covered. If you are feeling unwell or if you feel something is not good below are some of the contacts that may help you.
            <br>
            <strong>Stay Safe and Stay Healthy</strong>
            <br>
            <time datetime="2016-1-1">24/7 Available</time>
          </div>
        </div>
        <footer class="card-footer">
          <a href="#" class="card-footer-item">Call Ambulance</a>
          <a href="#" class="card-footer-item">Call Fire Brigade</a>
        </footer>
      </div>
    </div>
  </div>

  <div id="modal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
      <div class="box">
        <article class="media">
          <div class="media-left">
            <figure class="image is-64x64">
              <img src="assets/img/user.png" alt="Image">
            </figure>
          </div>
          <div class="media-content">
            <div class="content">
              <p>
                <strong>No New Notifications</strong>
                <small>@SocietyAuditor</small>
                <br>
                Check the Notice Board to see any new Notices.
              </p>
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
              <form action="user_dashboard.php" class="guest-container" method="post" id="form_guestEdit">

                <input type="hidden" name="guestEdit" id="guestEdit" value="Hi">
                <div class="field">
                  <label class="label">Your Flat Number</label>
                  <div class="control">
                    <input class="input" type="number" name="guest_flat" id="guest_edit_flat" placeholder="Your Flat Number" required>
                  </div>
                </div>

                <div class="field">
                  <label class="label">Guest Name</label>
                  <div class="control">
                    <input class="input" type="text" name="guest_name" id="guest_edit_name" placeholder="Guest Name" required>
                  </div>
                </div>

                <div class="field">
                  <label class="label">Guest Phone Number</label>
                  <div class="control">
                    <input class="input" type="number" name="guest_phone" id="guest_edit_phone" placeholder="Guest Phone Number" required>
                  </div>
                </div>

                <form action="" class="guest-container" method="post">
                  <div class="field">
                    <label class="label">Guest Arrival Date</label>
                    <div class="control">
                      <input class="input" type="text" name="guest_arrival" id="guest_edit_arrival" placeholder="MM/DD/YYYY" id="datepicker" required>
                    </div>
                  </div>

                  <div class="field">
                    <div class="control">
                      <label class="checkbox">
                        <input type="checkbox" required>
                        I very well know the above mentioned person.
                      </label>
                    </div>
                  </div>

                  <div class="field is-grouped">
                    <div class="control">
                      <input type="submit" class="button is-link" value="Update Guest">
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

  <div id="modal8" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
      <div class="box">
        <article class="media">
          <div class="media-content">
            <div class="content">
              <div class="box">
                Full Notice View
              </div>

              <form class="box">

                <div class="field">
                  <label class="label">Notice Date</label>
                  <div class="control">
                    <input class="input" type="text" value="Notice Date" id="notice_date" readonly>
                  </div>
                </div>

                <div class="field">
                  <label class="label">Notice Title</label>
                  <div class="control">
                    <input class="input" type="text" value="Notice Title" id="notice_title" readonly>
                  </div>
                </div>

                <div class="field">
                  <label class="label">Notice Description</label>
                  <div class="control">
                    <input class="input" type="text" value="Notice Description" id="notice_desc" readonly>
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
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="assets/js/admin_dashboard.js"></script>
  <script src="assets/js/user_dashboard.js"></script>


  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });

    $(document).ready(function() {
      $('#myTable4').DataTable();
    });

    $(document).ready(function() {
      $('#myTable5').DataTable();
    });

    $(document).ready(function() {
      $('#myTable8').DataTable();
    });

    $(function() {
      $("#datepicker").datepicker();
    });

    $(function() {
      $("#datepicker2").datepicker();
    });

    $("#notification-model").click(function() {
      var target = $(this).data("target");
      $("html").addClass("is-clipped");
      $(target).addClass("is-active");
    });

    $(".guest-edit").click(function() {
      var target = $(this).data("target");
      $("html").addClass("is-clipped");
      $(target).addClass("is-active");
    });

    $(".view-notice").click(function() {
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