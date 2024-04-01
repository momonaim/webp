<?php
include ('session/session_check.php');
include ('header.php');
include ('magic_menu.php');
$_SESSION['idd'] = null;
include ('../connection/db.php');


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
        border: 1px solid #ccc;
    }

    .profile-picture img {
        width: 100%;
        height: 100%;
        object-fit: scale-down;
    }
</style>


<link href="css/create_candidate.css" rel="stylesheet">

<?php
// $edit=$_GET['edit'];
$edit = $_SESSION['can_id'];
if ($_SESSION['idd']) {
    $edit = $_SESSION['idd'];
}

$query = mysqli_query($conn, "select * from Candidates where can_id='$edit'");

while ($row = mysqli_fetch_array($query)) {
    $Email = $row['Email'];
    $Username = $row['Username'];
    $password = $row['password'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $phone = $row['Phone'];
    $address = $row['Address'];
    $city = $row['City'];
    $country = $row['Country'];
    $zip = $row['zipcode'];
    $birth = $row['birth'];
    $gender = $row['gender'];
    $imageData = $row['image_data'];
}


?>



<div class=" container-lg col-md-12 col-lg-7 mt-4">
    <div class="daform2">



        <div class="card scroll4 border-yellow shadow-lg">
            <h5 class="card-header border-yellow text-center fs-2 bg-yellow"
                style=" font-weight: bold; font-family: Passion One, sans-serif;">Your Profile</h5>
            <div class="card-body">
                <div class="">
                    <div class="row g-3">
                        <div class="profile-picture col-12">
                            <?php
                            // Output the image directly
                            echo '<img src="data:image/jpeg;base64,' . base64_encode($imageData) . '" alt="Profile Picture">';
                            ?>
                        </div>
                        <hr>
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">First name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder=""
                                value="<?php echo $firstname; ?>" disabled="">

                        </div>
                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder=""
                                value="<?php echo $lastname; ?>" disabled="">

                        </div>
                        <div class="col-sm-6">
                            <label for="Username" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="Username" disabled required="" value="<?php echo $Username; ?>">

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="Email" class="form-label">Email <span
                                    class="text-body-secondary"></span></label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="you@example.com" disabled required="" value="<?php echo $Email; ?>">

                        </div>

                        <div class="col-sm-6">
                            <label for="address" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="" disabled=""
                                value="<?php echo $phone; ?>">

                        </div>
                        <div class="col-sm-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder=""
                                disabled="" value="<?php echo $address; ?>">

                        </div>
                        <div class="col-sm-6">
                            <label for="address" class="form-label">City</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="" disabled=""
                                value="<?php echo $city; ?>">

                        </div>
                        <div class="col-sm-6">
                            <label for="address" class="form-label">Country</label>
                            <input type="text" class="form-control" id="country" name="country" placeholder=""
                                disabled="" value="<?php echo $country; ?>">

                        </div>
                        <div class="col-sm-6">
                            <label for="address" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="zip" name="zip" placeholder="" disabled=""
                                value="<?php echo $zip; ?>">

                        </div>
                        <div class="col-sm-6">
                            <label for="address" class="form-label">Date Of Birth</label>
                            <input type="date" class="form-control" id="birth" name="birth" placeholder="" disabled=""
                                value="<?php echo $birth; ?>">
                            <div class="invalid-feedback">
                                Please enter your Date Of Birth.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="address" class="form-label">Gender</label>
                            <input type="text" class="form-control" id="zip" name="zip" placeholder="" disabled=""
                                value="<?php echo $gender; ?>">

                        </div>
                    </div>

                </div>
                <hr class="my-4">
                <a type="submit" href="edit_candidate.php" class="w-100 fs-3 btn btn-blue hover3"
                    style=" font-weight: bold; font-family: Passion One, sans-serif;">Edit Profile</a>
                <!-- <input type="submit" class="w-100 fs-3 btn btn-blue hover3" placeholder="save" value="CONFIRM EDITS"
                        name="submit" id="submit" style=" font-weight: bold; font-family: Passion One, sans-serif;"> -->
            </div>
        </div>

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
include ('include/footer.php'); ?>