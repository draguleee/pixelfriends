<?php 
  include 'connect.php';
  include 'session.php'; 
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Pixel Friends - Index </title>
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
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#tutorials">Tutorials</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Best Pixel Art of the Month</a></li>
          <li><a class="nav-link scrollto" href="#faq">Buy & Sell</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li style="color: white">Hello, <?= $_SESSION['user_name'] ?>!</li>
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
          <div class="carousel-item active" style="background-image: url(assets/img/slide/pixelart1.png);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"> Gathering all the pixel artists in one place </h2>
                <p class="animate__animated animate__fadeInUp"> 
                  This is a place where all pixel artists are welcome! 
                  <br> Whether you are a beginner pixel artist, or you already know your stuff around pixel art, you are welcome to join our community.
                </p>
                <div>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto"> About Pixel Friends </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/pixelart2.png);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"> Useful tutorials </h2>
                <p class="animate__animated animate__fadeInUp"> 
                  Whether if you are willing to improve your pixel art drawing skills or you're just getting started, we've got you covered! Browse through our vast collection of tutorials
                  and lessons, download your favourite pixel art drawing software, and you are good to go!
                </p>
                <div>
                  <a href="#tutorials" class="btn-get-started animate__animated animate__fadeInUp scrollto"> Go to Tutorials </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/pixelart3.png);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"> Sell & buy pixel art </h2>
                <p class="animate__animated animate__fadeInUp"> 
                  Whether you are trying to sell your pixel arts or you want to buy suitable content for your needs (wallpapers, customization packs for mobile platforms and many more),
                  we've got you covered once again! Through the Buy & Sell programme, you can sell your content or you can buy other creator's content, depending on your needs.
                  <br> You can sell or buy PC wallpapers, mobile wallpapers, Apple Watch faces, Android / iOS customization packs, GIFs and many more. 
                  <br> Good luck!
                </p>
                <div>
                  <a href="#faq" class="btn-get-started animate__animated animate__fadeInUp scrollto"> Go to Buy / Sell programme </a>
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
      <div class="container">

        <div class="section-title">
          <h2>Tutorials</h2>
          <p>
            Find the best tutorials to get started on creating your first Pixel Art or improve your acquired skills, depending on what level of creating Pixel Art you are currently on.
          </p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <span>01</span>
              <h4>Ultimate Pixel Art Tutorial</h4>
              <p>A short tutorial by Saultoons, explaining the basics of creating Pixel Art.</p>
              <p>The link for this tutorial can be found <a href="https://www.youtube.com/watch?v=lfR7Qj04-UA&t=3s&ab_channel=Saultoons" style="color:#000000">here</a>.
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>02</span>
              <h4>Pixel Art 101</h4>
              <p>A playlist tutorial containing 61 videos, by Pixel Pete (Peter Milko).</p>
              <p> The link for this tutorial can be found <a href="https://www.youtube.com/watch?v=51u9ZgrEThg&list=PLmac3HPrav-9UWt-ahViIZxpyQxJ2wPSH" style="color:#000000">here</a>.
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>03</span>
              <h4>Pixel Art Master Course</h4>
              <p>Learn everything there is about Pixel Art in an always growing course, by Mislav Majdandzic.</p>
              <p> The link for thiis tutorial can be found <a href="https://www.udemy.com/course/pixel-art-master-course/" style="color:#000000">here</a>.
            </div>
          </div>

        </div>

        <br>
        <div class="row">
            <a href="tutorials.php" style="text-align:center;"> View more Tutorials </a>
        </div>

      </div>
    </section><!-- End Tutorials Section -->

    <!-- ======= Best Pixel Art of the Month Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2> Best Pixel Art of the Month </h2>
          <p> 
            Welcome to our favourite section! Please feel free to browse through our favourite Pixel Art of the month.
            <br> You can buy a collection by accessing it. Enjoy!
          </p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active"> All </li>
              <?php
                $interogare = "SELECT category, filter FROM categories";
                //  Execut comanda SQL
                $trimit = mysqli_query($link, $interogare) or die("Eroare: " . mysqli_error($link));
                while($rez = mysqli_fetch_assoc($trimit)) :?>
                <li data-filter=".<?= $rez['filter'] ?>"> <?= $rez['category'] ?> </li>
              <?php endwhile; ?>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
          <?php
          $interproiect = "SELECT projects.project_code, projects.photo, projects.name, 
          categories.filter, categories.category FROM projects, categories WHERE 
          projects.code=categories.code";
          //  Execut comanda SQL
          $trimitcom = mysqli_query($link, $interproiect) or die("Eroare: " . mysqli_error($link));
          while($rezpro = mysqli_fetch_assoc($trimitcom)) : ?>
          <div class="col-lg-4 col-md-6 portfolio-item <?= $rezpro['filter'] ?>">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/<?= $rezpro['photo'] ?>" class="img-fluid" alt="">
	            <div class="portfolio-info">
	              <h4><?= $rezpro['name'] ?></h4>
	              <p><?= $rezpro['category'] ?></p>
	              <div class="portfolio-links">
		              <a href="assets/img/portfolio/<?= $rezpro['photo'] ?>" data-gall="portfolioGallery" class="venobox" title="<?= $rezpro['name'] ?>"><i class="bx bx-plus"></i></a>
		              <a href="details.php?project_code=<?= $rezpro['project_code'] ?>" title="More Details"><i class="bx bx-link"></i></a>
                </div>
	            </div>
            </div>
          </div>
        <?php endwhile; ?>
        </div>

      </div>
    </section><!-- End Best Pixel Arts of the Month Section -->


    <!-- ======= Buy & Sell Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Buy & Sell Pixel Art</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Buy & Sell Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3> Address </h3>
              <address> 15 Barabas Bela St., Arad, Romania </address>
              <address> 14A Alexandru Vaida Voevod St., Cluj-Napoca, Romania </address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3> Phone Number </h3>
              <p><a href="tel:+(40) 770 257 011"> +(40) 770 257 011 </a></p>
              <p><a href="tel:+(40) 721 383 589"> +(40) 721 383 589 </a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:aandreid14@gmail.com"> aandreid14@gmail.com </a></p>
              <p><a href="mailto:andredragu1699@gmail.com"> andredragu1699@gmail.com </a></p>
              <p><a href="mailto:andreeaioana.dragu@endava.com"> andreeaioana.dragu@endava.com </a></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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