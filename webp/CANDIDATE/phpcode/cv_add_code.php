<?php
session_start();
include ('../../connection/db.php');

if (isset ($_POST['submit'])) {
    $email = explode("@", $_POST['Email']);
    $cv_name = $email[0] . '.pdf';
    $can_id = $_POST['id'];
    // Upload CV file
    $cv_file = $_FILES['cv'];
    $folder_path = '../uploads/';
    $file_path = $folder_path . $email[0] . '.pdf';
    // Save the PDF to the specified path
    // file_put_contents($file_path, $cv_file);
    move_uploaded_file($cv_file['tmp_name'], $file_path);

    // Optionally, you can check if the PDF was saved successfully
    if (file_exists($file_path)) {
        // echo "PDF saved successfully at: $file_path";

        try {
            // Connect to the database
            $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            // Insert form data into database with CV file path
            $sql = "UPDATE `candidates` SET `cv` = :cv WHERE can_id = :id_c;";

            // Prepare the SQL statement
            $stmt = $pdo->prepare($sql);
            // Bind parameters
            $stmt->bindParam(':cv', $cv_name);
            $stmt->bindParam(':id_c', $can_id);

            // Execute the query
            $stmt->execute();

            // If insertion is successful
            $_SESSION['status'] = "CV added successfully!";
            header('location:../cv.php');

        } catch (PDOException $e) {
            // If an error occurs, catch it and display the error message
            $_SESSION['status'] = "Error: " . $e->getMessage();
        }
    } else {
        echo "Error: Failed to save PDF";
    }



}