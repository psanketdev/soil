<?php
include('header.php');
include('config.php');
include('functions.php');
$id = $_GET['id'];
$tablename = 'Users';
$pagename = 'Users_edit.php';
$listpage = 'Users.php';
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
            
        }
        else
        {
        
/*        $result = "SELECT * FROM `".$tablename."` WHERE `ProductID`= $id";
        $data = mysqli_query($DBcon,$result);
        $i = 1;
        $products = mysqli_fetch_array($data);*/
        $Users = selectsingle($id, $tablename);
        }
        ?>
        <form method = "post" action = "edit_php.php">
        <input type="hidden"  class="form-control" id="tablename" value = "<?php echo $tablename; ?>" name = "tablename">
        <?php $url = $pagename; ?>
        <input type="hidden"  class="form-control" id="url" value = "<?php echo $url; ?>" name = "url">
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="UserID">UserID</label>
                  <input readonly type="text"  class="form-control" id="UserID" placeholder="UserID" value = "<?php echo $Users[UserID]; ?>" name = "id">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="UserFname">UserFname</label>
                  <input type="text"  class="form-control" id="UserFname" placeholder="UserFname" value = "<?php echo $Users[UserFname]; ?>" name = "UserFname">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="UserLName">UserLName</label>
                  <input type="text"  class="form-control" id="UserLName" placeholder="UserLName" value = "<?php echo $Users[UserLName]; ?>" name = "UserLName">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ContactNo">ContactNo</label>
                  <input type="text"  class="form-control" id="ContactNo" placeholder="ContactNo" value = "<?php echo $Users[ContactNo]; ?>" name = "ContactNo">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="EmailID">EmailID</label>
                  <input type="text"  class="form-control" id="EmailID" placeholder="EmailID" value = "<?php echo $Users[EmailID]; ?>" name = "EmailID" onkeyup = "getElementById('EmailID').value = getElementById('EmailID').value.toLocaleLowerCase()">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="UserCategory">UserCategory</label>
                  <?php formfieldprepare($Users[UserCategory], $tablename, 'UserCategory', 'UserCategory', 'UserCategory', 'select', ''); ?>
                  
                </div>
                
       </div>
<?php

if($id==0)
{
    $passworddf = 'start1234';
}
else
{
$passworddf = $Users[Password];
}
?>

                  <input type="hidden"  class="form-control" id="Password" placeholder="Password" value = "<?php echo $passworddf; ?>" name = "Password">



                  <input type="hidden"  class="form-control" id="ProfilePhoto" placeholder="ProfilePhoto" value = "<?php echo $Users[ProfilePhoto]; ?>" name = "ProfilePhoto">

       
       <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="Address">Address</label>
                  <input type="text"  class="form-control" id="Address" placeholder="Address" value = "<?php echo $Users[Address]; ?>" name = "Address">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-4">
                  <label for="State">State</label>
                  <input type="text"  class="form-control" id="State" placeholder="State" value = "<?php echo $Users[State]; ?>" name = "State">
                </div>
                
                <div class="form-group col-md-4">
                  <label for="City">City</label>
                  <input type="text"  class="form-control" id="City" placeholder="City" value = "<?php echo $Users[City]; ?>" name = "City">
                </div>
                
                 <div class="form-group col-md-4">
                  <label for="Pincode">Pincode</label>
                  <input type="text"  class="form-control" id="Pincode" placeholder="Pincode" value = "<?php echo $Users[Pincode]; ?>" name = "Pincode">
                </div>
                
       </div>
        
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ProfitPercent">ProfitPercent</label>
                  <input type="text"  class="form-control" id="ProfitPercent" placeholder="ProfitPercent" value = "<?php echo $Users[ProfitPercent]; ?>" name = "ProfitPercent">
                </div>
                
       </div>
       
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="Gender">Gender</label>
                  <input type="text"  class="form-control" id="Gender" placeholder="Gender" value = "<?php echo $Users[Gender]; ?>" name = "Gender">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="DateOfBirth">DateOfBirth</label>
                  <input type="date"  class="form-control" id="DateOfBirth" placeholder="DateOfBirth" value = "<?php echo $Users[DateOfBirth]; ?>" name = "DateOfBirth">
                </div>
                
       </div>
       
       
        <?php 
            $CreatedAt = $Users[CreatedAt];
            $ChangedAt = $Users[ChangedAt];
            include('admindata.php'); 
        ?>

        <input type ="submit" class="btn btn-primary">
</form>
 </div>
    <div class="col-sm">
        <div>
        <?php 
        $Folder = "ProfilePhoto";
        $fieldname = 'ProfilePhoto';
        $Value = $Users[ProfilePhoto];
        imageupdate($Value, $URL, $Folder, $id, $tablename, $pagename, $fieldname, 'Profile Photo');
        ?>
        </div>
        
        <?php
        $UserID = $_SESSION['UserID'];
        if($UserID == $id)
        {
        ?>
        <br><br>
        <?php
            include('ChangePassword.php');
        ?>
        <form name = "ChangePassword" method = "post" >

          
              <div class="form-row">
                <div class="form-group col-md-12">
           <?php
           if($WrongOldPassword == 'X')
           {
           ?>
                <div id = "opswalert" class="alert alert-danger" role="alert">
                    Old Password is Wrong!
                </div>
            <?php
            }
            elseif($PasswordChangeSuccess)
            {
            ?>
                <div class="alert alert-success" role="alert">
                  Success! Your Password has been changed!
                </div>
            <?php
            }
            ?>
                
                  <label for="opsw">Old Password</label>
                  <input type="password" class="form-control" id="opsw" placeholder="Old Password" name = "opsw" value = "">
                </div>
                <div class="form-group col-md-12">
                  <label for="npsw">New Password</label>
                  <input type="password" class="form-control" id="npsw" placeholder="New Password" name = "npsw" value = "">
                </div>
                
                <div class="form-group col-md-12">
                    
                <div  id = "cnfpswalert" class="alert alert-danger" role="alert" style ="display:none">
                    Password Missmatch!
                </div>
                
                  <label for="cnfpsw">Confirm Password</label>
                  <input type="password" class="form-control" id="cnfpsw" placeholder="Confirm Password" name = "cnfpsw" value = "">
                </div>
              </div>
              <input name = "ChangePasswordSBT" type="submit" class="btn btn-primary" onclick="return Validate()">
              </form>
              
              <?php
              }
              ?>
        
    </div>
  
</div>

<?php
include('footer.php');
?>

<script>

 function Validate() {
        var password = document.getElementById("npsw").value;
        var confirmPassword = document.getElementById("cnfpsw").value;
        if (password != confirmPassword) {
            document.getElementById("cnfpswalert").style.display = "block";
            //alert("Passwords do not match.");
            return false;
        }
        return true;
    }

</script>
