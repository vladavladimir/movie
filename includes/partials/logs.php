<?php 
// show different button depending if loin or logout
if (isset($_SESSION['id'])) {
	echo "<a href='logout.php'>Logout</a>";
} else{
	echo "<a href='register.php' class='mr-2'>Sign Up</a> <a href='login.php'>Log In</a>";
}

 ?>