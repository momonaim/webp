<?php 
include('session/session_check.php');
include('header.php');

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
  <div class="col-lg-6 mb-4 mt-4  scroll3 ">
    <div class="card border-light-subtle border-5 shadow-lg me-0 me-lg-4 h-100" >
  <img src="img/build8.png" class="card-img-top rounded-0" alt="...">
  <div class="card-body text-center">
    
    <a href="JOBS_search.php" class="btn btn-yellow btn-lg hover3 fw-bold fs-2 hovver" style=" font-weight: bold; font-family: Passion One, sans-serif;">SEARCH FOR A JOB</a>
  </div>
</div>
  </div>

   <div class="col-lg-6 mb-4 mt-4 scroll2 ">
    <div class="card border-yellow border-5 shadow-lg ms-0 ms-lg-4  h-100" >
  <img src="img/build6.png" class="card-img-top rounded-0" alt="...">
  <div class="card-body text-center">

    <a href="JOBS_list_all.php" class="btn btn-blue btn-lg hover3 fw-bold fs-2 " style=" font-weight: bold; font-family: Passion One, sans-serif;">LIST ALL JOB OFFERS</a>
  </div>
</div>
  </div>
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

