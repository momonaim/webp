<?php 
include('../../connection/db.php');

//input coming from jquery ajax method as data option
if(isset($_POST['input'])){
	$input = $_POST['input'];
	$query = "SELECT * FROM Company WHERE Location LIKE '{$input}%'";

	$result = mysqli_query($conn, $query);

	if(mysqli_num_rows($result) > 0){
	
while ($row = mysqli_fetch_assoc($result)){
	$CompanyID = $row['CompanyID'];
	$CompanyName = $row['CompanyName'];
	$Location = $row['Location'];
	$Industry = $row['Industry'];

?>
<div class="row">
		<div class="col-lg-4 my-2 my-lg-3">
			<div class="card border-primary mb-3 scroll8">
  <div class="card-header"><?php echo $CompanyName ?></div>
  <div class="card-body text-primary">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
		</div>

		<div class="col-lg-4 my-2 my-lg-3">
			<div class="card border-primary mb-3 scroll8">
  <div class="card-header"><?php echo $Location ?></div>
  <div class="card-body text-primary">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
		</div>

		<div class="col-lg-4 my-2 my-lg-3">
			<div class="card border-primary mb-3 scroll8">
  <div class="card-header"><?php echo $Industry ?></div>
  <div class="card-body text-primary">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
		</div>
</div>
<?php 
}
	}else{
		echo "<h6> no data found</h6>";
	}
}



?>