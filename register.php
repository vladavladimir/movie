<?php 

include_once 'includes/header.php';
if (isset($_SESSION['id'])) {
  header('Location: index.php?error=loged');
}
include_once 'includes/partials/register-partials.php';

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
<!-- Form for register -->
<center><h1 id="h1reg">Wellcome guest this is place where you will become a new Movie Club Fan</h1></center>
<div class="row">
	<div class="col-md-4 offset-md-4">
		<form id="formreg" method="post" action="register.php">
		  	<div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Email address :</label>
			    <input type="email" class="form-control" id="email" name="email" required placeholder="Insert your email">
		    	<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
		  	</div>
		  	<div class="mb-3">
			    <label for="InputEmail1" class="form-label" pattern="[a-zA-Z]+" oninvalid="setCustomValidity('Please use only alphabet')">Name :</label>
			    <input type="text" class="form-control" id="name" name="name" required placeholder="Insert your name">
		    	
		  	</div>
		  	<div class="mb-3">
			    <label for="exampleInputEmail2" class="form-label">Username :</label>
			    <input type="text" class="form-control" id="username" name="username" required placeholder="Insert your username" pattern="[a-zA-Z]+" oninvalid="setCustomValidity('Please use only alphabet')">
			    <div id="emailHelp" class="form-text">Make sure your username is unique</div>
		  	</div>
		  	<div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label">Password :</label>
			    <input type="password" class="form-control" id="password" name="password" pattern="[A-Za-z0-9]+" oninvalid="setCustomValidity('Please use only alphabet and numbers')" required placeholder="Insert your password,min lenght of 4 characters">
		  	</div>
		  	<button type="submit" class="btn btn-primary" id="registerbtn" name="registerbtn">Submit</button>
		</form>
	</div>
</div>

 <?php 

include_once 'includes/footer.php';

  ?>