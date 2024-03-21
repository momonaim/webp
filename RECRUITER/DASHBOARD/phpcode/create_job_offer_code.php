<?php
session_start();
include ('../connection/db.php');
if (isset ($_SESSION['rec_id'])) {
	echo $_SESSION['rec_id'];
	$recid = $_SESSION['rec_id'];

}
//INSERTION
/*now post button press submit */
if (isset ($_POST['submit'])) {	/* putting the values typed by super admin into post GV */
	$job_title = $_POST['job_title'];
	$job_description = $_POST['description'];
	$job_type = $_POST['jobType'];
	$requirements = $_POST['requirements'];
	$benefits = $_POST['benefits'];
	$salary = $_POST['salary'];
	$fk_recruiter = $_SESSION['rec_id'];



	//insert query id auto increments and there is also a trigger for date of creation=NOW() and status=1
	$insert_query = "INSERT INTO job_offer (job_title, job_description, job_type, requirements, benefits, salary, rec_id)
        VALUES ('$job_title', '$job_description', '$job_type', '$requirements', '$benefits', '$salary', '$fk_recruiter')";


	//run the insert query
	//$insert_query_run = mysqli_query($conn, $insert_query);

	if ($conn->query($insert_query) === TRUE) {
		// Get the ID of the newly inserted row
		$job_id = $conn->insert_id;

		///////////////////////////////////////////////////
// Process form submission
		if (isset ($_POST['skill_name'], $_POST['skill_value'])) {
			$skillNames = $_POST['skill_name'];
			$skillValues = $_POST['skill_value'];

			// Insert skills into the database
			$successCount = 0;
			$totalCount = count($skillNames);

			for ($i = 0; $i < $totalCount; $i++) {
				$skillName = $conn->real_escape_string($skillNames[$i]);
				$skillValue = intval($skillValues[$i]);

				$sql = "INSERT INTO skills (skill_name, skill_value, rec_id, job_id) VALUES ('$skillName', $skillValue, $recid, $job_id)";

				if ($conn->query($sql) === TRUE) {
					$successCount++;
				}
			}

			echo "$successCount out of $totalCount skills added successfully";
		}

		////////////////////////////////////////////////////////////////
//a session GV to show a success card
		$_SESSION['status'] = "Job posted successfuly";
		//echo "insertion successful";
		header('location: ../post_job_offer.php');
		exit();
	} else {
		$_SESSION['status'] = "Unsuccessful";

		echo "unsuccessful insertion";
	}
}