<?php
include ("header/admin_header.php");
include ("config.php");

$id = $_GET['id'];
$tablename = $_GET['tablename'];
$url = $_GET['url'];
$list = $_GET['list'];
$cnf = $_GET['cnf'];
$cnf = 'X';
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <center>

  <br><br> <br><br>
  
  <?php
  $result9 = "DESCRIBE `".$tablename."`";
  $j = 0;
$data9 = mysqli_query($DBcon,$result9);

while($row9 = mysqli_fetch_array($data9))
{
    if(!empty($row9['Key']))
    {
        $key = $row9['Field'];
    }
                
}
  ?>

<div class="container">
    <?php
    if($cnf == "X")
    {
        //echo 'Deleted Successfully................';
        
        $sql1 ="DELETE FROM `".$tablename."` WHERE `".$key."` = $id";

            $res1 = mysqli_query($DBcon,$sql1);
            
            ?>
            <h2>Deleted Successfully</h2>
            <?php header('Location: '.$list.'?m=6'); ?>
            <a href = "<?php echo $list;?>"><h3>Back To List</h3></a>
            
            <?php
    } 
    else
    { 
            ?>
            <h2>Are you sure to delete?</h2>
            <a href = "delete.php?id=<?php echo $id;?>&cnf=X&tablename=<?php echo $tablename;?>&list=<?php echo $list;?>"><button>Yes</button></a> 
            <a href = "<?php echo $url;?>?id=<?php echo $id;?>"><button>No</button></a>
                <?php
    }
            ?>

</div>

            





  