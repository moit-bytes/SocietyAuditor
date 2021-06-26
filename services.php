<?php

$session_username = "";
$session_flat = "";
session_start();

if (isset($_SESSION['UserName'])) {
  $session_username = $_SESSION['UserName'];
  $session_flat = $_SESSION['FlatNo'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/fav.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Our Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>Society Auditor</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown"><a href="#"><span><img src="assets/img/user.png" alt="" height="28px" width="28px"></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <?php
              if (isset($_SESSION['UserName'])) {
                echo '<li class="dropdown"><a href="user_dashboard.php" target="_blank"><span>My Dashboard</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="user_dashboard.php" target="_blank">My Payments</a></li>
                    <li><a href="user_dashboard.php" target="_blank">Society Bills</a></li>
                    <li><a href="user_dashboard.php" target="_blank">Notice Board</a></li>
                    <li><a href="user_dashboard.php" target="_blank">Amenities</a></li>
                    <li><a href="user_dashboard.php" target="_blank">Register Complaint</a></li>
                  </ul>
                </li> 
                <li><a href="user_dashboard.php?logout=1">Logout</a></li>
                ';
              } else {
                echo '<li><a href="login_page.html">Login</a></li>
                <li><a href="register.html">SignUp</a></li>';
              }
              ?>

            </ul>
          </li>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a class="active " user_dashboard.phphref="services.php">Services</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="admin_login.html" target="_blank">Admin Corner</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Services Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Services</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Services</li>
          </ol>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Service Details Section ======= -->
    <section class="service-details">
      <div class="container">

        <div class="row">
          <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
              <lottie-player src="https://assets3.lottiefiles.com/private_files/lf30_oGbdoA.json" background="transparent" speed="1" style="width: 600px; height: 460px;" loop autoplay></lottie-player>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Schedule Guest Arrivals along with Covid Measures</a></h5>
                <p class="card-text">Imagine,
                  you invited your guests to host them for a few days. You would always like to ensure for both your family and other residents safety and so we are. Hence, by scheduling their arrival we will ready with the preventive measures that has to be taken before allowing them in.
                </p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
              <lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_J5NRAx.json" background="transparent" speed="1" style="width: 600px; height: 460px;" loop autoplay></lottie-player>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Schedule Sanitized and Contactless Deliveries</a></h5>
                <p class="card-text">We know , not everybody can dare to step out in these uncertain times.
                  Dont worry ,we heard you. You need not step out or get in contact with anybody to collect your deliveries.
                  We are here to collect and sterilise your deliveries before it reaches you.
                  Provide details of your deliveries and sit back.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
              <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_ihsy8p2a.json" background="transparent" speed="1" style="width: 600px; height: 460px;" loop autoplay></lottie-player>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Announcements and Notice</a></h5>
                <p class="card-text">We know you are busy,
                  We know you dont have time to socialise,
                  We know you can't notice everything that's going on around you,
                  That's why we bring you Notice board into your hands. Now know everything thats happening,happened and about to happen with our e-Notice board feature.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
              <lottie-player src="https://assets6.lottiefiles.com/private_files/lf30_GMRM4D.json" background="transparent" speed="1" style="width: 600px; height: 460px;" loop autoplay></lottie-player>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Book your amenities safely!</a></h5>
                <p class="card-text">We dont want your work to be delayed. Leave those old traditions to go out and find a maid or repair guy for yoursleves. We are here to help you. Now you can book maid, repair guys, carpenter etc in just one click.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Service Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.html">Contact us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="user_dashboard.php">Pay your bills</a></li>
              <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="user_dashboard.php">Notice Board</a></li>
              <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="user_dashboard.php">Amenities</a></li>
              <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="user_dashboard.php">Security Check</a></li>
              <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="user_dashboard.php">Register your compliant</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Our Developers</h4>
            <p>
            Mohit Kumar <br>
            Sahithi Priya<br>
            Nitesh Bharti<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Us</h3>
            <p>We are a group of students from SRM University AP, and this website was developed as a part of Hack the Mountains 2.0. To reach out to us please use contact us or you can follow us on our social media handles.</p>
            <div class="social-links mt-3">
              <a href="https://github.com/moit-bytes/SocietyAuditor" target="_blank" class="github"><i class="bx bxl-github"></i></a>
              <a href="https://www.linkedin.com/in/moitbytes/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>2021</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed using HTML, CSS, Javascript, Bootstrap, and Bulma
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>