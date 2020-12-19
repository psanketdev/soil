<?php
include('header.php');
include('config.php');
include('functions.php');
$id = $_GET['id'];
$tablename = 'Orders';
$pagename = 'Orders_edit.php';
$listpage = 'Orders.php';
?>
<div class="container-fluid">
    <center>  <h2>Edit <?php echo $tablename; ?></h2></center>
    <div style = "text-align: right;">
        
    <a href = "delete.php?tablename=<?php echo $tablename; ?>&url=<?php echo $pagename; ?>&list=<?php echo $listpage; ?>&id=<?php echo $id; ?>" onclick="return confirm('Are you sure you want to delete?')"><button class="btn btn-danger"><i class="far fa-trash-alt"></i> Delete</button></a>
        </div>
<div class="row">
    <div class="col-sm">

   

<?php include('messages.php'); ?>
        
        <?php
        
        if($id==0)
        {
            
        }
        else
        {
        
/*        $result = "SELECT * FROM `".$tablename."` WHERE `ProductID`= $id";
        $data = mysqli_query($DBcon,$result);
        $i = 1;
        $products = mysqli_fetch_array($data);*/
        $Orders = selectsingle($id, $tablename);
        }
        ?>
        <form method = "post" action = "edit_php.php">
        <input type="hidden"  class="form-control" id="tablename" value = "<?php echo $tablename; ?>" name = "tablename">
        <?php $url = $pagename; ?>
        <input type="hidden"  class="form-control" id="url" value = "<?php echo $url; ?>" name = "url">
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="OrderID">OrderID</label>
                  <input type="text"  class="form-control" id="OrderID" placeholder="OrderID" value = "<?php echo $Orders[OrderID]; ?>" name = "OrderID">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="CustomerName">CustomerName</label>
                  <input type="text"  class="form-control" id="CustomerName" placeholder="CustomerName" value = "<?php echo $Orders[CustomerName]; ?>" name = "CustomerName">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="TotalAmount">TotalAmount</label>
                  <input type="text"  class="form-control" id="TotalAmount" placeholder="TotalAmount" value = "<?php echo $Orders[TotalAmount]; ?>" name = "TotalAmount">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="PaymentStatus">PaymentStatus</label>
                  <input type="text"  class="form-control" id="PaymentStatus" placeholder="PaymentStatus" value = "<?php echo $Orders[PaymentStatus]; ?>" name = "PaymentStatus">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="PaymentMode">PaymentMode</label>
                  <input type="text"  class="form-control" id="PaymentMode" placeholder="PaymentMode" value = "<?php echo $Orders[PaymentMode]; ?>" name = "PaymentMode">
                </div>
                
       </div>
        <input type ="submit" class="btn btn-primary">
</form>
 </div>
    <div class="col-sm">
      One of three columns
    </div>
  
</div>

<?php
include('footer.php');
?>