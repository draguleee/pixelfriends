<?php
   session_start();
   if (isset($_SESSION['conectat']))
	{
		include 'connect.php';
		$interogare = "SELECT code, category FROM categories";
		$trimit = mysqli_query($link, $interogare) or die("Eroare: " . mysqli_error($link));
	}
	else {
		header('Location: sell.php');  
	}
?>