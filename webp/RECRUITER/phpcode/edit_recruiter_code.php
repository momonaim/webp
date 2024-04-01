<?php 
session_start();
include('../../connection/db.php');



//EDITING
if(isset($_POST['submit'])){
  //echo "wassup 2";
  $rec_id=$_POST['id'];
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
  
if ($rec_id !== '' && $email !== '' && $username !== '' && $password !== '' && $companyname !== '' && $industry !== '' && $website !== '' && $description !== '' && $phone !== '' && $address !== '' && $city !== '' && $country !== '' && $zip !== '' && $foundation !== '') {

  $query=mysqli_query($conn, "UPDATE Recruiters SET 
              email = '$email', 
              username = '$username', 
              password = '$password', 
              companyname = '$companyname', 
              industry = '$industry', 
              website = '$website', 
              description = '$description', 
              phone = '$phone', 
              address = '$address', 
              city = '$city', 
              country = '$country', 
              zip_code = '$zip', 
              foundation = '$foundation'
              WHERE rec_id='$rec_id'");
  echo $rec_id;


  if($query){
      //a session GV to show a success card
      $_SESSION['status'] = "Your Account Updated Successfuly";
      $_SESSION['idd']=$rec_id;
      header('location: ../edit_recruiter.php');
      exit();
  }
  else{
    $_SESSION['status']="your data is not updated";

      header('location: ../edit_recruiter.php');
  }
}

}
