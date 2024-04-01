<?php 
include('session/session_check.php');
include('header.php');
include('magic_menu.php');

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
        if (isset($_SESSION['status'])) {
            ?>
            <div class="alert alert-success d-flex align-items-center mt-4 container-lg col-md-12 col-lg-7" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg>
  <div>
        &nbsp;<?php echo $_SESSION['status'];?>
  </div>
</div>
<?php 
            // code...
            //now release the session variable
            unset($_SESSION['status']);
        }

         ?>
        <form action="phpcode/create_job_offer_code.php" class="needs-validation " novalidate="" name="admin_form" id="admin_form" method="POST">


       <div class="card border-primary scroll4 shadow-lg">
        <h5 class="card-header text-center fs-2 border-blue bg-primary-subtle" style=" font-weight: bold; font-family: Passion One, sans-serif;">POST A JOB OFFER</h5>
        <div class="card-body">
<div class="">
          <div class="row g-3">

            <div class="col-12">
              <label for="Username" class="form-label">Job Title</label>
              <div class="input-group has-validation">
                <span class="input-group-text">&</span>
                <input type="text" class="form-control" id="job_title" name="job_title" placeholder="example: Software Engineer" required="">
              <div class="invalid-feedback">
                  The job title is required.
                </div>
              </div>
            </div>

            <div class="col-sm-9">
             <label for="address" class="form-label">Job's Description</label>
  <textarea class="form-control" id="description" name="description" style="height: 150px;" placeholder="" required=""></textarea>
                  <div class="invalid-feedback">
                Please enter the company's description.
              </div>

            </div>
            <div class="col-sm-3">
              <label for="address" class="form-label fs-4 ms-3">Job Type</label>
<div class="ms-3">
  <div class="form-check">
    <input id="fullTime" name="jobType" type="radio" class="form-check-input" value="fullTime" checked required>
    <label class="form-check-label" for="fullTime">Full Time</label>
  </div>
  <div class="form-check">
    <input id="partTime" name="jobType" type="radio" class="form-check-input" value="partTime" required>
    <label class="form-check-label" for="partTime">Part Time</label>
  </div>
  <div class="form-check">
    <input id="freelance" name="jobType" type="radio" class="form-check-input" value="freelance" required>
    <label class="form-check-label" for="freelance">Freelance</label>
  </div>
  <div class="form-check">
    <input id="internship" name="jobType" type="radio" class="form-check-input" value="internship" required>
    <label class="form-check-label" for="internship">Internship</label>
  </div>
  <div class="form-check">
    <input id="temporary" name="jobType" type="radio" class="form-check-input" value="temporary" required="">
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
  <textarea class="form-control" id="requirements" name="requirements" style="height: 150px;" placeholder="" required=""></textarea>
                  <div class="invalid-feedback">
                Please enter the job's requirements.
              </div>

            </div>
            <div class="col-sm-6">
                <label for="address" class="form-label">Benefits</label>
  <textarea class="form-control" id="benefits" name="benefits" style="height: 150px;" placeholder="" required=""></textarea>
                  <div class="invalid-feedback">
                Please enter the job's benefits.
              </div>

            </div>
            <hr class="mt-4 mb-2">

            <div class="col-12">
              <div class="fs-4" style="text-align: center;">
              <label for="address" class="form-label">Salary</label><span id="rangeValue"> 500$</span></div>
              <input type="range" class="form-range" min="500" max="100000" step="100" id="salary" name="salary" required=""value="500">
  

<script>
  // Get the range input and the span element
  const rangeInput = document.getElementById('salary');
  const rangeValue = document.getElementById('rangeValue');

  // Add event listener to update the value when the range input changes
  rangeInput.addEventListener('input', function() {
    rangeValue.textContent = ' '+ this.value + '$';
  });
</script>
              <div class="invalid-feedback">
                Please choose a salary.
              </div>
            </div>
                        <hr class="mt-4 mb-2">

              
                  <input type="submit" class="w-100 fs-3 btn btn-blue hover3" placeholder="save" value="POST" name="submit" id="submit" style=" font-weight: bold; font-family: Passion One, sans-serif;">   
            </div>
  </div>
               </div>

 </div></form></div>
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
include('include/footer.php'); ?>