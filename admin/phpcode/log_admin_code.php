<?php 
session_start();
include('../connection/db.php');

if (isset($_POST['submit'])){
$email=$_POST['email'];
 $pass=$_POST['pass'];

$query=mysqli_query($conn, "select * from admin_login where admin_email='$email' and admin_pass='$pass'");
if ($query) {
   // code...
}



if (mysqli_num_rows($query)>0){
  $data = mysqli_fetch_array($query);
  //$name = $data['first_name'];
  $_SESSION['id'] = $data['id'];
  $_SESSION['admin_email'] = $data['admin_email'];
  $_SESSION['admin_pass'] = $data['admin_pass'];
  $_SESSION['admin_username'] = $data['admin_username'];
  $_SESSION['first_name'] = $data['first_name'];
  $_SESSION['last_name'] = $data['last_name'];
  $_SESSION['admin_type'] = $data['admin_type'];
  //$_SESSION['first_name'] = $name;
    // code...

  header('location: ../admin_dashboard.php');
 exit();
  
}
else{
  
  echo "<script>alert('email or password incorrect, Please try again')</script>";
    header('location: ../admin_login.php');

}
}

?>


