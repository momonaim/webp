<?php 
session_start();

include('../connection/db.php');

$del=$_GET['del'];

$query=mysqli_query($conn, "delete from admin_login where id = '$del'");
if($query){
	

	$_SESSION['statusdel'] = "Admin with id $del deleted successfuly";
		echo "insertion successful";
	header('location: ../admin_restore.php');
		//exit();
	}
	else{
		$_SESSION['statusdel'] = "Unsuccessful";

		echo "unsuccessful insertion";
	}




 ?>