<?php
session_start();

include('../../connection/db.php');

//INSERTION
/*now post button press submit */
if(isset($_POST['submit']))
{	/* putting the values typed by super admin into post GV */
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$companyname=$_POST['company'];
	$industry=$_POST['industry'];
	$website=$_POST['website'];
	$description=$_POST['description'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$country=$_POST['country'];
	$zip=$_POST['zip'];
	$foundation=$_POST['foundation'];
	
	$foundation_date_mysql_format = date('Y-m-d', strtotime($foundation));

    // Check if the username already exists
    $username_query = "SELECT * FROM Recruiters WHERE username = '$username'";
    $result_username = mysqli_query($conn, $username_query);
    
    // Check if the email already exists
    $email_query = "SELECT * FROM Recruiters WHERE email = '$email'";
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

	//insert query id auto increments and there is also a trigger for date of creation=NOW() and status=1
	$insert_query = "INSERT INTO Recruiters (email, username, password, companyname, industry, website, description, phone, address, city, country, zip_code, Foundation)
        VALUES ('$email', '$username', '$password', '$companyname', '$industry', '$website', '$description', '$phone', '$address', '$city', '$country', '$zip', '$foundation_date_mysql_format')";



	//run the insert query
	$insert_query_run = mysqli_query($conn, $insert_query);

	if($insert_query_run){

		//a session GV to show a success card
		$_SESSION['status'] = "Recruiter Account Created successfully";
		echo "insertion successful";
		header('location: ../sign_in.php');
		exit();
	}
	else{
		$_SESSION['status'] = "Unsuccessful";

		echo "unsuccessful insertion";
	}
}
}