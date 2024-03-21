<?php
session_start();
include ('../connection/db.php');
if (isset ($_SESSION['rec_id'])) {
    echo $_SESSION['rec_id'];
    $recid = $_SESSION['rec_id'];
}
foreach ($_POST as $key => $val)
    echo $key . " " . $val . "<br/>";
//INSERTION
/*now post button press submit */
if (isset ($_GET['id'])) {	/* putting the values typed by super admin into post GV */
    $app_id = $_GET['id'];


    // Database connection
    $dsn = 'mysql:host=localhost;dbname=webp3';
    $username = 'root';
    $password = '';
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

    try {
        $pdo = new PDO($dsn, $username, $password, $options);
        echo 'Database connection established';
        // Insert JSON data into MySQL
        $query = "UPDATE `applied_jobs` SET `statut` = 'Approuved' WHERE `applied_jobs`.`app_id` = '$app_id'; ";

        $stmt = $pdo->prepare($query);
        $s = $stmt->execute();
        if ($s) {
            $sql = "select * FROM candidates, applied_jobs WHERE candidates.can_id = applied_jobs.can_id AND applied_jobs.app_id = '$app_id'";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                $email = $row['Email'];
                $from = "info@webp.com"; // Sanitize user input
                $to = $email;
                $sub = "Job Approved Successfuly";
                $msg = "Congratulations you have successfully approved";

                $fromAddress = "info@webp.com";

                $headers = 'From: ' . $from . ' <' . $fromAddress . '>' . "\r\n" .
                    'Reply-To: ' . $from . ' <' . $fromAddress . '>' . "\r\n" .
                    'Content-Type: text/html; charset=UTF-8';

                if (mail($to, $sub, $msg, $headers)) {
                    echo "done sending";
                } else {
                    echo "error sending";
                }
            }
            $_SESSION['status'] = "Approved successfuly";
            //echo "insertion successful";
            header('location: ../my_job.php');
            exit();
        } else {
            $_SESSION['status'] = "Unsuccessful";
        }

    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        exit();
    }

} else {
    echo 'Connection f';
}