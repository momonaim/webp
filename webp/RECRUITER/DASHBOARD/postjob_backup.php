<?php
include ('include/header.php');
include ('include/sidebar.php');

?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-4 pb-2 mb-1">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="rec_dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Post A Job Offer</li>
        </ol>
    </nav>
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-2 mb-1 border-bottom">
        <h1 class="h2">Post A Job Offer</h1>

    </div>


    <link rel="stylesheet" type="text/css" href="../css/scroll.css">


    <div class=" container mt-4">
        <div class="daform2">
            <!-- success card stuff -->
            <?php
            if (isset ($_SESSION['status'])) {
                ?>
                <div class="alert alert-success d-flex align-items-center mt-4 container-lg col-md-12 col-lg-7"
                    role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </svg>
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
            <!-- phpcode/create_job_offer_code.php -->
            <form action="phpcode/post_job_code.php" class="needs-validation" name="admin_form" id="admin_form"
                method="POST">


                <div class="card border-primary scroll4 shadow-lg">

                    <div class="card-body" style="background-color: #e7e8ea;">
                        <div class="">
                            <div class="row g-3">

                                <div class="col-12">
                                    <label for="Username" class="form-label">Job Title</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text">&</span>
                                        <input type="text" class="form-control" id="job_title" name="job_title"
                                            placeholder="example: Software Engineer" required="">
                                        <div class="invalid-feedback">
                                            The job title is required.
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-9">
                                    <label for="address" class="form-label">Job's Description</label>
                                    <textarea class="form-control" id="description" name="description"
                                        style="height: 150px;" placeholder="" required=""></textarea>
                                    <div class="invalid-feedback">
                                        Please enter the company's description.
                                    </div>

                                </div>
                                <div class="col-sm-3">
                                    <label for="address" class="form-label fs-4 ms-3">Job Type</label>
                                    <div class="ms-3">
                                        <div class="form-check">
                                            <input id="fullTime" name="jobType" type="radio" class="form-check-input"
                                                value="fullTime" checked required>
                                            <label class="form-check-label" for="fullTime">Full Time</label>
                                        </div>
                                        <div class="form-check">
                                            <input id="partTime" name="jobType" type="radio" class="form-check-input"
                                                value="partTime" required>
                                            <label class="form-check-label" for="partTime">Part Time</label>
                                        </div>
                                        <div class="form-check">
                                            <input id="freelance" name="jobType" type="radio" class="form-check-input"
                                                value="freelance" required>
                                            <label class="form-check-label" for="freelance">Freelance</label>
                                        </div>
                                        <div class="form-check">
                                            <input id="internship" name="jobType" type="radio" class="form-check-input"
                                                value="internship" required>
                                            <label class="form-check-label" for="internship">Internship</label>
                                        </div>
                                        <div class="form-check">
                                            <input id="temporary" name="jobType" type="radio" class="form-check-input"
                                                value="temporary" required="">
                                            <label class="form-check-label" for="temporary">Temporary</label>
                                        </div>
                                    </div>

                                    <div class="invalid-feedback">
                                        Please choose the job's type.
                                    </div>
                                </div>
                                <hr class="mt-4 mb-2">

                                <div class="col-sm-6">
                                    <label for="address" class="form-label">Requirements</label>
                                    <textarea class="form-control" id="requirements" name="requirements"
                                        style="height: 150px;" placeholder="" required=""></textarea>
                                    <div class="invalid-feedback">
                                        Please enter the job's requirements.
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <label for="address" class="form-label">Benefits</label>
                                    <textarea class="form-control" id="benefits" name="benefits" style="height: 150px;"
                                        placeholder="" required=""></textarea>
                                    <div class="invalid-feedback">
                                        Please enter the job's benefits.
                                    </div>

                                </div>
                                <hr class="mt-4 mb-2">

                                <div class="col-sm-6">
                                    <div class="fs-4" style="text-align: center;">
                                        <label for="address" class="form-label">Salary</label><span id="rangeValue">
                                            500$</span>
                                    </div>
                                    <input type="range" class="form-range" min="500" max="100000" step="100" id="salary"
                                        name="salary" required="" value="500">


                                    <script>
                                        // Get the range input and the span element
                                        const rangeInput = document.getElementById('salary');
                                        const rangeValue = document.getElementById('rangeValue');

                                        // Add event listener to update the value when the range input changes
                                        rangeInput.addEventListener('input', function () {
                                            rangeValue.textContent = ' ' + this.value + '$';
                                        });
                                    </script>
                                    <div class="invalid-feedback">
                                        Please choose a salary.
                                    </div>
                                </div>
                                <hr class="mt-4 mb-2">
                                <!-- SCORING -->

                                <div class="clear"></div>
                                <div class="clear m-3"></div>


                                <div class="title pb-20 mx-auto">
                                    <h2 class="h2 mb-0 ">Add Job's Score</h2>
                                </div>
                                <div class="clear m-3"></div>

                                <div class="title pb-20 mx-auto">
                                    <h3 class="h4 mb-0 ">SKILL's score by category</h3>
                                </div>
                                <div class="clear m-3"></div>

                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label>Technical</label>
                                        <input type="number" class="form-number" min="0" max="10" step="1" id="tech"
                                            name="Technical" required="" value="0">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label>Business</label>
                                        <input type="number" class="form-number" min="0" max="10" step="1" id="cre"
                                            name="Business" required="" value="0">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label>SoftSkills</label>
                                        <input type="number" class="form-number" min="0" max="10" step="1" id="cre"
                                            name="SoftSkills" required="" value="0">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label>Healthcare</label>
                                        <input type="number" class="form-number" min="0" max="10" step="1" id="cre"
                                            name="Healthcare" required="" value="0">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label>Creative</label>
                                        <input type="number" class="form-number" min="0" max="10" step="1" id="cre"
                                            name="Creative" required="" value="0">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label>Science</label>
                                        <input type="number" class="form-number" min="0" max="10" step="1" id="cre"
                                            name="Science" required="" value="0">
                                    </div>
                                </div>
                                <!-- Education's score by category -->
                                <div class="clear m-3"></div>

                                <div class="title pb-20 mx-auto">
                                    <h3 class="h4 mb-0 ">Education's score</h3>
                                </div>
                                <div class="clear m-3"></div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label>BAC:</label>
                                        <input type="number" class="form-number" min="0" max="10" step="1" id="tech"
                                            name="bac" required="" value="0">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label>BAC+2:</label>
                                        <input type="number" class="form-number" min="0" max="10" step="1" id="tech"
                                            name="bac2" required="" value="0">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label>BAC+3: </label>
                                        <input type="number" class="form-number" min="0" max="10" step="1" id="tech"
                                            name="bac3" required="" value="0">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label>Bachelor: </label>
                                        <input type="number" class="form-number" min="0" max="10" step="1" id="tech"
                                            name="bachelor" required="" value="0">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">

                                    <div class="form-group">
                                        <label>MASTER:</label>
                                        <input type="number" class="form-number" min="0" max="10" step="1" id="cre"
                                            name="mst" required="" value="0">
                                    </div>

                                </div>
                                <div class="col-sm-4 col-md-4 ">

                                    <div class="form-group">
                                        <label>PHD:</label>
                                        <input type="number" class="form-number" min="0" max="10" step="1" id="cre"
                                            name="phd" required="" value="0">
                                    </div>

                                </div>

                                <!-- Experience's score by year -->
                                <div class="clear m-3"></div>

                                <div class="title pb-20 mx-auto">
                                    <h3 class="h4 mb-0 ">Experience's score</h3>
                                </div>
                                <div class="clear m-3"></div>
                                <div class="col-sm-4 col-md-4">

                                    <div class="form-group">
                                        <label>1 year</label>
                                        <input type="number" class="form-number" min="0" max="10" step="1" id="tech"
                                            name="exp" required="" value="0">
                                    </div>

                                </div>
                                <div class="clear"></div>






                                <hr class="mt-4 mb-2">


                                <input type="submit" class="w-100 fs-3 btn btn-primary hover3" placeholder="save"
                                    value="POST" name="submit" id="submit"
                                    style=" font-weight: bold; font-family: Passion One, sans-serif;">
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <div class="cleer my-4"></div>
</main>
</div>
</div>
</div>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js">
</script>
<script src="js/dashboard.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>

<script type="text/javascript" src="js/scroll.js"></script>





</body>

</html>