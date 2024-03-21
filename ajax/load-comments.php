<?php
include('../admin/connection/db.php');

$nn = $_POST['commentnewcount'];

$sql = "SELECT * FROM comments LIMIT $nn";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {

	while ($row = mysqli_fetch_assoc($result)) {
		// code...
		echo "<p>";
		echo $row['author'];
		echo "<br>";
		echo $row['message'];
		echo "</p>";
	}
} else {
	echo "there are no comments";
}

?>