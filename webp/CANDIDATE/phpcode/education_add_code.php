<?php
session_start();
include ('../../connection/db.php');

if (isset ($_POST['submit'])) {
    $degree = $_POST['degree'];
    $diplome = $_POST['diplome'];
    $institution = $_POST['institution'];
    $debut = $_POST['debut'];
    $fin = $_POST['fin'];
    $can_id = $_POST['id'];


    try {
        // Connect to the database
        $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the SQL statement
        $stmt = $pdo->prepare("INSERT INTO `education` (`debut`, `fin`, `degree`, `diplome`, `institution`, `id_c`) VALUES (:debut, :fin, :degree, :diplome, :institution, :id_c)");
        //  	degree 	diplome 	institution
        // Bind parameters
        $stmt->bindParam(':debut', $debut);
        $stmt->bindParam(':fin', $fin);
        $stmt->bindParam(':degree', $degree);
        $stmt->bindParam(':diplome', $diplome);
        $stmt->bindParam(':institution', $institution);
        $stmt->bindParam(':id_c', $can_id);

        // Execute the query
        $stmt->execute();

        // If insertion is successful
        $_SESSION['status'] = "Education added successfully!";
        header('location:../education.php');

    } catch (PDOException $e) {
        // If an error occurs, catch it and display the error message
        $_SESSION['status'] = "Error: " . $e->getMessage();
    }

}