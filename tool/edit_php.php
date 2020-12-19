<?php
include ("toolheader.php");
include ("config.php");
session_start();
$id = $_POST['id'];
$tablename = $_POST['tablename'];
$url = $_POST['url'];
?>

<?php
            
$result9 = "DESCRIBE `".$tablename."`";
  $j = 0;
$data9 = mysqli_query($DBcon,$result9);
while($row9 = mysqli_fetch_array($data9))
{
    if($j==0)
    {
        $value = `''`;
    }
    else
    {
         $value = `'` . $row9[0] . `'`;
    }
   
    $postvalue[$j] = $_POST[$value];   
    
    
$postvalue[$j] = str_replace('"',"&quot;",$postvalue[$j]);
    
    //echo $postvalue[$j];
    $j = $j + 1;
    
    if(!empty($row9['Key']))
    {
        $key = $row9['Field'];
    }
}
        $totalcol = $j - 1; 
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
  <br><br> <br><br>

<div class="container">
    <?php
    if($id > 0)
    {
        
    
        
    
    ?>
<?php

 $sql1 = "UPDATE `".$tablename."` SET ";
$result91 = "DESCRIBE `".$tablename."`";
  $j = 0;
$data91 = mysqli_query($DBcon,$result91);

while($row91 = mysqli_fetch_array($data91))
{
    if($j != 0)
    {
    if($j == $totalcol)
    {
        $sql1 =  $sql1 . "`" . $row91[0] . "` = " . '"' . $postvalue[$j] . '"' ;
    }
    else
    {
        $sql1 =  $sql1 . "`" . $row91[0] . "` = " . '"' . $postvalue[$j] . '"'. ',';
       
    }
    }
     $j = $j + 1;
}
$sql1 =  $sql1 . "WHERE `".$key."` = $id";
    //$sql1 = "UPDATE `jobctg` SET `catg`= '$catg' WHERE `sr` = $id";
        echo $sql1;
            $res1 = mysqli_query($DBcon,$sql1);
?>
<h2>Updated Successfully</h2>
<?php header('Location: '.$url.'?id='.$id.'&m=4'); ?>
            <a href = "<?php echo $url;?>?id=<?php echo $id;?>"><h3>Back To Edit page</h3></a>
<?php
}

else
{
    ?>
    <?php

  $sql1 = "INSERT INTO `".$tablename."` VALUES (";
$result91 = "DESCRIBE `".$tablename."`";
  $j = 0;
$data91 = mysqli_query($DBcon,$result91);

while($row91 = mysqli_fetch_array($data91))
{
    
    if($j == $totalcol)
    {
        $sql1 =  $sql1 . '"' . $postvalue[$j] . '"' ;
    }
    else
    {
       // $sql1 =  $sql1 . "`" . $postvalue[$j] . "`". ',';
       $sql1 =  $sql1 . '"' . $postvalue[$j] . '"'. ',';
       
    }
    
     $j = $j + 1;
}
$sql1 =  $sql1 . ")";

//echo $sql1;
 //  $sql1 = "INSERT INTO `jobctg`(`catg`) VALUES ('".$catg."')";
          $res1 = mysqli_query($DBcon,$sql1);
?>
    <center><h2>Inserted Successfully</h2>
    <?php
    $last_id = $DBcon->insert_id;
    ?>
           <!-- <a href = "index.php"><h3>Back To Home page</h3></a></center>-->
           
           <?php header('Location: '.$url.'?id='.$last_id.'&m=1'); ?>
           <a href = "<?php echo $url;?>?id=<?php echo $last_id;?>"><h3>Back To Edit page</h3></a>
    <?php
}
?>
</div>

</body>
</html>
