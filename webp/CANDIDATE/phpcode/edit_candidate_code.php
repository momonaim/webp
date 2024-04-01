<?php 
session_start();
include('../../connection/db.php');

if(isset($_POST['submit']))
{
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $username=$_POST['username']; 
  $email=$_POST['email'];
  $password=$_POST['password'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $country=$_POST['country'];
  $zip=$_POST['zip'];
  $birth=$_POST['birth'];
  $gender=$_POST['gender'];
  $can_id=$_POST['id'];



    //now update if the user didnt upload an image
    if (($_FILES['image']['error'] === UPLOAD_ERR_NO_FILE) && $first_name !== '' && $last_name !== '' && $username !== '' && $email !== '' && $password !== '' && $phone !== '' && $address !== '' && $city !== '' && $country !== '' && $zip !== '' && $birth !== '' && $gender !== ''){
      echo "First Name: " . $first_name . "<br>";
echo "Last Name: " . $last_name . "<br>";
echo "Username: " . $username . "<br>";
echo "Email: " . $email . "<br>";
echo "Password: " . $password . "<br>";
echo "Phone: " . $phone . "<br>";
echo "Address: " . $address . "<br>";
echo "City: " . $city . "<br>";
echo "Country: " . $country . "<br>";
echo "Zip: " . $zip . "<br>";
echo "Birth: " . $birth . "<br>";
echo "Gender: " . $gender . "<br>";
echo "Candidate ID: " . $can_id . "<br>";
       $query=mysqli_query($conn, "UPDATE Candidates SET firstname = '$first_name', lastname = '$last_name', Email = '$email', password = '$password', Phone = '$phone', Address = '$address', City = '$city', Country = '$country', zipcode = '$zip', birth = '$birth', gender = '$gender', Username = '$username'
              WHERE can_id='$can_id'");
       if($query){
              $_SESSION['status'] = "Account Updated Successfully";

              $_SESSION['idd']=$can_id;
      header('location: ../edit_candidate.php');
      exit();

       }

    }elseif ($first_name !== '' && $last_name !== '' && $username !== '' && $email !== '' && $password !== '' && $phone !== '' && $address !== '' && $city !== '' && $country !== '' && $zip !== '' && $birth !== '' && $gender !== '') {
      // code...
    
      //the user updated the image
    





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
        $sql = "UPDATE Candidates SET image_name = '$imageName', image_data = '$imageData' WHERE can_id='$can_id'";
echo "s";
        if (mysqli_query($conn, $sql)) {
            $query=mysqli_query($conn, "UPDATE Candidates SET firstname = '$first_name', lastname = '$last_name', Email = '$email', password = '$password', Phone = '$phone', Address = '$address', City = '$city', Country = '$country', zipcode = '$zip', birth = '$birth', gender = '$gender', Username = '$username'
              WHERE can_id='$can_id'");
            echo "s";

       if($query){
              $_SESSION['status'] = "Account Updated Successfully";
echo "s";

              $_SESSION['idd']=$can_id;
      header('location: ../edit_candidate.php');
      exit();

       }
    
        } else {
            echo "Error uploading image: " . mysqli_error($conn);
        }
    }
}
else{

}
}
