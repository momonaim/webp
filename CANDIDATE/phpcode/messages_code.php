<?php 
session_start();
include('../../connection/db.php');

$id = $_SESSION['can_id'];

$query = mysqli_query($conn, "SELECT *
FROM messages m
INNER JOIN job_offer j ON m.job_id = j.job_id
INNER JOIN Recruiters r ON r.rec_id = m.rec_id
WHERE m.can_id =$id");

if (mysqli_num_rows($query) == 0) {
    echo '<div class="container text-center mt-4">
    <p class="display-5">WOW SUCH EMPTY!</p>
    <img src="img/empty.png" class="img-fluid" alt="Empty image">
</div>
';

}

/*SELECT *
    FROM messages m
    INNER JOIN Candidates c ON m.can_id = c.can_id
    INNER JOIN job_offer j  ON c.job_id = m.job_id
    INNER JOIN Recruiters r ON r.rec_id = m.rec_id
    WHERE c.status = 1 AND r.status = 1 AND j.status = 1 AND m.can_id=1
*/
//echo "<br>";
// Collect data in an array
$cards = array();
while ($row = mysqli_fetch_array($query)) {
    $message = $row['message'];
    $job_title = $row['job_title'];
    $companyname = $row['companyname'];
    $cards[] = array('job_title' => $job_title, 'message' => $message, 'companyname' => $companyname);
}

// Loop through the array in reverse order
for ($i = count($cards) - 1; $i >= 0; $i--) {
    $card = $cards[$i];
    $job_title = $card['job_title'];
    $message = $card['message'];
    $companyname = $card['companyname'];

?>
    <div class="card shadow-lg mb-3">
        <div class="card-header fs-4 fw-bold text-dark-subtle">
            <?php echo "JOB TITLE: $job_title"; ?>
        </div>
        <div class="card-body">
            <h5 class="card-title"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layers-fill" viewBox="0 0 16 16">
  <path d="M7.765 1.559a.5.5 0 0 1 .47 0l7.5 4a.5.5 0 0 1 0 .882l-7.5 4a.5.5 0 0 1-.47 0l-7.5-4a.5.5 0 0 1 0-.882z"/>
  <path d="m2.125 8.567-1.86.992a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882l-1.86-.992-5.17 2.756a1.5 1.5 0 0 1-1.41 0z"/>
</svg> <?php echo "$companyname .inc" ?></h5>
            <p class="card-text">message: <?php echo $message; ?></p>
        </div>
    </div>
<?php } ?>

