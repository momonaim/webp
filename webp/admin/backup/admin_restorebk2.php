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

    <table id="example" class="table table-striped nowrap" style="width:100%">
        
        <thead>
            <tr>
                <th>#ID</th>                
                <th>Email</th>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Admin Type</th>
                <th>Creation Date</th>

                <th>Action</th>

            </tr>
        </thead>
        <tbody>

<?php 
//$counter=0;
//$array;
include('connection/db.php');
$query=mysqli_query($conn, "select * from admin_login where status=2");
while($row=mysqli_fetch_array($query)){
//$counter++;
//$array[$counter]=$row['id'];
?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['admin_email']; ?></td>
                <td><?php echo $row['admin_username']; ?></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['admin_type']; ?></td>
                <td><?php echo $row['date_column']; ?></td>

                <td>
                  <div class="row">
                    <div class="btn-group">
                      
                      
                      <a href="phpcode/admin_restore_code.php?res=<?php echo $row['id']; ?>" class="btn btn-warning "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-database-down" viewBox="0 0 16 16">
  <path d="M12.5 9a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7m.354 5.854 1.5-1.5a.5.5 0 0 0-.708-.708l-.646.647V10.5a.5.5 0 0 0-1 0v2.793l-.646-.647a.5.5 0 0 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0"/>
  <path d="M12.096 6.223A5 5 0 0 0 13 5.698V7c0 .289-.213.654-.753 1.007a4.5 4.5 0 0 1 1.753.25V4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.5 4.5 0 0 1-.813-.927Q8.378 15 8 15c-1.464 0-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13h.027a4.6 4.6 0 0 1 0-1H8c-1.464 0-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10q.393 0 .774-.024a4.5 4.5 0 0 1 1.102-1.132C9.298 8.944 8.666 9 8 9c-1.464 0-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777M3 4c0-.374.356-.875 1.318-1.313C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4"/>
</svg></a>
                      
                      <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="bi bi-trash-fill"></span></a>

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
            <a href="phpcode/admin_delete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger mb-2 w-100 ">DELETE</a>
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
                <th>Email</th>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Admin Type</th>
                <th>Creation Date</th>

                <th>Action</th>

            </tr>
        </tfoot>
    </table>
  </div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>


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

  </body>
</html>
