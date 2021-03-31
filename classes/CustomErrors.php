<?php 

class CustomError
{

	public function errorMsg(string $arg):void{

		if(isset($_GET['error']) && $_GET['error'] == $arg){
			if ($arg == 'usrinu') {
				echo "<script>alert('Username allready in usage pls try another one')</script>";
			}elseif ($arg == 'pass'){
				echo "<script>alert('Password not strong enough or too short password needs to be at least 4 characters long')</script>";
			}elseif ($arg == 'usr'){
				echo "<script>alert('Please enter username')</script>";
			}elseif ($arg == 'nam'){
				echo "<script>alert('Please enter named')</script>";
			}elseif ($arg == 'email'){
				echo "<script>alert('Please enter email')</script>";
			}elseif ($arg == 'log'){
				echo "<script>alert('You need to be login to acces this page')</script>";
			}elseif ($arg == 'loged'){
				echo "<script>alert('You are allready login and do not need to go hear')</script>";
			}elseif ($arg == 'wrng'){
				echo "<script>alert('Something went wrong,check your inouts and try again')</script>";
			}elseif ($arg == 'err'){
				echo "<script>alert('Wrong crededencials')</script>";
			}elseif ($arg == 'to'){
				echo "<script>alert('Trying to book to much tickets than avaible')</script>";
			}
		}

	}

	public function succMsg($log):void
	{
		if (isset($_GET['succ']) && $_GET['succ'] == $log) {
			if ($log == 'ok') {
				echo "<script>alert('You have login,Wellcome and enjoy your stay')</script>";
			}elseif ($log == 'oku') {
				echo "<script>alert('Update succesful, pls remember your new username and password')</script>";
			}elseif ($log == 'okb') {
				echo "<script>alert('You have logout,sad to see you go...')</script>";
			}elseif ($log == 'okr'){
				echo "<script>alert('You have succesfuly register')</script>";
			}elseif ($log == 'res'){
				echo "<script>alert('You have made reservation, at any time you can cancle reservation from your profile')</script>";
			}
		}
	}
	
}

 ?>