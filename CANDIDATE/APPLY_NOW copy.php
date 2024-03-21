<?php
include ('session/session_check.php');
include ('header.php');
include ('../connection/db.php');


$job_id = $_GET['job'];
//used in the apply code to fetch the skills from thedatabase
$_SESSION['job_id'] = $job_id;
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
                    <p class="text-black text-opacity-75">Make your dream Job a reality, sign up now and start applying.
                    </p>
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
                    <p>Seeking employment with no geographical limits, Be ready to dive into any opportunity, anywhere.
                    </p>
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

<!-- fetch the attributs from the job_offer table where the job_id = value from $_GET -->
<?php
$sql = "SELECT * FROM job_offer WHERE job_id = $job_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!-- the apply now form -->
<div class=" container-lg col-md-12 col-lg-7 mt-4">
    <div class="daform2">
        <div class="card border-primary scroll4 shadow-lg">
            <h5 class="card-header text-center fs-2 border-blue bg-blue"
                style="color: white; font-weight: bold; font-family: Passion One, sans-serif;">
                <?php echo strtoupper($row['job_title']); ?>
            </h5>
            <div class="card-body ">
                <form action="phpcode/apply_now_code.php" method="POST">


                    <div class="row g-3">

                        <hr class="mt-4">
                        <div class="col-sm-4">
                            <h5 class="mb-1">Choose Skills</h5>
                            <div class="my-2">
                                <?php

                ?>

                            </div>

                        </div>


                    </div>
                    <hr class="my-4">
                    <input type="submit" class="w-100 py-1 fs-2 btn btn-blue hover3" placeholder="save" value="APPLY"
                        name="submit" id="submit" style=" font-weight: bold; font-family: Passion One, sans-serif;">
                </form>




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