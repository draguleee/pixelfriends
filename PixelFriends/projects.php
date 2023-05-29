<main id="main">
  <section id="enter" class="about" style="background-color: #b0b0b0">
			<div class="container">
				<div class="d-flex justify-content-center">
					<div class="wrapper">
						<h1>Create your Bundle</h1>
            <form action="addProjects.php" method="post" enctype="multipart/form-data" role="form">
             	<br>
              <div class="form-group">
                <select class="custom-select" name="code" id="category">
		              <option selected>Alege categoria...</option>
	    	          <?php	while($rez = mysqli_fetch_assoc($trimit)): ?>
		              <option value="<?= $rez['code']?>"><?= $rez['category']?></option>
			            <?php	 endwhile; 	?>
		            </select>
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
  </main><!-- End #main -->