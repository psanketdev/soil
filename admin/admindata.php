<div class="form-row">
    <?php 
    if($id==0)
    {
        $CreatedAt = gmdate('Y-m-d h:i:s');
    }
    
    ?>
            
                <div class="form-group col-md-12">
                  <label for="CreatedAt">CreatedAt</label>
                  <input readonly type="text"  class="form-control" id="CreatedAt" placeholder="CreatedAt" value = "<?php echo $CreatedAt; ?>" name = "CreatedAt">
                </div>
                
</div>
<div class="form-row">
    
    <?php 
    if($id==0)
    {
        $ChangedAt = $products[ChangedAt]; 
    }
    else
    {
        $ChangedAt = gmdate('Y-m-d h:i:s');
    }

    ?>
            
                <div class="form-group col-md-12">
                  <label for="ChangedAt">ChangedAt</label>
                  <input readonly type="text"  class="form-control" id="ChangedAt" placeholder="ChangedAt" value = "<?php echo $ChangedAt; ?>" name = "ChangedAt">
                </div>
                
</div>