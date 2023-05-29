  <?php
    include 'components/header_home.php';
  ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/sell.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"> Sell </h2>
                <div>
                  <a href="#tutorials" class="btn-get-started animate__animated animate__fadeInUp scrollto"> Create your Bundle </a>
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
  </section>

  <main id="main">
    <section id="enter" class="about" style="background-color: #b0b0b0">
			<div class="container">
				<div class="d-flex justify-content-center">
					<div class="wrapper">
						<h1>Create your Bundle</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
             	<br>
              <div class="form-group">
                <select class="form-control custom-select" name="code" id="category">
		              <option selected>Choose category...</option>
	    	          <?php	while($rez = mysqli_fetch_assoc($trimit)): ?>
		              <option value="<?= $rez['code']?>"><?= $rez['category']?></option>
			            <?php	 endwhile; 	?>
		            </select>
              </div>          
              <br>
              <div class="form-group">
               	<input type="text" name="name" placeholder="Project Name..." class="form-control">
               	<span class="invalid-feedback"><?php echo $password_err; ?></span>
              </div>          
              <br>
              <div class="form-group">
                <input type="file" class="form-control custom-file-input" name="photo" id="photo">
					      <label class="custom-file-label" for="foto">Choose Main Photo</label>
              </div>       
              <div class="form-group">
                <input type="file" class="form-control custom-file-input" name="img_1" id="img_1">
					      <label class="custom-file-label" for="img_1">First Photo</label>
              </div> 
              <div class="form-group">
                <input type="file" class="form-control custom-file-input" name="img_2" id="img_2">
					      <label class="custom-file-label" for="img_2">Second Photo</label>
              </div> 
              <div class="form-group">
                <input type="file" class="form-control custom-file-input" name="img_3" id="img_3">
					      <label class="custom-file-label" for="img_3">Third Photo</label>
              </div> 
              <br>
              <div class="form-group">
                <input type="text" class="form-control" name="title" id="title" placeholder="Title...">
              </div> 
              <br>
              <div class="form-group">
                <textarea class="form-control" name="description" id="description" placeholder="Description..."></textarea>
              </div> 
              <br>
              <div class="form-group">
                <input type="text" class="form-control" name="user" id="user" placeholder="User...">
              </div> 
              <br>
              <div class="form-group">
                <input type="date" class="form-control" name="date" id="date" placeholder="Date...">
              </div> 
              <br>
              <div class="form-group">
                <input type="text" class="form-control" name="link" id="link" placeholder="Link...">
              </div> 
              <br>
              <div class="form-group">
                <input type="text" class="form-control" name="price" id="price" placeholder="Price...">
              </div>        
              <br>
                <div class="form-group">
                <input type="submit" class="btn btn-primary form-control" value="Create Bundle">
              </div>  
            </form>
					</div>
				</div>
			</div>
    </section><!-- End About Section -->
  </main><!-- End #main -->

<?php
include 'components/footer.php';
?>