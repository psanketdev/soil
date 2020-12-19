
<?php
include('config.php');
include('toolheader.php');
?>
<div class="container-fluid" style="margin-top:80px">
  <h3>Form Creation</h3>
<?php


$tablename = $_GET['tablename'];

if(empty($tablename))
{
?>
<h3>Select Table Name</h3>
<?php
    $result = "SELECT Table_name as TablesName from information_schema.tables where table_schema = '".$DBname."'";
$data = mysqli_query($DBcon,$result);
$i = 1;
while ($tables = mysqli_fetch_array($data))
{
    ?>
    <a href="formcreation.php?tablename=<?php echo $tables[0];?>">
        <?php echo $tables[0];?>
    </a>
    <br>
    <?php
}



}

echo "formfieldprepare(". "$" . "Users[UserCategory], ". "$" ."tablename, 'UserCategory', 'UserCategory', 'UserCategory', 'select', '');";


$result9 = "DESCRIBE `".$tablename."`";
  $j = 0;
$data9 = mysqli_query($DBcon,$result9);
while($row9 = mysqli_fetch_array($data9))
{

         $value = `'` . $row9[0] . `'`;
         $tst1 = '$_POST["';
         $tst2 = '"];';
    echo "$" .$row9[0]. " = " . $tst1 . $value . $tst2 ;
   echo "</br>";
   
    
}
?>
<br><br>

<textarea class="form-control"  width="100%" rows="30"  height ="500px">
<?php
echo '<form method = "post" action = "edit_php.php">
        <input type="hidden"  class="form-control" id="tablename" value = "<?php echo $tablename; ?>" name = "tablename">
        <?php $url = $pagename; ?>
        <input type="hidden"  class="form-control" id="url" value = "<?php echo $url; ?>" name = "url">';
?>

<?php

$result9 = "DESCRIBE `".$tablename."`";
  $j = 0;
$data9 = mysqli_query($DBcon,$result9);
echo '        ';
while($row9 = mysqli_fetch_array($data9))
{
    if(!empty($row9['Key']))
    {
        $name = 'id';
    }
    else
    {
        $name = $row9[0];
    }
    
    $value = `'` . $row9[0] . `'`;
echo '<div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="' . $row9[0]. '">'. $row9[0] . '</label>
                  <input type="text"  class="form-control" id="' . $row9[0] .'" placeholder="' . $row9[0] .'" value = "<?php echo $'.$tablename.'['. $value .']; ?>" name = "'. $name .'">
                </div>
                
       </div>
        ';
                
}

echo '
</form>';


?>
</textarea>
</div>

</body>
</html>