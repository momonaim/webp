<?php
session_start();
include ('../../connection/db.php');

if (isset ($_POST['submit'])) {
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $query = mysqli_query($conn, "SELECT * FROM Candidates WHERE Email='$email' and password='$pass'");

  if (mysqli_num_rows($query) > 0) {
    $data = mysqli_fetch_array($query);
    //$name = $data['first_name'];
    $_SESSION['can_id'] = $data['can_id'];
    $_SESSION['browser_id'] = md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);
    //$_SESSION['first_name'] = $name;
    // code...

    header('location: ../../CANDIDATE/can_home.php');
    exit();

  } else {

    $_SESSION['statusc'] = "Incorrect Credentials.";
    header('location: ../../home/sign_in.php');

  }
}

?>