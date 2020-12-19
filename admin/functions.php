<?php

function selectsingle($id, $tablename)
{
    include('config.php');
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
    
    $result = "SELECT * FROM `".$tablename."` WHERE `".$key."`= $id";
    //echo $result;
    $data = mysqli_query($DBcon,$result);
    $row = mysqli_fetch_array($data);
    return $row;
}
function formfieldprepare($Value, $TableName, $FieldName, $DropdownTableName, $DropdownFieldName, $Element, $Condition)
{
    include('config.php');
    ?>
    
    <?php
    if($Element == 'select')
    {
        
        ?>
        <select class="form-control" id="<?php echo $FieldName; ?>" placeholder="<?php echo $FieldName; ?>" name = "<?php echo $FieldName; ?>" >
                          <option value="<?php echo $Value;?>"> <?php echo $Value;?></option>
        <?php
    
                
        $result = "SELECT * FROM `".$DropdownTableName. "`". $Condition;
         
        $data = mysqli_query($DBcon,$result);
        $sr = 1;
        while($row = mysqli_fetch_array($data))
        {
                    ?>
                            <option value="<?php echo $row[$DropdownFieldName];?>"> <?php echo $row[$DropdownFieldName];?> </option>
                        <?php      
        
        }
               echo '</select> ';
               //echo $result;
    }
}


function imageupdate($Value, $URL, $Folder, $id, $tablename, $pagename, $fieldname, $title)
{
    ?>
     <form action="upload.php" method="post" enctype="multipart/form-data">
    <?php 
        if($Value!='')
        {
        ?>
        <img src = "../<?php echo $Value; ?>" width = "200px">
        <label><a href="upload.php?remove=X&removeid=<?php echo $id; ?>&rmimg=<?php echo $Value; ?>&Folder=<?php echo $Folder;?>&tablename=<?php echo $tablename;?>&fieldname=<?php echo $fieldname; ?>&url=<?php echo $pagename;?>" onclick="return confirm('Are you sure you want to delete?')"><i class="far fa-window-close"></i> Remove <?php echo $title; ?>:</a></label>
        <?php
        }
        elseif($Value =='')
        {
        ?>
      <label> <?php echo $title; ?></label>
      <div class="col-75">
         <input type="hidden" value="<?php echo $id; ?>" name="id" >
         <input type="hidden" value="<?php echo $Folder; ?>" name="Folder" >
         <input type="hidden" value="<?php echo $tablename; ?>" name="tablename" >
         <input type="hidden" value="<?php echo $fieldname; ?>" name="fieldname" >
         <input type="hidden" value="<?php echo $pagename;?>" name="url" >

         <input required type="file" name="fileToUpload" id="fileToUpload" accept="image/*" >
         <input type="submit" value="Upload Image" name="submit">
    </div>
      <?php
        }
        ?>
        </form>
        <?php
}

?>