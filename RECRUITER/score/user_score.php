<?php

/*@include '../includes/config.php';

session_start();

if (!isset($_SESSION['logged'])) {

    echo '<script>alert("please log in");
    window.location.href = "../home/login.php";
    </script>';
} elseif ($_SESSION['role'] != 'recruteur') {
    echo '<script>alert("you are not a recruteur");
    window.location.href = "../";
    </script>';
}

$conn2 = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
$conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// JOB DATA
$stmt3 = $conn2->prepare("SELECT * FROM `offre` WHERE id = ?");
// Parameter
$jobId = 8;

// Bind parameter
$stmt3->bindParam(1, $jobId, PDO::PARAM_INT);

// Execute statement
$stmt3->execute();

// Fetch result
$job = $stmt3->fetch(PDO::FETCH_ASSOC);

// Check if job exists
if ($job) {
    // Display job data
    $exp_sc = $job['exp_sc'];
    // $edc_sc = $job['edc_sc'];
    $edc_sc = json_decode($job['edc_sc'], true);
    $skill_sc = json_decode($job['skill_sc'], true);

    // echo "Job ID: " . $job['id'] . " ";
    // echo "exp sc: " . $job['exp_sc'] . " ";
    foreach ($job as $key => $value) {
        echo $key . ": " . $value . " ";
    }
    // Display other job data as needed
} else {
    echo "Job not found.";
}

// include '..includes/header.php';
*/
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar With Bootstrap</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="sidebar.css">

</head>

<body>
    <div class="wrapper">
        <?php include 'includes/sidebar.php' ?>



        <main class=" px-md-4 pt-4 pb-2 mb-1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Jobs</li>
                </ol>
            </nav>
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-2 mb-1 border-bottom">
                <h1 class="h2">Jobs</h1>
                <div class="btn-toolbar mb-2 mb-md-0 gap-2">
                    <a href="admin_add.php" type="button" class="btn btn-primary btn-sm"><i
                            class="bi bi-plus-circle-fill"></i>&nbsp;Add Job</a>
                    <a href="admin_restore.php" type="button" class="btn btn-outline-primary btn-sm"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-database-fill-down" viewBox="0 0 16 16">
                            <path
                                d="M12.5 9a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7m.354 5.854 1.5-1.5a.5.5 0 0 0-.708-.708l-.646.647V10.5a.5.5 0 0 0-1 0v2.793l-.646-.647a.5.5 0 0 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0M8 1c-1.573 0-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4s.875 1.755 1.904 2.223C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777C13.125 5.755 14 5.007 14 4s-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1" />
                            <path
                                d="M2 7v-.839c.457.432 1.004.751 1.49.972C4.722 7.693 6.318 8 8 8s3.278-.307 4.51-.867c.486-.22 1.033-.54 1.49-.972V7c0 .424-.155.802-.411 1.133a4.51 4.51 0 0 0-4.815 1.843A12 12 0 0 1 8 10c-1.573 0-3.022-.289-4.096-.777C2.875 8.755 2 8.007 2 7m6.257 3.998L8 11c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13h.027a4.55 4.55 0 0 1 .23-2.002m-.002 3L8 14c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.5 4.5 0 0 1-1.3-1.905" />
                        </svg>&nbsp;Restore Job</a>


                </div>
            </div>



            <div class="container-fluid"></div>

            <!-- success card stuff -->
            <?php
            if (isset($_SESSION['status'])) {
                ?>
            <div class="alert alert-danger d-flex mt-4 container-fluid" role="alert">
                <i class="bi bi-trash-fill"></i>
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
            <div class=" container-fluid card mt-4">

                <div class="card-body">

                    <table id="example" class="table table-striped nowrap" style="width:100%">

                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Language</th>
                                <th>Title</th>
                                <th>B Date</th>
                                <th>exp</th>
                                <th>edc</th>
                                <th>skill</th>
                                <th>Score</th>

                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            // candidat data
                            try {
                                $conn2 = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
                                $conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                $stmt = $conn2->prepare("SELECT * from candidat where status='new'");
                                $stmt->execute();
                                $result = $stmt->fetchAll();

                                foreach ($result as $row) {
                                    $score = 0;
                                    if ($row['status'] == 'active') {
                                        $score += 6;
                                    }
                                    ?>
                            <tr>
                                <td>
                                    <?php echo $row['id_c']; ?>
                                </td>
                                <td>
                                    <?php echo $row['NOM']; ?>
                                </td>
                                <td>
                                    <?php echo $row['PRENOM']; ?>
                                </td>
                                <td>
                                    <?php echo $row['EMAIL']; ?>
                                </td>
                                <td>
                                    <?php echo $row['LANGUE']; ?>
                                </td>
                                <td>
                                    <?php echo $row['TITRE']; ?>
                                </td>
                                <td>
                                    <?php echo $row['BDATE']; ?>
                                </td>
                                <td>
                                    <!-- EXPERIENCE -->
                                    <?php
                                            try {

                                                // EXPERIENCE DATA
                                                $id_c = 22;
                                                $stmt2 = $conn2->prepare("SELECT *, extract(year FROM fin)-extract(year FROM debut) as years  FROM `experience` WHERE id_c = ?");
                                                $id_c = $row['id_c'];

                                                $stmt2->bindParam(1, $id_c, PDO::PARAM_INT);
                                                $stmt2->execute();
                                                $exp = $stmt2->fetchAll();

                                                foreach ($exp as $exp) {
                                                    $score += $exp['years'] * $exp_sc;

                                                }
                                                echo $score;
                                            } catch (PDOException $e) {
                                            }
                                            ?>
                                </td>
                                <td>
                                    <?php
                                            try {

                                                // EDUCATION DATA
                                                $id_c = 22;
                                                $stmt2 = $conn2->prepare("SELECT * FROM `formation` WHERE id_c = ?");
                                                // $id_c = $row['id_c'];
                                    
                                                $stmt2->bindParam(1, $id_c, PDO::PARAM_INT);
                                                $stmt2->execute();
                                                $edc = $stmt2->fetchAll();

                                                foreach ($edc as $edc) {
                                                    // if ($edc['degree'] == 'bac') {
                                                    //     $score += $edc['id_c'] * $edc_sc;
                                                    // }
                                    
                                                    // Assign scores based on education level
                                                    switch ($edc['degree']) {
                                                        case "bac":
                                                            $score += $edc_sc['bac'];
                                                            break;
                                                        case "master":
                                                            $score += $edc_sc['mst'];
                                                            break;
                                                        case "phd":
                                                            $score += $edc_sc['phd'];
                                                            break;
                                                        default:
                                                            // Default score or handle invalid education level
                                                            // $score += 123;
                                                            break;
                                                    }

                                                }
                                                echo $score;
                                            } catch (PDOException $e) {
                                            }
                                            ?>
                                </td>
                                <td>
                                    <?php
                                            try {

                                                // SKILL DATA
                                                $id_c = 22;
                                                $stmt2 = $conn2->prepare("SELECT * FROM `skill` WHERE id_c = ?");
                                                // $id_c = $row['id_c'];
                                    
                                                $stmt2->bindParam(1, $id_c, PDO::PARAM_INT);
                                                $stmt2->execute();
                                                $skill = $stmt2->fetchAll();

                                                foreach ($skill as $skill) {
                                                    // if ($edc['degree'] == 'bac') {
                                                    //     $score += $edc['id_c'] * $edc_sc;
                                                    // }
                                                    // Assign scores based on education level
                                                    switch ($skill['category']) {
                                                        case "Technical":
                                                            $score += $skill_sc['Technical'];
                                                            break;
                                                        case "Business":
                                                            $score += $skill_sc['Business'];
                                                            break;
                                                        case "SoftSkills":
                                                            $score += $skill_sc['SoftSkills'];
                                                            break;
                                                        case "Healthcare":
                                                            $score += $skill_sc['Healthcare'];
                                                            break;
                                                        case "Creative":
                                                            $score += $skill_sc['Creative'];
                                                            break;
                                                        case "Science":
                                                            $score += $skill_sc['Science'];
                                                            break;
                                                        default:
                                                            // Default score or handle invalid education level
                                                            // $score += 123;
                                                            break;
                                                    }

                                                }
                                                echo $score;
                                            } catch (PDOException $e) {
                                            }
                                            ?>
                                </td>
                                <td>
                                    <!-- Score  -->
                                    <?php echo $score; ?>
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="btn-group">
                                            <a href="admin_edit.php?edit=<?php echo $row['id_c']; ?>"
                                                class="btn btn-success"><span class="bi bi-check-lg"></span></a>

                                            <a href="phpcode/admin_fake_delete.php?del=<?php echo $row['id_c']; ?>"
                                                class="btn btn-info"><span class="bi bi-zoom-in"></span></a>

                                            <a href="phpcode/admin_fake_delete.php?del=<?php echo $row['id_c']; ?>"
                                                class="btn btn-danger"><span class="bi bi-trash"></span></a>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php
                                }
                            } catch (PDOException $e) {
                            }
                            ?>




                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Language</th>
                                <th>Title</th>
                                <th>B Date</th>
                                <th>exp</th>
                                <th>edc</th>
                                <th>skill</th>
                                <th>Score</th>

                                <th>Action</th>

                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </main>
    </div>
    </div>
    </div>

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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="sidebar.js"></script>
</body>

</html>