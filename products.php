<?php 
include('header.php');
include('config.php');
?>
    </div>
    <!--<div data-bs-parallax-bg="true" style="background-image: url(&quot;assets/img/clay%20pot%20import.jpg&quot;);background-position: center;background-size: cover;width: 100%;height: 600px;"></div>-->
    <br><br><br>
    <section class="new-products">
        <ol class="breadcrumb" style="margin-top: -12px;">
            <li class="breadcrumb-item"><a href="#!"><span>Home</span></a></li>
            <li class="breadcrumb-item"><a href="#!"><span>Library</span></a></li>
            <li class="breadcrumb-item"><a href="#!"><span>Data</span></a></li>
        </ol>
        <div class="row py-5">
             <div class="col-md-3">
               <div class="mb-3">
                  <h2 class="text-dark font-weight-normal">Filters</h2>
               </div>
                <div class="filter_content border-0">
					<ul class="list-group">
						<li class="list-group-item px-2">
							<h5 class="fs-16 mb-3">Categories</h5>
								<div class="form-group search">
								<input type="text" name="" id="" placeholder="Search Product Here.." class="form-control form-control-sm">
								<i class="fa fa-search filter-search pl-3" aria-hidden="true"></i>	
							</div>
							<hr>
							<h6 class="fs-14 mb-3">Fruits & vegetables</h6>
							<ul class="list-group">
								<li class="list-group-item"><a href="#FIXME" title="Thalis" class="text-dark font-weight-normal fs-14"><span>Thalis</span></a></li>
								<li class="list-group-item"><a href="#FIXME" title="Bowls" class="text-dark font-weight-normal fs-14"><span>Bowls</span></a></li>
								<li class="list-group-item"><a href="#FIXME" title="Tea Cups Sets" class="text-dark font-weight-normal fs-14"><span>Tea Cups Sets</span></a></li>
								<li class="list-group-item"><a href="#FIXME" title="Flowers Plot" class="text-dark font-weight-normal fs-14"><span>Flowers Plot</span></a></li>
								<li class="list-group-item"><a href="#FIXME" title="Jugs" class="text-dark font-weight-normal fs-14"><span>Jugs</span></a></li>
							</ul>
							
						</li>
					</ul>

					</ul>
					<!-- <ul class="list-group">
						<li class="list-group-item px-2">
							<h5 class="fs-14 mb-3">Seasonal</h5>
								<hr>
							<ul class="list-group checkbox_list">
							<li class="form-check form-check-inline mb-1">
								<input type="checkbox" class="form-check-input form-control-sm" id="exampleCheck1">
								<label class="form-check-label text-dark fs-14" for="exampleCheck1">Pooja Item</label>
							</li>
							<li class="form-check form-check-inline mb-1">
								<input type="checkbox" class="form-check-input form-control-sm" id="exampleCheck1">
								<label class="form-check-label text-dark fs-14" for="exampleCheck1">Summer Fruits</label>
							</li>
							<li class="form-check form-check-inline mb-1">
								<input type="checkbox" class="form-check-input form-control-sm" id="exampleCheck1">
								<label class="form-check-label text-dark fs-14" for="exampleCheck1">Summer Veggi</label>
							</li>
							<li class="form-check form-check-inline mb-1">
								<input type="checkbox" class="form-check-input form-control-sm" id="exampleCheck1">
								<label class="form-check-label text-dark fs-14" for="exampleCheck1">Winter Fruits</label>
							</li>
							</ul>
						</li>
					</ul> -->
					<ul class="list-group">
						<li class="list-group-item px-2">
							<h5 class="fs-14 mb-3">Price</h5>
								<hr>
							<ul class="list-group checkbox_list filter-options">
							<li class="form-check form-check-inline mb-1">
								<input type="checkbox" class="form-check-input form-control-sm" id="exampleCheck1">
								<label class="form-check-label text-dark fs-14" for="exampleCheck1">less than Rs 20</label>
							</li>
							<li class="form-check form-check-inline mb-1">
								<input type="checkbox" class="form-check-input form-control-sm" id="exampleCheck2">
								<label class="form-check-label text-dark fs-14" for="exampleCheck2">less than Rs 50</label>
							</li>
							<li class="form-check form-check-inline mb-1">
								<input type="checkbox" class="form-check-input form-control-sm" id="exampleCheck3">
								<label class="form-check-label text-dark fs-14" for="exampleCheck3">less than Rs 200</label>
							</li>
							<li class="form-check form-check-inline mb-1">
								<input type="checkbox" class="form-check-input form-control-sm" id="exampleCheck4">
								<label class="form-check-label text-dark fs-14" for="exampleCheck4">More than Rs 500</label>
							</li>
								
							</ul>
						</li>
					</ul>
					<ul class="list-group">
						<li class="list-group-item px-2">
							<h5 class="fs-14 mb-3">Discount</h5>
								<hr>
							<ul class="list-group checkbox_list filter-options">
							<li class="form-check form-check-inline mb-1">
								<input type="checkbox" class="form-check-input form-control-sm" id="exampleCheck5">
								<label class="form-check-label text-dark fs-14" for="exampleCheck5">less than Rs 20</label>
							</li>
							<li class="form-check form-check-inline mb-1">
								<input type="checkbox" class="form-check-input form-control-sm" id="exampleCheck6">
								<label class="form-check-label text-dark fs-14" for="exampleCheck6">less than Rs 50</label>
							</li>
							<li class="form-check form-check-inline mb-1">
								<input type="checkbox" class="form-check-input form-control-sm" id="exampleCheck7">
								<label class="form-check-label  text-dark fs-14" for="exampleCheck7">less than Rs 200</label>
							</li>
							<li class="form-check form-check-inline mb-1">
								<input type="checkbox" class="form-check-input form-control-sm" id="exampleCheck8">
								<label class="form-check-label text-dark fs-14" for="exampleCheck8">More than Rs 500</label>
							</li>
								
							</ul>
						</li>
					</ul>
					</div>
              </div>
            <div class="col-md-9">
                <section class="new-products-cards">
                  <div class="container">
                    <div class="mb-3">
                        <h2 class="text-dark font-weight-normal">Products</h2>
                    </div>
                    <ul class="d-flex products-card">  
                    
                     <?php
            $result = "SELECT * FROM `products`";
            //echo $result;
                    $data = mysqli_query($DBcon,$result);
                    $sr = 1;
                    while($products = mysqli_fetch_array($data))
                    {
                        include('productcard.php');
                    }
                    ?>
                        
                       <!-- <li>
                            <div class="card">
                                <figure>
                                    <img class="img-fluid" src="assets/img/products/handi.jpg">
                                </figure>
                          
                                <div class="card-body">
                                    <div class="d-flex mb-3">
                                        <i class="fa fa-star mr-1" style="color: #ffc940;"></i>
                                        <i class="fa fa-star mr-1" style="color: #ffc940;"></i>
                                        <i class="fa fa-star mr-1" style="color: #ffc940;"></i>
                                        <i class="fa fa-star mr-1" style=""></i>
                                        <i class="fa fa-star" style=""></i>
                                    </div>
                                    <h4 class="card-title mb-1 test-dark">Biryani Handi</h4>
                                    <span class="d-block text-gray">&#x20B9;200</span>
                                    <div class="card-value mt-2">
                                        <a href="productdetail.php" class="btn btn-outline-primary btn-sm" type="button">
                                          View Details
                                        </a>
                                        <button class="btn btn-outline-success btn-sm" type="button">
                                          Add to Cart
                                        </button>
                                    </div>
                            </div>
                        </li> -->
                       
                    </ul>	
                  </div>
                </section>
            </div>
        </div>
    </section>

<?php 
    include('footer.php');
?>