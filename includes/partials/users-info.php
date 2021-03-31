<!-- html part that skows users info -->
<div class="row" style="margin:50px;">
	<div class="col-md-4 offset-md-4">
		<div class="card" style="width: 40rem;text-align: center;">
		  	<img src="images/man.jpg" class="card-img-top" alt="user">
		  	<div class="card-body">
			    <h5 class="card-title" id="name">Name :<br><?=$user->name?></h5>
			   
		  	</div>
		  	<ul class="list-group list-group-flush">
		  		<li class="list-group-item" id="username">Username :<br><?=$user->username?> </li>
			    <li class="list-group-item" id="email">Email :<br><?=$user->email?></li>
			    <?php include_once 'includes/partials/users-reser.php'; ?>
			    
			    
			    <li id='.$user->id.' hidden></li>
		  	</ul>
		  	<div class="card-body">
		    	<form method="post" action="profile.php">
		    	<button type="submit" id="updatebtn" name="updatebtn">Update profile</button>
		    	</form>
			</div>
		</div>
	</div>
</div>