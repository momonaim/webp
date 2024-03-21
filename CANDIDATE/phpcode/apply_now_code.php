<?php
session_start();
include ('../../connection/db.php');

$can_id = $_SESSION['can_id'];
$job_id = $_SESSION['job_id'];
// Initialize score
// $score = 0;
// Process form submission
if (isset ($_POST['submit'])) {
    // Check if CV 
    $query = mysqli_query($conn, "SELECT * FROM Candidates where can_id = '$can_id'");
    while ($row = mysqli_fetch_array($query)) {
        $cv = $row['cv'];
        $email = $row['Email'];
    }
    if ($cv == 'noCV.pdf') {
        echo "Please add a CV to your profile";
    } else {
        //check if the candidate already applied to this job
        $query_check = "SELECT * FROM applied_jobs WHERE can_id = $can_id AND job_id = $job_id";

        $query_check_run = mysqli_query($conn, $query_check);
        // Check if the query returned any rows
        if (mysqli_num_rows($query_check_run) > 0) {
            // Query returned rows
            echo "<p>you already applied to this job</p>";
        } else {
            //insert the score into the applied_jobs table
            $query_score = "INSERT INTO applied_jobs (job_id, can_id) VALUES ('$job_id', '$can_id')";
            $query_score_result = mysqli_query($conn, $query_score);

            $from = "info@webp.com"; // Sanitize user input
            $to = $email;
            $sub = "Job Apply Successfuly";
            $msg = "You have successfully applied the job";

            $fromAddress = "info@webp.com";

            $headers = 'From: ' . $from . ' <' . $fromAddress . '>' . "\r\n" .
                'Reply-To: ' . $from . ' <' . $fromAddress . '>' . "\r\n" .
                'Content-Type: text/html; charset=UTF-8';

            if (mail($to, $sub, $msg, $headers)) {
                echo "done sending";
            } else {
                echo "error sending";
            }
            // Display total score
            // If insertion is successful
            $_SESSION['status'] = "Apply Job successfully!";
            header('location:../APPLY_NOW.php?job=' . $job_id);
        }
    }

}

unset($_SESSION['job_id']);


?>