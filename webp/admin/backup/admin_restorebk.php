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
include('connection/db.php');
$query=mysqli_query($conn, "select * from admin_login where status=2");
while($row=mysqli_fetch_array($query)){
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
                      
                      
                      <a href="admin_restore.php?edit=<?php echo $row['id']; ?>" class="btn btn-warning"><span class="bi bi-pencil-fill"></span></a>
                      
                      <a href="admin_fake_delete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="bi bi-trash-fill"></span></a>
                      
                    </div>
                  </div>
                </td>
            </tr>
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
