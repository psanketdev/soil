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
  $ParamsID = 1;
  $Params = array();
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
    echo $row9['Field'];
    echo '<br>';
    if($row9['Field'] == ProductName)
    {
        $ProdctName = $_POST[$value];
        echo 'a' . $ProdctName;
    }
    
    
    if($row9['Key'] == 'PRI')
    {
        $key = $row9['Field'];
    }
    elseif($row9['Key'] == 'MUL')
    {
        $Params[$ParamsID][0] = $row9['Field'];
        $Params[$ParamsID][1] = $_POST[$value];
        $ParamsID = $ParamsID + 1;
    }
    $j = $j + 1;
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
            
           if(!empty($_POST['Stock']))
           {
               $Stock = $_POST['Stock'];
               $sqltmp1 = "UPDATE `products` SET `Stock`= ".$Stock." WHERE `ProdctName` = '".$ProdctName."'";
               $restmp1 = mysqli_query($DBcon,$sqltmp1);
               echo $sqltmp1;
           }
?>
<h2>Updated Successfully</h2>

<?php
            $urlf = $url . '?id='. $id;
           foreach($Params as $arr)
           {
            $urlf = $urlf . '&'.$arr[0].'='.$arr[1];
           }
           $urlf = $urlf . '&m=4';
           echo $urlf;
?>

<?php //header('Location: '.$url.'?id='.$id.'&m=4');
header('Location: '.$urlf); ?>
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




 //  $sql1 = "INSERT INTO `jobctg`(`catg`) VALUES ('".$catg."')";
          $res1 = mysqli_query($DBcon,$sql1);
          echo $sql1;
?>
    <center><h2>Inserted Successfully</h2>
    <?php
    $last_id = $DBcon->insert_id;
    ?>
           <!-- <a href = "index.php"><h3>Back To Home page</h3></a></center>-->
           
           <?php
if($url == 'orderdetails_edit.php')
{
    $last_id = 0;
}         
            $urlf = $url . '?id='. $last_id;
           foreach($Params as $arr)
           {
            $urlf = $urlf . '&'.$arr[0].'='.$arr[1];
           }
           $urlf = $urlf . '&m=1';
           echo $urlf;
           
           if(!empty($_POST['Stock']))
           {
               $Stock = $_POST['Stock'];
               $Stock = $_POST['Stock'];
               $sqltmp1 = "UPDATE `products` SET `Stock`= ".$Stock." WHERE `ProdctName` = '".$ProdctName."'";
               $restmp1 = mysqli_query($DBcon,$sqltmp1);
               echo $sqltmp1;
           }
           
           //header('Location: '.$url.'?id='.$last_id.'&m=1');
           header('Location: '.$urlf);
           ?>
<h3>Back To Edit page</h3>
    <?php
}
?>
</div>

</body>
</html>
