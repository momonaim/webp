<?php 
session_start();

include('../connection/db.php');

// Retrieve the values passed via GET method
$value1 = $_GET['val1'];
$value2 = $_GET['val2'];
$value3 = $_GET['val3'];
$message = $_GET['message'];

$query=mysqli_query($conn, "INSERT INTO messages (message, rec_id, can_id, job_id) VALUES('$message', '$value1', '$value2', '$value3')");
if($query){
	

	$_SESSION['statusmessage'] = "Message has been sent successfuly";
	header('location: ../candidates_rank.php');
		//exit();
	}
	else{
		$_SESSION['statusmessage'] = "Unsuccessful";

		echo "unsuccessful insertion";
	}




 

 ?>