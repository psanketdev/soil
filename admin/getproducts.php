<?php
include('config.php');
$products_arr = array();
$ProductName = $_POST['ProductName'];
$result = "SELECT * FROM `products` WHERE `ProdctName`= '$ProductName'";
$data = mysqli_query($DBcon,$result);
while($row = mysqli_fetch_array($data))
{
     $ProdcutID = $row['ProdcutID'];

      $ProdctName = $row['ProdctName'];
       $Cost = $row['Cost'];
      $Category = $row['Category'];
      $Unit = $row['Unit'];
      $Per = $row['Per'];
       $Stock = $row['Stock'];
      $products_arr[] = array("ProdcutID" => $ProdcutID, "ProdctName" => $ProdctName, "Cost" => $Cost, "Category" => $Category, "Unit" => $Unit, "Per" => $Per, "Stock" => $Stock);
}

echo json_encode($products_arr);
?>