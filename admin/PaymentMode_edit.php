<?php
include('header.php');
include('config.php');
include('functions.php');
$id = $_GET['id'];
$tablename = 'PaymentMode';
$pagename = 'PaymentMode_edit.php';
$listpage = 'PaymentMode.php';
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
        $PaymentMode = selectsingle($id, $tablename);
        }
        ?>
        <form method = "post" action = "edit_php.php">
        <input type="hidden"  class="form-control" id="tablename" value = "<?php echo $tablename; ?>" name = "tablename">
        <?php $url = $pagename; ?>
        <input type="hidden"  class="form-control" id="url" value = "<?php echo $url; ?>" name = "url">
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="Sr">Sr</label>
                  <input type="text"  class="form-control" id="Sr" placeholder="Sr" value = "<?php echo $PaymentMode[Sr]; ?>" name = "id">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="PaymentMode">PaymentMode</label>
                  <input type="text"  class="form-control" id="PaymentMode" placeholder="PaymentMode" value = "<?php echo $PaymentMode[PaymentMode]; ?>" name = "PaymentMode">
                </div>
                
       </div>
        
        <input type ="submit" class="btn btn-primary">
</form>
 </div>
    <div class="col-sm">
        
        <?php 
        $Folder = "ProductsThumbnail";
        $fieldname = 'Thumbnail';
        $Value = $products[Thumbnail];
       // imageupdate($Value, $URL, $Folder, $id, $tablename, $pagename, $fieldname);
        ?>
        
    </div>
  
</div>

<?php
include('footer.php');
?>
