<?php

session_start();

if(isset($_SESSION['logat']) && $_SESSION['logat'] == true) {
  $id = $_GET['sterg'];
  include '../../connect.php';

  $query = "DELETE FROM tutorials where id = $id";
  mysqli_query($link, $query);
  mysqli_close($link);

  header('Location: ../tutorials.php');
} else {
  //  Nu este logat!
  header('Location: ../index.php');
}
?>