<?php 

include_once 'includes/header.php';

include_once 'includes/partials/singleMovie.php';

 ?>
 <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span><a href="products.php">Movie <i class="fa fa-chevron-right"></i></a></span> <span>Movie view <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread"><?=$result->name?></h2>
          </div>
        </div>
      </div>
    </section>

<!-- Info about single movie -->
 <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="<?=$result->picture?>" class="image-popup prod-img-bg"><img src="<?=$result->picture?>" class="img-fluid-pic" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3><?=$result->name?></h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4">
								<a href="#" class="mr-2">5.0</a>
								<a href="#"><span class="fa fa-star"></span></a>
								<a href="#"><span class="fa fa-star"></span></a>
								<a href="#"><span class="fa fa-star"></span></a>
								<a href="#"><span class="fa fa-star"></span></a>
								<a href="#"><span class="fa fa-star"></span></a>
							</p>
							
						</div>
    				<p class="price"><span><?=$result->year?></span></p>
    				<p><?=$result->description?>
						</p>
						<div class="row mt-4">
							<div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	
	            		</span>
	             	
	          	
          	<?php include_once 'includes/partials/booking.php'; ?>
    			</div>
    		</div>
    </section>
<?php 

include_once 'includes/footer.php';

 ?>