<?php
session_start();
include ('../../connection/db.php');

if (isset ($_POST['submit'])) {
    $company = $_POST['company'];
    $poste = $_POST['poste'];
    $debut = $_POST['debut'];
    $fin = $_POST['fin'];
    $description = $_POST['description'];
    $can_id = $_POST['id'];


    try {
        // Connect to the database
        $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the SQL statement
        $stmt = $pdo->prepare("INSERT INTO `experience` (`debut`, `fin`, `poste`, `company`, `description`, `id_c`) VALUES (:debut, :fin, :poste, :company, :description, :id_c)");

        // Bind parameters
        $stmt->bindParam(':debut', $debut);
        $stmt->bindParam(':fin', $fin);
        $stmt->bindParam(':poste', $poste);
        $stmt->bindParam(':company', $company);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':id_c', $can_id);

        // Execute the query
        $stmt->execute();

        // If insertion is successful
        $_SESSION['status'] = "Experience added successfully!";
        header('location:../experience.php');

    } catch (PDOException $e) {
        // If an error occurs, catch it and display the error message
        $_SESSION['status'] = "Error: " . $e->getMessage();
    }

}