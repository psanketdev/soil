
<?php
include('config.php');
include('header.php');
?>


<?php
$pagename = "Users.php";
$tablename = 'Users';
?>

<div class="container-fluid">
<?php include ('breadcrums.php')?>
  <?php include('messages.php'); ?>
  
  
  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="float:left">Users</h6>
              <a href = "Users_edit.php?id=0">
                   <h6 class="m-0 font-weight-bold text-primary" style="float:right"><i class="far fa-plus-square"></i> Create</h6>
              </a>    
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
        <th></th>
        <th>sr.</th>
        <th>UserFname</th>
        <th>UserLName</th>
        <th>ContactNo</th>
        <th>EmailID</th>
        <th>UserCategory</th>


        
      </tr>
                  </thead>
                  <!--<tfoot>
                    <tr>
        <th>sr.</th>
        <th>ProdctName</th>
        <th>Cost</th>
        <th>Category</th>
        <th></th>
      </tr>
                  </tfoot>-->
                  <tbody>
                    <?php
            
$result = "SELECT * FROM `Users`";
  
$data = mysqli_query($DBcon,$result);
$sr = 1;
while($row = mysqli_fetch_array($data))
{
            ?>
      <tr href="abc.php">
        <td><a href="Users_edit.php?id=<?php echo $row[0]; ?>"><i class="far fa-edit"></i></td></a>
        <td><?php echo $sr; ?></td>
        <td><?php echo $row[UserFname]; ?></td>
        <td><?php echo $row[UserLName]; ?></td>
        <td><?php echo $row[ContactNo]; ?></td>
        <td><?php echo $row[EmailID]; ?></td>
        <td><?php echo $row[UserCategory]; ?></td>
      </tr>
      <?php
      $sr = $sr+1;
}
      ?>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
  
  
  

  
</div>



<?php
include('footer.php');

?>