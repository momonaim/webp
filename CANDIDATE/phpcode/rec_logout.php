<?php 
session_start();
unset($_SESSION['rec_id']);
   header('location: ../../home/homenow.php');

?>