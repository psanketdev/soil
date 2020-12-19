 <li>
      <div class="card">
                      <figure>
                          <img class="img-fluid img-thumbnail" alt="" src="<?php echo $products['Thumbnail'];?>">
                      </figure>
                      <div class="card-body">
                        <div class="d-flex mb-2">
                              <?php
                            $Rating = $products['Rating'];
                            
                            for ($x = 1; $x <= $Rating; $x++) 
                            {
                            ?>
                                <i class="fa fa-star mr-1" style="color: #ffc940;"></i>
                            <?php
                            }
                            
                            
                            for ($x = 1; $x <= (5 - $Rating); $x++) 
                            {
                            ?>
                                <i class="fa fa-star mr-1" style=""></i>
                            <?php
                            }
                            
                            ?>
                        </div>
                        <h4 class="card-title mb-1 test-dark"><?php echo $products['ProdctName'];?></h4>
                        <span style="text-decoration: line-through;color: rgb(255,14,14);" class=""> <?php
                             if(!empty($products['OldCost']))
                             {
                             ?>
                             &#x20B9;<?php echo $products['OldCost'];?>
                             <?php
                             }
                             ?>
                        </span>
                         <span class="">&#x20B9;<?php echo $products['Cost'];?></span>
                        <div class="card-value mt-2">
                            <a href="productdetail.php?id=<?php echo $products['ProdcutID'];?>" class="btn btn-outline-primary btn-sm">
                                View Details
                            </a>
                             <input type="hidden" name="quantity" value="1" class="form-control" />
                        <input type="hidden" name="id" value="<?php echo $products["ProdcutID"]; ?>" />
                        <input type="hidden" name="hidden_name" value="<?php echo $products["ProdctName"]; ?>" />

                        <input type="hidden" name="hidden_price" value="<?php echo $products["Cost"]; ?>" />
                        

            
                        <!--<input   class="btn btn-outline-success btn-sm"  value="submit" name="submit">-->
                            <button class="btn btn-outline-success btn-sm" type="submit">
                                Add to Cart
                            </button>
                            </form>
                        </div>
                      </div>
                    </div>
                </li> 