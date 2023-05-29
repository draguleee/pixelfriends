<?php 
include 'session.php';
$users_active = ' class="active"';
include 'components/header.php';
?>

  <main id="main">
    <div class="container">
      <h1 class="text-center" style="padding-top: 120px;">"Users" Table</h1>
    </div>
    <div class="container" style="width: 50%;">
      <table class="table mt-5" style="border-bottom: 2px solid #DEE2E6">
        <thead>
          <tr>
            <th scope="col" class="text-center">No.</th>
            <th scope="col" class="text-center">Full Name</th>
            <th scope="col" class="text-center">Username</th>
            <th scope="col" class="text-center">E-mail</th>
            <th scope="col" class="text-center">Operations</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $query = "SELECT * FROM users ORDER BY id";
            $lines = mysqli_query($link, $query) or die("Eroare: " . mysqli_error($link));
            $i = 1;  //  $i este un contor care va fi incrementat în ciclul while
            while($rez = mysqli_fetch_assoc($lines)):
          ?>
          <tr>
            <th scope="row" class="text-center"><?= $i ?></th>
            <td class="w-70 text-center"><?= $rez['name'] ?></td>
            <td class="w-70 text-center"><?= $rez['user_name'] ?></td>
            <td class="w-70 text-center"><?= $rez['email'] ?></td>
            <td class="w-20 text-center">  
              <a href="forms/deleteUser.php?sterg=<?= $rez['id'] ?>">
              <i class="bi bi-trash" aria-hidden="true"></i></a>
            </td>
          </tr>
          <?php 
          $i++;
          endwhile;
          mysqli_close($link); 
          ?>
        </tbody>
      </table> 
    </div>
  </main>
</body>
</html>