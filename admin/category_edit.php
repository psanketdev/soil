<?php
include('header.php');
include('config.php');
include('functions.php');
$id = $_GET['id'];
$tablename = 'Category';
$pagename = 'category_edit.php';
$listpage = 'category.php';
$FinalPrefix ="Edit";
?>
<div class="container-fluid">
   
<?php include('breadcrums.php');?>

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
        $Category = selectsingle($id, $tablename);
        }
        ?>
        <form method = "post" action = "edit_php.php">
        <input type="hidden"  class="form-control" id="tablename" value = "<?php echo $tablename; ?>" name = "tablename">
        <?php $url = $pagename; ?>
        <input type="hidden"  class="form-control" id="url" value = "<?php echo $url; ?>" name = "url">
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="CategoryID">CategoryID</label>
                  <input readonly type="text"  class="form-control" id="CategoryID" placeholder="CategoryID" value = "<?php echo $Category[CategoryID]; ?>" name = "id">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="CategoryName">CategoryName</label>
                  <input type="text"  class="form-control" id="CategoryName" placeholder="CategoryName" value = "<?php echo $Category[CategoryName]; ?>" name = "CategoryName">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ParentCategory">ParentCategory</label>
                  <?php formfieldprepare($Category[ParentCategory], $tablename, 'ParentCategory', 'Category', 'CategoryName', 'select', ''); ?>

                </div>
                
       </div>
       <input type="hidden"  class="form-control" id="BannerImage" placeholder="BannerImage" value = "<?php echo $Category[BannerImage]; ?>" name = "BannerImage">
        
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
        $fieldname = 'BannerImage';
        $Value = $Category[BannerImage];
        imageupdate($Value, $URL, $Folder, $id, $tablename, $pagename, $fieldname, 'Banner Image');
        ?>
        <hr>
        
        <?php 
        $Folder = "ProductsThumbnail";
        $fieldname = 'Thumbnail';
        $Value = $Category[Thumbnail];
        imageupdate($Value, $URL, $Folder, $id, $tablename, $pagename, $fieldname, 'Thumbnail');
        ?>
        <hr>
        
        <?php
        }
        ?>
    
    </div>
  
</div>

<?php
include('footer.php');
?>