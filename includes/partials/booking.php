<?php 
include_once 'classes/Movies.php';
// instance of one projection
$id = $_GET['id'];
$res = new Movies();
$project = $res->getOneProjections($id);

// checking if data match
	if (isset($_SESSION['id'])) {
		if ($project == !false) {
			if($project->movie_id == $id) {
		echo '
		             	<span class="input-group-btn ml-2"></span>
		          	</div>
		          	<div class="w-100"></div>
					<div class="col-md-4">	
		          	</div>
	          	</div>
		<p><a href="bookingtickets.php" class="btn btn-primary py-3 px-5 mr-2">Book your ticket</a></p>';
		}
		
	}
}

