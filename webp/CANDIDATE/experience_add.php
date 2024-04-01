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

        <form action="phpcode/experience_add_code.php" class="needs-validation" novalidate="" name="admin_form"
            id="admin_form" method="POST" enctype="multipart/form-data">


            <div class="card scroll4 border-yellow shadow-lg">
                <h5 class="card-header border-yellow text-center fs-2 bg-yellow"
                    style=" font-weight: bold; font-family: Passion One, sans-serif;">Add Experience</h5>
                <div class="card-body">
                    <div class="">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="company" class="form-label">Company</label>
                                <input type="text" class="form-control" id="company" name="company"
                                    placeholder="Company ..." value="" required>
                                <div class="invalid-feedback">
                                    Valid company is required.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="poste" class="form-label">Poste</label>
                                <input type="text" class="form-control" id="poste" name="poste" placeholder="Poste..."
                                    value="" required>
                                <div class="invalid-feedback">
                                    Valid Poste is required.
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
                            <hr class="mt-4">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control" required rows="4" cols="50"></textarea>
                            <div class="invalid-feedback">
                                Please enter Description.
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
<div class="clear col-12 m-3"></div>
</div>
<!-- ----------------------------------------- -->









<?php
include ('include/footer.php'); ?>