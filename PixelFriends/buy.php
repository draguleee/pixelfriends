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

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/buy.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"> Buy </h2>
                <div>
                  <a href="#tutorials" class="btn-get-started animate__animated animate__fadeInUp scrollto"> Go to Market </a>
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

      <!-- ======= Best Pixel Art of the Month Section ======= -->
      <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2> All Pixel Art Collections </h2>
          <p> 
            Welcome to our favourite section! Please feel free to browse through the pixel art collections.
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
          $interproiect = "SELECT projects.project_code, projects.photo, projects.name, projects.price, 
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
                <p>$<?= $rezpro['price'] ?></p>
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

  <main id="main">

  </main><!-- End #main -->

<?php
include 'components/footer.php';
?>