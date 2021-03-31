<?php 

include_once 'Database.php';

class User extends Database{

	public null|string $password;
	public string $hash;

	public function __construct(null|string $password=null){
		$this->password = $password;
		$this->hash = password_hash($password, PASSWORD_BCRYPT);
	}

	public function register($name,$username,$email){
		try{ //first checking if username and email are reg or not
			$db = $this->connection();
			$check = $db->prepare("SELECT username,email FROM users");
			$check->execute();
			$userRow = $check->fetchAll(PDO::FETCH_ASSOC);
			$chk = true;
			foreach ($userRow as $row) {
				if($username==$row['username'] || $email==$row['email']){	
					$chk = false;	
				}
			}
			if(!$chk) {
				
			} else {
				// if everything is ok then reg
				$stmt = $db->prepare("INSERT INTO users (name,username,password,email) VALUES (:name, :username, :hash, :email)");
				$stmt->execute(['name'=>$name, 'username'=>$username, 'hash'=>$this->hash, 'email'=>$email]);
				return true;
			}

		} catch (Exception $e) {
			var_dump($e);
		}
	}

	public function logout(){ //logout
		session_start();
			session_destroy();
			session_unset();
		}

	public function login($username){
		// log in chk if pas and username match
		$db = $this->connection();
		$stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
		$stmt->execute(['username'=>$username]);
		$userRow = $stmt->fetch(PDO::FETCH_ASSOC);
		if ($stmt->rowCount() > 0) {
			if (password_verify($this->password, $userRow['password'])) {
				$_SESSION['id'] = $userRow['id'];
				return true;
			}else{
				header('Location: login.php?error=wrng');
				return false;
			}
		} else {
			header('Location: login.php?error=err');
			return false;
		}
	}	

	public function getUser($id){ // geting user data
		$db = $this->connection();
		$stmt = $db->prepare("SELECT id,name,username,email FROM users WHERE id = :id");
		$stmt->execute(['id'=> $id]); 
		$user = $stmt->fetch(PDO::FETCH_OBJ);
		return $user;
		
		}

		public function updateUser($email,$id,$name,$username){ //updating users data
			try{
			$db = $this->connection();
			$check = $db->prepare("SELECT username FROM users");
			$check->execute();
			$userRow = $check->fetchAll(PDO::FETCH_ASSOC);
			$chk = true; // first chk if username is allready in use
			foreach ($userRow as $row) {
				if($username==$row['username']){	
					$chk = false;	
				}
			}
			if(!$chk) {
				
			} else {
				$stmt = $db->prepare("UPDATE users SET name = :name, username = :username, password = :hash, email = :email WHERE id = :id");
				$stmt->execute(['name'=>$name,'username'=>$username,'hash'=>$this->hash,'email'=>$email,'id'=>$id]);
				return true;
				}
	} catch (Exception $e) {
			var_dump($e);
		}
	}
}