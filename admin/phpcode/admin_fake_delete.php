<?php 
session_start();
include('../connection/db.php');

$del=$_GET['del'];

$query=mysqli_query($conn, "UPDATE admin_login SET status=2 WHERE id='$del'");
if($query){
		//a session GV to show a success card
		$_SESSION['status'] = "Admin with id $del deleted successfuly";
		echo "insertion successful";
		header('location: ../admins.php');
		exit();
	}
	else{
		$_SESSION['status'] = "Unsuccessful";

		echo "unsuccessful insertion";
	}


 ?>