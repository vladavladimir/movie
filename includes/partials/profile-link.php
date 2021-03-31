<?php
// show or hidde button if login or logout
if (isset($_SESSION['id'])) {
	echo "<li class='nav-item'><a href='profile.php' class='nav-link'>Profile</a></li>";
}
include_once 'classes/CustomErrors.php';
// succes handler
if (isset($_GET['succ'])) {
	$log = $_GET['succ'];
	$msg = new CustomError();
	$msg->succMsg($log);
}
// error handler
if (isset($_GET['error'])) {
	$arg = $_GET['error'];
	$msg = new CustomError();
	$msg->errorMsg($arg);
}

 ?>