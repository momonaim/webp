<?php
include ('../../connection/db.php');
include ('include/header.php');

$conn2 = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
$conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// JOB DATA
$stmt3 = $conn2->prepare("SELECT * FROM `job_offer` WHERE job_id = ?");

if (isset ($_GET['id'])) {
  $jobId = $_GET['id'];
} else {
  $jobId = 8;

}
// Parameter
// $jobId = 39;

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

  // foreach ($job as $key => $value) {
  //   echo $key . ": " . $value . " ";
  // }
  // Display other job data as needed
} else {
  echo "Job not found.";
}

// include '..includes/header.php';


include ('include/sidebar.php');
$recid = $_SESSION['rec_id'];

?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-4 pb-2 mb-1">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="rec_dashboard.php">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Candidates</li>
    </ol>
  </nav>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-2 mb-1 border-bottom">
    <h1 class="h2">Candidates</h1>

  </div>




  <div class="container-fluid"></div>

  <!-- success card stuff -->
  <?php
  if (isset ($_SESSION['statusmessage'])) {
    ?>
    <div class="alert alert-success d-flex align-items-center mt-4 container-lg col-md-12 col-lg-7" role="alert">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill"
        viewBox="0 0 16 16">
        <path
          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
      </svg>
      <div>
        &nbsp;
        <?php echo $_SESSION['statusmessage']; ?>
      </div>
    </div>
    <?php
    // code...
    //now release the session variable
    unset($_SESSION['statusmessage']);
  }

  ?>
  <!-- DATATABLE -->





  <div class="container-fluid"></div>

  <!-- success card stuff -->
  <?php
  if (isset ($_SESSION['status'])) {
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
  <div class=" container-fluid card mt-4 shadow-lg">

    <div class="card-body">

      <table id="example" class="table table-striped nowrap wrap-text">

        <thead>
          <tr>
            <th>#ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
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

            $stmt = $conn2->prepare("SELECT *
                                        FROM Candidates c
                                        INNER JOIN applied_jobs j ON c.can_id = j.can_id
                                        INNER JOIN job_offer jj ON jj.job_id = j.job_id
                                        INNER JOIN Recruiters r ON r.rec_id = jj.rec_id
                                        WHERE c.status = 1 and j.statut='Processing' AND jj.job_id = ?");
            $stmt->bindParam(1, $jobId, PDO::PARAM_INT);
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
                  <?php echo $row['can_id']; ?>
                </td>
                <td>
                  <?php echo $row['firstname'] . ' ' . $row['lastname']; ?>
                </td>
                <td>
                  <?php echo $row['Email']; ?>
                </td>
                <td>
                  <?php echo $row['Phone']; ?>
                </td>
                <td>
                  <?php echo $row['Address'] . ', ' . $row['City'] . ', ' . $row['Country']; ?>
                </td>
                <td>
                  <!-- EXPERIENCE -->
                  <?php
                  try {

                    // EXPERIENCE DATA
                    $id_c = 22;
                    $stmt2 = $conn2->prepare("SELECT *, extract(year FROM fin)-extract(year FROM debut) as years  FROM `experience` WHERE id_c = ?");
                    $id_c = $row['can_id'];

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
                    $id_c = 29;
                    $stmt2 = $conn2->prepare("SELECT * FROM `EDUCATION` WHERE id_c = ?");
                    $id_c = $row['can_id'];

                    $stmt2->bindParam(1, $id_c, PDO::PARAM_INT);
                    $stmt2->execute();
                    $edc = $stmt2->fetchAll();

                    foreach ($edc as $edc) {

                      // Assign scores based on education level
                      switch ($edc['degree']) {
                        case "bac":
                          $score += $edc_sc['bac'];
                          break;
                        case "bac2":
                          $score += $edc_sc['bac2'];
                          break;
                        case "bac3":
                          $score += $edc_sc['bac3'];
                          break;
                        case "bachelor":
                          $score += $edc_sc['bachelor'];
                          break;
                        case "mst":
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
                    $id_c = 29;
                    $stmt2 = $conn2->prepare("SELECT * FROM `skill` WHERE id_c = ?");
                    $id_c = $row['can_id'];

                    $stmt2->bindParam(1, $id_c, PDO::PARAM_INT);
                    $stmt2->execute();
                    $skill = $stmt2->fetchAll();

                    foreach ($skill as $skill) {

                      // Assign scores based on education level
                      switch ($skill['category']) {
                        case "Technical":
                          $score += $skill_sc['Technical'];
                          break;
                        case "Business Skills":
                          $score += $skill_sc['Business'];
                          break;
                        case "Soft Skills":
                          $score += $skill_sc['SoftSkills'];
                          break;
                        case "Healthcare Skills":
                          $score += $skill_sc['Healthcare'];
                          break;
                        case "Creative Skills":
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
                  <!-- Action -->
                  <div class="row">
                    <div class="btn-group">
                      <a href="phpcode/approve.php?id=<?php echo $row['app_id']; ?>" class="btn btn-success"><span
                          class="bi bi-check-lg"></span></a>

                      <button class="btn btn-info" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop<?php echo $row['can_id']; ?>"><span
                          class="bi bi-zoom-in"></span></button>
                      <!-- Modal -->
                      <div class="modal fade" id="staticBackdrop<?php echo $row['can_id']; ?>" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                Candidate:
                                <?php echo $row['Username'] ?>
                              </h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body d-flex">

                              <!-- <a href="register_candidat.php"
                                                                class="btn btn-info btn-sm col-6">
                                                                Candidat</a>
                                                            <a href="register_recruteur.php"
                                                                class="btn btn-warning btn-sm col-6">Recruteur</a> -->

                            </div>
                            <div class="modal-footer d-flex">
                              <a href="../../CANDIDATE/cv_preview.php?cv=<?php echo $row['cv']; ?>"
                                class="btn btn-info btn-sm col-6">
                                Show CV</a>
                            </div>
                          </div>
                        </div>

                      </div>
                      <a href="phpcode/reject.php?id=<?php echo $row['app_id']; ?>" class="btn btn-danger"><span
                          class="bi bi-trash"></span></a>

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
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
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
    // responsive: true,
    scrollX: true
  });

  function getId(recid, canid, jobid) {
    //btnValue = document.getElementById("myBtn").value;

    document.getElementById("send").onclick = function () {
      // Get the value of the textarea
      var message = document.getElementById("message-text").value;


      // Specify the URL you want to navigate to
      var url = "phpcode/message_code.php?val1=" + recid + "&val2=" + canid + "&val3=" + jobid + "&message=" +
        encodeURIComponent(message);
      // Navigate to the URL
      window.location.href = url;
    }
  }

  //display the recipient's username
  function setRecipient(user_name) {
    // Get the recipient input field in the modal
    var recipientInput = document.getElementById("recipient-name");

    // Set the value of the recipient input field to the ID
    recipientInput.value = user_name;
  }
</script>

</body>

</html>