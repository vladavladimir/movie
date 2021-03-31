<?php 


include_once 'includes/header.php';
if (isset($_SESSION['id'])) {
  header('Location: index.php?error=loged');
}

include_once 'includes/partials/login-partials.php';

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
<!-- Form for login -->
<center><h1 id="h1log">Login and enter World of Movie</h1></center>
<div class="row">
   	<div class="col-md-4 offset-md-4">
    	<form id="formlog" action="login.php" method="post">
  			<div class="mb-3">
    			<label for="example" class="form-label">Username :</label>
    			<input type="text" class="form-control" id="username" name="username" pattern="[a-zA-Z]+" oninvalid="setCustomValidity('Please use only alphabet')" required placeholder="Enter your username">
    			<div id="emailHelp" class="form-text">Pls fill all of the inputs correctly.</div>
  			</div>
  			<div class="mb-3">
    			<label for="exampleInputPassword1" class="form-label">Password :</label>
    			<input type="password" class="form-control" pattern="[a-zA-Z0-9]+" oninvalid="setCustomValidity('Please use only alphabet and numbers')" id="password" name="password" required placeholder="Enter your password">
  			</div>
  			<button type="submit" class="btn btn-primary" id="loginbtn" name="loginbtn">Submit</button>
		</form>
	</div>
</div>


<?php 
include_once 'includes/footer.php';
 ?>