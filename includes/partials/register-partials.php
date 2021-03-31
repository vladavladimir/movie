<?php 

include_once 'classes/Checks.php';
include_once 'classes/Users.php';
// start od registration proces
if (isset($_POST['registerbtn'])) {
	$email = htmlspecialchars($_POST['email']);
	$name =  htmlspecialchars($_POST['name']);
	$username = htmlspecialchars($_POST['username']);
	$password =  $_POST['password'];
// first data are sent to checker for check and if check is ok we go to reg
	$chk = new Checker();
	$chk->updateChk($email,$name,$username,$password);

	if ($chk == true) {
		$regist = new User($password);
		$regmsg =  $regist->register($name,$username,$email);
		if ($regmsg == true) {
			header('Location: login.php?succ=okr');// succes handler
		}elseif($regmsg == false){
			header('Location: register.php?error=wrg');//error handler
		}
		
	}else{
		header('Location: register.php?error=wrg');//something went south 
	}

	
}
 ?>