<?php

session_start();

if(isset($_SESSION['logat']) && $_SESSION['logat'] == true) {
  $id = $_GET['sterg'];
  include '../../connect.php';

  $query = "DELETE FROM users where id = $id";
  mysqli_query($link, $query);
  mysqli_close($link);

  header('Location: ../users.php');
} else {
  //  Nu este logat!
  header('Location: ../index.php');
}
?>