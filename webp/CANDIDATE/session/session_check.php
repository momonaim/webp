<?php 
session_start();
if(!isset($_SESSION['can_id'])){
  header('location: ../home/homenow.php');
  exit();
}
?>