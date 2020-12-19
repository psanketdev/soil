<?php
include('header.php');
include('config.php');
include('functions.php');
$id = $_GET['id'];
$tablename = 'RestrictedPincode';
$pagename = 'RestrictedPincode_edit.php';
$listpage = 'RestrictedPincode.php';
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
        $RestrictedPincode = selectsingle($id, $tablename);
        }
        ?>
        <form method = "post" action = "edit_php.php">
        <input type="hidden"  class="form-control" id="tablename" value = "<?php echo $tablename; ?>" name = "tablename">
        <?php $url = $pagename; ?>
        <input type="hidden"  class="form-control" id="url" value = "<?php echo $url; ?>" name = "url">
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="sr">sr</label>
                  <input readonly type="text"  class="form-control" id="sr" placeholder="sr" value = "<?php echo $RestrictedPincode[sr]; ?>" name = "id">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="VendorID">VendorID</label>
                  <input type="text"  class="form-control" id="VendorID" placeholder="VendorID" value = "<?php echo $RestrictedPincode[VendorID]; ?>" name = "VendorID">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="Pincode">Pincode</label>
                  <input type="text"  class="form-control" id="Pincode" placeholder="Pincode" value = "<?php echo $RestrictedPincode[Pincode]; ?>" name = "Pincode">
                </div>
                
       </div>
       
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="CompanyName">CompanyName</label>
                  <input type="text"  class="form-control" id="CompanyName" placeholder="CompanyName" value = "<?php echo $Users[CompanyName]; ?>" name = "CompanyName">
                </div>
                
       </div>
       
        
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
        }
        ?>
    
    </div>
  
</div>

<?php
include('footer.php');
?>