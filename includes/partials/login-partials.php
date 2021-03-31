<?php 
include_once 'classes/Users.php';
include_once 'classes/Checks.php';
// when login button is prest
if (isset($_POST['loginbtn'])) {
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
	// first inserts are checkt
	$chk = new Checker();
	$answer = $chk->loginError($username,$password);
	if ($answer == true) {
		$logi = new User($password);
		$logs = $logi->login($username);
// succ handler if everithig is ok
		if ($logs) {
			header('Location: profile.php?succ=ok');
		}
	}
}
 ?>