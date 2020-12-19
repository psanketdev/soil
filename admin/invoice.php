 <!DOCTYPE html>
<html lang="en">
<?php $URL = "http://paushtik.esy.es"; ?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Paushtik</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
 <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
 
 <?php
 include('config.php');
 $id=$_GET['id'];
 
 
 $result = "SELECT * FROM `Orders` WHERE `OrderID` = $id";

$data = mysqli_query($DBcon,$result);
$Orders = mysqli_fetch_array($data);


            
$result = "SELECT * FROM `orderdetails` WHERE `OrderID` = $id";

$data = mysqli_query($DBcon,$result);
$sr = 1;
?>
<body>
    <br><br>
    <div class="container">
<center><h2>पौष्टिक </h2></center>

<div style=""><font style="float:left;">OrderID: 000000000<?php echo $Orders[OrderID]; ?></font>
<font style="float:right;"></font><br>
Date: <?php echo $Orders[Date]; ?><br>
Name:  <?php echo $Orders[CustomerName]; ?><br>
Contact No.:  <?php echo $Orders[ContactNo]; ?><br>
Address:  <?php echo $Orders[Address]; ?><br>
<?php $DeliveryCharges = $Orders[DeliveryCharges];?>
</div>
<br>

       

<table class="table">
    <tr>
        <th>Items</th>
        <th>Weight</th>
        <th>Unit Cost</th>
        <th></th>
        <th>Quantity</th>
        <th></th>
        <th>Cost</th>
    </tr>
<?php
while($orderdetails = mysqli_fetch_array($data))
{
?>
<tr>
<td><?php echo $orderdetails[ProductName]; ?></td>
<td>
    <?php
    $unit = $orderdetails[Unit];
    $num = $orderdetails[Quantity] * $orderdetails[Per];
    if ($unit == 'gm' || $unit == 'ml' ) 
    {
        if ($num >= 1000)
        {
            $num = $num/1000;
            if ($unit == 'gm'){
                $unit = 'Kg';
            }
            
            if ($unit == 'ml'){
                $unit = 'L';
            }
        }
    }
    echo $num . ' ' . $unit;
    ?>
    
</td>
<td>₹ <?php echo " ". $orderdetails[UnitCost]; ?></td>
<td>X</td>
<td><?php $Qt = $Qt + $orderdetails[Quantity]; echo $orderdetails[Quantity]; ?></td>
<td>=</td>
<td>₹ <?php $Tc = $Tc + $orderdetails[Cost]; echo $orderdetails[Cost]; ?></td>
</tr>
<?php
}
?>
<?php
if($DeliveryCharges>0)
{
?>
<tr>
<td>DeliveryCharges</td>
<td><b></b></td>
<td><b></b></td>
<td></td>
<td><b></b></td>
<td></td>
<td>₹ <?php $Tc = $Tc + $DeliveryCharges; echo $DeliveryCharges; ?></td>
</tr>
<?php
}
?>
<tr>
<td><b>Total</b></td>
<td><b></b></td>
<td><b></b></td>
<td></td>
<td><b></b></td>
<td></td>
<td><b>₹ <?php echo $Tc; ?></b></td>
</tr>
</table>
</div>
</body>