<?php
if (!isset ($_SESSION['rec_id'])) {
  header('location: ../../home/homenow.php');
  exit();
}
?>