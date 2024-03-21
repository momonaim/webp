<?php 
  include('include/header.php');
  include('include/sidebar.php');
include ('../../connection/db.php');
$recid=$_SESSION['rec_id'];
 ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-4 pb-2 mb-1">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="rec_dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Candidates Search</li>
        </ol>
    </nav>
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-2 mb-1 border-bottom">
        <h1 class="h2">Candidates Search</h1>

    </div>




    <div class="container-fluid"></div>

    <!-- success card stuff -->
    <?php 
        if (isset($_SESSION['statusmessage'])) {
            ?>
    <div class="alert alert-success d-flex align-items-center mt-4 container-lg col-md-12 col-lg-7" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-check-circle-fill" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </svg>
        <div>
            &nbsp;<?php echo $_SESSION['statusmessage'];?>
        </div>
    </div>
    <?php 
            // code...
            //now release the session variable
            unset($_SESSION['statusmessage']);
        }

         ?>






    <div class="container mt-5">
        <!-- success card stuff -->
        <?php 
        if (isset($_SESSION['statusmessage'])) {
            ?>
        <div class="alert alert-success d-flex align-items-center mt-4 container-lg col-md-12 col-lg-7" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </svg>
            <div>
                &nbsp;<?php echo $_SESSION['statusmessage'];?>
            </div>
        </div>
        <?php 
            // code...
            //now release the session variable
            unset($_SESSION['statusmessage']);
        }

         ?>
        <!-- JOB search BAR all/field/location -->
        <div class="card scroll1 border-blue shadow-lg">
            <div class="card-header display-6 border-blue bg-primary-subtle">
                Search For A Candidate.
            </div>
            <div class="card-body">

                <div class="row ">
                    <h5 class="card-title">You're One Click Away From Changing Your Life</h5>

                    <div class="col-lg-4 my-2 my-lg-3">
                        <input class="form-control border-blue" id="live_search" type="search" placeholder="Search ..."
                            aria-label="Search">
                    </div>


                    <div class="col-lg-4 my-2 my-lg-3">
                        <select class="form-select border-blue" id="industries" name="industries">
                            <option value="" selected>Select a job offer...</option>
                            <option value="">RESET</option>

                            <?php

$query = mysqli_query($conn, "SELECT *
    FROM job_offer j
    INNER JOIN Recruiters r ON r.rec_id = j.rec_id
    WHERE j.status = 1");

while ($row = mysqli_fetch_assoc($query)) {
    echo "<option value='" . $row['job_title'] . "'>" . $row['job_title'] . "</option>";
}
    ?>
                        </select>
                    </div>


                    <div class="col-lg-4 my-2 my-lg-3">
                        <select class="form-select border-blue" id="countries" name="countries">
                            <option value="" selected>Select a country...</option>
                            <option value="">RESET</option>
                            <?php
    $countries = array(
        "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", 
        "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan", 
        "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cabo Verde", 
        "Cambodia", "Cameroon", "Canada", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo", 
        "Costa Rica", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", 
        "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", 
        "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", 
        "Guyana", "Haiti", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", 
        "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kosovo", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", 
        "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Madagascar", "Malawi", "Malaysia", 
        "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", 
        "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", 
        "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Korea", "North Macedonia", "Norway", "Oman", "Pakistan", 
        "Palau", "Palestine", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", 
        "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", 
        "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", 
        "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Korea", "South Sudan", 
        "Spain", "Sri Lanka", "Sudan", "Suriname", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", 
        "Thailand", "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", 
        "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", 
        "Vatican City", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
    );

    foreach ($countries as $country) {
        echo "<option value='$country'>$country</option>";
    }
    ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>



        <div id="searchresult"></div>




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

<!-- include jQuery to use AJAX -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/scroll.js"></script>

<script type="text/javascript">
//animation function for ajax data
function setupObserver() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            } else {
                entry.target.classList.remove('show');
            }

        });
    });

    const scrollElements = document.querySelectorAll('.scroll1');
    const scrollElements2 = document.querySelectorAll('.scroll2');
    const scrollElements3 = document.querySelectorAll('.scroll3');
    const scrollElements4 = document.querySelectorAll('.scroll4');
    const scrollElements5 = document.querySelectorAll('.scroll5');
    const scrollElements6 = document.querySelectorAll('.scroll6');
    const scrollElements7 = document.querySelectorAll('.scroll7');
    const scrollElements8 = document.querySelectorAll('.scroll8');


    scrollElements.forEach((el) => observer.observe(el));
    scrollElements2.forEach((el) => observer.observe(el));
    scrollElements3.forEach((el) => observer.observe(el));
    scrollElements4.forEach((el) => observer.observe(el));
    scrollElements5.forEach((el) => observer.observe(el));
    scrollElements6.forEach((el) => observer.observe(el));
    scrollElements7.forEach((el) => observer.observe(el));
    scrollElements8.forEach((el) => observer.observe(el));

}


$(document).ready(function() {
    //select the input with the id live_search
    //using the id we can perform an event on the input type
    // Select the input with the id live_search and both select elements
    $("#live_search, #countries, #industries").on('keyup change', function() {
        var input = $("#live_search").val();
        var select1 = $("#countries").val();
        var select2 = $("#industries").val();

        // Now using AJAX with phpmyadmin
        //        if(input != "" || select1 != "" || select2 != ""){
        // Check if all input fields and select elements are empty
        if (input === "" && select1 === "" && select2 === "") {
            // Hide the search result section and return without making an AJAX request
            $("#searchresult").css("display", "none");
            return;
        }
        // AJAX request
        $.ajax({
            url: "phpcode/candidate_search_code.php",
            method: "POST",
            data: {
                input: input,
                select1: select1,
                select2: select2
            },
            //using the searchresult id we will display the data coming from livesearch.php
            //Inside the success function of the AJAX request, we handle the response from the server.
            success: function(data) {
                //after success function data will be shown in the div section with the id searchresult
                $("#searchresult").html(data);
                $("#searchresult").css("display", "block");
                // Setup Intersection Observer after new content is added
                setupObserver();

            }
        });

    });
});


/*$(document).ready(function() {
    //select the input with the id live_search
    //using the id we can perform an event on the input type
    $("#live_search").keyup(function(){
        //show an alert when typing something
        var input=$(this).val();
        //alert(input);

        //now using ajax with phpmyadmin
        if(input != ""){
          //ajax stuff
          $.ajax({
            url:"phpcode/livesearch.php",
            method: "POST",
            data:{input:input},

            //using the searchresult id we will display the data coming from livesearch.php
            success:function(data){
              //after success function data will be shown in the div section with the id searchresult
              $("#searchresult").html(data);
              $("#searchresult").css("display", "block");
            // Setup Intersection Observer after new content is added
            setupObserver();

            }
          });
        }else{
          $("#searchresult").css("display", "none");

        }
    });
  });
  */
</script>