
<?php
include('config.php');
include('header.php');
?>


<?php
$pagename = "OrderCostSummary.php";
$tablename = 'OrderSummary';
?>

<div class="container-fluid">
<?php include ('breadcrums.php')?>
  <?php include('messages.php'); ?>
  
  
  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="float:left"><?php echo $tablename; ?></h6>
              <!--<a href = "category_edit.php?id=0">
                   <h6 class="m-0 font-weight-bold text-primary" style="float:right"><i class="far fa-plus-square"></i> Create</h6>
              </a> -->   
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
        <th></th>
        <th>sr.</th>
        <th>Date</th>
        <th>Ammount</th>
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
            
$result = "SELECT `Sr`, `Date`, SUM(`Cost`) AS Cost FROM `OrderSummary` GROUP BY `Date` order BY `Date` DESC";
  
$data = mysqli_query($DBcon,$result);
$sr = 1;
while($row = mysqli_fetch_array($data))
{
            ?>
      <tr href="abc.php">
        <td><a href="Orders.php?date=<?php echo $row['Date']; ?>"><i class="far fa-edit"></i></td></a>
        <td><?php echo $sr; ?></td>
        <td><?php echo $row['Date']; ?></td>
        <td><?php echo $row['Cost']; ?></td>
        <?php $TotalCost = $TotalCost + $row['Cost']; ?>
      </tr>
      <?php
      $sr = $sr+1;
}
      ?>
                   
                  </tbody>
                </table>
                Total Cost :- <?php echo $TotalCost; ?>
                
              </div>
            </div>
          </div>
  
  
  

  
</div>



<?php
include('footer.php');

?>