<?php
include ('session/session_check.php');
include ('header.php');
include ('../connection/db.php');

if (isset ($_GET['job'])) {
  $job_id = $_GET['job'];
  //used in the apply code to fetch the skills from thedatabase
  $_SESSION['job_id'] = $job_id;
} else {
  echo 'Job not found';
}

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
</style>
<hr class="my-4">
<div class="row mt-5 mb-3 scroll8">
    <h5 class="display-4 text-center">Apply Job.</h5>
</div>

<!-- fetch the attributs from the job_offer table where the job_id = value from $_GET -->
<?php
$sql = "SELECT * FROM job_offer WHERE job_id = $job_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!-- the apply now form -->
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
        <div class="card border-primary scroll4 shadow-lg">
            <h5 class="card-header text-center fs-2 border-blue bg-blue"
                style="color: white; font-weight: bold; font-family: Passion One, sans-serif;">
                <?php echo strtoupper($row['job_title']); ?>
            </h5>
            <div class="card-body ">
                <form action="phpcode/apply_now_code.php" method="POST">

                    <div class="row g-3">

                        <hr class="mt-4">
                        <div class="col-sm-6">
                            <h5 class="mb-1">Salary :</h5>
                            <div class="my-2">
                                <?php
                                echo $row['salary'] . '$';
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="mb-1">Created At :</h5>
                            <div class="my-2">
                                <?php
                                echo $row['creation_date'] . '$';
                                ?>
                            </div>
                        </div>
                        <hr class="mt-4">
                        <div class="col-12">
                            <h5 class="mb-1">Description :</h5>
                            <div class="my-2">
                                <?php
                                echo $row['job_description'] . '$';
                                ?>
                            </div>
                        </div>
                        <hr class="mt-4">
                        <div class="col-sm-6">
                            <h5 class="mb-1">Requirements :</h5>
                            <div class="my-2">
                                <?php
                                echo $row['requirements'] . '$';
                                ?>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <h5 class="mb-1">Benefits :</h5>
                            <div class="my-2">
                                <?php
                                echo $row['benefits'] . '$';
                                ?>
                            </div>
                        </div>


                    </div>
                    <hr class="my-4">
                    <input type="submit" class="w-100 py-1 fs-2 btn btn-blue hover3" placeholder="save" value="APPLY"
                        name="submit" id="submit" style=" font-weight: bold; font-family: Passion One, sans-serif;">
                </form>




            </div>

        </div>
    </div>
</div>







<?php
include ('footer.php');
?>