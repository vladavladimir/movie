<?php 

include_once 'classes/Users.php';
// instance od logout
$logout = new User();
$logout->logout();
if ($logout) {
	header("Location: index.php?succ=okb");
}
 ?>