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

  <title>About Us</title>
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
          <li><a class="active " href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="admin_login.html" target="_blank">Admin Corner</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About Us</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>About Us</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_fclga8fl.json" class="img-fluid" background="transparent" speed="1" loop autoplay></lottie-player>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Social Auditor Developers</h3>
            <p class="font-italic">
              Our mission is to facilitate the staff-residents interactions and to maintain resident blocks and security effortlessly.
              So that people in any residential community could make use of this website effortlessly.<br> <br>
              <strong>This website mainly deals with all the problems related to</strong>
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> Basic Amenities</li>
              <li><i class="bi bi-check2-circle"></i> Bill payments</li>
              <li><i class="bi bi-check2-circle"></i> Security</li>
              <li><i class="bi bi-check2-circle"></i> Announcement details</li>
              <li><i class="bi bi-check2-circle"></i> Delivery orders</li>
              <li><i class="bi bi-check2-circle"></i> Complaint Box</li>
              <li><i class="bi bi-check2-circle"></i> Emergency Services.</li>
              <li><i class="bi bi-check2-circle"></i> Guest Arrivals, etc</li>
            </ul>
            <p>
              <strong>Our Story</strong> <br>

              The best part of this is to see how efficiently people are gonna use this website to meet their needs.

              Here, the members of this group discussed and developed this website to alter the necessity of face to face meet during these tough times and also to support the residents to deal with their maximum number of problems related to the society.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Our Skills Section ======= -->
    <section class="skills" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Technical Stack</h2>
          <p>Below is a statistical analysis of the technical stuffs we used in our project.</p>
        </div>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">HTML <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">CSS <i class="val">95%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">JavaScript <i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100">
              <span class="skill" target="_blank" href="user_dashboard.php" > My SQL <i class="val">94%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">PHP <i class="val">82%</i></span>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Skills Section -->

    <!-- ======= Tetstimonials Section ======= -->
    <section class="testimonials" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Our Developers</h2>
          <p>Thanks goes to these wonderful people who made this project a success!!</p>
        </div>

        <div class="testimonials-carousel swiper-container">
          <div class="swiper-wrapper">
            <div class="testimonial-item swiper-slide">
              <lottie-player src="https://assets4.lottiefiles.com/private_files/lf30_WdTEui.json" class="testimonial-img" background="transparent" speed="1" style="width: 500px; height: 300px;" loop autoplay></lottie-player>
              <h3>Mohit Kumar</h3>
              <h4>Frontend/Backend developer</h4>
            </div>

            
            <div class="testimonial-item swiper-slide">
              <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_n8ll1lbc.json" class="testimonial-img" background="transparent" speed="1" style="width: 500px; height: 300px;" loop autoplay></lottie-player>
              <h3>Sahithi Priya</h3>
              <h4>Web developer and AWS Practitioner </h4>
            </div>

            <div class="testimonial-item swiper-slide">
              <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_NjRqYM.json" class="testimonial-img" background="transparent" speed="1" style="width: 500px; height: 300px;" loop autoplay></lottie-player>
              <h3>Nitesh Bharti</h3>
              <h4>Database Engineer and Data Analyst</h4>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Ttstimonials Section -->

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