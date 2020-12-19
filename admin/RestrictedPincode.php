
<?php
include('config.php');
include('header.php');
?>


<?php
$pagename = "RestrictedPincode.php";
$tablename = 'RestrictedPincode';
?>

<div class="container-fluid">
<?php include ('breadcrums.php')?>
  <?php include('messages.php'); ?>
  
  
  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="float:left"><?php echo $tablename; ?></h6>
              <a href = "RestrictedPincode_edit.php?id=0">
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
        <th>VendorID</th>
        <th>Pincode</th>
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
            
$result = "SELECT * FROM `RestrictedPincode`";
  
$data = mysqli_query($DBcon,$result);
$sr = 1;
while($row = mysqli_fetch_array($data))
{
            ?>
      <tr href="abc.php">
        <td><a href="RestrictedPincode_edit.php?id=<?php echo $row[0]; ?>"><i class="far fa-edit"></i></td></a>
        <td><?php echo $sr; ?></td>
        <td><?php echo $row['VendorID']; ?></td>
        <td><?php echo $row['Pincode']; ?></td>
        
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