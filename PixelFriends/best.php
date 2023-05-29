<?php 
  include 'connect.php'; 
  include 'session.php';  
  include 'components/header_home.php';
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background-image: url(assets/img/slide/best.png);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"> Best Pixel Art of the Month </h2>
                <p class="animate__animated animate__fadeInUp"> 
                  Our top 9 Best Pixel Arts of the Month, selected, promoted and curated by us.
                  <br> Enjoy!
                </p>
                <div>
                  <a href="#tutorials" class="btn-get-started animate__animated animate__fadeInUp scrollto"> See Our Selection </a>
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
    <section id="tutorials" class="why-us">
        <div class="container justify-content-center">
            <div class="row portfolio-container">
                <?php
                    $query_tutorials = "SELECT id, title, description, address FROM tutorials";
                    $send_tutorials = mysqli_query($link, $query_tutorials) or die ("Eroare: " . mysqli_error($link));
                    while($res_tutorials = mysqli_fetch_assoc($send_tutorials)) : ?>
                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
	                    <div class="portfolio-info">
                            <div class="box">
                                <span><?= $res_tutorials['id'] ?></span>
                                <h4><?= $res_tutorials['title'] ?></h4>
                                <p><?= $res_tutorials['description'] ?></p>
                                <p>Link: <a href="<?= $res_tutorials['address'] ?>" style="color:#000000"><?= $res_tutorials['title'] ?></a>
                            </div>
	                    </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section><!-- End Tutorials Section -->

  </main><!-- End #main -->

<?php
include 'components/footer.php';
?>