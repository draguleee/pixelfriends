<?php

require_once "session.php";
require_once "connect.php";
 
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST") {
 
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } 
    else{
        $username = trim($_POST["username"]);
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } 
    else{
        $password = trim($_POST["password"]);
    }
    
    if(empty($username_err) && empty($password_err)){
        $sql = "SELECT id, user_name, password FROM users WHERE user_name = ?";
        if($stmt = mysqli_prepare($link, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = $username;
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){         
                    mysqli_stmt_bind_result($stmt, $id, $username, $password);
                    if(mysqli_stmt_fetch($stmt)){
                      session_start();
                      $_SESSION["loggedin"] = true;
                      $_SESSION["id"] = $id;
                      $_SESSION["user_name"] = $username;      
                      header("location: home.php");
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($link);
}
?>

<?php
include 'components/header_index.php';
?>

    <!-- ======= Hero Section ======= -->
	<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background-image: url(assets/img/auth/login.gif);">
          	<div class="carousel-container">
          		<div class="carousel-content">
           			<h2 class="animate__animated animate__fadeInDown"> Welcome back! </h2>
           			<p class="animate__animated animate__fadeInUp"> 
					        We've missed you. Glad you returned!
           			</p>
             	<div>
            	<a href="#enter" class="btn-get-started animate__animated animate__fadeInUp scrollto"> Log Into your Account </a>
            </div>
					  </div>
				  </div>
			  </div>
		  </div>
	  </div>
  </section><!-- End Hero -->

	<main id="main">
		<section id="enter" class="about" style="background-color: #b0b0b0">
			<div class="container">
				<div class="d-flex justify-content-center">
					<div class="wrapper">
						<h1>Log In</h1>
						<?php 
              if(!empty($login_err)) {
               	echo '<div class="alert alert-danger">' . $login_err . '</div>';
              }        
          	?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
             	<br>
              <div class="form-group">
               	<label>Username</label>
               	<input type="text" name="username" placeholder="Username..." class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
               	<span class="invalid-feedback"><?php echo $username_err; ?></span>
              </div>          
              <br>
              <div class="form-group">
               	<label>Password</label>
               	<input type="password" name="password" placeholder="Password..." class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
               	<span class="invalid-feedback"><?php echo $password_err; ?></span>
              </div>          
              	<br><div class="form-group">
                <input type="submit" class="btn btn-primary form-control" value="Login">
              </div>          
							<br>
              <p> Don't have an account? <a href="signup.php">Sign Up</a>.
            </form>
					</div>
				</div>
			</div>
    </section><!-- End About Section -->
	</main>

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
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#about">About us</a></li>
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

</body>
</html>