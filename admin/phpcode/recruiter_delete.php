<?php 
session_start();

include('../connection/db.php');

$del=$_GET['del'];

$query=mysqli_query($conn, "delete from Recruiters where rec_id = '$del'");
if($query){
	

	$_SESSION['status'] = "Recruiter with id $del deleted successfuly";
		echo "insertion successful";
	header('location: ../recruiters.php');
		//exit();
	}
	else{
		$_SESSION['status'] = "Unsuccessful";

		echo "unsuccessful insertion";
	}




 ?>