<?php 
				//==========================    this section for message  ==========================================
				$m = isset($_GET['m']) ? $_GET['m'] : '9';
		if($m==0)	{$message 	= "Record has not been saved successfully.";}
		else if($m==1){$message = "Record has been saved successfully.";}
		else if($m==2){$message = "this image name content two dot (.)";}
		else if($m==4){$message = "Record has been updated.";}
		else if($m==5){$message = "Record has not been updated";}
		else if($m==6){$message = "Rrecord has been deleted.";}
		else if($m==7){$message = "Record has not been deleted.";}
		else
		{
			$message = "";
		}
		if($message!=""){
	?>
	 
    										<div class="alert alert-success alert-dismissible " role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <?php echo $message; ?> 
                                            </div>
       <?php }?>	