<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Our Soil</title>
<script src="http://cdn.ckeditor.com/4.6.2/full-all/ckeditor.js"></script>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
 <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<?php 

session_start();
include('config.php');

/*if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
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
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}*/

/*if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}*/

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Webslesson Demo | Simple PHP Mysql Shopping Cart</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<br />
		<div class="container">
			<br />
			<br />
			<br />
			<h3 align="center">Tutorial - <a href="http://www.webslesson.info/2016/08/simple-php-mysql-shopping-cart.html" title="Simple PHP Mysql Shopping Cart">Simple PHP Mysql Shopping Cart</a></h3><br />
			<br /><br />
			Count<span class="ccount" id="ccount"></span>
			<?php
				$query = "SELECT * FROM products ORDER BY `ProdcutID` ASC";
				$result = mysqli_query($DBcon, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form>
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="../../<?php echo $row["Thumbnail"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["ProdctName"]; ?></h4>

						<h4 class="text-danger">Rs <?php echo $row["Cost"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />
                        <input type="hidden" name="id" value="<?php echo $row["ProdcutID"]; ?>" />
						<input type="hidden" name="hidden_name" value="<?php echo $row["ProdctName"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["Cost"]; ?>" />
                        

            
                        <input type="submit" style="margin-top:5px;" class="addcart btn btn-success"  value="submit" name="submit">
                        <a href="ViewCart.php" class="addcart btn btn-primary">View Cart</a>
						<!--<input type="submit" name="submit" style="margin-top:5px;" class="addcart btn btn-success" value="submit">-->

					</div>
				</form>
			</div>
			<?php
			
			?>
			<?php
			
					}
				}
			?>
			
		
    <div id="result">fsfs</div>
			
			
		</div>
	</div>
	<br />
	</body>
</html>

<?php
//If you have use Older PHP Version, Please Uncomment this function for removing error 

/*function array_column($array, $column_name)
{
	$output = array();
	foreach($array as $keys => $values)
	{
		$output[] = $values[$column_name];
	}
	return $output;
}*/
?>



<script>

$(document).ready(function(){
    
    $('.ccount').load('Sopping_cart_add.php',function(){
        //$('#myModal').modal({show:true});
    });
    
    
    $("form").on("submit", function(event){
        event.preventDefault();
 
        var formValues= $(this).serialize();
 
        $.post("Sopping_cart_add.php?action=add", formValues, function(data){
            // Display the returned data in browser
            $("#result").html(data);
        });
        
         $('.ccount').load('Sopping_cart_add.php',function(){
        //$('#myModal').modal({show:true});
    });
        
    });
    
});
</script>