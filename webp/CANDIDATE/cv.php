<?php
include ('session/session_check.php');
include ('header.php');
include ('magic_menu.php');
include ('../connection/db.php');


?>





<?php
// $edit=$_GET['edit'];
$edit = $_SESSION['can_id'];

// echo $edit;

// $query = mysqli_query($conn, "select * from Candidates where can_id='$edit'");

$conn2 = new PDO("mysql:host=$servername;dbname=$database", $username, '');
$conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn2->prepare("SELECT * FROM `Candidates` WHERE can_id = '$edit'");
$stmt->execute();
$result = $stmt->fetchAll();

// while ($row = mysqli_fetch_array($query)) {
foreach ($result as $row) {
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
    $cv = $row['cv'];
    // $cv = 'EXAMPLE.pdf';

    $gender = $row['gender'];
}

?>



<div class=" container-lg col-md-12 col-lg-7 mt-4">
    <div class="daform2">

        <!-- success card stuff -->
        <?php
        if (isset ($_SESSION['status'])) {
            ?>
            <div class="alert alert-success d-flex align-items-center mt-4 container-lg col-md-12 col-lg-7" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </svg>
                <div>
                    &nbsp;
                    <?php echo $_SESSION['status']; ?>
                </div>
            </div>
            <?php
            // code...
            //now release the session variable
            unset($_SESSION['status']);
        }

        ?>

        <div class="card scroll4 border-yellow shadow-lg">
            <h5 class="card-header border-yellow text-center fs-2 bg-yellow"
                style=" font-weight: bold; font-family: Passion One, sans-serif;">Your CV</h5>
            <div class="card-body">
                <div class="">
                    <div class="row g-3">
                        <?php
                        try {

                            ?>
                            <div class="card scroll4 border-green shadow-lg">
                                <h5 class="card-header text-center fs-2">
                                    <?php echo ($cv == 'noCV.pdf') ? 'No CV' : 'My CV'; ?>
                                </h5>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <a type="submit" href="cv_preview.php?cv=<?= $cv ?>"
                                                class="w-100 fs-3 btn btn-info hover3 <?php echo ($cv == 'noCV.pdf') ? 'disabled' : ''; ?> "
                                                tabindex="-1" aria-disabled="true"
                                                style=" font-weight: bold; font-family: Passion One, sans-serif;">
                                                Show CV</a>
                                        </div>
                                        <div class="col-sm-6">
                                            <a type="submit" href="./uploads/<?= $cv ?>"
                                                class="w-100 fs-3 btn btn-blue hover3 <?php echo ($cv == 'noCV.pdf') ? 'disabled' : ''; ?> "
                                                tabindex="-1" aria-disabled="true"
                                                style=" font-weight: bold; font-family: Passion One, sans-serif;">Download
                                                CV
                                            </a>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <?php


                        } catch (PDOException $e) {
                            die ("Error: " . $e->getMessage());
                        }
                        ?>

                    </div>

                </div>
                <hr class="my-4">
                <a type="submit" href="cv_add.php" class="w-100 fs-3 btn btn-blue hover3"
                    style=" font-weight: bold; font-family: Passion One, sans-serif;">Add CV</a>
            </div>
        </div>

    </div>
</div>
</div>
<div class="clear m-3"></div>

<!-- ----------------------------------------- -->









<?php
include ('include/footer.php'); ?>