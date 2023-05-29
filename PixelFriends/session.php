<?php

session_start();

if(isset($_SESSION['logat']) && $_SESSION['logat'] == true) {
    $nume = 'Hi, ' . $_SESSION['user_name'];
}

$home_active = "";
$tutorials_active = "";
$bestp_active = "";
$buyp_active = "";
$sellp_active = "";

?>

