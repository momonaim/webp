<?php
session_start();

include ('../../connection/db.php');

//INSERTION
/*now post button press submit */
if (isset ($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $zip = $_POST['zip'];
    $birth = $_POST['birth'];
    $gender = $_POST['gender'];

    $birth_date_mysql_format = date('Y-m-d', strtotime($birth));


    // Check if the username already exists
    $username_query = "SELECT * FROM Candidates WHERE Username = '$username'";
    $result_username = mysqli_query($conn, $username_query);

    // Check if the email already exists
    $email_query = "SELECT * FROM Candidates WHERE Email = '$email'";
    $result_email = mysqli_query($conn, $email_query);

    if (mysqli_num_rows($result_username) > 0) {
        // Username already exists
        $_SESSION['status'] = "Username already exists.";
        //echo "insertion successful";
        header('location: ../create_candidate.php');
        //exit();
    } elseif (mysqli_num_rows($result_email) > 0) {
        // Email already exists
        $_SESSION['status'] = "Email already exists.";
        //echo "insertion successful";
        header('location: ../create_candidate.php');
        //exit();
    } else {




        $allowedExtensions = array("png", "jpeg", "jpg");
        $imageName = $_FILES["image"]["name"];
        $imageTempName = $_FILES["image"]["tmp_name"];
        $imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));

        // Check if the uploaded file has a valid extension
        if (!in_array($imageExtension, $allowedExtensions)) {
            echo "Error: Only PNG, JPEG, or JPG files are allowed.";
        } else {
            $imageData = addslashes(file_get_contents($imageTempName)); // Escape special characters

            // Insert image data into database
            $sql = "INSERT INTO Candidates (firstname, lastname, Username, Email, password, Phone, Address, City, Country, zipcode, birth, gender, image_name, image_data) 
        VALUES ('$first_name', '$last_name', '$username', '$email', '$password', '$phone', '$address', '$city', '$country', '$zip', '$birth_date_mysql_format', '$gender', '$imageName', '$imageData')";

            if (mysqli_query($conn, $sql)) {
                $_SESSION['status'] = "Candidate Account Created successfully";
                echo "insertion successful";
                // EMAIL FROM

                $from = "info@webp.com"; // Sanitize user input
                $to = $email;
                $sub = "Account Registered Successfuly";
                $msg = "You have successfully registered";

                $fromAddress = "info@webp.com";

                $headers = 'From: ' . $from . ' <' . $fromAddress . '>' . "\r\n" .
                    'Reply-To: ' . $from . ' <' . $fromAddress . '>' . "\r\n" .
                    'Content-Type: text/html; charset=UTF-8';

                if (mail($to, $sub, $msg, $headers)) {
                    echo "done sending";
                } else {
                    echo "error sending";
                }


                // /--------------------------------

                header('location: ../sign_in.php');
                exit();

            } else {
                echo "Error uploading image: " . mysqli_error($conn);
            }
        }
    }
}