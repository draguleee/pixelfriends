<?php 

session_start();

if(isset($_SESSION['logat']) && $_SESSION['logat'] == true) {
  $nume = 'Hi, ' . $_SESSION['name'];
  $display_btcon = "d-none";   //  Butonul Conectare nu va fi vizibil
  $display_btdecon = "d-block";   //  Butonul Deonectare va fi vizibil
} 
else {
  $nume = 'Logged out';
  $display_btcon = "d-block";  //  Butonul Conectare va fi vizibil
  $display_btdecon = "d-none";   //  Butonul Deonectare nu va fi vizibil
  $display_list = "d-none";
}

$home_active = "";
$tutorials_active = "";
$bestp_active = "";
$allp_active = "";
$users_active = "";

include '../connect.php';
?>