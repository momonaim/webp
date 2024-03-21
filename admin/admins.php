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
           <li class="breadcrumb-item active" aria-current="page">Admins</li>
          </ol>
        </nav>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-2 mb-1 border-bottom">
        <h1 class="h2">Admins</h1>
    <div class="btn-toolbar mb-2 mb-md-0 gap-2">
        <a href="admin_add.php" type="button" class="btn btn-primary btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg>&nbsp;Add Admin</a>
        <a href="admin_restore.php" type="button" class="btn btn-outline-primary btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-database-fill-down" viewBox="0 0 16 16">
  <path d="M12.5 9a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7m.354 5.854 1.5-1.5a.5.5 0 0 0-.708-.708l-.646.647V10.5a.5.5 0 0 0-1 0v2.793l-.646-.647a.5.5 0 0 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0M8 1c-1.573 0-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4s.875 1.755 1.904 2.223C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777C13.125 5.755 14 5.007 14 4s-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1"/>
  <path d="M2 7v-.839c.457.432 1.004.751 1.49.972C4.722 7.693 6.318 8 8 8s3.278-.307 4.51-.867c.486-.22 1.033-.54 1.49-.972V7c0 .424-.155.802-.411 1.133a4.51 4.51 0 0 0-4.815 1.843A12 12 0 0 1 8 10c-1.573 0-3.022-.289-4.096-.777C2.875 8.755 2 8.007 2 7m6.257 3.998L8 11c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13h.027a4.55 4.55 0 0 1 .23-2.002m-.002 3L8 14c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.5 4.5 0 0 1-1.3-1.905"/>
</svg>&nbsp;Restore Admin</a>

         
        </div>
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
$query=mysqli_query($conn, "select * from admin_login where status=1");
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
                      <a href="admin_edit.php?edit=<?php echo $row['id']; ?>" class="btn btn-success"><span class="bi bi-pencil-fill"></span></a>
                      
                      <a href="phpcode/admin_fake_delete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="bi bi-trash-fill"></span></a>

                       



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
