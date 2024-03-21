<?php 
include('session/session_check.php');
include('header.php');
include('../connection/db.php');

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
<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item" style="background-image:url(img/black.svg) ;">
    
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>COMPANY OWNER ?</h1>
            <p class="opacity-75">Sign up today and find trustworthy employees.</p>
            <p><a class="btn btn-lg btn-blue" href="#">Sign up today <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
</svg></a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item" id="yy"  style="background-image:url(img/yellow.svg) ;">
        
        <div class="container">
          <div class="carousel-caption text-end">
            <h1 class="text-black text-opacity-75" style="color: white; font-weight: bold; font-family: Passion One, sans-serif;">YOUR FUTURE STARTS NOW.</h1>
            <p class="text-black text-opacity-75">Make your dream Job a reality, sign up now and start applying.</p>
            <p><a class="btn btn-lg btn-blue" style="color: white; font-weight: bold; font-family: Passion One, sans-serif;" href="#">LEARN MORE <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
</svg></a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item active"       style="background-image:url(img/map3.svg) ;"
>
        <div class="container">
          <div class="carousel-caption">
            <h1 style="color: white; font-weight: bold; font-family: Passion One, sans-serif;">FIND JOBS EVERYWHERE AND ANYTIME.</h1>
            <p>Seeking employment with no geographical limits, Be ready to dive into any opportunity, anywhere.</p>
            <p><a class="btn btn-lg btn-blue" style="color: white; font-weight: bold; font-family: Passion One, sans-serif;" href="#">REGISTER NOW <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
</svg></a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<div class="container mt-5">

<div class="row">
  <h5 class="display-4 text-center scroll8">All Job Offers.</h5>
</div>


<div id="jobs">
  <?php 
  $query = "SELECT * FROM job_offer JOIN Recruiters ON job_offer.rec_id = Recruiters.rec_id
LIMIT 6";
  $result = mysqli_query($conn, $query);

  if(mysqli_num_rows($result) > 0){

$cardCount = 0;

while ($row = mysqli_fetch_assoc($result)){
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
      <div class="card border-blue mb-3  h-100 shadow-lg">
  <div class="card-header border-blue fs-4 fw-bold text-dark-subtle" ><?php echo $job_title;
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
            <h5><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layers-fill" viewBox="0 0 16 16">
  <path d="M7.765 1.559a.5.5 0 0 1 .47 0l7.5 4a.5.5 0 0 1 0 .882l-7.5 4a.5.5 0 0 1-.47 0l-7.5-4a.5.5 0 0 1 0-.882z"/>
  <path d="m2.125 8.567-1.86.992a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882l-1.86-.992-5.17 2.756a1.5 1.5 0 0 1-1.41 0z"/>
</svg> <?php echo "$companyname .inc" ?>
          </h5>
        </div>
        <div class="col-lg-4">
            <h5><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
</svg> <?php echo "$country" ?>
          </h5>
        </div>
      </div>
</div>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-blue text-center fs-4 hover3" style=" font-weight: bold; font-family: Passion One, sans-serif;">APPLY NOW!</a>

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
  }else{
    echo "<h6> no data found</h6>";
  }
?>


</div>


<div class="row">
<style type="text/css">
  #more {
  display: block;
  width: 20%; /* Set width to 100% */
  margin: 0 auto; /* Center horizontally */
}
@media (max-width: 991px) {
#more {
    display: block;
  width: 30%; /* Set width to 100% */
  margin: 0 auto; /* Center horizontally */
}
}
@media (max-width: 539px) {
#more {
    display: block;
  width: 45%; /* Set width to 100% */
  margin: 0 auto; /* Center horizontally */
}
}
@media (max-width: 768px) {
#more {
    display: block;
  width: 45%; /* Set width to 100% */
  margin: 0 auto; /* Center horizontally */
}
}
</style>
  <button class="btn fs-2 btn-yellow btn-block mt-4 rounded-5 pb-1 shadow-lg hover3 scroll8" style=" font-weight: bold; font-family: Passion One, sans-serif;" id="more">SHOW MORE</button>

</div>

</div>








  <div class="row mb-5"></div>
    <div class="row mt-5 mb-3 scroll8">
      <h5 class="display-4 text-center">Companies That Hire From Us.</h5>
</div>
</div>

<div class="scroll">
  <div class="logos">
    <div class="logos-slide">
    <img class="bw" src="img/111.svg" >
    <img class="bw" src="img/2.svg">
    <img class="bw" src="img/333.svg">
    <img class="bw" src="img/4.svg">
    <img class="bw" src="img/5.svg">
    <img class="bw" src="img/6.svg">
    <img class="bw" src="img/7.svg">
    <img class="bw" src="img/8.svg">
    <img class="bw" src="img/9.svg">
    <img class="bw" src="img/10.svg">
    <img class="bw" src="img/11.svg">
    <img class="bw" src="img/12.svg">
    <img class="bw" src="img/13.svg">
    <img class="bw" src="img/14.svg">
    <img class="bw" src="img/15.svg" style="width: 78px; height: auto;">
    <img class="bw" src="img/16.svg">
    <img class="bw" src="img/17.svg">
    <img class="bw" src="img/18.svg">
    <img class="bw" src="img/19.svg" style="width: 120px; height: auto;">
    <img class="bw" src="img/20.svg" style="width: 120px; height: auto;">
    <img class="bw" src="img/21.svg" style="width: 120px; height: auto;">
    <img class="bw" src="img/22.svg" style="width: 120px; height: auto;">
    <img class="bw" src="img/23.svg">
    <img class="bw" src="img/24.svg">
    <img class="bw" src="img/25.svg" style="width: 120px; height: auto;">
    <img class="bw" src="img/26.svg">
      
    </div>
    <div class="logos-slide">
    <img class="bw" src="img/111.svg" >
    <img class="bw" src="img/2.svg">
    <img class="bw" src="img/333.svg">
    <img class="bw" src="img/4.svg">
    <img class="bw" src="img/5.svg">
    <img class="bw" src="img/6.svg">
    <img class="bw" src="img/7.svg">
    <img class="bw" src="img/8.svg">
    <img class="bw" src="img/9.svg">
    <img class="bw" src="img/10.svg">
    <img class="bw" src="img/11.svg">
    <img class="bw" src="img/12.svg">
    <img class="bw" src="img/13.svg">
    <img class="bw" src="img/14.svg">
    <img class="bw" src="img/15.svg" style="width: 78px; height: auto;">
    <img class="bw" src="img/16.svg">
    <img class="bw" src="img/17.svg">
    <img class="bw" src="img/18.svg">
    <img class="bw" src="img/19.svg" style="width: 120px; height: auto;">
    <img class="bw" src="img/20.svg" style="width: 120px; height: auto;">
    <img class="bw" src="img/21.svg" style="width: 120px; height: auto;">
    <img class="bw" src="img/22.svg" style="width: 120px; height: auto;">
    <img class="bw" src="img/23.svg">
    <img class="bw" src="img/24.svg">
    <img class="bw" src="img/25.svg" style="width: 120px; height: auto;">
    <img class="bw" src="img/26.svg">
      
    </div>
  </div>
</div>

<?php 
include('include/footer.php');
 ?>
<!-- include jQuery to use AJAX -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/scroll.js"></script>

<script type="text/javascript">
//animation function for ajax data
function setupObserver(){
  const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if(entry.isIntersecting) {
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

/*
 $(document).ready(function() {
    //select the input with the id live_search
    //using the id we can perform an event on the input type
    // Select the input with the id live_search and both select elements
    $("#live_search, #countries, #industries").on('keyup change', function(){
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
                url: "phpcode/livesearch3.php",
                method: "POST",
                data: {
                    input: input,
                    select1: select1,
                    select2: select2
                },
            //using the searchresult id we will display the data coming from livesearch.php
            //Inside the success function of the AJAX request, we handle the response from the server.
            success:function(data){
              //after success function data will be shown in the div section with the id searchresult
              $("#searchresult").html(data);
              $("#searchresult").css("display", "block");
            // Setup Intersection Observer after new content is added
            setupObserver();

            }
          });

    });
  });
*/
//jquery code
    $(document).ready(function(){
      var counter=6;
      //the selector we interact with to load more comments
      //the function will run when we click the btn
      $("#more").click(function() {
        //from where we gonnaload the comments
        //second parameter is like a counter for the query limiter in the load-comments.php
        //seconds parameter pulls up to the file 
        counter=counter + 6;

        //2 cause limit example
        $("#jobs").load("phpcode/all_job_offers.php", {
          //counter is passed using post method
          //commentnewcount this the post name
          morenewjobs: counter
          //You should place the setupObserver() function call inside the success callback of the $.load() method. This ensures that the animations are set up after the new content has been loaded successfully. 
        }, function() {
                          setupObserver();

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

