<?php 
  include('include/header.php');
  include('include/sidebar.php');

        //this session unloading is related to the admin_edit.php
        //when reloading the page the data stays in the elements
        $_SESSION['idd']=null;

 ?>


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-4 pb-2 mb-1">
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
           <li class="breadcrumb-item active" aria-current="page">Candidates</li>
          </ol>
        </nav>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-2 mb-1 border-bottom">
        <h1 class="h2">Candidates</h1>
  
      </div>

      

     <div class="container-fluid"></div>

<!-- success card stuff -->
        <?php 
        if (isset($_SESSION['status'])) {
            ?>
            <div class="alert alert-danger d-flex mt-4 container-fluid" role="alert">
  <i class="bi bi-trash-fill"></i>
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
<!-- DATATABLE -->
       <div class=" container-fluid card mt-4">

        <div class="card-body">

    <table id="example" class="table table-striped nowrap" style="width:100%">
        
        <thead>
            <tr>
                <th>#ID</th>                
                <th>Job Title</th>
                <th>Job Type</th>
                <th>Salary</th>
                <th>Job Description</th>
                <th>Requirements</th>
                <th>Benefits</th>
                <th>Creation Date</th>
                <th>Delete</th>

            </tr>
        </thead>
        <tbody>

<?php 
include('connection/db.php');
$query=mysqli_query($conn, "select * from job_offer");
while($row=mysqli_fetch_array($query)){
?>
            <tr>
                <td><?php echo $row['job_id']; ?></td>
                <td><?php echo $row['job_title']; ?></td>
                <td><?php echo $row['job_type']; ?></td>
                <td><?php echo $row['salary']; echo "$";?></td>
                <td><?php echo $row['job_description']; ?></td>
                <td><?php echo $row['requirements']; ?></td>
                <td><?php echo $row['benefits']; ?></td>
                <td><?php echo $row['creation_date']; ?></td>



                <td>
                  <div class="row">
                    <div class="btn-group">  
                      <button onclick="getId(<?php echo $row['job_id']; ?>)"  class="btn btn-danger" id="myBtn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="bi bi-trash-fill"></span></button>
                    </div>
                  </div>
                </td>
            </tr>

                        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Warning!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Data will be permanently deleted.<br>
        ARE YOU SURE?
      </div>
      <div class="modal-footer">    
        </div> <div class="row mx-2 ">
        <div class="col-md-6 ">
            <button id="fff" class="btn btn-danger mb-2 w-100 ">DELETE</button>
        </div>
        <div class="col-md-6">
          <button type="button" class="w-100 btn btn-success" data-bs-dismiss="modal">CANCEL</button>

        </div>
        </div>
        </div>
    </div>
</div>
        <?php }  ?>
        </tbody>
        <tfoot>
            <tr>
                <th>#ID</th>                
                <th>Job Title</th>
                <th>Job Type</th>
                <th>Salary</th>
                <th>Job Description</th>
                <th>Requirements</th>
                <th>Benefits</th>
                <th>Creation Date</th>
                <th>Delete</th>

            </tr>
        </tfoot>
    </table>
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
<script>
//global id
    //var btnValue;
function getId(btnValue) {
    //btnValue = document.getElementById("myBtn").value;
 
document.getElementById("fff").onclick = function() {
 // Specify the URL you want to navigate to
  var url = "phpcode/job_delete.php?del=" + btnValue;
  // Navigate to the URL
  window.location.href = url;
}
}
/*function openLink() {

  // Specify the URL you want to navigate to
  var url = "phpcode/admin_delete.php?del=" + btnValue;
  // Navigate to the URL
  window.location.href = url;
}*/
</script>
  </body>
</html>
