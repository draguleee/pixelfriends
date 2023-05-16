<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Pixel Friends - All Tutorials </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      <h1 class="logo"><a href="index.php"> Pixel Friends </a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto active" href="#tutorials">Tutorials</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Best Pixel Art of the Month</a></li>
          <li><a class="nav-link scrollto" href="#faq">Buy & Sell</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav link" href="#">Log In</a></li>
          <li><a class="nav link" href="signup.php">Sign Up</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/tutorials.png);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"> Tutorials </h2>
                <p class="animate__animated animate__fadeInUp"> 
                  A list with the most useful tutorials, brought to you from multiple platforms, such as Udemy, Youtube, Skillshare, Pixilart, Adobe and many more.
                  <br> Happy Learning!
                </p>
                <div>
                  <a href="#tutorials" class="btn-get-started animate__animated animate__fadeInUp scrollto"> All Tutorials </a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Tutorials Section ======= -->
    <section id="tutorials" class="why-us">
        <div class="container justify-content-center">
            <div class="row portfolio-container">
                <?php
                    $query_tutorials = "SELECT id, title, description, link, image FROM tutorials";
                    $send_tutorials = mysqli_query($link, $query_tutorials) or die ("Eroare: " . mysqli_error($link));
                    while($res_tutorials = mysqli_fetch_assoc($send_tutorials)) : ?>
                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
	                    <div class="portfolio-info">
                            <div class="box">
                                <img src="assets/img/tutorials/<?= $res_tutorials['image'] ?>" class="img-fluid" alt="">
                                <span><?= $res_tutorials['id'] ?></span>
                                <h4><?= $res_tutorials['title'] ?></h4>
                                <p><?= $res_tutorials['description'] ?></p>
                                <p>Link: <a href="<?= $res_tutorials['link'] ?>" style="color:#000000"><?= $res_tutorials['title'] ?></a>
                            </div>
	                    </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section><!-- End Tutorials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3> Pixel Friends </h3>
              <p>
                15 Barabas Bela St. <br><br>
                <strong>Phone:</strong> +(40) 770 257 011 <br>
                <strong>Email:</strong> aandreid14@gmail.com <br>
              </p>
              <div class="social-links mt-3">
              <a href="https://twitter.com/?lang=ro" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.skype.com/ro/" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="https://www.skype.com/ro/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://en.wikipedia.org/wiki/Pixel_art">Pixel Art - Wikipedia</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://ultimatepopculture.fandom.com/wiki/Pixel_art">Pixel Art - Fandom</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.pinterest.com/smulkysa/pixel-art/">Pixel Art - Ideas</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Pixel Friend Newsletter</h4>
            <p>
              Subscribe to our newsletter to get the latest news about the best pixel arts of the month, best offers on your favourite pixel arts, and more!
            </p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Pixel Friends</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/imgprotection.js"></script>

</body>

</html>