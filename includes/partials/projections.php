<?php 

include_once 'classes/Movies.php';
// instance to fetch all movies that have projection
$show = new Movies();
$projections = $show->getAllProjections();
?>
<div class="row">
<?php
foreach($projections as $row):
 ?>

<!-- html part that showes all movies that have projections -->

	<div class="col-md-3 d-flex">
		<div class="product ftco-animate">
			<div class="img d-flex align-items-center justify-content-center" style="background-image: url(<?=$row->picture?>);">
				<div class="desc">
					<p class="meta-prod d-flex">				
					<a href="single-page.php?id=<?=$row->movie_id?>" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
					</p>
				</div>
			</div>
			<div class="text text-center">
				<span class="sale"><?=$row->projection_time?></span>
				<span class="category">Places for stream: <?=$row->names?></span>
				<h2><?=$row->name?></h2>
				<p class="mb-0"><span class="price">Price: $<?=$row->ticket?></span></p>
			</div>
		</div>
	</div>					
<?php endforeach ?>
</div>
