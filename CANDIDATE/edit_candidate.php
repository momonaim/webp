<?php 
include('session/session_check.php');
include('header.php');
include('magic_menu.php');
include('../connection/db.php');


 ?>



<style type="text/css">
.carousel-item {
    height: 25rem;
    background: #ffffff;
    position: relative;
    background-color: #ffffff;
    background-position: center;
}

#yy {
    height: 25rem;
    background: #ffffff;
    position: relative;
    background-color: #ffffff;
    background-position: cover;
}

.hovver:hover {
    background-color: #E4D611;
}

.profile-picture {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    overflow: hidden;
    border: 2px solid #ccc;
    /* Add border styling as desired */
}

.profile-picture img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    /* Ensure the image covers the entire container */
}
</style>





<link href="css/create_candidate.css" rel="stylesheet">

<?php  
  // $edit=$_GET['edit'];
  $edit=$_SESSION['can_id'];
if($_SESSION['idd']){
  $edit=$_SESSION['idd'];
}

$query= mysqli_query($conn, "select * from Candidates where can_id='$edit'");

while ($row=mysqli_fetch_array($query)){
  $Email=$row['Email'];
  $Username=$row['Username'];
  $password=$row['password'];
  $firstname=$row['firstname'];
  $lastname=$row['lastname'];
  $phone=$row['Phone'];
  $address=$row['Address'];
  $city=$row['City'];
  $country=$row['Country'];
  $zip=$row['zipcode'];
  $birth=$row['birth'];
  $gender=$row['gender'];
    $imageData = $row['image_data'];
}

?>


<div class=" container-lg col-md-12 col-lg-7 mt-4">
    <div class="daform2">

        <!-- success card stuff -->
        <?php 
        if (isset($_SESSION['status'])) {
            ?>
        <div class="alert alert-success d-flex align-items-center mt-4 container-lg col-md-12 col-lg-7" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </svg>
            <div>
                &nbsp;<?php echo $_SESSION['status'];?>
            </div>
        </div>
        <?php 
            // code...
            //now release the session variable
            unset($_SESSION['status']);
        }

         ?>
        <form action="phpcode/edit_candidate_code.php" class="needs-validation" novalidate="" name="admin_form"
            id="admin_form" method="POST" enctype="multipart/form-data">


            <div class="card scroll4 border-yellow shadow-lg">
                <h5 class="card-header border-yellow text-center fs-2 bg-yellow"
                    style=" font-weight: bold; font-family: Passion One, sans-serif;">EDIT YOUR ACCOUNT DETAILS</h5>
                <div class="card-body">
                    <div class="">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">First name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder=""
                                    value="<?php echo $firstname; ?>" required="">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder=""
                                    value="<?php echo $lastname; ?>" required="">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="Username" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" id="username" name="username"
                                        placeholder="Username" required="" value="<?php echo $Username; ?>">
                                    <div class="invalid-feedback">
                                        Your username is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="Email" class="form-label">Email <span
                                        class="text-body-secondary"></span></label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="you@example.com" required="" value="<?php echo $Email; ?>">
                                <div class="invalid-feedback">
                                    Please enter a valid email address.
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="address" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder=""
                                    required="" value="<?php echo $password; ?>">
                                <div class="invalid-feedback">
                                    Please enter your password.
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="address" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder=""
                                    required="" value="<?php echo $phone; ?>">
                                <div class="invalid-feedback">
                                    Please enter your phone number.
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder=""
                                    required="" value="<?php echo $address; ?>">
                                <div class="invalid-feedback">
                                    Please enter your address.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="address" class="form-label">City</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="" required=""
                                    value="<?php echo $city; ?>">
                                <div class="invalid-feedback">
                                    Please enter your city.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="address" class="form-label">Country</label>
                                <select class="form-select" id="country" name="country" required="">
                                    <option value="" disabled selected>Choose...</option>
                                    <?php
    $countries = array(
        "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", 
        "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan", 
        "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cabo Verde", 
        "Cambodia", "Cameroon", "Canada", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo", 
        "Costa Rica", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", 
        "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", 
        "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", 
        "Guyana", "Haiti", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", 
        "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kosovo", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", 
        "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Madagascar", "Malawi", "Malaysia", 
        "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", 
        "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", 
        "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Korea", "North Macedonia", "Norway", "Oman", "Pakistan", 
        "Palau", "Palestine", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", 
        "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", 
        "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", 
        "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Korea", "South Sudan", 
        "Spain", "Sri Lanka", "Sudan", "Suriname", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", 
        "Thailand", "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", 
        "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", 
        "Vatican City", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
    );
    foreach ($countries as $country_before) {
        echo "<option value='$country_before'";
        if ($country_before === $country)
          {echo ' selected';}
        echo ">$country_before</option>";
    }

    ?>

                                </select>
                                <div class="invalid-feedback">
                                    Please enter your country.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="address" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="" required=""
                                    value="<?php echo $zip; ?>">
                                <div class="invalid-feedback">
                                    Please enter your Zip.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="address" class="form-label">Date Of Birth</label>
                                <input type="date" class="form-control" id="birth" name="birth" placeholder=""
                                    required="" value="<?php echo $birth; ?>">
                                <div class="invalid-feedback">
                                    Please enter your Date Of Birth.
                                </div>
                            </div>
                            <hr class="mt-4">
                            <div class="col-sm-4">
                                <h5 class="mb-1">Gender</h5>
                                <div class="my-2">
                                    <div class="form-check">
                                        <input id="male" name="gender" type="radio" class="form-check-input" required=""
                                            value="Male" <?php echo ($gender == 'Male') ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="credit">male</label>
                                    </div>
                                    <div class="form-check">
                                        <input id="female" name="gender" type="radio" class="form-check-input"
                                            required="" value="Female"
                                            <?php echo ($gender == 'Female') ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="debit">Female</label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-8">
                                <h5 class="mb-1">Edit Photo</h5>
                                <div class="profile-picture">
                                    <?php
                                    // Output the image directly
                                    echo '<img src="data:image/jpeg;base64,' . base64_encode($imageData) . '" alt="Profile Picture">';
                                    ?>
                                </div>
                                <input type="file" class="form-control mt-3" id="file" name="image">


                            </div>
                            <input type="hidden" name="id" id="id" value="<?php echo $edit; ?>">
                        </div>
                        <hr class="my-4">
                        <input type="submit" class="w-100 fs-3 btn btn-blue hover3" placeholder="save"
                            value="CONFIRM EDITS" name="submit" id="submit"
                            style=" font-weight: bold; font-family: Passion One, sans-serif;">
                    </div>
                </div>
        </form>
    </div>
</div>

<!-- ----------------------------------------- -->











<div class="row mb-5"></div>
<div class="row mt-5 mb-3 scroll8">
    <h5 class="display-4 text-center">Companies That Hire From Us.</h5>
</div>
</div>

<div class="scroll">
    <div class="logos">
        <div class="logos-slide">
            <img class="bw" src="img/111.svg">
            <img class="bw" src="img/2.svg">
            <img class="bw" src="img/333.svg">
            <img class="bw" src="img/4.svg">
            <img class="bw" src="img/5.svg">
            <img class="bw" src="img/6.svg">
            <img class="bw" src="img/7.svg">
            <img class="bw" src="img/8.svg">
            <img class="bw" src="img/9.svg">
            <img class="bw" src="img/10.svg">
            <img class="bw" src="img/11.svg">
            <img class="bw" src="img/12.svg">
            <img class="bw" src="img/13.svg">
            <img class="bw" src="img/14.svg">
            <img class="bw" src="img/15.svg" style="width: 78px; height: auto;">
            <img class="bw" src="img/16.svg">
            <img class="bw" src="img/17.svg">
            <img class="bw" src="img/18.svg">
            <img class="bw" src="img/19.svg" style="width: 120px; height: auto;">
            <img class="bw" src="img/20.svg" style="width: 120px; height: auto;">
            <img class="bw" src="img/21.svg" style="width: 120px; height: auto;">
            <img class="bw" src="img/22.svg" style="width: 120px; height: auto;">
            <img class="bw" src="img/23.svg">
            <img class="bw" src="img/24.svg">
            <img class="bw" src="img/25.svg" style="width: 120px; height: auto;">
            <img class="bw" src="img/26.svg">

        </div>
        <div class="logos-slide">
            <img class="bw" src="img/111.svg">
            <img class="bw" src="img/2.svg">
            <img class="bw" src="img/333.svg">
            <img class="bw" src="img/4.svg">
            <img class="bw" src="img/5.svg">
            <img class="bw" src="img/6.svg">
            <img class="bw" src="img/7.svg">
            <img class="bw" src="img/8.svg">
            <img class="bw" src="img/9.svg">
            <img class="bw" src="img/10.svg">
            <img class="bw" src="img/11.svg">
            <img class="bw" src="img/12.svg">
            <img class="bw" src="img/13.svg">
            <img class="bw" src="img/14.svg">
            <img class="bw" src="img/15.svg" style="width: 78px; height: auto;">
            <img class="bw" src="img/16.svg">
            <img class="bw" src="img/17.svg">
            <img class="bw" src="img/18.svg">
            <img class="bw" src="img/19.svg" style="width: 120px; height: auto;">
            <img class="bw" src="img/20.svg" style="width: 120px; height: auto;">
            <img class="bw" src="img/21.svg" style="width: 120px; height: auto;">
            <img class="bw" src="img/22.svg" style="width: 120px; height: auto;">
            <img class="bw" src="img/23.svg">
            <img class="bw" src="img/24.svg">
            <img class="bw" src="img/25.svg" style="width: 120px; height: auto;">
            <img class="bw" src="img/26.svg">

        </div>
    </div>
</div>

<?php 
include('include/footer.php'); ?>