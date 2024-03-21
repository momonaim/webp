<?php 
session_start();
include('../connection/db.php');

$res=$_GET['res'];

$query=mysqli_query($conn, "UPDATE admin_login SET status=1 WHERE id='$res'");
if($query){
		//a session GV to show a success card
		$_SESSION['status'] = "Admin with id $res restored successfuly";
		echo "insertion successful";
		header('location: ../admin_restore.php');
		exit();
	}
	else{
		$_SESSION['status'] = "Unsuccessful";

		echo "unsuccessful insertion";
	}


 ?>