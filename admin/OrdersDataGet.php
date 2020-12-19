<!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
<!------ Include the above in your HEAD tag ---------->
<?php
include('config.php');
$id = $_GET['id'];
$VendorID = $_GET['VendorID'];
echo $id;
echo $VendorID;
?>
<style>
   
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

</style>
<div class="container">
                        <?php
            //echo $id;
//$result = "SELECT * FROM `Orders` ORDER BY `Date` DESC";
$result1 = "SELECT * FROM `OrderSummary` WHERE `OrderID` = $id AND `VendorID` = $VendorID GROUP BY `OrderID`, `VendorID`";
//echo $result1;
  
$data1 = mysqli_query($DBcon,$result1);
$OrderSummary = mysqli_fetch_array($data1);

?>

        <div class="form-row">
            
                <div class="form-group col-md-4">
                  <label for="TransactionID">TransactionID</label>
                  <input readonly type="text"  class="form-control" id="TransactionID" placeholder="TransactionID" value = "<?php echo $OrderSummary[TransactionID]; ?>" name = "TransactionID">
                </div>
                
   
            
                <div class="form-group col-md-4">
                  <label for="CustomerName">CustomerName</label>
                  <input readonly type="text"  class="form-control" id="CustomerName" placeholder="CustomerName" value = "<?php echo $OrderSummary[CustomerName]; ?>" name = "CustomerName">
                </div>
                

            
                <div class="form-group col-md-4">
                  <label for="PaymentStatus">PaymentStatus</label>
                  <input readonly type="text"  class="form-control" id="PaymentStatus" placeholder="PaymentStatus" value = "<?php echo $OrderSummary[PaymentStatus]; ?>" name = "PaymentStatus">
                </div>
                

            
                <div class="form-group col-md-4">
                  <label for="PaymentMode">PaymentMode</label>
                  <input readonly type="text"  class="form-control" id="PaymentMode" placeholder="PaymentMode" value = "<?php echo $OrderSummary[PaymentMode]; ?>" name = "PaymentMode">
                </div>

            
                <div class="form-group col-md-4">
                  <label for="ContactNo">ContactNo</label>
                  <input readonly type="text"  class="form-control" id="ContactNo" placeholder="ContactNo" value = "<?php echo $OrderSummary[ContactNo]; ?>" name = "ContactNo">
                </div>
                

            
                <div class="form-group col-md-4">
                  <label for="Address">Address</label>
                  <input readonly type="text"  class="form-control" id="Address" placeholder="Address" value = "<?php echo $OrderSummary[Address]; ?>" name = "Address">
                </div>
  
            
                <div class="form-group col-md-4">
                  <label for="DeliveryCharges">DeliveryCharges</label>
                  <input readonly type="text"  class="form-control" id="DeliveryCharges" placeholder="DeliveryCharges" value = "<?php echo $OrderSummary[DeliveryCharges]; ?>" name = "DeliveryCharges">
                </div>
                

            
                <div class="form-group col-md-4">
                  <label for="EmailID">EmailID</label>
                  <input readonly type="text"  class="form-control" id="EmailID" placeholder="EmailID" value = "<?php echo $OrderSummary[EmailID]; ?>" name = "EmailID">
                </div>
   
            
                <div class="form-group col-md-4">
                  <label for="OTP">OTP</label>
                  <input readonly type="text"  class="form-control" id="OTP" placeholder="OTP" value = "<?php echo $OrderSummary[OTP]; ?>" name = "OTP">
                </div>
                

            
                <div class="form-group col-md-4">
                  <label for="OrderStatus">OrderStatus</label>
                  <input readonly type="text"  class="form-control" id="OrderStatus" placeholder="OrderStatus" value = "<?php echo $OrderSummary[OrderStatus]; ?>" name = "OrderStatus">
                </div>
 
            
                <div class="form-group col-md-4">
                  <label for="State">State</label>
                  <input readonly type="text"  class="form-control" id="State" placeholder="State" value = "<?php echo $OrderSummary[State]; ?>" name = "State">
                </div>
                

            
                <div class="form-group col-md-4">
                  <label for="City">City</label>
                  <input readonly type="text"  class="form-control" id="City" placeholder="City" value = "<?php echo $OrderSummary[City]; ?>" name = "City">
                </div>
                
 
            
                <div class="form-group col-md-4">
                  <label for="Pin">Pin</label>
                  <input readonly type="text"  class="form-control" id="Pin" placeholder="Pin" value = "<?php echo $OrderSummary[Pin]; ?>" name = "Pin">
                </div>
                
  
            
                <div class="form-group col-md-4">
                  <label for="CreatedAt">CreatedAt</label>
                  <input readonly type="text"  class="form-control" id="CreatedAt" placeholder="CreatedAt" value = "<?php echo $OrderSummary[CreatedAt]; ?>" name = "CreatedAt">
                </div>
                
    
            
                <div class="form-group col-md-4">
                  <label for="ChangedAt">ChangedAt</label>
                  <input readonly type="text"  class="form-control" id="ChangedAt" placeholder="ChangedAt" value = "<?php echo $OrderSummary[ChangedAt]; ?>" name = "ChangedAt">
                </div>
    
            
                <div class="form-group col-md-4">
                  <label for="Date">Date</label>
                  <input readonly type="text"  class="form-control" id="Date" placeholder="Date" value = "<?php echo $OrderSummary[Date]; ?>" name = "Date">
                </div>
                
  
            
                <div class="form-group col-md-4">
                  <label for="VendorFName">VendorFName</label>
                  <input readonly type="text"  class="form-control" id="VendorFName" placeholder="VendorFName" value = "<?php echo $OrderSummary[VendorFName]; ?>" name = "VendorFName">
                </div>
      
            
                <div class="form-group col-md-4">
                  <label for="VendorLName">VendorLName</label>
                  <input readonly type="text"  class="form-control" id="VendorLName" placeholder="VendorLName" value = "<?php echo $OrderSummary[VendorLName]; ?>" name = "VendorLName">
                </div>
                

            
                <div class="form-group col-md-4">
                  <label for="CompanyName">CompanyName</label>
                  <input readonly type="text"  class="form-control" id="CompanyName" placeholder="CompanyName" value = "<?php echo $OrderSummary[CompanyName]; ?>" name = "CompanyName">
                </div>
                
       </div>
    
   
   <div style="overflow-x:auto;">
    <h3 class="panel-title">Products</h3>
  <table>
    <tr>
                        <th>#</th>
                        <th>OrderID</th>
                        <th>ProdcutID</th>
                        <th>ProductName</th>
                        <th>Quantity</th>
                        <th>Unit</th>
                        <th>ProductOrderCost</th>
                        
                         <th>Per</th>
                        <th>UnitCost</th>
                        <th>ProductStatus</th>
                        <th>Settled</th>
                        <th>VendorName</th>
                        <th>CompanyName</th>
    </tr>
   <?php
//$result = "SELECT * FROM `Orders` ORDER BY `Date` DESC";
$result = "SELECT * FROM `OrderSummary` WHERE `OrderID` = $id AND `VendorID` = $VendorID";

  
$data = mysqli_query($DBcon,$result);
$sr = 1;
while($row = mysqli_fetch_array($data))
{
            ?>
                    <tr>
                        <td><?php echo $sr;?></td>
                        <td><?php echo $row['OrderID'];?></td>
                        <td><?php echo $row['ProdcutID'];?></td>
                        <td><?php echo $row['ProductName'];?></td>
                        <td><?php echo $row['Quantity'];?></td>
                        <td><?php echo $row['Unit'];?></td>
                        <td><?php echo $row['ProductOrderCost'];?></td>
                        <td><?php echo $row['Per'];?></td>
                        <td><?php echo $row['UnitCost'];?></td>
                        <td><?php echo $row['ProductStatus'];?></td>
                        <td><?php echo $row['Settled'];?></td>
                        <td><?php echo $row['VendorFName'];?> <?php echo $row['VendorLName'];?></td>
                        <td><?php echo $row['CompanyName'];?></td>
                    </tr>
<?php
$sr = $sr + 1;
}
?>
    
  </table>
</div>
   
   
   
</div>


