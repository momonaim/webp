<?php 
  include('include/header.php');
  include('include/sidebar.php');
 ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-4 pb-2 mb-1">
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="admins.php">Admins</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Admin</li>
          </ol>
        </nav>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-2 mb-1 border-bottom">
        <h1 class="h2">Admin Form</h1>
      
      </div>
     <div class="container-fluid"></div>
<!-- add admin forum -->
   <!--    <div class="card container-lg col-md-7 col-lg-8 mt-4">
       -->

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

       <div class="card container-lg col-md-12 col-lg-7 mt-4">
        <div class="card-body">
<div class="">
        <h4 class="mb-3">Submit Card</h4>
        <form action="phpcode/phpcode.php" class="needs-validation" novalidate="" name="admin_form" id="admin_form" method="POST">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" id="first_name" name="first_name" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="last_name" name="last_name" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-12">
              <label for="Username" class="form-label">Username</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="">
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>
            <div class="col-12">
              <label for="Email" class="form-label">Email <span class="text-body-secondary"></span></label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required="">
              <div class="invalid-feedback">
                Please enter a valid email address.
              </div>
            </div>
            <div class="col-12">
              <label for="address" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="" required="">
              <div class="invalid-feedback">
                Please enter your password.
              </div>
            </div>
            <div class="col-md-5">
              <label for="country" class="form-label">Admin Type</label>
              <select class="form-select" id="admin_type" name="admin_type" required="">
                <option value="" disabled selected>Choose...</option>
                <option value="Super Admin">Super Admin</option>
                <option value="Admin">Admin</option>

              </select>
              <div class="invalid-feedback">
                Please select a valid Admin Type.
              </div>
            </div> 
          </div>
          <hr class="my-4">
                  <input type="submit" class="w-100 btn btn-primary"  placeholder="save" name="submit" id="submit">   
        </form>
      </div>
  </div>
</div>
    </main>
  </div>
</div>
</div>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script>
    <script src="js/dashboard.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

   <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    


    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.0/js/responsive.bootstrap5.js"></script>

<script type="text/javascript">
new DataTable('#example', {
    responsive: true
});
</script>

<!-- submit check if adding an admin elements are empty -->
<script type="text/javascript" src="js/submit_check.js"></script>





  </body>
</html>
