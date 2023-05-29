<?php
session_start();

function corectez($sir) {
  $sir = trim($sir);
  $sir = stripslashes($sir);
  $sir = htmlspecialchars($sir);
  return $sir;
}

if(isset($_SESSION['logat']) && $_SESSION['logat'] == true) {
  $eroare = '';

  if(empty($_POST['title'])) {
    $eroare .= '<p>Title cannot be empty!</p>';
  } else {
    $title =  corectez($_POST['title']);
  }

  if(empty($_POST['description'])) {
    $eroare .= '<p>Description cannot be empty!</p>';
  } else {
    $description =  corectez($_POST['description']);
  }

  if(empty($_POST['address'])) {
    $eroare .= '<p>Link cannot be empty!</p>';
  } else {
    $address =  corectez($_POST['address']);
  }

	if($eroare == '') {
	  include '../../connect.php';
	  $pinit = 'temp.png';
	  $comanda = "INSERT INTO tutorials (title, description, address) VALUES (?, ?, ?)";
	  $stm = mysqli_prepare($link, $comanda);
	  mysqli_stmt_bind_param($stm, 'ssss', $title, $description, $address, $pinit);
	  mysqli_stmt_execute($stm);
	  
	  mysqli_close($link);
	  //  Reincarc "pagina de administrare"
	  header('Location: ../tutorials.php');
	} 
	else {
	  echo "Eroare: " . $eroare;
	}
   }
   else {
	header('Location: ../index.php');  
   }
?>