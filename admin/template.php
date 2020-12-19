
<?php
include('config.php');
include('header.php');
?>


<?php
$pagename = "Orders.php";
?>

<div class="container-fluid">
    <div>
        <div style = "text-align: left; width:50%;">

         </div>
    
    <div style = "text-align: right;">
        
    <a href = "Orders_edit.php?id=0"><button class="btn btn-primary"><i class="far fa-plus-square"></i> Create</button></a>
        </div>
  </div>
  <?php include('messages.php'); ?>
  
  
  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Orders</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
        <th>sr.</th>
        <th>Col1</th>
        <th>Col2</th>
        <th>Col3</th>
        <th>Col4</th>
        <th></th>
      </tr>
                  </thead>
                  <tfoot>
                    <tr>
        <th>sr.</th>
        <th>Col1</th>
        <th>Col2</th>
        <th>Col3</th>
        <th>Col4</th>
        <th></th>
      </tr>
                  </tfoot>
                  <tbody>
                    <?php
            
$result = "SELECT * FROM `Orders`";
  
$data = mysqli_query($DBcon,$result);
$sr = 1;
while($row = mysqli_fetch_array($data))
{
            ?>
      <tr>
        <td><?php echo $sr; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[4]; ?></td>
        <td><?php echo $row[5]; ?></td>
        <td><a href="Orders_edit.php?id=<?php echo $row[0]; ?>">--></td></a>
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