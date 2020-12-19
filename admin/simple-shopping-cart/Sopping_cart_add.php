<?php 
session_start();
//include('config.php');

   
session_start();
if(isset($_POST["id"]))
{
    

	if(isset($_SESSION["shopping_cart"]))
	{
	    echo  $_POST["id"];
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_POST["id"], $item_array_id))
		{
		     echo  '----';
			$count = count($_SESSION["shopping_cart"]);
			echo $count;
			echo '--';
			$item_array = array(
				'item_id'			=>	$_POST["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_POST["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
	
	echo  $_POST["id"];

}
$count = count($_SESSION["shopping_cart"]);
echo $count ;

?>
