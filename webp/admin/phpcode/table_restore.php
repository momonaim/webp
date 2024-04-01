<?php
//restore url for AJAX
include('../connection/db.php');

$sql = "SELECT * FROM admin_login WHERE status=2";
$result = mysqli_query($conn, $sql);

//json format
//create an array
$result_array = [];

if(mysqli_num_rows($result)>0){

	foreach ($result as $row) {
		// code...
		array_push($result_array, $row);
	}
	//json encoding format
	header('content-type: application/json');
	echo json_encode($result_array);

}else{

}

?>