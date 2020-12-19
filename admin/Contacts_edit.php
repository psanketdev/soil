<?php
include('header.php');
include('config.php');
include('functions.php');
$id = $_GET['id'];
$tablename = 'Contacts';
$pagename = 'Contacts_edit.php';
$listpage = 'Contacts.php';
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
        $Contacts = selectsingle($id, $tablename);
        }
        ?>
        <form method = "post" action = "edit_php.php">
        <input type="hidden"  class="form-control" id="tablename" value = "<?php echo $tablename; ?>" name = "tablename">
        <?php $url = $pagename; ?>
        <input type="hidden"  class="form-control" id="url" value = "<?php echo $url; ?>" name = "url">
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ContactID">ContactID</label>
                  <input readonly  type="text"  class="form-control" id="ContactID" placeholder="ContactID" value = "<?php echo $Contacts[ContactID]; ?>" name = "id">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="Name">Name</label>
                  <input readonly  type="text"  class="form-control" id="Name" placeholder="Name" value = "<?php echo $Contacts[Name]; ?>" name = "Name">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="EmailID">EmailID</label>
                  <input readonly type="text"  class="form-control" id="EmailID" placeholder="EmailID" value = "<?php echo $Contacts[EmailID]; ?>" name = "EmailID">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="MobileNo">MobileNo</label>
                  <input readonly type="text"  class="form-control" id="MobileNo" placeholder="MobileNo" value = "<?php echo $Contacts[MobileNo]; ?>" name = "MobileNo">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="Message">Message</label>
                  <textarea readonly class="form-control" id="Message" placeholder="Message" name = "Message"> <?php echo $Contacts[Message]; ?></textarea>
                </div>
                
       </div>

                  <input type="hidden"  class="form-control" id="Seen" placeholder="Seen" value = "<?php echo $Contacts[Seen]; ?>" name = "Seen">
                
       
        <?php
        $CreatedAt = $Contacts[CreatedAt];
        $ChangedAt = $Contacts[ChangedAt];
        include('admindata.php')
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
        }
        ?>
    
    </div>
  
</div>

<?php
include('footer.php');
?>