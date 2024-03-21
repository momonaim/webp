<?php

@include '../../connection/db.php';

session_start();
// foreach ($_SESSION as $key => $val)
//     echo $key . " " . $val . "<br/>";
// if (!isset($_SESSION['logged'])) {

//     echo '<script>alert("please log in");
//     window.location.href = "../home/login.php";
//     </script>';
// } elseif ($_SESSION['role'] != 'recruteur') {
//     echo '<script>alert("you are not a recruteur");
//     window.location.href = "../";
//     </script>';
// }

// include '..includes/header.php';

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar With Bootstrap</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="sidebar.css">

</head>

<body>
    <div class="wrapper">
        <?php include 'includes/sidebar.php' ?>


        <?php
        $recid = $_SESSION['rec_id'];
        // include ('includes/config.php');
        
        $sql = "SELECT COUNT(*) AS count
            FROM job_offer j
            INNER JOIN Recruiters r ON r.rec_id = j.rec_id
            WHERE j.status = 1";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $jcount = $row['count']; // Store count as data value
            }
        } else {
            // If no rows found, store 0 as data value
        }

        $sql2 = "SELECT COUNT(*) AS count
            FROM Candidates c
            INNER JOIN applied_jobs a ON c.can_id = a.Can_id
            INNER JOIN job_offer j ON a.Job_id = j.job_id
            WHERE c.status = 1 AND j.rec_id = $recid";
        $result2 = $conn->query($sql2);

        if ($result2->num_rows > 0) {
            while ($row = $result2->fetch_assoc()) {
                $ccount = $row['count']; // Store count as data value
            }
        } else {
            // If no rows found, store 0 as data value
        }


        ?>


        <main class="container-fluid shadow-lg px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>

            </div>
            <div class="container px-3 card mt-4 shadow-lg">


                <h2> &nbsp;</h2>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <div class="card text-bg-primary text-center h-100">
                            <div class="card-header"><b>Current Candidates</b></div>
                            <div class="card-body">
                                <h2 class="card-title">
                                    <?php echo $ccount; ?>
                                </h2>
                                <a href="candidates.php" class="btn btn-outline-light"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-person-fill-add" viewBox="0 0 16 16">
                                        <path
                                            d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                        <path
                                            d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4" />
                                    </svg>&nbsp;Candidates</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card text-bg-primary text-center h-100">
                            <div class="card-header"><b>Current Job Offers</b></div>
                            <div class="card-body">
                                <h2 class="card-title">
                                    <?php echo $jcount; ?>
                                </h2>
                                <a href="my_job_offers.php" class="btn btn-outline-light btn-block"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5" />
                                        <path
                                            d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85z" />
                                    </svg> &nbsp;My Job Offers</a>

                            </div>
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <div class="card-header">
                                Current Candidates
                            </div>
                            <div class="card-body">
                                <table id="example" class="table display nowrap table-striped wrap-text"
                                    style="width:100%">

                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Job Title</th>

                                            <th>address</th>
                                            <th>city</th>
                                            <th>country</th>
                                            <th>zipcode</th>
                                            <th>birth</th>
                                            <th>gender</th>
                                            <th>registrationdate</th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        // include ('connection/db.php');
                                        $query = mysqli_query($conn, "SELECT *
FROM Candidates c
INNER JOIN applied_jobs a ON c.can_id = a.can_id
INNER JOIN job_offer j ON a.Job_id = j.job_id
WHERE c.status = 1 AND j.rec_id = $recid");
                                        while ($row = mysqli_fetch_array($query)) {
                                            ?>
                                        <tr>
                                            <td>
                                                <?php echo $row['can_id']; ?>
                                            </td>

                                            <td>
                                                <?php echo $row['Email']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['Username']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['firstname']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['lastname']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['job_title']; ?>
                                            </td>

                                            <td>
                                                <?php echo $row['Address']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['City']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['Country']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['zipcode']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['birth']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['gender']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['registrationdate']; ?>
                                            </td>


                                        </tr>

                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Job Title</th>

                                            <th>address</th>
                                            <th>city</th>
                                            <th>country</th>
                                            <th>zipcode</th>
                                            <th>birth</th>
                                            <th>gender</th>
                                            <th>registrationdate</th>

                                        </tr>
                                    </tfoot>
                                </table>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <div class="card-header">
                                Current Job Offers

                            </div>
                            <div class="card-body">

                                <table id="example2" class="table table-striped display nowrap" style="width:100%">

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
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        // include ('connection/db.php');
                                        $query = mysqli_query($conn, "SELECT *
    FROM job_offer j
    INNER JOIN Recruiters r ON r.rec_id = j.rec_id
    WHERE j.status = 1");
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
                                        </tr>
                                    </tfoot>
                                </table>


                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="container px-4 py-0" id="icon-grid">
                        <h2 class="pb-2 border-bottom">some kind of guide abt the sidebar</h2>

                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
                            <div class="col d-flex align-items-start">
                                <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <use xlink:href="#calendar3"></use>
                                </svg>
                                <div>
                                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
                                    <p>Paragraph of text beneath the heading to explain the heading.</p>
                                </div>
                            </div>
                            <div class="col d-flex align-items-start">
                                <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <use xlink:href="#calendar3"></use>
                                </svg>
                                <div>
                                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
                                    <p>Paragraph of text beneath the heading to explain the heading.</p>
                                </div>
                            </div>
                            <div class="col d-flex align-items-start">
                                <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <use xlink:href="#calendar3"></use>
                                </svg>
                                <div>
                                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
                                    <p>Paragraph of text beneath the heading to explain the heading.</p>
                                </div>
                            </div>
                            <div class="col d-flex align-items-start">
                                <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <use xlink:href="#calendar3"></use>
                                </svg>
                                <div>
                                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
                                    <p>Paragraph of text beneath the heading to explain the heading.</p>
                                </div>
                            </div>
                            <div class="col d-flex align-items-start">
                                <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <use xlink:href="#calendar3"></use>
                                </svg>
                                <div>
                                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
                                    <p>Paragraph of text beneath the heading to explain the heading.</p>
                                </div>
                            </div>
                            <div class="col d-flex align-items-start">
                                <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <use xlink:href="#calendar3"></use>
                                </svg>
                                <div>
                                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
                                    <p>Paragraph of text beneath the heading to explain the heading.</p>
                                </div>
                            </div>
                            <div class="col d-flex align-items-start">
                                <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <use xlink:href="#calendar3"></use>
                                </svg>
                                <div>
                                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
                                    <p>Paragraph of text beneath the heading to explain the heading.</p>
                                </div>
                            </div>
                            <div class="col d-flex align-items-start">
                                <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <use xlink:href="#calendar3"></use>
                                </svg>
                                <div>
                                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
                                    <p>Paragraph of text beneath the heading to explain the heading.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- <div class="chart">         
            <canvas id="barchart"></canvas>      
       </div>
-->



                <!--<div class="chart">

            <canvas id="nut"></canvas>
       </div>
-->
            </div>
        </main>

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

    <!-- charts.js -->
    <script src="https://cdnjs.com/libraries/Chart.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>



    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/responsive.bootstrap5.js"></script>

    <script type="text/javascript">
    new DataTable('#example', {
        // responsive: true,
        scrollX: true,
    });
    new DataTable('#example2', {
        // responsive: true,
        scrollX: true,
    });
    </script>


</body>

</html>

</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="sidebar.js"></script>
</body>

</html>