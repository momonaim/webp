<?php
include ('session/session_check.php');
include ('header.php');
include ('magic_menu.php');

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





<link href="css/create_candidate.css" rel="stylesheet">

<div class=" container-lg col-md-12 col-lg-7 mt-4">
  <div class="daform2">
    <!-- success card stuff -->
    <?php
    if (isset ($_SESSION['status'])) {
      ?>
      <div class="alert alert-success d-flex align-items-center mt-4 container-lg col-md-12 col-lg-7" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill"
          viewBox="0 0 16 16">
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
    <!-- <form action="phpcode/create_job_offer_code.php" class="needs-validation " novalidate="" name="admin_form"
      id="admin_form" method="POST">


      <div class="card border-primary scroll4 shadow-lg">
        <h5 class="card-header text-center fs-2 border-blue bg-primary-subtle"
          style=" font-weight: bold; font-family: Passion One, sans-serif;">POST A JOB OFFER</h5>
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
                <textarea class="form-control" id="description" name="description" style="height: 150px;" placeholder=""
                  required=""></textarea>
                <div class="invalid-feedback">
                  Please enter the company's description.
                </div>

              </div>
              <div class="col-sm-3">
                <label for="address" class="form-label fs-4 ms-3">Job Type</label>
                <div class="ms-3">
                  <div class="form-check">
                    <input id="fullTime" name="jobType" type="radio" class="form-check-input" value="fullTime" checked
                      required>
                    <label class="form-check-label" for="fullTime">Full Time</label>
                  </div>
                  <div class="form-check">
                    <input id="partTime" name="jobType" type="radio" class="form-check-input" value="partTime" required>
                    <label class="form-check-label" for="partTime">Part Time</label>
                  </div>
                  <div class="form-check">
                    <input id="freelance" name="jobType" type="radio" class="form-check-input" value="freelance"
                      required>
                    <label class="form-check-label" for="freelance">Freelance</label>
                  </div>
                  <div class="form-check">
                    <input id="internship" name="jobType" type="radio" class="form-check-input" value="internship"
                      required>
                    <label class="form-check-label" for="internship">Internship</label>
                  </div>
                  <div class="form-check">
                    <input id="temporary" name="jobType" type="radio" class="form-check-input" value="temporary"
                      required="">
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
                <textarea class="form-control" id="requirements" name="requirements" style="height: 150px;"
                  placeholder="" required=""></textarea>
                <div class="invalid-feedback">
                  Please enter the job's requirements.
                </div>

              </div>
              <div class="col-sm-6">
                <label for="address" class="form-label">Benefits</label>
                <textarea class="form-control" id="benefits" name="benefits" style="height: 150px;" placeholder=""
                  required=""></textarea>
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
                <input type="range" class="form-range" min="500" max="100000" step="100" id="salary" name="salary"
                  required="" value="500">
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

              
              <div class="col-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                  <button class="btn btn-outline-blue btn-sm mb-2" type="button" onclick="addSkill()">Add Another
                    Skill</button>
                </div>
                <div id="skills">
                  <div class="skill">
                    <div class="row">
                      <div class="col-sm-6">
                        <label for="skill_name_1">Skill Name:</label>
                        <input class="form-control" type="text" id="skill_name_1" name="skill_name[]" required>
                        <div class="invalid-feedback">
                          Please choose a skill name.
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <label for="skill_value_1">Skill Value:</label>
                        <input class="form-control" type="number" id="skill_value_1" name="skill_value[]" required>
                        <div class="invalid-feedback">
                          Please choose a skill value.
                        </div>
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
                <div class="invalid-feedback">
                Please choose a skill name.
              </div>
                </div>
                <div class="col-sm-6">
                <label  for="skill_value_${skillCounter}">Skill Value:</label>
                <input class="form-control" type="number" id="skill_value_${skillCounter}" name="skill_value[]" required>
                <div class="invalid-feedback">
                Please choose a skill value.
              </div>
              </div></div>
            `;
                  skillsDiv.appendChild(newSkillDiv);
                }
              </script>


              <hr class="mt-4 mb-2">


              <input type="submit" class="w-100 fs-3 btn btn-blue hover3" placeholder="save" value="POST" name="submit"
                id="submit" style=" font-weight: bold; font-family: Passion One, sans-serif;">
            </div>
          </div>
        </div>

      </div>
    </form> -->

    <form action="phpcode/post_job_code.php" class="needs-validation" name="admin_form" id="admin_form" method="POST">


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
                <textarea class="form-control" id="description" name="description" style="height: 150px;" placeholder=""
                  required=""></textarea>
                <div class="invalid-feedback">
                  Please enter the company's description.
                </div>

              </div>
              <div class="col-sm-3">
                <label for="address" class="form-label fs-4 ms-3">Job Type</label>
                <div class="ms-3">
                  <div class="form-check">
                    <input id="fullTime" name="jobType" type="radio" class="form-check-input" value="fullTime" checked
                      required>
                    <label class="form-check-label" for="fullTime">Full Time</label>
                  </div>
                  <div class="form-check">
                    <input id="partTime" name="jobType" type="radio" class="form-check-input" value="partTime" required>
                    <label class="form-check-label" for="partTime">Part Time</label>
                  </div>
                  <div class="form-check">
                    <input id="freelance" name="jobType" type="radio" class="form-check-input" value="freelance"
                      required>
                    <label class="form-check-label" for="freelance">Freelance</label>
                  </div>
                  <div class="form-check">
                    <input id="internship" name="jobType" type="radio" class="form-check-input" value="internship"
                      required>
                    <label class="form-check-label" for="internship">Internship</label>
                  </div>
                  <div class="form-check">
                    <input id="temporary" name="jobType" type="radio" class="form-check-input" value="temporary"
                      required="">
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
                <textarea class="form-control" id="requirements" name="requirements" style="height: 150px;"
                  placeholder="" required=""></textarea>
                <div class="invalid-feedback">
                  Please enter the job's requirements.
                </div>

              </div>
              <div class="col-sm-6">
                <label for="address" class="form-label">Benefits</label>
                <textarea class="form-control" id="benefits" name="benefits" style="height: 150px;" placeholder=""
                  required=""></textarea>
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
                <input type="range" class="form-range" min="500" max="100000" step="100" id="salary" name="salary"
                  required="" value="500">


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
            </div>
            <div class="card card-body border-primary scroll4 shadow-lg">
              <div class="row g-3">

                <div class="title pb-20 mx-auto">
                  <h2 class="h2 mb-0 ">Add Job's Score</h2>
                </div>
                <div class="clear m-3"></div>

                <div class="title pb-20 mx-auto">
                  <h3 class="h4 mb-0 ">SKILL's score by category</h3>
                </div>
                <div class="clear m-3"></div>

                <div class="col-sm-4 col-md-4 border border-primary p-1 bg-scroll shadow-lg">
                  <div class="form-group">
                    <label>Technical</label>
                    <input type="number" class="form-number" min="0" max="10" step="1" id="tech" name="Technical"
                      required="" value="0">
                  </div>
                </div>
                <div class="col-sm-4 col-md-4 border border-primary p-1 bg-scroll shadow-lg">
                  <div class="form-group">
                    <label>Business</label>
                    <input type="number" class="form-number" min="0" max="10" step="1" id="cre" name="Business"
                      required="" value="0">
                  </div>
                </div>
                <div class="col-sm-4 col-md-4 border border-primary p-1 bg-scroll shadow-lg">
                  <div class="form-group">
                    <label>SoftSkills</label>
                    <input type="number" class="form-number" min="0" max="10" step="1" id="cre" name="SoftSkills"
                      required="" value="0">
                  </div>
                </div>
                <div class="col-sm-4 col-md-4 border border-primary p-1 bg-scroll shadow-lg">
                  <div class="form-group">
                    <label>Healthcare</label>
                    <input type="number" class="form-number" min="0" max="10" step="1" id="cre" name="Healthcare"
                      required="" value="0">
                  </div>
                </div>
                <div class="col-sm-4 col-md-4 border border-primary p-1 bg-scroll shadow-lg">
                  <div class="form-group">
                    <label>Creative</label>
                    <input type="number" class="form-number" min="0" max="10" step="1" id="cre" name="Creative"
                      required="" value="0">
                  </div>
                </div>
                <div class="col-sm-4 col-md-4 border border-primary p-1 bg-scroll shadow-lg">
                  <div class="form-group">
                    <label>Science</label>
                    <input type="number" class="form-number" min="0" max="10" step="1" id="cre" name="Science"
                      required="" value="0">
                  </div>
                </div>
                <!-- Education's score by category -->
                <div class="clear m-3"></div>

                <div class="title pb-20 mx-auto">
                  <h3 class="h4 mb-0 ">Education's score</h3>
                </div>
                <div class="clear m-3"></div>
                <div class="col-sm-4 col-md-4 border border-primary p-1 bg-scroll shadow-lg">
                  <div class="form-group">
                    <label>BAC:</label>
                    <input type="number" class="form-number" min="0" max="10" step="1" id="tech" name="bac" required=""
                      value="0">
                  </div>
                </div>
                <div class="col-sm-4 col-md-4 border border-primary p-1 bg-scroll shadow-lg">
                  <div class="form-group">
                    <label>BAC+2:</label>
                    <input type="number" class="form-number" min="0" max="10" step="1" id="tech" name="bac2" required=""
                      value="0">
                  </div>
                </div>
                <div class="col-sm-4 col-md-4 border border-primary p-1 bg-scroll shadow-lg">
                  <div class="form-group">
                    <label>BAC+3: </label>
                    <input type="number" class="form-number" min="0" max="10" step="1" id="tech" name="bac3" required=""
                      value="0">
                  </div>
                </div>
                <div class="col-sm-4 col-md-4 border border-primary p-1 bg-scroll shadow-lg">
                  <div class="form-group">
                    <label>Bachelor: </label>
                    <input type="number" class="form-number" min="0" max="10" step="1" id="tech" name="bachelor"
                      required="" value="0">
                  </div>
                </div>
                <div class="col-sm-4 col-md-4 border border-primary p-1 bg-scroll shadow-lg">

                  <div class="form-group">
                    <label>MASTER:</label>
                    <input type="number" class="form-number" min="0" max="10" step="1" id="cre" name="mst" required=""
                      value="0">
                  </div>

                </div>
                <div class="col-sm-4 col-md-4 border border-primary p-1 bg-scroll shadow-lg">

                  <div class="form-group">
                    <label>PHD:</label>
                    <input type="number" class="form-number" min="0" max="10" step="1" id="cre" name="phd" required=""
                      value="0">
                  </div>

                </div>

                <!-- Experience's score by year -->
                <div class="clear m-3"></div>

                <div class="title pb-20 mx-auto">
                  <h3 class="h4 mb-0 ">Experience's score</h3>
                </div>
                <div class="clear m-3"></div>
                <div class="col-sm-4 col-md-4 border border-primary p-1 bg-scroll shadow-lg">

                  <div class="form-group">
                    <label>1 year</label>
                    <input type="number" class="form-number" min="0" max="10" step="1" id="tech" name="exp" required=""
                      value="0">
                  </div>

                </div>
                <div class="clear"></div>


              </div>



            </div>

            <hr class="mt-4 mb-2">


            <input type="submit" class="w-100 fs-3 btn btn-primary hover3" placeholder="save" value="POST" name="submit"
              id="submit" style=" font-weight: bold; font-family: Passion One, sans-serif;">
          </div>
        </div>

      </div>
    </form>
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
include ('include/footer.php'); ?>