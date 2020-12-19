
<html>
<body>
  <br><br> <br><br>
<div class="container">
    
    <?php

include ("config.php");
$remove = $_GET["remove"];
$removeid = $_GET["removeid"];
$imgtyp = $_POST["imgtyp"];
$id = $_POST["id"];
if(isset($_GET['Folder']))
{
    $Folder = $_GET["Folder"];
    $tablename = $_GET["tablename"];
    $fieldname = $_GET["fieldname"];
    $url = $_GET["url"];
}elseif(isset($_POST['Folder']))
{
    $Folder = $_POST["Folder"];
    $tablename = $_POST["tablename"];
    $fieldname = $_POST["fieldname"];
    $url = $_POST["url"];
}
$target_dir = '../'.$Folder.'/';
$target_dir_tmp = $Folder.'/';
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(empty($remove))
{
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    $target_file_tmp = time(). rand() . $imageFileType;
    $target_file = $target_dir .$target_file_tmp;
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


//$imgname =  $_FILES["fileToUpload"]["name"];
$imgname = $target_dir_tmp . $target_file_tmp;

?>
<h2>Image Successfully Updated</h2>

<?php
}
else
{
    $imgtyp = $_GET['imgtyp'];
    $rmimg = $_GET['rmimg'];
    $imgname = '';
    $id = $removeid;
    //$path = $site_url .'/UserProfile/' . $rmimg;
    $path = '../'.$Folder.'/' . $rmimg;
   echo $path;
  unlink($path);
  echo "<center>";
   echo "<h3>";
    echo "Deleted Successfully<h1>";
     echo "</h3>";
      echo "</center>";
    
    
}
?>
<?php


   // UPDATE `program` SET `img`= 'sv5.jpeg' WHERE `pid` = 1
     $result9 = "DESCRIBE `".$tablename."`";
    $j = 0;
    $data9 = mysqli_query($DBcon,$result9);
    while($row9 = mysqli_fetch_array($data9))
    {
        if($row9['Key']=='PRI')
        {
            $key = $row9['Field'];
        }
    }
   
   
    $sql1 ="UPDATE `".$tablename."` SET `".$fieldname."` = '$imgname' WHERE `".$key."` = $id";
   // $sql1 ="UPDATE `program` SET `img`= 'sv6.jpeg' WHERE `pid` = 1";
            $res1 = mysqli_query($DBcon,$sql1);
            //echo $pid; 

header('Location: '.$url.'?id='.$id.'&m=1');


?>
    <h3><a href="maintain_users_edit.php?id=<?php echo $UserID;?>">Go Back</a></h3>
    </div>