
<?php
include('config.php');
include('header.php');
?>


<?php
$pagename = "Expense.php";
$tablename = 'Expense';
?>

<div class="container-fluid">
<?php include ('breadcrums.php')?>
  <?php include('messages.php'); ?>
  
  
  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="float:left">Expense</h6>
              <a href = "Expense_edit.php?id=0">
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
        <th>ExpenseTitle</th>
        <th>ExpenseNote</th>
        <th>ExpenseCost</th>
        <th>ExpenseDate</th>

        
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
            
$result = "SELECT * FROM `Expense` ORDER BY `ExpenseDate` DESC";
  
$data = mysqli_query($DBcon,$result);
$sr = 1;
while($row = mysqli_fetch_array($data))
{
            ?>
      <tr href="abc.php">
        <td><a href="Expense_edit.php?id=<?php echo $row[0]; ?>"><i class="far fa-edit"></i></td></a>
        <td><?php echo $sr; ?></td>
        <td><?php echo $row['ExpenseTitle']; ?></td>
        <td><?php echo $row['ExpenseNote']; ?></td>
        <td><?php echo $row['ExpenseCost']; ?></td>
        <td><?php echo $row['ExpenseDate']; ?></td>
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