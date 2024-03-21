<?php 
  include('include/header.php');
  include('include/sidebar.php');
 ?>


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-4 pb-2 mb-1">
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="admins.php">Admins</a></li>
            <li class="breadcrumb-item active" aria-current="page">Restore Admin</li>
          </ol>
        </nav>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-2 mb-1 border-bottom">
        <h1 class="h2">Admins</h1>
       
      </div>

      

     <div class="container-fluid"></div>

<!-- success card stuff -->
        <?php 
        if (isset($_SESSION['status'])) {
            ?>
            <div class="alert alert-warning d-flex mt-4 container-fluid" role="alert">
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
<!-- success del card stuff -->
        <?php 
        if (isset($_SESSION['statusdel'])) {
            ?>
            <div class="alert alert-danger d-flex mt-4 container-fluid" role="alert">
  <i class="bi bi-trash-fill"></i>
  <div>
        &nbsp;<?php echo $_SESSION['statusdel'];?>
  </div>
</div>
<?php 
            // code...
            //now release the session variable
            unset($_SESSION['statusdel']);
        }

         ?>
<!-- DATATABLE -->
       <div class=" container-fluid card mt-4">

        <div class="card-body">
<!-- jquery datatable fetching method -->
<table id="example" class="table table-striped nowrap " style="width:100%">
     <thead>
            <tr>
                <th>#ID</th>                
                <th>Email</th>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Admin Type</th>
                <th>Creation Date</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody class="restoredata">
           
        </tbody>
         <tfoot>
            <tr>
                <th>#ID</th>
                <th>Email</th>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Admin Type</th>
                <th>Creation Date</th>
                <th>Actions</th>

            </tr>
        </tfoot>
</table>


   
  </div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>
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
            <a href="phpcode/admin_delete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger mb-2 w-100 ">DELETE</a>
        </div>
        <div class="col-md-6">
          <button type="button" class="w-100 btn btn-success" data-bs-dismiss="modal">CANCEL</button>

        </div>
        </div>
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

   <!--<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    -->


    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.0/js/responsive.bootstrap5.js"></script>
<script type="text/javascript" src="js/table.js"></script>

<script type="text/javascript">
    function fetchdata() {
        $.ajax({
            type: "GET",
            url: "phpcode/table_restore.php",
            success: function(response) {
                //console.log("sup boy yeahhhhh");
                //console.log(response);

                //now print the array as table format
                $.each(response, function (key, value) {
                    //print a column fromthe database
                    //console.log(value['id']);
                    $('.restoredata').append('\ <tr>\
                <td>'+value['id']+'</td>\
                <td>'+value['admin_email']+'</td>\
                <td>'+value['admin_username']+'</td>\
                <td>'+value['first_name']+'</td>\
                <td>'+value['last_name']+'</td>\
                <td>'+value['admin_type']+'</td>\
                <td>'+value['date_column']+'</td>\
            </tr>');
                });
            }
        });
    }

$(document).ready(function() {
    // Initialize DataTable
    let table = new DataTable('#example', {
        responsive: true,
        initComplete: function () {
            // Call fetchdata function after table initialization
            fetchdata();
        }
    });
    

});

</script>
  </body>
</html>
