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
      <h1 class="logo"><a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"> Pixel Friends </a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">What We Offer</a></li>
          <li><a class="nav-link scrollto" href="#joinus">Join Us</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted" href="auth.php">Log In</a></li>
          <li><a class="getstarted" href="signup.php">Sign Up</a></li>
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
                <h2 class="animate__animated animate__fadeInDown"> Welcome to Pixel Friends! </h2>
                <p class="animate__animated animate__fadeInUp"> 
                  This is a place where everyone is welcome!
                  <br> It doesn't matter if you are just a visitor, a beginner pixel artist or an experieced one. Everyone's presence and work is very much welcome here!
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
                <h2 class="animate__animated animate__fadeInDown"> Wanna learn Pixel Art? </h2>
                <p class="animate__animated animate__fadeInUp"> 
                  We've got you covered with this one!
                  <br> We are offering all our users quality content through third-party platforms, such as YouTube, Udemy, Skillshare, Pixilart and many more.
                  <br> Join us today and you can immediately start learning pixel art or improving your skills.
                </p>
                <div>
                  <a href="signup.php" class="btn-get-started animate__animated animate__fadeInUp scrollto"> Start Learning </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/pixelart3.png);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"> Share your artwork & Support other artists </h2>
                <p class="animate__animated animate__fadeInUp"> 
                  Through our Buy & Sell programme, users can sell their artwork and bundles (such as wallpapers, watch faces, customization packs) or buy other artists' content.
                  <br> Join us today and start sharing your work with other artists & support your favourite artworks!
                </p>
                <div>
                  <a href="signup.php" class="btn-get-started animate__animated animate__fadeInUp scrollto"> Start Selling & Buying </a>
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

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3> A large community of passionate pixel artists, willing to share their wonderful creations. </h3>
              <div class="row">
                <div class="col-md-6 icon-box">
                  <i class="bi bi-share"></i>
                  <h4> Sharing is caring </h4>
                  <p> 
                    Whether you are a professional pixel artist, or you are at the beginning of becoming an experienced one, you can share your wonderful creations with the other pixel
                    artists in our community.
                    <br> To see some of the best pixel arts of the current month, visit <a class="nav-link scrollto" href="#portfolio">Best Pixel Art of the Month.</a> 
                  </p>
                </div>
                <div class="col-md-6 icon-box">
                  <i class="bi bi-cash-stack"></i>
                  <h4> Sell pixel art </h4>
                  <p> 
                    You can sell your pixel art creations through the <a class="nav-link scrollto" href="#faq">Buy & Sell programme.</a> Just access the Sell option, and publish the content
                    you want to sell.
                  </p>
                </div>
                <div class="col-md-6 icon-box">
                  <i class="bi bi-gift"></i>
                  <h4> Buy pixel art </h4>
                  <p> 
                    You can buy pixel art creations through the <a class="nav-link scrollto" href="#faq">Buy & Sell programme.</a> Just access the Buy option, and browse through a variety of
                    purchaseable content, such as phone or PC wallpapers, icons customization packs for Android and iOS, Apple Watch faces and many more!
                  </p>
                </div>
                <div class="col-md-6 icon-box">
                  <i class="bi bi-server"></i>
                  <h4> Connect with thousands of pixel artists worldwide </h4>
                  <p> 
                    Sign up to Pixel Friends or login with your existing account</p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="2754" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong> Users </strong> worldwide </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-easel2"></i>
              <span data-purecounter-start="0" data-purecounter-end="5290" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong> Pixel arts </strong> shared </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-hand-thumbs-up"></i>
              <span data-purecounter-start="0" data-purecounter-end="3208" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong> Positive reviews </strong> from users & visitors </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-info-circle"></i>
              <span data-purecounter-start="0" data-purecounter-end="2515" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong> People </strong> recommended this website </p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Counts Section -->

    <!-- ======= What We Offer Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>What We Offer</h2>
          <p>
            Before you join us, we invite you to read more about what we have to offer.  
          </p>
        </div>

        <div class="row">
        <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-person"></i></div>
            <h4 class="title"><a href="">Become a user</a></h4>
            <p class="description">
              Join our wonderful community by hitting the Sign Up button! 
              <br> By creating an account, you have instant access to our tutorials and third-party online drawing tools, you can sell your pixel arts and buy other user's pixel arts.
              <br> We are waiting for you!
            </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-mortarboard"></i></div>
            <h4 class="title"><a href="">Tutorials</a></h4>
            <p class="description">
              We provide a list with the most consistent tutorials, where you can learn everything you need to know, from the basics to the advanced stuff. 
              <br> Start learning pixel art, practice your acquired skills or become a professional with the provided tutorials.
            </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-trophy"></i></div>
            <h4 class="title"><a href="">Best Pixel Art of the Month</a></h4>
            <p class="description">
              a.k.a. Pixel Friends' Hall of Fame!
              <br> Try your luck in our monthly selection for the Top 9 Best Pixel Art of the Month, by posting your creations. Our team is actively watching all of the user's creations,
              so you might get lucky.
            </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-window-split"></i></div>
            <h4 class="title"><a href="">Platforms for creating Pixel Art</a></h4>
            <p class="description">
              We are supporting and promoting Pixel Art drawing tools, such as Aseprite, Pyxel Edit, Piskel, GIMP, Pixilart and Paint.net.
              <br> You can opt to invest in a pixel art drawing software, or choose a free alternative. It's all up to you!
            </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-cash-coin"></i></div>
            <h4 class="title"><a href="">Buy & Sell Programme</a></h4>
            <p class="description">
              Want to monetize your work, or support other user's art by buying them? No worries, we've got you covered!
              <br> Through the Buy & Sell programme, you can sell your pixel art to other users, or you can buy various pixel art content from other users.
              <br> Give it a try!
            </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-person-gear"></i></div>
            <h4 class="title"><a href="">At your service</a></h4>
            <p class="description">
              If you have a question regarding anything related to our platform, don't hesitate to contact us! 
              Our support team is always here to answer your every question and provide you the support you need.
            </p>
          </div>
        </div>

      </div>
    </section><!-- What We Offer Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://pyxeledit.com"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></a>
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.aseprite.org"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></a>
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.piskelapp.com"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></a>
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.pixilart.com"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></a>
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.gimp.org"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></a>
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://paint.net"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></a>
          </div>
        </div>
      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Join Us Section ======= -->
    <section id="joinus" class="why-us">
      <div class="container">
        <div class="section-title">
          <h2>Join Us</h2>
          <p>
            Are you convinced? Join us today to be a member of our great community!
            <br> Don't have an account? No problem, you can <a href="signup.php">create an account</a>. Once you have an account, it's smooth sailing!
            <br> If you already have an account, <a href="auth.php">log in</a> to your account. Don't miss anything!
          </p>
        </div>
      </div>
    </section><!-- End Join Us Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Got any questions? Reach us and we will help you the best we can.</p>
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