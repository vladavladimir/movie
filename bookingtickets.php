<?php 

include_once 'includes/header.php'; 

include_once 'classes/Ticket.php';

if (isset($_POST['res'])) {
  
  include_once 'includes/partials/booking-reserve.php';
}

?>

<div class="hero-wrap" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
      	<div class="container">
        	<div class="row no-gutters slider-text align-items-center justify-content-center">
          		<div class="col-md-8 ftco-animate d-flex align-items-end">
          			<div class="text w-100 text-center">
	            		<h1 class="mb-4">Wellcome to <span>Movie Club</span> for Good <span>Times</span>.</h1>
            		</div>
          		</div>
        	</div>
      	</div>
</div>

<?php

include_once'includes/partials/section-headbaner.php';

include_once 'includes/partials/booking-table.php';

include_once 'includes/footer.php';

  ?>