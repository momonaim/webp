<?php
session_start();
include ('../connection/db.php');
$recid = $_SESSION['rec_id'];
echo $recid;
//input coming from jquery ajax method as data option
if (isset ($_POST['input'])) {
  $input = $_POST['input'];
  $select1 = $_POST['select1'];
  $select2 = $_POST['select2'];

  //$query = "SELECT * FROM Company WHERE CompanyName LIKE '{$input}%'  && Industry='$select2'";

  $query = "SELECT *
FROM Candidates c
INNER JOIN applied_jobs a ON c.can_id = a.Can_id
INNER JOIN job_offer j ON a.Job_id = j.job_id
WHERE c.status = 1 AND j.rec_id = $recid";

  if (!empty ($input)) {
    $query .= " AND Username LIKE '{$input}%'";
  }

  if (!empty ($select1)) {
    $query .= " AND c.Country = '$select1'";
  }

  if (!empty ($select2)) {
    $query .= " AND j.job_title = '$select2'";
  }
  $result = mysqli_query($conn, $query);



  if (mysqli_num_rows($result) > 0) {

    $cardCount = 0;

    while ($row = mysqli_fetch_assoc($result)) {
      $job_title = $row['job_title'];
      $job_type = $row['job_type'];
      $country = $row['Country'];
      $first_name = $row['firstname'];
      $last_name = $row['lastname'];

      // Check if the current card count is a multiple of 3
      if ($cardCount % 3 == 0) {
        // If so, start a new row
        echo '<div class="row">';
      }

      ?>
<div class="col-lg-4 my-2 my-lg-3">
    <div class="card border-primary mb-3 scroll2  h-100 shadow-lg">
        <div class="card-header border-primary fs-4 fw-bold text-dark-subtle">
            <?php echo "$first_name $last_name"; ?>
        </div>
        <div class="card-body text-primary pb-1">
            <div class="card-title">
                <div class="row">
                    <div class="col-lg-5">
                        <h5><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-journals" viewBox="0 0 16 16">
                                <path
                                    d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2" />
                                <path
                                    d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0" />
                            </svg>
                            <?php echo "$job_title .inc" ?>
                        </h5>
                    </div>
                    <div class="col-lg-5">
                        <h5><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                            </svg>
                            <?php echo $country ?>
                        </h5>
                    </div>
                </div>
            </div>
            <p class="card-text"></p>


            <div class="btn-group">
                <button
                    onclick="getId(<?php echo $row['rec_id']; ?>, <?php echo $row['can_id']; ?>, <?php echo $row['job_id']; ?>); setRecipient('@<?php echo $row['Username']; ?>')"
                    class="btn btn-primary hover3 text-center fs-4" id="myBtn" data-bs-toggle="modal"
                    data-bs-target="#exampleModal" style=" font-weight: bold; font-family: Passion One, sans-serif;"><i
                        class="bi bi-chat-left-dots-fill" style="margin-right: 10px;"></i>SEND MESSAGE</button>

            </div>

        </div>
    </div>
</div>

<!-- MESSAGING MODAL -->


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Recipient: </label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button id="send" class="btn btn-primary">Send message</button>
            </div>
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
    echo '<div class="alert scroll4 alert-danger mt-4" role="alert">
  NO AVAILABLE CANDIDATES FOR THE MOMENT!
</div>';
  }
}



?>
<script type="text/javascript">
function getId(recid, canid, jobid) {
    //btnValue = document.getElementById("myBtn").value;

    document.getElementById("send").onclick = function() {
        // Get the value of the textarea
        var message = document.getElementById("message-text").value;


        // Specify the URL you want to navigate to
        var url = "phpcode/mc_code.php?val1=" + recid + "&val2=" + canid + "&val3=" + jobid + "&message=" +
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