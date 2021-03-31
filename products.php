<?php 

include_once 'includes/header.php';

 ?>


<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Movies <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Movies</h2>
          </div>
        </div>
      </div>
    </section>
   
     <?php 
    	include_once 'includes/partials/section-headbaner.php';
     ?>
    
    <section class="ftco-section">
			<div class="container">
				<?php 
					include_once 'includes/partials/allMovies.php';
				?>
			</div>
		</section>

 <?php 
include_once 'includes/footer.php';
  ?>