<?php

function selectsingle($id, $tablename)
{
    include('config.php');
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
    
    $result = "SELECT * FROM `".$tablename."` WHERE `".$key."`= $id";
    $data = mysqli_query($DBcon,$result);
    $row = mysqli_fetch_array($data);
    return $row;
}


?>