<?php
include('header.php');
include('config.php');
include('functions.php');
$id = $_GET['id'];
$VendorID = $_GET['VendorID'];
$tablename = 'Orders';
$pagename = 'Orders_edit.php';
$listpage = 'Orders.php';
$FinalPrefix ="Edit";
$print="X";
?>
<div class="container-fluid">
   
<?php include('breadcrums.php');?>
    <?php include('messages.php'); ?>
    <br>
<div class="row">
    <div class="col-sm-4">

   


        
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
       
                  <input readonly type="hidden"  class="form-control" id="OrderID" placeholder="OrderID" value = "<?php echo $Orders[OrderID]; ?>" name = "id">
                
       <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="TransactionID">TransactionID</label>
                  <input readonly type="text"  class="form-control" id="TransactionID" placeholder="TransactionID" value = "<?php echo $Orders[TransactionID]; ?>" name = "TransactionID">
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
                  <label for="Date">Date</label>
                  <input type="date"  class="form-control" id="Date" placeholder="Date" value = "<?php echo $Orders[Date]; ?>" name = "Date">
                </div>
                
       </div>
       
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="TotalAmount">TotalAmount</label>
                  <?php 
        $OrderID = $Orders['OrderID'];
        $result1 = "SELECT SUM(Cost) FROM `orderdetails` WHERE `Orderid` = $OrderID";
        $data1 = mysqli_query($DBcon,$result1);
        $row1 = mysqli_fetch_array($data1);
        
        ?>
                  <input readonly type="text"  class="form-control" id="TotalAmount" placeholder="TotalAmount" value = "<?php echo $row1[0]; ?>" name = "TotalAmount">
                </div>
                
       </div>
       
       
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="PaymentStatus">PaymentStatus</label>
                 
                  <select class="form-control" id="PaymentStatus" placeholder="PaymentStatus" name = "PaymentStatus" >
                      <option value="<?php echo $Orders[PaymentStatus]; ?>"><?php echo $Orders[PaymentStatus]; ?></option>
                      <option value="Pending">Pending</option>
                      <option value="Paid">Paid</option>
                  </select>
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="PaymentMode">PaymentMode</label>
                  
                  <?php formfieldprepare($Orders[PaymentMode], $tablename, 'PaymentMode', 'PaymentMode', 'PaymentMode', 'select', ""); ?>
                </div>
                
       </div>
       
       <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ContactNo">ContactNo</label>
                  <input type="text"  class="form-control" id="ContactNo" placeholder="ContactNo" value = "<?php echo $Orders[ContactNo]; ?>" name = "ContactNo">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="Address">Address</label>
                  <input type="text"  class="form-control" id="Address" placeholder="Address" value = "<?php echo $Orders[Address]; ?>" name = "Address">
                </div>
                
       </div>
       
       <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="DeliveryCharges">DeliveryCharges</label>
                  <input type="text"  class="form-control" id="DeliveryCharges" placeholder="DeliveryCharges" value = "<?php echo $Orders[DeliveryCharges]; ?>" name = "DeliveryCharges">
                </div>
                
       </div>
       
       <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="EmailID">EmailID</label>
                  <input type="text"  class="form-control" id="EmailID" placeholder="EmailID" value = "<?php echo $Orders[EmailID]; ?>" name = "EmailID">
                </div>
                
       </div>

                  <input type="hidden"  class="form-control" id="OTP" placeholder="OTP" value = "<?php echo $Orders[OTP]; ?>" name = "OTP">
               
               
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="OrderStatus">OrderStatus</label>
                  <input type="text"  class="form-control" id="OrderStatus" placeholder="OrderStatus" value = "<?php echo $Orders[OrderStatus]; ?>" name = "OrderStatus">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="State">State</label>
                  <input type="text"  class="form-control" id="State" placeholder="State" value = "<?php echo $Orders[State]; ?>" name = "State">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="City">City</label>
                  <input type="text"  class="form-control" id="City" placeholder="City" value = "<?php echo $Orders[City]; ?>" name = "City">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="Pin">Pin</label>
                  <input type="text"  class="form-control" id="Pin" placeholder="Pin" value = "<?php echo $Orders[Pin]; ?>" name = "Pin">
                </div>
                
       </div>
       
       <?php
            $CreatedAt = $Orders[CreatedAt];
            $ChangedAt = $Orders[ChangedAt];
            include('admindata.php');
       ?>
       
        <input type ="submit" class="btn btn-primary">
</form>
 </div>
 <?php
 if($id!=0)
        {
            ?>
    <div class="col-sm-8">
        
        
     <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="float:left">Orders</h6>
              <a href = "orderdetails_edit.php?id=0&OrderID=<?php echo $id;?>">
                  <h6 class="m-0 font-weight-bold text-primary" style="float:right"><i class="far fa-plus-square"></i> Add</h6>
                  </a>
              
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
        <th></th>
        <th>sr.</th>
        <th>ProductName </th>
        <th>Quantity</th>
        <th>Unit</th>
        <th>Cost</th>
        <th>ProductStatus</th>
        
      </tr>
                  </thead>
                  
                  <tbody>
                    <?php
            
$result = "SELECT * FROM `OrderSummary` WHERE `OrderID` = $id AND `VendorID` = $VendorID";

$data = mysqli_query($DBcon,$result);
$sr = 1;
while($row = mysqli_fetch_array($data))
{
            ?>
      <tr>
         <td><a href="orderdetails_edit.php?id=<?php echo $row[0];?>&OrderID=<?php echo $id;?>&VendorID=<?php echo $VendorID;?>"><i class="far fa-edit"></td></a>
        <td><?php echo $sr; ?></td>
        <td><?php echo $row['ProductName']; ?></td>
        <td><?php echo $row['Quantity']; ?></td>
        <td><?php echo $row['Unit']; ?></td>
        <td><?php echo $row['Cost']; ?></td>
        <td><?php echo $row['ProductStatus']; ?></td>
       
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
  }
  ?>
</div>

<?php
include('footer.php');
?>