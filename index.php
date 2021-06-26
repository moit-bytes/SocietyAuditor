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

  <title>Society Auditor</title>
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

  <script src="https://use.fontawesome.com/34a6040e7e.js"></script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
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
          <li><a class="active " href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="admin_login.html" target="_blank">Admin Corner</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Background Slider Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Society Auditor</span></h2>
          <p class="animate__animated animate__fadeInUp">A Residential Management System for your whole society. Now maintain all your Society Records in one click. Just get started by knowing more about us.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Alluring User Interface</h2>
          <p class="animate__animated animate__fadeInUp">We keep things simple, straight and attractive. You take no time in exhausting our features, we gaurantee you.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!--COVID times made touching things a horrifying experience. Fear not to have important things get delivered to your house when you are using <b>Society Auditor</b> that requires only touching your phone screens for booking a delivery.-->
      <!--Have you faced the difficulty in picking up a right plumber or an electrician to your house at the right time? Say enough to your hiccups and book amenities like experienced plumbers, electricians and what not dedicated to your community.-->



      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Personalised Experience</h2>
          <p class="animate__animated animate__fadeInUp">
          <p>You can feel accustomed to the website just like you felt with your neigborhood. We credit our personalised website features for that secure experience of yours. </p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Background Section -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">

        <!-- Used BoxIcons -->
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxs-truck"></i></div>
              <h4 class="title"><a href="">Contactless Deliveries</a></h4>
              <p class="description">COVID times made touching things a horrifying experience. Fear not to have important things get delivered to your house when you are using <b>Society Auditor</b> that requires only touching your phone screens for booking a delivery.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bxs-credit-card"></i></div>
              <h4 class="title"><a href="">Easy Bill Payments</a></h4>
              <p class="description">
              <p>Give up all your struggles in catching up to your owner's schedule to pay rent. Society Auditor has got easy bill payments through complete payments or through installments </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Timely Services</a></h4>
              <p class="description">
              <p>Have you faced the difficulty in picking up a right plumber or an electrician to your house at the right time? Say enough to your hiccups and book amenities like experienced plumbers, electricians ,and what not, dedicated to your community.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bxs-check-shield"></i></div>
              <h4 class="title"><a href="">Confidential Conversations</a></h4>
              <p class="description">
              <p>From irritating neighbours to ill-maintained utilities, speak candidly about your problems with the authorities in confidentiality</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

        <div class="section-title">
          <h2>Features</h2>
          <p>Running an Auditor website is no simple endeavour. Running a reliable one like ours requires perfection to the core. Walk through the reasons to why you should trade in your data with us for yourself </p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_bewdaxyv.json" class="img-fluid" background="transparent" speed="1" loop autoplay></lottie-player>
          </div>
          <div class="col-md-7 pt-4">
            <h3>Hassle Free Data Maintenance</h3>
            <p class="font-italic">
              Data is the new oil. Messing up with that oil could start a huge bonfire. We are so well aware of this fact and we rightly deal with your data abiding by these strategies
            </p>
            <ul>
              <li><i class="bi bi-check"></i> We maintain a record of all your details to the finest granule that is divided into chunks on the basis of certain categories to enable appropriate data access.</li>
              <li><i class="bi bi-check"></i> We facilitate designation-based-authorization of the resident's credentials before allowing any control over the data being managed thus preventing external data breaches</li>
            </ul>
          </div>
        </div>

        <!--Any data that is stored about the user is used solely to improve user experience and all the private chats of the users remain unstored and private forever -->

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
          <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_7ShNC4.json" class="img-fluid" background="transparent" speed="1" loop autoplay></lottie-player>
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Easy Tracking Of Residential Costs</h3>
            <p class="font-italic">
              Maintaing log books for the expenditures is an old startegy of maintaining budgets. Excell sheets have defined a new way to organise expenditures. But websites like us are the newest
              way to track your your residential expenditures if not monthly expenditures.
            </p>
            <p>
              Since we keep a safe track of every product you buy and every penny you spend through our website. It becomes increasingly easy for you to quickly look up and see <b>when</b>, <b>how</b> and <b>what</b> you spent your money on.

            </p>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
          <lottie-player src="https://assets4.lottiefiles.com/private_files/lf30_p8LAfk.json" class="img-fluid" background="transparent" speed="1" loop autoplay></lottie-player>
          </div>
          <div class="col-md-7 pt-5">
            <h3>True Data Confidentiality On And Off The Screen</h3>
            <p>We have told you about the private chats users could make with the concerned society authorities right? Well guess what, they truely are private conversations.</p>

            <p>Just like how obsessed we are with providing you with best virual experience so are we with your privacy. Any data that is stored about the user is used solely to improve user experience and all the private chats of the users remain unstored and private forever</p>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
          <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_4qkb4ywv.json" class="img-fluid" background="transparent" speed="1" loop autoplay></lottie-player>
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Things You Might Forget But We May Not</h3>
            <p class="font-italic">
              So have you ever missed out on a cultural residential event? Or have you caused embarassement for your guests by not remembering their arrival? Don't feel bad it's not your fault. We can make it right though
            </p>
            <p>
              Users can inform about any guest arrivals or be notified about any residential events on their notice borads through our website. No more cramming up of the dates required.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

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
              <li><i class="bx bx-chevron-right"></i> <a href="services.php">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact us</a></li>
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