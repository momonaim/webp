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
            <form action="phpcode/create_job_offer_code.php" class="needs-validation " name="admin_form" id="admin_form"
                method="POST">


                <div class="card border-primary scroll4 shadow-lg">

                    <div class="card-body">
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

                                <div class="col-12">
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
                                <!-- SKILL VALUES STUFF -->
                                <div class="col-12">
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                        <button class="btn btn-outline-primary btn-sm mb-2" type="button"
                                            onclick="addSkill()">Add Another
                                            Skill</button>
                                    </div>
                                    <div id="skills">
                                        <div class="skill">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="skill_name_1">Skill Name:</label>
                                                    <input class="form-control" type="text" id="skill_name_1"
                                                        name="skill_name[]" required>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="skill_value_1">Skill Value:</label>
                                                    <input class="form-control" type="number" id="skill_value_1"
                                                        name="skill_value[]" required>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <br><br>


                                </div>
                                <script>
                                    let skillCounter = 1;

                                    function addSkill() {
                                        skillCounter++;

                                        const skillsDiv = document.getElementById('skills');
                                        const newSkillDiv = document.createElement('div');
                                        newSkillDiv.classList.add('skill');
                                        newSkillDiv.innerHTML = `<br>
            <div class="row">
                <div class="col-sm-6">
                <label for="skill_name_${skillCounter}">Skill Name:</label>
                <input class="form-control" type="text" id="skill_name_${skillCounter}" name="skill_name[]" required>
                </div>
                <div class="col-sm-6">
                <label  for="skill_value_${skillCounter}">Skill Value:</label>
                <input class="form-control" type="number" id="skill_value_${skillCounter}" name="skill_value[]" required>
              </div></div>
            `;
                                        skillsDiv.appendChild(newSkillDiv);
                                    }
                                </script>


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

<script type="text/javascript" src="js/scroll.js"></script>





</body>

</html>