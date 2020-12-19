<div class="header py-3" >
         
         <a href="index.php"><h6 class="m-0 font-weight-bold text-primary" style="float:left"><i class="fas fa-home"></i> </h6> </a>
         <?php
         if(!empty($listpage))
         {
             
            
         ?>
         <h6 class="m-0 font-weight-bold text-primary" style="float:left"> &nbsp;&nbsp;/&nbsp;&nbsp; </h6>
         <a href="<?php echo $listpage;?>"><h6 class="m-0 font-weight-bold text-primary" style="float:left"><?php echo $tablename; ?> List </h6> </a>
         <?php
         }
         ?>
         <h6 class="m-0 font-weight-bold text-primary" style="float:left"> &nbsp;&nbsp;/&nbsp;&nbsp; </h6>
         <h6 class="m-0 font-weight-bold text-default" style="float:left"><?php echo $FinalPrefix; ?> <?php echo $tablename; ?></h6> 
         
        
         
         <?php
         if(!empty($FinalPrefix))
         {
         ?>
         <a href = "delete.php?tablename=<?php echo $tablename; ?>&url=<?php echo $pagename; ?>&list=<?php echo $listpage; ?>&id=<?php echo $id; ?>" onclick="return confirm('Are you sure you want to delete?')">
         <h6 class="m-0 font-weight-bold text-danger" style="float:right">
            <i class="far fa-trash-alt"></i> Delete
         </h6>
         </a>
        <?php
         }
         ?>
         
          <?php
         if(!empty($print))
         {
         ?>
         <h6 class="m-0 font-weight-bold text-info" style="float:right">
            &nbsp;&nbsp;|&nbsp;&nbsp; 
         </h6>
         
         <a href = "invoice.php?tablename=<?php echo $tablename; ?>&url=<?php echo $pagename; ?>&list=<?php echo $listpage; ?>&id=<?php echo $id; ?>" >
         <h6 class="m-0 font-weight-bold text-info" style="float:right">
            <i class="fas fa-print"></i> Print
         </h6>
         </a>
          
         
        <?php
         }
         ?>
         
</div>
<hr>