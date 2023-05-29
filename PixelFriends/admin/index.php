<?php  
include 'session.php'; 
$home_active = ' class="active"';
include 'components/header.php'; 
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background-image: url(../assets/img/slide/admin.gif);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"> Pixel Friends - Administrator </h2>
                <p class="animate__animated animate__fadeInUp"> 
                  This is the web application designed for managing Pixel Friends' database.
                </p>
                <div class="<?= $display_btcon ?>">
                  <a href="login.php" class="btn-get-started">Admin Log In</a>
                </div>
                <div  class="<?= $display_btdecon ?>">
                  <a href="logout.php" class="btn-get-started">Admin Log Out</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

  </main><!-- End #main -->

<?php
include 'components/footer.php';
?>

