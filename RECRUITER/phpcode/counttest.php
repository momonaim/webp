<?php 
include('../../connection/db.php');
$showcheck = "SELECT COUNT(*) AS total_rows FROM job_offer JOIN Recruiters ON job_offer.rec_id = Recruiters.rec_id";
$showcheck_res = mysqli_query($conn, $showcheck);
if($showcheck_res){
    $row = mysqli_fetch_assoc($showcheck_res);
    $totalRows = $row['total_rows'];
}
echo $totalRows;
if($totalRows > 2){
	echo "dfsfs";}
 ?>
