<?php
include ('include/header.php');
include ('include/sidebar.php');

?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-4 pb-2 mb-1">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="rec_dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">My Job Offers</li>
        </ol>
    </nav>
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-2 mb-1 border-bottom">
        <h1 class="h2">My Job Offers</h1>

    </div>



    <div class="container-fluid"></div>

    <!-- success card stuff -->
    <?php
    if (isset ($_SESSION['status'])) {
        ?>
    <div class="alert alert-success d-flex mt-4 container-fluid" role="alert">
        <i class="bi bi-check-lg"></i>
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
    <!-- DATATABLE -->
    <div class=" container-fluid card mt-4 shadow-lg">

        <div class="card-body">

            <table id="example" class="table table-striped" style="width:100%">

                <thead>
                    <tr>
                        <style>
                        /* Specify the CSS class for the columns where you want to enable text wrapping */
                        .wrap-text {
                            /* Enable text wrapping */
                            white-space: normal !important;
                            word-wrap: break-word;
                        }
                        </style>
                        <th>#ID</th>
                        <th>Job Title</th>
                        <th>Job Type</th>
                        <th>Salary</th>
                        <th>Description</th>
                        <th>Requirements</th>
                        <th>Benefits</th>
                        <th>Candidates</th>

                    </tr>
                </thead>
                <tbody>

                    <?php
                    include ('connection/db.php');
                    $query = mysqli_query($conn, "SELECT * FROM `job_offer` WHERE rec_id = 7 and status = 1");
                    while ($row = mysqli_fetch_array($query)) {
                        ?>
                    <tr>
                        <td>
                            <?php echo $row['job_id']; ?>
                        </td>
                        <td>
                            <?php echo $row['job_title']; ?>
                        </td>
                        <td>
                            <?php echo $row['job_type']; ?>
                        </td>
                        <td>
                            <?php echo $row['salary'];
                                echo "$"; ?>
                        </td>
                        <td>
                            <?php echo $row['job_description']; ?>
                        </td>
                        <td>
                            <?php echo $row['requirements']; ?>
                        </td>
                        <td>
                            <?php echo $row['benefits']; ?>
                        </td>
                        <td>
                            <!-- Action -->
                            <div class="row">
                                <div class="btn-group">
                                    <a href="app.php?id=<?php echo $row['job_id']; ?>" class="btn btn-success"><span
                                            class="bi bi-person-fill-check"></span></a>


                                </div>
                            </div>
                        </td>

                    </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>#ID</th>
                        <th>Job Title</th>
                        <th>Job Type</th>
                        <th>Salary</th>
                        <th>Description</th>
                        <th>Requirements</th>
                        <th>Benefits</th>
                        <th>Candidates</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</main>
</div>
</div>
</div>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js"
    integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous">
</script>
<script src="js/dashboard.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>



<script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.0/js/responsive.bootstrap5.js"></script>

<script type="text/javascript">
new DataTable('#example', {
    responsive: true
});
</script>

</body>

</html>