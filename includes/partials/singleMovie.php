<?php 

include_once 'classes/Movies.php';
// if you eant to see single movie instance
$id = $_GET['id'];
$singleMovie = new Movies();
$result = $singleMovie->getSingleMovie($id);


 ?>