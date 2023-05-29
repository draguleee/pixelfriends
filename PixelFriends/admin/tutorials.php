<?php
  include 'session.php';
  $tutorials_active = ' class="active"';
  include 'components/header.php';
?>

  <main id="main">
    <div class="container">
      <h1 class="text-center" style="padding-top: 120px;">"Tutorials" Table</h1>
    </div>
    <div class="container" style="width: 100%">
      <table class="table mt-5" style="border-bottom: 2px solid #DEE2E6;">
        <thead>
          <tr>
            <th scope="col" class="text-center">No.</th>
            <th scope="col" class="text-center">Title</th>
            <th scope="col" class="text-center">Description</th>
            <th scope="col" class="text-center">Operations</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT * FROM tutorials ORDER BY id";
          $lines = mysqli_query($link, $query) or die("Eroare: " . mysqli_error($link));
          $i = 1;  //  $i este un contor care va fi incrementat în ciclul while
          while($rez = mysqli_fetch_assoc($lines)):
          ?>
          <tr>
            <th scope="row"><?= $i ?></th>
            <td class="w-40"><?= $rez['title'] ?></td>
            <td class="w-40"><?= $rez['description'] ?></td>
            <td class="w-20 text-center">
              <a href="forms/editTutorial.php?editez=<?= $rez['id'] ?>">
              <a href="forms/deleteTutorial.php?sterg=<?= $rez['id'] ?>">
              <i class="bi bi-trash" aria-hidden="true"></i></a>
            </td>
          </tr>
          <?php 
          $i++;
          endwhile; 
          ?>
        </tbody>
      </table> 
    </div>

    <div class="container" style="padding-top: 50px; padding-bottom: 50px;">
	    <div class="d-flex justify-content-center">
		    <div class="wrapper">
		      <h1 class="text-center">Tutorial Information</h1>
          <form method="post" action="forms/addTutorial.php"> 
            <div class="form-group">
              <br><input type="text" class="form-control" name="title" id="title" placeholder="Title...">
              <br><textarea class="form-control" name="description" id="description" placeholder="Description..."></textarea>
              <br><input type="text" class="form-control" name="address" id="address" placeholder="Link...">
              <br><input type="file" class="form-control" name="image" id="image">
              <br><input type="submit" class="form-control btn btn-primary" value="Submit">
            </div>          
          </form>
		    </div>
	    </div>
	  </div>
  </main>
</body>
</html>