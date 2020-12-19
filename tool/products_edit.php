<?php
include('toolheader.php');
include('config.php');
include('functions.php');
$id = $_GET['id'];
$tablename = 'products';
$pagename = 'products_edit.php';
$listpage = 'products.php';
?>
<br><br><br><br>
<div class="container">
    <center>  <h2>Edit <?php echo $tablename; ?></h2></center>
    <div style = "text-align: right;">
        
    <a href = "delete.php?tablename=<?php echo $tablename; ?>&url=<?php echo $pagename; ?>&list=<?php echo $listpage; ?>&id=<?php echo $id; ?>" onclick="return confirm('Are you sure you want to delete?')"><button class="btn btn-danger"><i class="far fa-trash-alt"></i> Delete</button></a>
        </div>

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
        $products = selectsingle($id, $tablename);
        }
        ?>
        <form method = "post" action = "edit_php.php">
        <input type="hidden"  class="form-control" id="tablename" value = "<?php echo $tablename; ?>" name = "tablename">
        <?php $url = $pagename; ?>
        <input type="hidden"  class="form-control" id="url" value = "<?php echo $url; ?>" name = "url">

        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ProductID">ProductID</label>
                  <input type="text"  class="form-control" id="ProductID" placeholder="ProductID" value = "<?php echo $products[ProductID]; ?>" name = "id">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ProductSKU">ProductSKU</label>
                  <input type="text"  class="form-control" id="ProductSKU" placeholder="ProductSKU" value = "<?php echo $products[ProductSKU]; ?>" name = "ProductSKU">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ProductName">ProductName</label>
                  <input type="text"  class="form-control" id="ProductName" placeholder="ProductName" value = "<?php echo $products[ProductName]; ?>" name = "ProductName">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ProductPrice">ProductPrice</label>
                  <input type="text"  class="form-control" id="ProductPrice" placeholder="ProductPrice" value = "<?php echo $products[ProductPrice]; ?>" name = "ProductPrice">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ProductWeight">ProductWeight</label>
                  <input type="text"  class="form-control" id="ProductWeight" placeholder="ProductWeight" value = "<?php echo $products[ProductWeight]; ?>" name = "ProductWeight">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ProductCartDesc">ProductCartDesc</label>
                  <input type="text"  class="form-control" id="ProductCartDesc" placeholder="ProductCartDesc" value = "<?php echo $products[ProductCartDesc]; ?>" name = "ProductCartDesc">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ProductShortDesc">ProductShortDesc</label>
                  <input type="text"  class="form-control" id="ProductShortDesc" placeholder="ProductShortDesc" value = "<?php echo $products[ProductShortDesc]; ?>" name = "ProductShortDesc">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ProductLongDesc">ProductLongDesc</label>
                  <input type="text"  class="form-control" id="ProductLongDesc" placeholder="ProductLongDesc" value = "<?php echo $products[ProductLongDesc]; ?>" name = "ProductLongDesc">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ProductThumb">ProductThumb</label>
                  <input type="text"  class="form-control" id="ProductThumb" placeholder="ProductThumb" value = "<?php echo $products[ProductThumb]; ?>" name = "ProductThumb">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ProductImage">ProductImage</label>
                  <input type="text"  class="form-control" id="ProductImage" placeholder="ProductImage" value = "<?php echo $products[ProductImage]; ?>" name = "ProductImage">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ProductCategoryID">ProductCategoryID</label>
                  <input type="text"  class="form-control" id="ProductCategoryID" placeholder="ProductCategoryID" value = "<?php echo $products[ProductCategoryID]; ?>" name = "ProductCategoryID">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ProductUpdateDate">ProductUpdateDate</label>
                  <input type="text"  class="form-control" id="ProductUpdateDate" placeholder="ProductUpdateDate" value = "<?php echo $products[ProductUpdateDate]; ?>" name = "ProductUpdateDate">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ProductStock">ProductStock</label>
                  <input type="text"  class="form-control" id="ProductStock" placeholder="ProductStock" value = "<?php echo $products[ProductStock]; ?>" name = "ProductStock">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ProductLive">ProductLive</label>
                  <input type="text"  class="form-control" id="ProductLive" placeholder="ProductLive" value = "<?php echo $products[ProductLive]; ?>" name = "ProductLive">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ProductUnlimited">ProductUnlimited</label>
                  <input type="text"  class="form-control" id="ProductUnlimited" placeholder="ProductUnlimited" value = "<?php echo $products[ProductUnlimited]; ?>" name = "ProductUnlimited">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ProductLocation">ProductLocation</label>
                  <input type="text"  class="form-control" id="ProductLocation" placeholder="ProductLocation" value = "<?php echo $products[ProductLocation]; ?>" name = "ProductLocation">
                </div>
                
       </div>
       <input type="submit">
    </form>

  
</div>

</body>
</html>