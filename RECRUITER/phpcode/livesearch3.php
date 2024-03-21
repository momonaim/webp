<?php
include ('../../connection/db.php');

//input coming from jquery ajax method as data option
if (isset ($_POST['input'])) {
  $input = $_POST['input'];
  $select1 = $_POST['select1'];
  $select2 = $_POST['select2'];

  //$query = "SELECT * FROM Company WHERE CompanyName LIKE '{$input}%'  && Industry='$select2'";

  $query = "SELECT * FROM job_offer JOIN Recruiters ON job_offer.rec_id = Recruiters.rec_id WHERE 1=1";

  if (!empty ($input)) {
    $query .= " AND job_title LIKE '{$input}%'";
  }

  if (!empty ($select1)) {
    $query .= " AND country = '$select1'";
  }

  if (!empty ($select2)) {
    $query .= " AND industry = '$select2'";
  }
  $result = mysqli_query($conn, $query);



  if (mysqli_num_rows($result) > 0) {

    $cardCount = 0;

    while ($row = mysqli_fetch_assoc($result)) {
      $job_title = $row['job_title'];
      $companyname = $row['companyname'];
      $job_type = $row['job_type'];
      $industry = $row['industry'];
      $country = $row['country'];

      // Check if the current card count is a multiple of 3
      if ($cardCount % 3 == 0) {
        // If so, start a new row
        echo '<div class="row">';
      }

      ?>
      <div class="col-lg-4 my-2 my-lg-3">
        <div class="card border-blue mb-3 scroll8  h-100 shadow-lg">
          <div class="card-header border-blue fs-4 fw-bold text-dark-subtle">
            <?php echo $job_title;
            if ($job_type === "fullTime") {
              echo ' <span class="badge rounded-pill text-bg-success">Full Time</span>';
            }
            if ($job_type === "partTime") {
              echo ' <span class="badge rounded-pill text-bg-danger">Part Time</span>';
            }
            if ($job_type === "freelance") {
              echo ' <span class="badge rounded-pill text-bg-warning">Freelance</span>';
            }
            if ($job_type === "internship") {
              echo ' <span class="badge rounded-pill text-bg-info">Internship</span>';
            }
            if ($job_type === "temporary") {
              echo ' <span class="badge rounded-pill text-bg-dark">Temporary</span>';
            }

            ?>
          </div>
          <div class="card-body text-primary pb-1">
            <div class="card-title">
              <div class="row">
                <div class="col-lg-4">
                  <h5><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-layers-fill" viewBox="0 0 16 16">
                      <path
                        d="M7.765 1.559a.5.5 0 0 1 .47 0l7.5 4a.5.5 0 0 1 0 .882l-7.5 4a.5.5 0 0 1-.47 0l-7.5-4a.5.5 0 0 1 0-.882z" />
                      <path
                        d="m2.125 8.567-1.86.992a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882l-1.86-.992-5.17 2.756a1.5 1.5 0 0 1-1.41 0z" />
                    </svg>
                    <?php echo "$companyname .inc" ?>
                  </h5>
                </div>
                <div class="col-lg-4">
                  <h5><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                      <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                    </svg>
                    <?php echo $country ?>
                  </h5>
                </div>
              </div>
            </div>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn btn-blue text-center fs-4 hover3"
              style=" font-weight: bold; font-family: Passion One, sans-serif;">APPLY NOW!</a>

          </div>
        </div>
      </div>
      <?php

      // Increment the card count
      $cardCount++;

      // Check if the current card count is a multiple of 3 or if it's the last card
      if ($cardCount % 3 == 0 || $cardCount == mysqli_num_rows($result)) {
        // If so, close the row
        echo '</div>';
      }


    }
  } else {
    echo '<div class="alert alert-danger mt-4" role="alert">
  NO AVAILABLE JOB OFFERS FOR THE MOMENT!
</div>';
  }
}



?>