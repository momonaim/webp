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



<div class="container ">

    <div class="row">
        <div class="container my-5 ">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg bg-white scroll1">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3  scroll1">
                    <h1 class="display-4 fw-bold lh-1 text-body-emphasis">Find great places to work</h1>
                    <p class="lead">At WEBP.com, we understand the importance of finding not just a job, but a
                        fulfilling and rewarding career. Our mission is to connect individuals with companies that
                        prioritize employee satisfaction, growth, and well-being.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">

                        <button type="button" class="btn btn-outline-blue btn-lg px-4 py-1 fw-bold me-md-2 fs-2"
                            style=" font-weight: bold; font-family: Passion One, sans-serif;">REGISTER NOW</button>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg scroll1">
                    <img class="rounded-lg-3" src="img/build11.png" alt="" width="720">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 mb-4 mt-4 h-100 scroll2 hover2">
            <div class="card border-light-subtle border-5 shadow-lg me-0 me-lg-4">
                <img src="img/build7.png" class="card-img-top rounded-0" alt="...">
                <div class="card-body text-center">
                    <h3 class="card-title" style=" font-weight: bold; font-family: Passion One, sans-serif;">WEBP PLUS
                        SERVICE!</h3>
                    <p class="card-text">Subscribe to WEBP PLUS service now and gain access to an unlimited space of
                        career opportunities and talent. Let us empower your success!</p>
                    <a href="#" class="btn btn-yellow btn-lg
fw-bold fs-2 hovver" style=" font-weight: bold; font-family: Passion One, sans-serif;">PRICING!</a>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4 mt-4 h-100 scroll3 hover1">
            <div class="card border-yellow border-5 shadow-lg ms-0 ms-lg-4">
                <img src="img/build6.png" class="card-img-top rounded-0" alt="...">
                <div class="card-body text-center">
                    <h3 class="card-title" style=" font-weight: bold; font-family: Passion One, sans-serif;">WEBP PLUS
                        SERVICE!</h3>
                    <p class="card-text">Subscribe to WEBP PLUS service now and gain access to an unlimited space of
                        career opportunities and talent. Let us empower your success!</p>
                    <a href="#" class="btn btn-blue btn-lg
fw-bold fs-2 " style=" font-weight: bold; font-family: Passion One, sans-serif;">PRICING!</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container my-5">
            <div
                class="row pe-4 ps-0 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg bg-white scroll4">
                <div class="col-lg-4 offset-lg-0 p-0 overflow-hidden shadow-lg scroll4">
                    <img class="rounded-lg" src="img/build22.png" alt="" width="720">
                </div>
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3 scroll4">
                    <h1 class="display-4 fw-bold lh-1 text-body-emphasis">Post a job in minutes</h1>
                    <p class="lead">Post a job in minutes with our highly advanced platform. Create an account, describe
                        your job, and publish – it's that simple. Find your ideal candidate faster than ever before!</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">

                        <button type="button" class="btn btn-outline-blue btn-lg px-4 py-1 fw-bold me-md-2 fs-2"
                            style=" font-weight: bold; font-family: Passion One, sans-serif;">POST A JOB</button>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row mt-5 mb-5 ">
        <div class="col-lg-4 mb-3 scroll5 hover1">
            <div class="card h-100 shadow-lg">
                <div class="card-body">
                    <h5 class="card-title" style=" font-weight: bold; font-family: Passion One, sans-serif;">EXPLORE
                        DIVERSE CAREER OPPORTUNITIES
                    </h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a class="icon-link icon-link-hover"
                        style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);  font-weight: bold; font-family: Passion One, sans-serif;"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                        </svg>
                        READ MORE
                    </a>
                </div>

            </div>
        </div>
        <div class="col-lg-4 mb-3 scroll6 hover1">
            <div class="card h-100 shadow-lg">
                <div class="card-body">
                    <h5 class="card-title" style=" font-weight: bold; font-family: Passion One, sans-serif;">CONNECT
                        WITH TOP-TIER TALENT
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Webp provides you with direct access to a curated pool of top-tier talent,
                            ensuring that you connect with the best candidates for your organization's needs. </p>
                        <a class="icon-link icon-link-hover"
                            style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);  font-weight: bold; font-family: Passion One, sans-serif;"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                            </svg>
                            READ MORE
                        </a>
                </div>

            </div>
        </div>
        <div class="col-lg-4 mb-3 scroll7 hover1">
            <div class="card h-100 shadow-lg scroll4">
                <div class="card-body">
                    <h5 class="card-title" style=" font-weight: bold; font-family: Passion One, sans-serif;">STREAMLINE
                        YOUR HIRING PROCESS
                    </h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a class="icon-link icon-link-hover"
                        style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);  font-weight: bold; font-family: Passion One, sans-serif;"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                        </svg>
                        READ MORE
                    </a>

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
include('include/footer.php'); ?>