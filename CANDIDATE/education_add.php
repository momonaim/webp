<?php
include ('session/session_check.php');
include ('header.php');
include ('magic_menu.php');
$_SESSION['idd'] = null;
include ('../connection/db.php');


?>





<?php
// $edit=$_GET['edit'];
$edit = $_SESSION['can_id'];
if ($_SESSION['idd']) {
    $edit = $_SESSION['idd'];
}
// echo $edit;

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

        <form action="phpcode/education_add_code.php" class="needs-validation" novalidate="" name="admin_form"
            id="admin_form" method="POST" enctype="multipart/form-data">


            <div class="card scroll4 border-yellow shadow-lg">
                <h5 class="card-header border-yellow text-center fs-2 bg-yellow"
                    style=" font-weight: bold; font-family: Passion One, sans-serif;">Add Education</h5>
                <div class="card-body">
                    <div class="">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="degree" class="form-label">Degree</label>
                                <select name="degree" class="form-select" required>
                                    <option value="">Select Degree</option>
                                    <option value="bac">Bac</option>
                                    <option value="bac2">Bac +2</option>
                                    <option value="bac3">Bac +3</option>
                                    <option value="bachelor">Bachelor</option>
                                    <option value="mst">Master</option>
                                    <option value="phd">Ph.D.</option>
                                    <!-- Add more options as needed -->
                                </select>
                                <div class="invalid-feedback">
                                    Valid degree is required.
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="col-sm-6">
                                <label for="diplome" class="form-label">Major</label>
                                <input type="text" class="form-control" id="diplome" name="diplome"
                                    placeholder="Major ..." value="" required>
                                <div class="invalid-feedback">
                                    Valid Major is required.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="institution" class="form-label">Institution</label>
                                <input type="text" class="form-control" id="institution" name="institution"
                                    placeholder="Institution..." value="" required>
                                <div class="invalid-feedback">
                                    Valid Institution is required.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="debut" class="form-label">Debut</label>
                                <input type="date" class="form-control" id="debut" name="debut" placeholder="Ex: 2019"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Date.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="fin" class="form-label">Fin</label>
                                <input type="date" class="form-control" id="fin" name="fin" placeholder="Ex: 2019"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Date.
                                </div>
                            </div>

                            <input type="hidden" name="id" id="id" value="<?php echo $edit; ?>">
                        </div>
                        <hr class="my-4">
                        <input type="submit" class="w-100 fs-3 btn btn-blue hover3" placeholder="save" value="Save"
                            name="submit" id="submit" style=" font-weight: bold; font-family: Passion One, sans-serif;">
                    </div>
                </div>
        </form>
    </div>
</div>
<div class="clear m-3"></div>
</div>

<!-- ----------------------------------------- -->









<?php
include ('include/footer.php'); ?>