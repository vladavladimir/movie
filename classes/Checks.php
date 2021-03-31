<?php 


class Checker{
	
	public function checkLogin()
	{
		if (!isset($_SESSION['id'])) {
			header('Location: index.php?error=log');
		}
	}

	public function fillInpust(){
		if ($email == "") {
			header('Location: register.php?error=email');
		} elseif ($username == "") {
			header('Location: register.php?error=usr');
		}elseif ($password == "" && strlen($password) <= 4) {
			header('Location: register.php?error=pass');
		}else{
			return true;
		}
	}

	public function loginError($username,$password){
		if($username == ""){
			header('Location: login.php?error=usr');
		} elseif($password == "" && strlen($password) <= 4){
			header('Location: login.php?error=pass');
		}else{
			return true;
		}
	}

	public function isLoged(){
		if (isset($_SESSION['id'])) {
			header('Location: index.php?error=loged');
		}
	}
	public function updateChk($email,$name,$username,$password){
		if ($email == "") {
			header('Location: profile.php?error=email');
		}elseif ($name == "") {
			header('Location: profile.php?error=nam');
		}elseif ($username == "") {
			header('Location: profile.php?error=usr');
		}elseif ($password == "" && strlen($password) <= 4) {
			header('Location: profile.php?error=pass');
		}else{
			return true;
		}

	}
}


 ?>