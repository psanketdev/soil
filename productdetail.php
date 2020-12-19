<?php 
include('header.php');
include('config.php');
$id = $_GET['id'];

?>
    <ol class="breadcrumb" style="margin-top: 60px;">
        <li class="breadcrumb-item"><a href="#!"><span>Home</span></a></li>
        <li class="breadcrumb-item"><a href="#!"><span>Library</span></a></li>
        <li class="breadcrumb-item"><a href="#!"><span>Data</span></a></li>
    </ol>

<?php
            $result = "SELECT * FROM `products` WHERE `ProdcutID` = $id";
           // echo $result;
                    $data = mysqli_query($DBcon,$result);
                    $sr = 1;
                    $productdetail = mysqli_fetch_array($data);
                    ?>

    <!-- product details section start-->
    <div class="row my-5">
        <div class="col-md-9 pl-0">
            <div class="wrapper">
                <div class="container">
                    <div class="row">
                        <div>
                            <div class="row">
                                <div class="col-md-5 pl-0">
                                    <div class="" style="width: 100%;">
                                       <!-- <div class="image img-fluid" style="width: 100%;"></div>-->
                                        <div class="" style="width: 100%;height:100%">
                                            <img alt="&quot;" style="width: 100%;"  src="<?php echo $productdetail['Thumbnail'];?>">
                                        </div>
                                    </div>
                                    <div class="row product-thumbnails">
                                        <img class="img-fluid img-thumbnail col-md-3" alt="&quot;" src="<?php echo $productdetail['Image1'];?>">
                                        <img class="img-fluid img-thumbnail col-md-3" alt="&quot;" src="<?php echo $productdetail['Image2'];?>">
                                        <img class="img-fluid img-thumbnail col-md-3" alt="&quot;"
                                            src="<?php echo $productdetail['Image3'];?>">
                                            <img class="img-fluid img-thumbnail col-md-3" alt="&quot;" src="<?php echo $productdetail['Image4'];?>">
                                            <img class="img-fluid img-thumbnail col-md-3" alt="&quot;" src="<?php echo $productdetail['Image5'];?>">
                                            <img class="img-fluid img-thumbnail col-md-3" alt="&quot;" src="<?php echo $productdetail['Image6'];?>">
                                            
                                    </div>
                                </div>
                                <div class="col-md-7 p-0">
                                    <div class="product-details">
                                        <h2 class="font-weight-noraml fs-20 mb-1"><?php echo $productdetail['ProdctName'];?></h2>
                                        <div class="fs-14"><?php echo $productdetail['ProductDescription'];?></div>
                                        <div class="d-flex mt-2">
                                        <h4 class="text-left mr-2 fs-20" style="text-decoration: line-through;color: rgb(255,14,14);"><i class="fa fa-dollar"></i><?php echo $productdetail['OldCost'];?></h4>
                                        <h2 class="text-left text-success fs-20"><i class="fa fa-dollar"></i><?php echo $productdetail['Cost'];?></h2>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button class="btn btn-info center-block mr-3" type="button"><i class="fa fa-cart-plus"></i> Add to Cart</button>
                                        <button class="btn btn-danger center-block" type="button"><i class="fa fa-comments"></i> Ask Questions</button></div>
                                    </div>
                                   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div>
                <h2 class="font-weight-normal mb-3 fs-20">Reviews</h2>
                <div><i class="fa fa-star" style="margin: 5px;color: #ffc940;"></i><i class="fa fa-star" style="margin: 5px;color: #ffc940;"></i><i class="fa fa-star" style="margin: 5px;color: #ffc940;"></i><i class="fa fa-star" style="margin: 5px;"></i>
                    <i
                        class="fa fa-star" style="margin: 5px;"></i>
                </div><span>Total Reviews (20)</span>
                <hr>
                <div class="mb-3 p-0 bg-light p-2">
                    <span class="text-dark"><i class="fa fa-user-o mr-2"></i>Onkar Kumbhar</span>
                    <div>
                        <i class="fa fa-star" style="color: #ffc940;"></i>
                        <i class="fa fa-star" style="color: #ffc940;"></i>
                        <i class="fa fa-star" style="color: #ffc940;"></i>
                        <i class="fa fa-star" style=""></i>
                        <i class="fa fa-star" style=""></i>
                    </div>
                    <p>Nice Product&nbsp;</p>
                </div>
                <div class="mb-3 p-0 bg-light p-2">
                    <span class="text-dark"><i class="fa fa-user-o mr-2"></i>Sushil Jadhav</span>
                    <div>
                        <i class="fa fa-star" style="color: #ffc940;"></i>
                        <i class="fa fa-star" style="color: #ffc940;"></i>
                        <i class="fa fa-star" style="color: #ffc940;"></i>
                        <i class="fa fa-star" style=""></i>
                        <i  class="text-dark"class="fa fa-star" style=""></i>
                    </div>
                    <p>Nice Product&nbsp;</p>
                </div>
            </div><a href="#!" style="margin: 5px;">See All Reviews</a><a href="#!" style="margin: 5px;">Add your Review</a></div>
    </div>
    <!-- product details section end-->

  <!-- Product slider-1 start -->
    <section class="product-slider-1">
      <div class="container">
            <div class="ml-4 mb-2 d-flex justify-content-between align-items-center pr-3">
                <h2 class="text-dark font-weight-normal">Related Product</h2>
                <a href="products.php" class="btn btn-primary btn-sm b-radius fs-14">View All</a>
            </div>
            <hr>
            <ul class="card-group product-slider-1-items">  
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
      </din>
    </section>
    <!-- Product slider-1 end -->


<?php 
    include('footer.php');
?>