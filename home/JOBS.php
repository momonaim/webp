<?php
include ('../connection/db.php');

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!--Fonts-->
    <style type="text/css">
        @font-face {
            font-family: 'Bungee Shade';
            src: url('fonts/Bungee_Shade/BungeeShade-Regular.ttf') format('truetype');
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: 'Oswald';
            src: url('fonts/Oswald/static/Oswald-Regular.ttf') format('truetype');
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: 'Passion One';
            src: url('fonts/Passion_One/PassionOne-Bold.ttf') format('truetype');
        }
    </style>


    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Strike&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Passion+One:wght@400;700;900&family=Protest+Strike&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&family=Bungee+Shade&family=Passion+One:wght@400;700;900&family=Protest+Strike&family=Rubik+Doodle+Shadow&family=Rubik+Mono+One&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../main.css">
    <link rel="stylesheet" type="text/css" href="css/logoscroll.css">
    <link rel="stylesheet" type="text/css" href="css/scroll.css">
    <link rel="stylesheet" type="text/css" href="css/hoverr.css">

</head>



<body class="vh 100">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-yellow  fixed-top">
        <div class="container-fluid">
            <style>
                .navbar-toggler .navbar-toggler-icon {
                    font-weight: bold;
                }
            </style>

            <!-- toggle bar btn -->
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="blue"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-list-stars" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5" />
                        <path
                            d="M2.242 2.194a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.28.28 0 0 0-.094.3l.173.569c.078.256-.213.462-.423.3l-.417-.324a.27.27 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.28.28 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.27.27 0 0 0 .259-.194zm0 4a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.28.28 0 0 0-.094.3l.173.569c.078.255-.213.462-.423.3l-.417-.324a.27.27 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.28.28 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.27.27 0 0 0 .259-.194zm0 4a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.28.28 0 0 0-.094.3l.173.569c.078.255-.213.462-.423.3l-.417-.324a.27.27 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.28.28 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.27.27 0 0 0 .259-.194z" />
                    </svg>

                    <path
                        d="M9.05.435c-.58-.58-1.52-.58-2.1 0L4.047 3.339 8 7.293l3.954-3.954L9.049.435zm3.61 3.611L8.708 8l3.954 3.954 2.904-2.905c.58-.58.58-1.519 0-2.098l-2.904-2.905zm-.706 8.614L8 8.708l-3.954 3.954 2.905 2.904c.58.58 1.519.58 2.098 0l2.905-2.904zm-8.614-.706L7.292 8 3.339 4.046.435 6.951c-.58.58-.58 1.519 0 2.098z" />
                    </svg>
                </span>
            </button>

            <!-- logo -->
            <a class="navbar-brand d-lg-none  fs-1 my-0 py-0" style="   font-family: Bungee Shade, sans-serif;"
                href="./">WEBP</a>

            <!-- SIGN IN BTN SM SCREENS -->
            <a href="sign_in.php" class="fs-3 rounded-3 navbar-brand btn btn-blue d-lg-none btn-sm"
                style="color: white; font-weight: bold; font-family: Passion One, sans-serif;">
                SIGN IN</a>




            <!-- collapse navbar elements-->
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav justify-content-start flex-grow-1 me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="py-0 my-0 fs-3 nav-link " aria-current="page" href="./"
                            style=" font-weight: bold; font-family: Passion One, sans-serif;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="py-0 my-0 fs-3 nav-link" href="#"
                            style=" font-weight: bold; font-family: Passion One, sans-serif;">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="py-0 my-0 fs-3 nav-link "
                            style=" font-weight: bold; font-family: Passion One, sans-serif;" aria-current="page"
                            href="JOBS.php">JOBS</a>
                    </li>
                    <li class="nav-item">
                        <a class="py-0 my-0 fs-3 nav-link "
                            style=" font-weight: bold; font-family: Passion One, sans-serif;" aria-current="page"
                            href="#">Companies</a>
                    </li>
                </ul>





                <!-- middle logo -->
                <ul class="navbar-nav justify-content-center flex-grow-1 me-auto mb-2 mb-lg-0">
                    <li id="specialNavItem" class="nav-item ">
                        <a style="   font-family: Bungee Shade, sans-serif;" class="py-0 my-0 fs-2 nav-link active"
                            aria-current="page" href="./">WEBP</a>
                    </li>
                </ul>





                <!-- left elements -->
                <ul class="navbar-nav justify-content-end flex-grow-1 me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="py-0 my-0 fs-3 nav-link " aria-current="page" href="#"
                            style=" font-weight: bold; font-family: Passion One, sans-serif;">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="py-0 my-0 fs-3 nav-link" href="#"
                            style=" font-weight: bold; font-family: Passion One, sans-serif;">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="py-0 my-0 fs-3 nav-link "
                            style=" font-weight: bold; font-family: Passion One, sans-serif;"
                            aria-current="page">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="py-0 my-0 fs-3 nav-link "
                            style=" font-weight: bold; font-family: Passion One, sans-serif;" aria-current="page"
                            href="sign_in.php">SIGN IN<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                fill="currentColor" class="bi bi-person-fill" viewBox="0 2 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                            </svg></a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>


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
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active"
                aria-current="true"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item" style="background-image:url(img/black.svg) ;">

                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>COMPANY OWNER ?</h1>
                        <p class="opacity-75">Sign up today and find trustworthy employees.</p>
                        <p><a class="btn btn-lg btn-blue" href="#">Sign up today <svg xmlns="http://www.w3.org/2000/svg"
                                    width="25" height="25" fill="currentColor" class="bi bi-arrow-right"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg></a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="yy" style="background-image:url(img/yellow.svg) ;">

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1 class="text-black text-opacity-75"
                            style="color: white; font-weight: bold; font-family: Passion One, sans-serif;">YOUR FUTURE
                            STARTS NOW.</h1>
                        <p class="text-black text-opacity-75">Make your dream Job a reality, sign up now and start
                            applying.</p>
                        <p><a class="btn btn-lg btn-blue"
                                style="color: white; font-weight: bold; font-family: Passion One, sans-serif;"
                                href="#">LEARN MORE <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                                </svg></a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item active" style="background-image:url(img/map3.svg) ;">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 style="color: white; font-weight: bold; font-family: Passion One, sans-serif;">FIND JOBS
                            EVERYWHERE AND ANYTIME.</h1>
                        <p>Seeking employment with no geographical limits, Be ready to dive into any opportunity,
                            anywhere.</p>
                        <p><a class="btn btn-lg btn-blue"
                                style="color: white; font-weight: bold; font-family: Passion One, sans-serif;"
                                href="#">REGISTER NOW <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
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
                <div class="card border-light-subtle border-5 shadow-lg me-0 me-lg-4 h-100">
                    <img src="img/build8.png" class="card-img-top rounded-0" alt="...">
                    <div class="card-body text-center">

                        <a href="JOBS_search.php" class="btn btn-yellow btn-lg hover3 fw-bold fs-2 hovver"
                            style=" font-weight: bold; font-family: Passion One, sans-serif;">SEARCH FOR A JOB</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4 mt-4 scroll2 ">
                <div class="card border-yellow border-5 shadow-lg ms-0 ms-lg-4  h-100">
                    <img src="img/build6.png" class="card-img-top rounded-0" alt="...">
                    <div class="card-body text-center">

                        <a href="JOBS_list_all.php" class="btn btn-blue btn-lg hover3 fw-bold fs-2 "
                            style=" font-weight: bold; font-family: Passion One, sans-serif;">LIST ALL JOB OFFERS</a>
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
                <img class="bw" src="img/111.svg">
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
                <img class="bw" src="img/111.svg">
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
    include ('include/footer.php');
    ?>
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


        $(document).ready(function () {
            //select the input with the id live_search
            //using the id we can perform an event on the input type
            // Select the input with the id live_search and both select elements
            $("#live_search, #countries, #industries").on('keyup change', function () {
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
                    success: function (data) {
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