<?php 
include('header.php');
include('config.php');
$ParentCategory = $_GET['ParentCategory'];

?>
    </div>

    <section class="new-products">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#!"><span>Home</span></a></li>
            <li class="breadcrumb-item"><a href="#!"><span>Library</span></a></li>
            <li class="breadcrumb-item"><a href="#!"><span>Data</span></a></li>
        </ol>

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
    

<?php 
    include('footer.php');
?>