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
        $query = "UPDATE `applied_jobs` SET `statut` = 'Rejected' WHERE `applied_jobs`.`app_id` = '$app_id'; ";

        $stmt = $pdo->prepare($query);
        $s = $stmt->execute();
        if ($s) {
            $_SESSION['status'] = "Rejected successfuly";
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