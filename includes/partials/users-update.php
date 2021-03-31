<!-- fomr for update of users info -->
<div class="row">
	<div class="col-md-4 offset-md-4">
		<form style="padding: 50px 0px;" method="post" action="profile.php">
		  	<div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Email address :</label>
			    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required placeholder="<?=$user->email?>">
		  	</div>
		  	<div class="mb-3">
			    <label for="InputEmail1" class="form-label">Name :</label>
			    <input type="name" class="form-control" pattern="[a-zA-Z]+"oninvalid="setCustomValidity('Please use only alphabet')" id="name" name="name" required placeholder="<?=$user->name?>">
		    	
		  	</div>
		  	<div class="mb-3">
			    <label for="exampleInputEmail2" class="form-label">Username :</label>
			    <input type="text" class="form-control" pattern="[A-Za-z]+" oninvalid="setCustomValidity('Please use only alphabet')" id="username" name="username" required placeholder="<?=$user->username?>">
			    
		  	</div>
		  	<div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label">Password :</label>
			    <input type="password" class="form-control" pattern="[a-zA-Z0-9]" oninvalid="setCustomValidity('Please use only alphabet and numbers')" id="password" name="password" required placeholder="Insert your password,min lenght of 4 characters">
		  	</div>
		  	<button type="submit" class="btn btn-primary" id="updateinsert" name="updateinsert"style="padding: 20px;border-radius: 10px">Submit</button>
		</form>
	</div>
</div>