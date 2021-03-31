<?php 

include_once 'classes/Users.php';
include_once 'classes/Checks.php';

// update insert
if (isset($_POST['updateinsert'])) {
	$id = $_SESSION['id'];
	$name = htmlspecialchars($_POST['name']);
	$username = htmlspecialchars($_POST['username']);
	$email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['password']);
	// all data is sent to checker
	$chks = new Checker();
	$chks->updateChk($email,$name,$username,$password);
	if ($chks == true) {
		$update = new User($password);
		$enter = $update->updateUser($email,$id,$name,$username);
		echo $enter;
		// redirecting in dependec of response
		 if ($enter == true) {
			?>
			<script>
				window.open('profile.php?succ=oku',"_self");
			</script>
			<?php
			
		} elseif($enter == false){
			?>
			<script>
				window.open('profile.php?error=usrinu',"_self");
			</script>
			<?php
		}
	}
}


if (isset($_SESSION['id'])) {
	$id = $_SESSION['id'];
	$profile = new User();
	$user = $profile->getUser($id);
	

	include_once 'includes/partials/users-info.php';
}
// whrn update button is pressd
if (isset($_POST['updatebtn'])) {
	
	include_once 'includes/partials/users-update.php';
}


 ?>