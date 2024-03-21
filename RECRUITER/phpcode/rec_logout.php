<?php 
session_start();
unset($_SESSION['rec_id']);
session_destroy(); // Destroy all data registered to a session

   header('location: ../../home/homenow.php');

?>