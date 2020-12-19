
<?php 
include('header.php');
include('config.php');
?>

<main>

<!-- Banner start-->
    <div class="carousel slide" data-ride="carousel" id="carousel-1">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="w-100 d-block" src="assets/img/background/bg4.jpg" alt="Slide Image">
            </div>
            <div class="carousel-item">
                <img class="w-100 d-block" src="assets/img/background/bg5.jpg" alt="Slide Image">
            </div>
            <div class="carousel-item">
                <img class="w-100 d-block" src="assets/img/background/bg7.jpg" alt="Slide Image">
            </div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Previous</span></a>
            <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                <span class="carousel-control-next-icon">                   
                </span><span class="sr-only">Next</span></a></div>
    </div>
<!-- Banner end-->

 <!-- register today section start -->
    <section class="register py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6 mb-4">
                    <h2 class="display-4 text-gray font-weight-light mb-1" data-aos="fade">
                        <i class="fa fa-user-plus mr-2" style="color: #081c15;"></i>Register Today</h2>
                    <p class="text-dark">This will help you to get Shop and Service provider near
                        you</p>
                    <!-- <button class="btn btn-primary px-4" type="button">Register</button> -->
                </div>
                <div class="col-md-12 col-lg-6">
                    <h4 class="text-dark fs-20 mb-4 font-weight-normal">Login Here</h4>
                    <form class="" action="#">
                        <div class="form-group">
                            <input type="text" class="form-control m-0" style="width: 100%;height: 40px;"
                                placeholder="Enter Email ID" name="email">
                            <small class="error-text mt-1">Please enter valid details</small>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control m-0" style="width: 100%;height: 40px;"
                                placeholder="Enter Password">
                            <small class="error-text mt-1">Please enter valid details</small>
                        </div>
                        <button class="btn btn-gradient btn-shadow w-50 log mt-3" type="button">Log In</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- register today section end -->

    <!-- show product section start -->
    <section class="show-product">
        <div class="container">
          <div class="row">
                <?php
                    $result = "SELECT * FROM `Category` WHERE `ParentCategory` = ''";
                    $data = mysqli_query($DBcon,$result);
                    //$sr = 1;
                    
                    $rowcount=mysqli_num_rows($data);
                    if($rowcount>3)
                    {
                    while($rootcategory = mysqli_fetch_array($data))
                    {
                ?>
              
              <div class="col-12 col-md-12 col-lg-3 card b-top mb-4">
                    <h3 class="fs-20 font-weight-bold mb-3"><?php echo $rootcategory['CategoryName']; ?></h3>
                    <?php
                    $ParentCategory = $rootcategory['CategoryName'];
                    $result = "SELECT * FROM `Category` WHERE `ParentCategory` = '$ParentCategory' LIMIT 4";
                    $data = mysqli_query($DBcon,$result);
                    $sr = 1;
                    while($category = mysqli_fetch_array($data))
                    {
                        if($sr==1 || $sr==3)
                        {
                    ?>
                    <div class="d-flex align-items-center justify-content-between w-100 mb-4">
                        <?php
                        }
                        ?>
                        <div>
                            <img class="img-fluid img-thumbnail" alt="" src="<?php echo $category['Thumbnail']; ?>">
                            <a href="products.php"><h5><?php echo $category['CategoryName']; ?></h5></a>
                        </div>
                         <?php
                                  if($sr==2 || $sr==4)
                        {
                        ?>
                    </div>
                               </div>
                        <?php
                        }
                        ?>
                        
                    <?php
                    $sr = $sr + 1;
                    }
                        
                   ?>
                  
                  <div>
                    <a href="#FIXME" class="fs-14 a-color">See all category</a>
                  </div> 
              </div>
              
              <?php
                    }
                    }
              ?>

                </div>


            </div>
          </div>
    </section>
    <!-- show product section end -->

    <!-- show producy info start -->
    <section class="product-info">
        <div class="container">
             <?php
                    $result = "SELECT * FROM `Category` WHERE `ParentCategory` = '' LIMIT 3";
                    $data = mysqli_query($DBcon,$result);
                    //$sr = 1;
                    while($rootcategory = mysqli_fetch_array($data))
                    {
                ?>
            
            <div class="ml-4">
                <h2 class="text-dark font-weight-normal"><?php echo $rootcategory['CategoryName']; ?></h2>
            </div>
            
            
            <div class="row">
                <?php
                    $ParentCategory = $rootcategory['CategoryName'];
                    $result = "SELECT * FROM `Category` WHERE `ParentCategory` = '$ParentCategory' LIMIT 4";
                    $data = mysqli_query($DBcon,$result);
                    $sr = 1;
                    while($category = mysqli_fetch_array($data))
                    {
                    ?>
                
                <div class="col-md-3 mb-3">
                    <a href="products.php?CategoryName=<?php echo $category['CategoryName'];?>"><img class="img-fluid" alt="" src="<?php echo $category['Thumbnail']; ?>"></a>
                    <a href="products.php?CategoryName=<?php echo $category['CategoryName'];?>"><h4 class="text-center text-light-gray"><?php echo $category['CategoryName']; ?></h4></a>
                </div>

                
                
                <?php
                    }
                ?>
            </div>
            
            <div class="text-center mt-4">
              <a href="productcategory.php?ParentCategory=<?php echo $ParentCategory;?>" class="btn btn-outline-danger px-5" type="button">View All
             </a>
            </div>
            
            <?php
                    }
            ?>
            
        </div>
    </section>
  <!-- show producy info end -->

  <!-- Product slider-1 start -->
    <section class="product-slider-1">
      <div class="container">
            <div class="ml-4 mb-2 d-flex justify-content-between align-items-center pr-3">
                <h2 class="text-dark font-weight-normal">BestSellers</h2>
                <a href="products.php?BestSellers=X" class="btn btn-primary btn-sm b-radius fs-14">View All</a>
            </div>
            <hr>
            <ul class="card-group product-slider-1-items py-3">  
            <?php
            $result = "SELECT * FROM `products` ORDER BY `Rating` DESC LIMIT 7";
                    $data = mysqli_query($DBcon,$result);
                    $sr = 1;
                    while($products = mysqli_fetch_array($data))
                    {
                        include('productcard.php');
                    }
                ?>

            </ul>	
      </div>
    </section>
    <!-- Product slider-1 end -->

    <!-- Product slider-2 start -->
    <section class="product-slider-2">
      <div class="container">
            <div class="ml-4 mb-2 d-flex justify-content-between align-items-center pr-3">
                <h2 class="text-dark font-weight-normal">Best Deals</h2>
                <a  href="products.php?BestDeals=X" class="btn btn-primary btn-sm b-radius fs-14">View All</a>
            </div>
            <hr>
            <ul class="card-group product-slider-2-items py-3">  

                 <?php
            $result = "SELECT * FROM `products` WHERE `OldCost` != '' ";
            //echo $result;
                    $data = mysqli_query($DBcon,$result);
                    $sr = 1;
                    while($products = mysqli_fetch_array($data))
                    {
                        include('productcard.php');
                    }
                ?>
                 
            </ul>	
      </div>
    </section>
       <!-- Product slider-2 end -->
       
 <!-- contact us section start-->
    <section class="contact">
        <div class="container">
            <div class="contact-clean">
                <form method="post" class="b-radius">
                   <div class="ml-4 mb-4">
                        <h2 class="text-dark font-weight-normal text-center">Contact Us</h2>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Name">
                        <small class="error-text mt-1">Please enter valid details</small>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email">
                        <small class="error-text mt-1">Please enter a valid details.</small>
                    </div>
                    <div class="form-group"><textarea class="form-control" name="message" placeholder="Message" rows="14"></textarea></div>
                    <div class="form-group mt-4">
                        <button class="btn btn-gradient btn-shadow w-100" type="submit">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- contact us section end-->

    <!-- Band trust section start -->
    <section class="band-trust">
        <div class="container">
            <div class="mb-4">
                <h2 class="text-dark font-weight-normal text-center fs-20">Band Of Trust</h2>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-4 col-md-4 col-lg-4 mb-3">
                    <i class="fa fa-heart text-danger" aria-hidden="true"></i>
                    <span class="d-block">Great Selection</span>
                </div>
                <div class="col-4 col-md-4 col-lg-4 middle mb-3">
                    <i class="fa fa-inr text-success" aria-hidden="true"></i>
                    <span class="d-block">Low Price</span>
                </div>
                <div class="col-4 col-md-4 col-lg-4 mb-3">
                    <i class="fa fa-shopping-cart text-warning" aria-hidden="true"></i>
                    <span class="d-block">Speedy Delivery</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Band trust section end -->

</main>

<?php 
    include('footer.php');
?>

<script>

$(document).ready(function(){
    
    $('.ccount').load('Sopping_cart_add.php',function(){
        //$('#myModal').modal({show:true});
    });
    
    
    $("form").on("submit", function(event){
        event.preventDefault();
 
        var formValues= $(this).serialize();
 
        $post("Sopping_cart_add.php?action=add", formValues, function(data){
            // Display the returned data in browser
            $("#result").html(data);
        });
        
         $('.ccount').load('Sopping_cart_add.php',function(){
        //$('#myModal').modal({show:true});
    });
        
    });
    
});
</script>