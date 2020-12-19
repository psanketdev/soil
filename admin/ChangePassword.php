<?php
include('config.php');
$ChangePasswordSBT = $_POST['ChangePasswordSBT'];
$opsw = $_POST['opsw'];
$npsw = $_POST['npsw'];
$cnfpsw = $_POST['cnfpsw'];

if(isset($ChangePasswordSBT))
{
    if($opsw == $Users['Password'])
    {
        $UserID = $_SESSION['UserID'];
        //Update Logic
        $result = "UPDATE `Users` SET `Password`='".$npsw."' WHERE `UserID` =".$UserID;
        echo $result;
        $data = mysqli_query($DBcon,$result);
        //$user_profile = mysqli_fetch_array($data);
        $PasswordChangeSuccess = 'X';
    }
    else
    {
        $WrongOldPassword = 'X';
    }
}
?>