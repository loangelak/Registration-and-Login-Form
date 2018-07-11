<?php
	require 'session.php'; 
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset="UTF-8">
        <meta name='author' content='Angela L'>
        <meta http-equiv='X-UA-Compatible' content='IE-edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Profile</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        	<style type='text/css'>
        	</style>
	</head>
	<body>
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			<!-- Brand -->
  			<a class="navbar-brand" href="#">Hannibal</a>
  			<!-- Links -->
  			<ul class="navbar-nav ml-auto">
    			<li class="nav-item">
    				<a class="nav-link" href="#">Services</a>
    			</li>
    			<li class="nav-item">
      				<a class="nav-link" href="#">Blog</a>
    			</li>
    			<!-- Dropdown -->
    			<li class="nav-item dropdown">
      				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><?= $username; ?> </a>
      				<div class="dropdown-menu">
      					<a class="dropdown-item" href="#">Setting</a>
      					<a class="dropdown-item" href="logout.php">Logout</a>
      				</div>
    			</li>
  			</ul>
		</nav>
		<div class='container-fluid'>
			<div class="jumbotron jumbotron-fluid">
				<div class="container">
					<h1 class='text-center display-4'>Welcome</h1> 
					<h1 class='text-center display-2 bg-info rounded p-1 text-light'><?= $name; ?></h1>
					<h2 class='text-center'>E-Mail: <?= $email;  ?></h2>
					<h2 class='text-center'>Registered On: <?= $created ?></h2>
					<p>lorem ipsum he Catering was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.We only use </p> 
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	</body>
</html>