<?php 
session_start();

include('../connection/db.php');

$del=$_GET['del'];

$query=mysqli_query($conn, "delete from Candidates where can_id = '$del'");
if($query){
	

	$_SESSION['status'] = "Candidate with id $del deleted successfuly";
		echo "insertion successful";
	header('location: ../candidates.php');
		//exit();
	}
	else{
		$_SESSION['status'] = "Unsuccessful";

		echo "unsuccessful insertion";
	}




 ?>