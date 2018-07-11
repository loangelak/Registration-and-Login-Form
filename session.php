<?php
	session_start(); 
	require 'config.php';

	$user=$_SESSION['username']; 

	$stmt=$conn->prepare("SELECT * FROM users WHERE username=?");
	$stmt->bind_param("s", $user);
	$stmt->execute(); 
	$result=$stmt->get_result(); //get result
	$row=$result->fetch_array(MYSQLI_ASSOC);//store result

	$username=$row['username'];
	$name=$row['name'];
	$email=$row['email'];
	$created=$row['created'];

	if(!isset($user)){
		header("location:index.php");
	}
?>