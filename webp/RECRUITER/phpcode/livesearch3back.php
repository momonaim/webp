<?php 
include('../../connection/db.php');

//input coming from jquery ajax method as data option
if(isset($_POST['input'])){
	$input = $_POST['input'];
	$select1 = $_POST['select1'];
	$select2 = $_POST['select2'];

	//$query = "SELECT * FROM Company WHERE CompanyName LIKE '{$input}%'  && Industry='$select2'";

$query = "SELECT * FROM Company WHERE 1=1";

if (!empty($input)) {
    $query .= " AND CompanyName LIKE '{$input}%'";
}

if (!empty($select1)) {
    $query .= " AND Location = '$select1'";
}

if (!empty($select2)) {
    $query .= " AND Industry = '$select2'";
}
	$result = mysqli_query($conn, $query);

	if(mysqli_num_rows($result) > 0){

$cardCount = 0;

while ($row = mysqli_fetch_assoc($result)){
	$CompanyID = $row['CompanyID'];
	$CompanyName = $row['CompanyName'];
	$Location = $row['Location'];
	$Industry = $row['Industry'];

    // Check if the current card count is a multiple of 3
    if ($cardCount % 3 == 0) {
        // If so, start a new row
        echo '<div class="row">';
    }

?>
		<div class="col-lg-4 my-2 my-lg-3">
			<div class="card border-blue mb-3 scroll8 h-100 shadow-lg">
  <div class="card-header border-blue fs-4 fw-bold text-dark-subtle" ><?php echo $CompanyName ?> <span class="badge rounded-pill text-bg-danger">Danger</span>
</div>
  <div class="card-body text-primary pb-1">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-blue text-center fs-4 hover3" style=" font-weight: bold; font-family: Passion One, sans-serif;">APPLY NOW!</a>

  </div>
</div>
		</div>
<?php 

    // Increment the card count
    $cardCount++;

    // Check if the current card count is a multiple of 3 or if it's the last card
    if ($cardCount % 3 == 0 || $cardCount == mysqli_num_rows($result)) {
        // If so, close the row
        echo '</div>';
    }
}
	}else{
		echo "<h6> no data found</h6>";
	}
}



?>