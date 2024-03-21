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
if (isset ($_POST['submit'])) {	/* putting the values typed by super admin into post GV */
    $job_title = $_POST['job_title'];
    $job_description = $_POST['description'];
    $job_type = $_POST['jobType'];
    $requirements = $_POST['requirements'];
    $benefits = $_POST['benefits'];
    $salary = $_POST['salary'];
    $exp = $_POST['exp'];

    $skill_sc = array(
        'Technical' => $_POST['Technical'],
        'Business' => $_POST['Business'],
        'SoftSkills' => $_POST['SoftSkills'],
        'Healthcare' => $_POST['Healthcare'],
        'Creative' => $_POST['Creative'],
        'Science' => $_POST['Science']
    );

    $edc_sc = array(
        'bac' => $_POST['bac'],
        'bac2' => $_POST['bac2'],
        'bac3' => $_POST['bac3'],
        'bachelor' => $_POST['bachelor'],
        'mst' => $_POST['mst'],
        'phd' => $_POST['phd']
    );

    // Convert array to JSON
    $skill = json_encode($skill_sc);
    $edc = json_encode($edc_sc);

    $fk_recruiter = $_SESSION['rec_id'];

    // print_r($edc);
    // print_r($skill);
    // print_r($exp);

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
        $insert_query = "INSERT INTO job_offer (job_title, job_description, job_type, requirements, benefits, exp_sc, edc_sc, skill_sc, salary, rec_id)
         VALUES ('$job_title', '$job_description', '$job_type', '$requirements', '$benefits', '$exp', '$edc', '$skill', '$salary', '$fk_recruiter')";

        $stmt = $pdo->prepare($insert_query);
        $s = $stmt->execute();
        if ($s) {
            $_SESSION['status'] = "Job posted successfuly";
            //echo "insertion successful";
            header('location: ../post_job.php');
            exit();
        } else {
            $_SESSION['status'] = "Unsuccessful";
        }

    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        exit();
    }

}