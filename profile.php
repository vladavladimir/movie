<?php 

include_once 'includes/header.php';
if (!isset($_SESSION['id'])) {
  header('Location: index.php?error=log');
}
include_once 'classes/CustomErrors.php';
// error chatcher
if (isset($_GET['error'])) {
  $arg = $_GET['error'];

  $msg = new CustomError();
  $msg->errorMsg($arg);
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
include_once 'includes/partials/login-parts.php'; 

include_once 'includes/footer.php';
?>