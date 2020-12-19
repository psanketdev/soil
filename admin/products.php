
<?php
include('config.php');
include('header.php');
?>


<?php
$pagename = "products.php";
$tablename = 'products';
?>

<div class="container-fluid">
<?php include ('breadcrums.php')?>
  <?php include('messages.php'); ?>
  
  
  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="float:left">Products</h6>
              <a href = "products_edit.php?id=0">
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
        <th>ProdctName</th>
        <th>Cost </th>
        <th>Per</th>
        <th>Unit </th>
        <th>Category</th>
        <th>Stock</th>
        
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
$UserCategory = $_SESSION['UserCategory'];
$UserID = $_SESSION['UserID'];
if($UserCategory=="SuperAdmin")
{   
    $result = "SELECT * FROM `products`";
}
else
{
    $result = "SELECT * FROM `products` WHERE `VendorID` = $UserID";
}

  
$data = mysqli_query($DBcon,$result);
$sr = 1;
while($row = mysqli_fetch_array($data))
{
            ?>
      <tr href="abc.php">
        <td><a href="products_edit.php?id=<?php echo $row[0]; ?>"><i class="far fa-edit"></i></td></a>
        <td><?php echo $sr; ?></td>
        <td><?php echo $row['ProdctName']; ?></td>
        <td>₹ <?php echo $row['Cost']; ?></td>
        <td><?php echo $row['Per']; ?></td>
        <td><?php echo $row['Unit']; ?></td>
        <td><?php echo $row['Category']; ?></td>
        <td><?php 
        $unit = $row['Unit'];
        $Per = $row['Per'];
        $numVal= $row['Stock'];
        $num = $numVal * $Per;
        if ($unit == 'gm' || $unit == 'ml' ) 
        {
        if ($num >= 1000)
        {
            $num = $num/1000;
            if ($unit == 'gm')
            {
                $unit = 'Kg';
            }
            
            if ($unit == 'ml')
            {
                $unit = 'L';
            }
        }
    }
    
    $n = $num . ' ' . $unit;
        
        echo $n; 
        
        
        ?></td>
        
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