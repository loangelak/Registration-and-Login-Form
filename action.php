<?php
	//print_r($_POST);
	require 'config.php'; 
	if(isset($_POST['action']) && $_POST['action'] == 'register'){
		$name=check_input($_POST['name']);
		$uname=check_input($_POST['uname']);
		$email=check_input($_POST['email']);
		$pass=check_input($_POST['pass']);
		$cpass=check_input($_POST['cpass']);
		$pass=sha1($pass);
		$cpass=sha1($cpass);
		$created=date('Y-m-d');

		if($pass!=$cpass){
			echo "Passwords did not match!";
			exit();
		}
		else{
			$sql=$conn->prepare("SELECT username, email FROM users WHERE username=? OR email=?");
			$sql->bind_param("ss", $uname, $email);
			$sql->execute();
			$result=$sql->get_result();
			$row=$result->fetch_array(MYSQLI_ASSOC);
			//check if username exists in database equals uname input
			if($row['username']==$uname){
				echo 'Username not available, try again.';
			}
			elseif($row['email']==$email){
				echo "Email is already registered.  Try a different email.";
			}
			else{
				//inserting all values into dbase
				$stmt=$conn->prepare("INSERT INTO users (name, username, email, pass, created) VALUES (?,?,?,?,?)");
				$stmt->bind_param("sssss", $name, $uname, $email, $pass, $created); 
				if($stmt->execute()){
					echo "Registered successfully.  Login Now!"; 
				}
				else{
					echo "Soemthing went wrong.  Please try again.";
				}
			}
		}
	}

	//login 
	if(isset($_POST['action']) && $_POST['action'] == 'login'){
		session_start(); 

		$username=$_POST['username'];
		$password=sha1($_POST['password']);

		$stmt_l=$conn->prepare("SELECT * FROM users WHERE username=? AND pass=?");
		$stmt_l->bind_param("ss", $username, $password); 
		$stmt_l->execute(); //execute stmt
		$user=$stmt_l->fetch();

		//check
		if($user!=null){
			$_SESSION['username']=$username; 
			echo 'ok';

			if(!empty($_POST['rem'])){
				setcookie("username", $_POST['username'], time()+(10*365*24*60*60));
				setcookie("password", $_POST['password'], time()+(10*365*24*60*60));
			}
			else{
				if(isset($_COOKIE['username'])){
					setcookie("username","");
				}
				if(isset($_COOKIE['password'])){
					setcookie("password","");
				}
			}
		}
		else{
			echo "Login Failed!  Check your username and password.";
		}
	}

	function check_input($data){
		$data=trim($data); //remove all white spaces
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
?>