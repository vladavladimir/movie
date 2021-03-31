<?php 

include_once 'classes/Movies.php';
// start of pagination
if (isset($_GET['pagino'])) {
	$pagino = $_GET['pagino'];
} else {
	$pagino = 1;
}

// geting all the movie
$movie = new Movies();
$results = $movie->getAllMovies($pagino);
$total = $movie->pagino($pagino);


?>
<div class="row">
	<?php foreach ($results as $row):?>
	<div class="col-md-3">
		<div class="col-md-12 d-flex">
			<div class="product ftco-animate ">
			
				<div class="img d-flex align-items-center justify-content-center" style="background-image: url(<?=$row->picture?>);">
					<div class="desc">
						<p class="meta-prod d-flex">								
						<a href="single-page.php?id=<?=$row->id?>" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
						</p>
					</div>
				</div>
				<div class="text text-center">
					<span class="sale"><?=$row->year?></span>
					<span class="category"><?=$row->description?></span>
					<h2><?=$row->name?></h2>
					<p class="mb-0"><span class="price"></span></p>
				</div>
			
			</div>
		</div>
	</div>
	<!-- pagino logic -->
	<?php endforeach ?>
	<ul class="pagination">
        <li><a href="?pagino=1">First</a></li>
        <li class="<?php if($pagino <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pagino <= 1){ echo '#'; } else { echo "?pagino=".($pagino - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pagino >= $total){ echo 'disabled'; } ?>">
            <a href="<?php if($pagino >= $total){ echo '#'; } else { echo "?pagino=".($pagino + 1); } ?>">Next</a>
        </li>
        <li><a href="?pagino=<?php echo $total; ?>">Last</a></li>
    </ul>
</div>

