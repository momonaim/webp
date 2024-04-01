<?php


if (isset ($_POST['sendMailButton'])) {
  $from = htmlspecialchars($_POST['fromEmail']); // Sanitize user input
  $to = "mepiger558@hisotyr.com"; // ici on ajout l email address
  $sub = $_POST['subject'];
  $msg = $_POST['message'];


  $fromAddress = "info@webp.com";

  $headers = 'From: ' . $from . ' <' . $fromAddress . '>' . "\r\n" .
    'Reply-To: ' . $from . ' <' . $fromAddress . '>' . "\r\n" .
    'Content-Type: text/html; charset=UTF-8';

  if (mail($to, $sub, $msg, $headers)) {
    echo "done sending";

  } else {
    echo "error sending";
  }
  $_SESSION['status'] = "Email sent successfully!";
  header('location:../contact.php');
}
?>