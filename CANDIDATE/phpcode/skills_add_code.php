<?php
session_start();
include ('../../connection/db.php');

if (isset ($_POST['submit'])) {
    $category = $_POST['category'];
    if (isset ($_POST['skills']) && is_array($_POST['skills'])) {
        $skills = implode(", ", $_POST['skills']);
    }
    $can_id = $_POST['id'];

    try {
        // Connect to the database
        $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the SQL statement
        $stmt = $pdo->prepare("INSERT INTO `skill` (`category`, `skill`, `id_c`) VALUES (:category, :skill, :id_c)");

        // Bind parameters
        $stmt->bindParam(':category', $category);
        $stmt->bindParam(':skill', $skills);
        $stmt->bindParam(':id_c', $can_id);

        // Execute the query
        $stmt->execute();

        // If insertion is successful
        $_SESSION['status'] = "Skills added successfully!";
        header('location:../skills.php');

    } catch (PDOException $e) {
        // If an error occurs, catch it and display the error message
        $_SESSION['status'] = "Error: " . $e->getMessage();
    }

}