<?php

require_once "connect.php";
 
$name = $username = $email = $password = $confirm_password = "";
$name_err = $username_err = $email_err = $password_err = $confirm_password_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if(empty(trim($_POST["name"]))) {
        $name_err = 'Please enter full name.';
    }
    elseif(strlen(trim($_POST["name"])) < 6) {
        $name_err .= 'Full name must exceed 6 characters.';
    }
    else {
        $name = trim($_POST["name"]);
    }
 
    if(empty(trim($_POST["username"]))) {
        $username_err .= 'Please enter a username.';
    } 
    elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err .= 'Username can only contain letters, numbers, and underscores.';
    } 
    else {
        $sql = "SELECT id FROM users WHERE user_name = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = trim($_POST["username"]);
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } 
            else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }
    }
    
    if(empty(trim($_POST["email"]))) {
        $email_err .= 'Please enter e-mail.';
    }
    else {
        $SQL = "SELECT * FROM users WHERE email = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            $param_email = trim($_POST["email"]);
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err .= 'This e-mail is already taken.';
                } else{
                    $email = trim($_POST["email"]);
                }
            } 
            else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } 
    elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } 
    else{
        $password = trim($_POST["password"]);
    }
    
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } 
    else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    if(empty($name_err) && 
            empty($username_err) && 
            empty($email_err) && 
            empty($password_err) && 
            empty($confirm_password_err)){
        $sql = "INSERT INTO users (name, user_name, email, password) VALUES (?, ?, ?, ?)";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "ssss", $param_name, $param_username, $param_email, $param_password);
            $param_name = $name;
            $param_username = $username;
            $param_email = $email;
            $param_password = $password; 
            if(mysqli_stmt_execute($stmt)){
                header("location: login.php");
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
          <div class="carousel-item active" style="background-image: url(assets/img/auth/signup.gif);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"> Nice to meet you! </h2>
                <p class="animate__animated animate__fadeInUp"> 
                  We are thrilled to see that you decided to join our community.
                  <br> Create an account and share your pixel art, support other users and, first of all, have lots of fun!
                </p>
                <div>
                  <a href="#create" class="btn-get-started animate__animated animate__fadeInUp scrollto"> Create an Account </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <section id="enter" class="about" style="background-color: #b0b0b0">
    <div class="container">
      <div class="d-flex justify-content-center">
        <div class="wrapper">
          <h1>Sign Up</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <br>  
              <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="name" placeholder="Full Name..." class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                <span class="invalid-feedback"><?php echo $name_err; ?></span>
              </div>     
              <br>
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="Username..." class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
              </div> 
              <br>    
              <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="email" placeholder="E-mail..." class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
              </div>   
              <br>  
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password..." class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
              </div>  
              <br>   
              <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" placeholder="Confirm Password..." class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
              </div>  
              <br>  
              <div class="form-group">
                <input style="margin-top: 20px;" type="submit" class="btn btnset btn-primary" value="Sign Up" href="login.php">
                <input style="margin-top: 20px;" type="reset" class="btn btn-secondary ml-2" value="Reset">
              </div>     
            </form>
            <br>
            <p>Already have an account? <a href="login.php">Log In</a>.</p>
          </div>  
        </div>  
      </div>
    </section><!-- End About Section -->

  <main id="main">


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