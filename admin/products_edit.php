<?php
include('header.php');
include('config.php');
include('functions.php');
$id = $_GET['id'];
$tablename = 'products';
$pagename = 'products_edit.php';
$listpage = 'products.php';
$FinalPrefix ="Edit";

?>
<div class="container-fluid">
   
<?php include('breadcrums.php');?>

<div class="row" onload="weightConverter()">
    <div class="col-sm">

   

<?php include('messages.php'); ?>
        
        <?php
        
        if($id==0)
        {
            $UserCategory = $_SESSION['UserCategory'];
            $UserID = $_SESSION['UserID'];
            if($UserCategory=="SuperAdmin")
            {   
                exit();
            }

        }
        else
        {
        
/*        $result = "SELECT * FROM `".$tablename."` WHERE `ProductID`= $id";
        $data = mysqli_query($DBcon,$result);
        $i = 1;
        $products = mysqli_fetch_array($data);*/
        $products = selectsingle($id, $tablename);
        }
        ?>
        <form method = "post" action = "edit_php.php">
        <input type="hidden"  class="form-control" id="tablename" value = "<?php echo $tablename; ?>" name = "tablename">
        <?php $url = $pagename; ?>
        <input type="hidden"  class="form-control" id="url" value = "<?php echo $url; ?>" name = "url">
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ProdcutID">ProdcutID</label>
                  <input type="text"  class="form-control" id="ProdcutID" placeholder="ProdcutID" value = "<?php echo $products[ProdcutID]; ?>" name = "id">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ProdctName">ProdctName</label>
                  <input type="text"  class="form-control" id="ProdctName" placeholder="ProdctName" value = "<?php echo $products[ProdctName]; ?>" name = "ProdctName">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-4">
                  <label for="Cost">Cost</label>
                  <input type="text"  class="form-control" id="Cost" placeholder="Cost" value = "<?php echo $products[Cost]; ?>" name = "Cost">
                </div>
                

            
                <div class="form-group col-md-4">
                  <label for="Per">Per</label>
                  <input type="text"  class="form-control" id="Per" placeholder="Per" value = "<?php echo $products[Per]; ?>" name = "Per">
                </div>
                
                <div class="form-group col-md-4">
                  <label for="Unit">Unit</label>
                  <?php formfieldprepare($products[Unit], $tablename, 'Unit', 'Units', 'Unit', 'select', ""); ?>
                  
                </div>
                
                
       </div>
       <div class="form-row">
            
                <div class="form-group col-md-4">
                  <label for="Stock">Stock Per Unit</label>
                  <input oninput="weightConverter()" onchange="weightConverter()" type="text"  class="form-control" id="Stock" placeholder="Stock" value = "<?php echo $products[Stock]; ?>" name = "Stock">
                </div>
                
                <div class="form-group col-md-4">
                  <label for="Stock">Total Stock</label>
                  <input readonly type="text"  class="form-control" id="Stockiu" placeholder="" value = "" name = "Stockiu">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="Category">Category</label>
                  <?php formfieldprepare($products[Category], $tablename, 'Category', 'Category', 'CategoryName', 'select', "WHERE `ParentCategory` != ' '"); ?>
                  
                </div>
                
       </div>
       
       <div class="form-row">
             <?php
             if($id==0)
             {
                  $VendorID = $_SESSION['UserID'];
             }
             else
             {
                 $VendorID = $products[VendorID];
             }

?>
                <div class="form-group col-md-12">
                  <label for="VendorID">VendorID</label>
                  <input readonly type="text"  class="form-control" id="VendorID" placeholder="VendorID" value = "<?php echo $VendorID; ?>" name = "VendorID">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="Rating">Rating</label>
                  <input readonly type="text"  class="form-control" id="Rating" placeholder="Rating" value = "<?php echo $products[Rating]; ?>" name = "Rating">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ProductDescription">ProductDescription</label>
                  <textarea type="text"  class="form-control" id="ProductDescription" placeholder="ProductDescription"  name = "ProductDescription"><?php echo $products[ProductDescription]; ?></textarea>
                </div>
                
       </div>
       
       <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="TotalSolds">TotalSolds</label>
                  <input type="text"  class="form-control" id="TotalSolds" placeholder="TotalSolds" value = "<?php echo $products[TotalSolds]; ?>" name = "TotalSolds">
                </div>
                
       </div>
       
       <input type="hidden"  class="form-control" id="Image1" placeholder="Image1" value = "<?php echo $products[Image1]; ?>" name = "Image1">
       <input type="hidden"  class="form-control" id="Image2" placeholder="Image2" value = "<?php echo $products[Image2]; ?>" name = "Image2">
       <input type="hidden"  class="form-control" id="Image3" placeholder="Image3" value = "<?php echo $products[Image3]; ?>" name = "Image3">
        <input type="hidden"  class="form-control" id="Image4" placeholder="Image4" value = "<?php echo $products[Image4]; ?>" name = "Image4">
        
        <input type="hidden"  class="form-control" id="Image5" placeholder="Image5" value = "<?php echo $products[Image5]; ?>" name = "Image5">
        
        <input type="hidden"  class="form-control" id="Image6" placeholder="Image6" value = "<?php echo $products[Image6]; ?>" name = "Image6">
       
       <input type="hidden"  class="form-control" id="Thumbnail" placeholder="Thumbnail" value = "<?php echo $products[Thumbnail]; ?>" name = "Thumbnail">
       
    <?php 
            $CreatedAt = $products[CreatedAt];
            $ChangedAt = $products[ChangedAt];
            include('admindata.php'); 
    ?>
       
        <input type ="submit" class="btn btn-primary">
</form>
 </div>
    <div class="col-sm">
        
        <?php
        if($id==0)
        {
            
        }
        else
        {
        
        ?>
        
        <?php 
        $Folder = "ProductsThumbnail";
        $fieldname = 'Thumbnail';
        $Value = $products[Thumbnail];
        imageupdate($Value, $URL, $Folder, $id, $tablename, $pagename, $fieldname, 'Thumbnail');
        ?>
        <hr>
        
        <?php 
        $Folder = "ProductsThumbnail";
        $fieldname = 'Image1';
        $Value = $products[Image1];
        imageupdate($Value, $URL, $Folder, $id, $tablename, $pagename, $fieldname, 'Image1');
        ?>
        
        <hr>
        
        <?php 
        $Folder = "ProductsThumbnail";
        $fieldname = 'Image2';
        $Value = $products[Image2];
        imageupdate($Value, $URL, $Folder, $id, $tablename, $pagename, $fieldname, 'Image2');
        ?>
        
        <hr>
        
        <?php 
        $Folder = "ProductsThumbnail";
        $fieldname = 'Image3';
        $Value = $products[Image3];
        imageupdate($Value, $URL, $Folder, $id, $tablename, $pagename, $fieldname, 'Image3');
        ?>
        
        <hr>
        
        <?php 
        $Folder = "ProductsThumbnail";
        $fieldname = 'Image4';
        $Value = $products[Image4];
        imageupdate($Value, $URL, $Folder, $id, $tablename, $pagename, $fieldname, 'Image4');
        ?>
        
        <hr>
        
        <?php 
        $Folder = "ProductsThumbnail";
        $fieldname = 'Image5';
        $Value = $products[Image5];
        imageupdate($Value, $URL, $Folder, $id, $tablename, $pagename, $fieldname, 'Image5');
        ?>
        <?php
        }
        ?>
    </div>
  
</div>

<?php
include('footer.php');
?>

<script>
 CKEDITOR.replace( 'ProductDescription', {
  height: 300,
  filebrowserUploadUrl: "uploadck.php"
 });
</script>

<script>

$(document).ready(function(){
    var UserCategory = document.getElementById("UserCategory").value;
    if(UserCategory==="SuperAdmin")
    {
        	/*Disable all input type="text" box*/
				$('form input').prop("disabled", true);
				/*Disable textarea using id */
				$('form textarea').prop("disabled", true);
				$('form select').prop("disabled", true);
    }
			
			});

window.onload = function() {
  weightConverter();
};

function weightConverter() {
    var valNum = document.getElementById("Stock").value
    var unit = document.getElementById("Unit").value
    var per = document.getElementById("Per").value
    var num = valNum*per;
    if (unit == 'gm' | unit == 'ml' ) {
        if (num >= 1000)
        {
            num = num/1000;
            if (unit == 'gm'){
                unit = 'Kg';
            }
            
            if (unit == 'ml'){
                unit = 'L';
            }
        }
    }
    var n = num.toFixed(3);
  document.getElementById("Stockiu").value= n +" "+ unit;
}
</script>
