<?php 
session_start();

include('../connection/db.php');

$del=$_GET['del'];
echo "fff";

$query=mysqli_query($conn, "delete from job_offer where job_id = '$del'");
echo "fff";
if($query){
	

	$_SESSION['status'] = "Job Offer with id $del deleted successfuly";
		echo "insertion successful";
	header('location: ../job_offers.php');
		//exit();
	}
	else{
		$_SESSION['status'] = "Unsuccessful";

		echo "unsuccessful insertion";
	}




 ?>