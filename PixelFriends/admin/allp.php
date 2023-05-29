<?php 
include 'session.php';
$allp_active = ' class="active"';
include 'components/header.php';
?>

  <main id="main">
    <div class="container">
      <h1 class="text-center" style="padding-top: 120px;">"All Projects" Table</h1>
    </div>
    <div class="container" style="width: 100%">
      <table class="table mt-5" style="border-bottom: 2px solid #DEE2E6;">
        <thead>
          <tr>
            <th scope="col" class="text-center">No.</th>
            <th scope="col" class="text-center">Name</th>
            <th scope="col" class="text-center">Description</th>
            <th scope="col" class="text-center">User</th>
            <th scope="col" class="text-center">Date</th>
            <th scope="col" class="text-center">Operations</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT * FROM projects ORDER BY project_code";
          $lines = mysqli_query($link, $query) or die("Eroare: " . mysqli_error($link));
          $i = 1;  //  $i este un contor care va fi incrementat în ciclul while
          while($rez = mysqli_fetch_assoc($lines)):
          ?>
          <tr>
            <th scope="row" class="text-center"><?= $i ?></th>
            <td class="w-40 text-center"><?= $rez['name'] ?></td>
            <td class="w-40 text-center"><?= $rez['description'] ?></td>
            <td class="w-40 text-center"><?= $rez['user'] ?></td>
            <td class="w-40 text-center"><?= $rez['date'] ?></td>
            <td class="w-20 text-center">  
              <a href="forms/deleteProject.php?sterg=<?= $rez['project_code'] ?>">
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
  </main>
</body>
</html>