<?php  

include "session.php";
$home_active = ' class="active"';
include 'components/header.php'; 

$username = $password = "";
$username_err = $password_err = $login_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST") {
 
    if(empty(trim($_POST["name"]))){
        $username_err = "Please enter username.";
    } 
    else{
        $username = trim($_POST["name"]);
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } 
    else{
        $password = trim($_POST["password"]);
    }
    
    if(empty($username_err) && empty($password_err)){
        $sql = "SELECT admin_id, name, password FROM admin WHERE name = ?";
        if($stmt = mysqli_prepare($link, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = $username;
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){         
                    mysqli_stmt_bind_result($stmt, $id, $username, $password);
                    if(mysqli_stmt_fetch($stmt)){
                      session_start();
                      $_SESSION["logat"] = true;
                      $_SESSION["admin_id"] = $id;
                      $_SESSION["name"] = $username;      
                      header("location: index.php");
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

  <main id="main">
	<section id="enter" style="padding-top: 240px; padding-bottom: 240px">
	  <div class="container">
		<div class="d-flex justify-content-center">
		  <div class="wrapper">
		    <h1>Admin Log In</h1>
			<?php 
              if(!empty($login_err)) {
               	echo '<div class="alert alert-danger">' . $login_err . '</div>';
              }        
          	?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <br>
              <div class="form-group">
               	<label>Admin Username</label>
               	<input type="text" name="name" placeholder="Username..." class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
               	<span class="invalid-feedback"><?php echo $username_err; ?></span>
              </div>          
              <br>
              <div class="form-group">
               	<label>Admin Password</label>
               	<input type="password" name="password" placeholder="Password..." class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
               	<span class="invalid-feedback"><?php echo $password_err; ?></span>
              </div>          
              	<br><div class="form-group">
                <input type="submit" class="btn btn-primary form-control" value="Login">
              </div>          
			  <br>
            </form>
		  </div>
		</div>
	  </div>
    </section><!-- End About Section -->
  </main>

<?php 
include 'components/footer.php';
?>