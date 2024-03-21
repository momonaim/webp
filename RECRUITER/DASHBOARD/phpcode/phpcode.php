<?php 
session_start();
//database connection
include('../connection/db.php');
echo "qfgqfgqsgfqsgf";

//INSERTION
/*now post button press submit */
if(isset($_POST['submit']))
{
	echo "string";
	/* putting the values typed by super admin into post GV */
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$admin_type=$_POST['admin_type'];

	//insert query id auto increments and there is also a trigger for date of creation=NOW() and status=1
	$insert_query = "INSERT INTO admin_login (admin_email, admin_pass, admin_username, first_name, last_name, admin_type) 
                 VALUES ('$email', '$password', '$username', '$first_name', '$last_name', '$admin_type')";


	//run the insert query
	$insert_query_run = mysqli_query($conn, $insert_query);

	if($insert_query_run){

		//a session GV to show a success card
		$_SESSION['status'] = "Admin added successfuly";
		echo "insertion successful";
		header('location: ../admin_add.php');
		exit();
	}
	else{
		$_SESSION['status'] = "Unsuccessful";

		echo "unsuccessful insertion";
	}
}


//EDITING
if(isset($_POST['editbtn'])){
	//echo "wassup 2";

    $id=$_POST['id'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$admin_type=$_POST['admin_type'];
	
	if ($id !== '' && $email !== '' && $username !== '' && $password !== '' && $first_name !== '' && $last_name !== '' && $admin_type !== '') {

	$query=mysqli_query($conn, "UPDATE admin_login SET 
              admin_email = '$email', 
              admin_username = '$username', 
              admin_pass = '$password', 
              first_name = '$first_name', 
              last_name = '$last_name', 
              admin_type = '$admin_type'
              WHERE id='$id'");


	if($query){
			//a session GV to show a success card
			$_SESSION['status'] = "Admin Updated Successfuly";
			$_SESSION['idd']=$id;
			header('location: ../admin_edit.php');
			exit();
	}
	else{
		$_SESSION['status']="your data is not updated";

			header('location: ../admins_edit.php');
	}
}

}





 ?>
