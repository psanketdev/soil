
	<footer>	
			<div class="container">
				<div class="mb-5">
					<div class="row">
						<div class="col-6 col-md-3 mb-4">
							<h3 class="mb-2">Services</h3>
							<ul class="d-flex flex-column">
								<li><a href="#">Web design</a></li>
								<li><a href="#">Development</a></li>
								<li><a href="#">Hosting</a></li>
							</ul>
						</div>
						<div class="col-6 col-md-3 mb-4">
							<h3 class="mb-2">About</h3>
							<ul class="d-flex flex-column">
								<li><a href="#">Company</a></li>
								<li><a href="#">Team</a></li>
								<li><a href="#">Careers</a></li>
							</ul>
						</div>
						<div class="col-12 col-md-6 mb-4">
							<h3 class="mb-2">Company Name</h3>
							<p class="font-weight-light">Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
						</div>
					</div>
				</div>
					<div class="col item social mb-4">
						<a href="#"><i class="icon ion-social-facebook fa fa-facebook"></i></a>
						<a href="#"><i class="icon ion-social-twitter fa fa-twitter"></i></a>
						<a href="#"><i class="icon ion-social-snapchat fa fa-snapchat"></i></a>
						<a href="#"><i class="icon ion-social-instagram fa fa-instagram"></i></a>
					</div>
				</div>
				<p class="copyright">Company Name © 2017</p>
			</div>
		</footer>

		<!-- stickey nav in mobile -->

<div class="forMobile-icons stickey-icons pt-3 pb-2 w-100 b-shadow d-lg-none d-sm-block">
    <div class="container">
        <div class="row text-center">
            <div class="col-3">
                <a href="#!" class="active">
                    <i class="fa fa-home  d-block" aria-hidden="true"></i>
                     <span class="d-block fs-12">Home</span>
                </a>
            </div>
             <div class="col-3">
                <a href="#!">
                    <i class="fa fa-window-restore pl-2 d-block" aria-hidden="true"></i>
                    <span class="d-block fs-12">Categories</span>
                </a>
            </div>
             <div class="col-3">
                <a href="#!">
                    <i class="fa fa-shopping-bag d-block" aria-hidden="true"></i>
                    <span class="d-block fs-12">Cart</span>
                </a>
            </div>
             <div class="col-3">
                <a href="#!">
                    <i class="fa fa-user  d-block" aria-hidden="true"></i>
                    <span class="d-block fs-12">Profile</span>
                </a>
            </div>
        </div>
    </div>
</div>

		<!-- bootstarp js -->
		<!-- <script src="assets/vendor/jquery/jquery.min.js" ></script> -->
		<script src="assets/vendor/jquery/jquery-2.2.0.min.js"></script>
		<script src="assets/bootstrap/js/popper.min.js" ></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>

		<!-- slick js -->
		<script src="assets/vendor/slick/slick.min.js"></script>

		<!-- chart js -->
		<script src="assets/vender/chart/chart.min.js"></script> 

		<!-- aos js -->
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>

		<!-- custome js -->
		<script src="assets/js/bs-animation.js"></script>
		<script src="assets/js/bs-charts.js"></script>
		<script src="assets/js/dropdown-search-bs4.js"></script>
		<script src="assets/js/product-viewer-1.js"></script>
		<script src="assets/js/table-with-search.js"></script>
		<script src="assets/js/script.js"></script>
		<!-- custome js -->


<script type="text/javascript">
    $(document).ready(function(){
    
    $('.ccount').load('Sopping_cart_add.php',function(){
        //$('#myModal').modal({show:true});
    });
    
    
    $("form").on("submit", function(event){
        event.preventDefault();
 
        var formValues= $(this).serialize();
 
        $.post("Sopping_cart_add.php?action=add", formValues, function(data){
            // Display the returned data in browser
            $("#result").html(data);
        });
        
         $('.ccount').load('Sopping_cart_add.php',function(){
        //$('#myModal').modal({show:true});
    });
        
    });
    
});	
</script>

		
	</body>

</html>