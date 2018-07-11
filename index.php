<!DOCTYPES html>
<html lang='en'>

    <head>
        <meta charset="UTF-8">
        <meta name='author' content='Angela L'>
        <meta http-equiv='X-UA-Compatible' content='IE-edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Complete User Registration &amp; Login System Using PHP &amp; Ajax</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <style type="text/css">
        	/*HIDE*/
        	#alert, #register-box, #forgot-box{display: none;}
        </style>
    </head>

    <body class ='bg-dark'>
    	<div class='container mt-4'>
    		<div class='row'>
    			<div class='col-lg-4 offset-lg-4' id='alert'>
    				<div class='alert alert-success'>
    					<strong id='result'></strong>
    				</div>
    			</div>
    		</div>
    		<!--Login Form-->
    		<div class='row'>
    			<div class='col-lg-4 offset-lg-4 bg-light rounded' id='login-box'>
    				<h2 class='text-center mt-2'>Login</h2>
    				<form action='' method='post' role='form' class='p-2' id='login-form'>
    					<div class='form-group'>
    						<input type="text" name="username" class='form-control' placeholder="Username" required minlength="2">
    					</div>
    					<div class='form-group'>
    						<input type="password" name="password" class='form-control' placeholder="Password" required minlength="6">
    					</div>
    					<div class='form-group'>
    						<div class='custom-control custom-checkbox'>
    							<input type="checkbox" name="rem" class='custom-control-input' id='customCheck'>
    							<label for='customCheck' class='custom-control-label'>Remember Me</label>
    							<a href="#" id='forgot-btn' class='float-right'>Forgot Password?</a>
    						</div>
    					</div>
    					<div class='form-group'>
    						<input type="submit" name="login" id='login' value='Login' class='btn btn-primary btn-block'>
    					</div>
    					<div class='form-group'>
    						<p class='text-center'>New User? <a href="#" id='register-btn'>Register Here</a></p>
    					</div>
    				</form>
    			</div>
    		</div>
    		<!--Registration Form-->
    		<div class='row'>
    			<div class='col-lg-4 offset-lg-4 bg-light rounded' id='register-box'>
    				<h2 class='text-center mt-2'>Register</h2>
    				<form action='' method='post' role='form' class='p-2' id='register-form'>
    					<div class='form-group'>
    						<input type="text" name="name" class='form-control' placeholder="Full Name" required minlength="3">
    					</div>
    					<div class='form-group'>
    						<input type="text" name="uname" class='form-control' placeholder="Username" required minlength="4">
    					</div>
    					<div class='form-group'>
    						<input type="email" name="email" class='form-control' placeholder="E-Mail" required>
    					</div>
    					<div class='form-group'>
    						<input type="password" name="pass" id='pass' class='form-control' placeholder="Password" required minlength="6">
    					</div>
    					<div class='form-group'>
    						<input type="password" name="cpass" id='cpass' class='form-control' placeholder="Confirm Password" required minlength="6">
    					</div>
    					<div class='form-group'>
    						<div class='custom-control custom-checkbox'>
    							<input type="checkbox" name="rem" class='custom-control-input' id='customCheck2'>
    							<label for='customCheck2' class='custom-control-label'>I agree to the <a href ='#'>terms &amp; conditions.</a></label>
    						</div>
    					</div>
    					<div class='form-group'>
    						<input type="submit" name="register" id='register' value='Register' class='btn btn-primary btn-block'>
    					</div>
    					<div class='form-group'>
    						<p class='text-center'>Already Registered? <a href="#" id='login-btn'>Login Here</a></p>
    					</div>
    				</form>
    			</div>
    		</div>
    		<!--FORGOT PASSWORD-->
    		<div class='row'>
    			<div class='col-lg-4 offset-lg-4 bg-light rounded' id='forgot-box'>
    				<h2 class='text-center mt-2'>Reset Password</h2>
    				<form action='' method='post' role='form' class='p-2' id='forgot-form'>
    					<div class='form-group'>
    						<small class='text-muted'>
    							To reset your password, enter the email address and we will send a reset password instructions on your email. 
    						</small>
    					</div>
    					<div class='form-group'>
    						<input type="email" name="femail" class='form-control' placeholder="E-Mail" required>
    					</div>
    					<div class='form-group'>
    						<input type="submit" name="forgot" id='forgot' value='Reset' class='btn btn-primary btn-block'>
    					</div>
    					<div class='form-group text-center'>
    						<a href="#" id='back-btn' '>Back</a>
    					</div>
    				</form>
    			</div>
    		</div>
    	</div>

    	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js'></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#forgot-btn').click(function(){
					$('#login-box').hide();
					$('#forgot-box').show(); 
				});
				$('#register-btn').click(function(){
					$('#register-box').show(); 
					$('#login-box').hide(); 
				});
				$('#login-btn').click(function(){
					$('#register-box').hide(); 
					$('#login-box').show(); 
				});
				$('#back-btn').click(function(){
					$('#forgot-box').hide();
					$('#login-box').show(); 
				});
				//validation
				$('#login-form').validate(); 
				$('#register-form').validate({
					rules:{
						cpass: {
							equalTo:"#pass", 
						}
					}
				}); 
				$('#forgot-form').validate();

				//submit form w ajax - without page refresh
				$('#register').click(function(e){
					if(document.getElementById('register-form').checkValidity()){
						e.preventDefault(); //prevents refresh
						$.ajax({
							url:'action.php',
							method: 'post', 
							data: $('#register-form').serialize()+'&action=register', //send all input data to action.php
							success: function(response){
								$('#alert').show();
								$("#result").html(response);
							}
						});
					}
					return true; 
				});
				$('#login').click(function(e){
					if(document.getElementById('login-form').checkValidity()){
						e.preventDefault(); //prevents refresh
						$.ajax({
							url:'action.php',
							method: 'post', 
							data: $('#login-form').serialize()+'&action=login', //send all input data to action.php
							success: function(response){
								$('#alert').show();
								$("#result").html(response);
							}
						});
					}
					return true; 
				});
				$('#forgot').click(function(e){
					if(document.getElementById('forgot-form').checkValidity()){
						e.preventDefault(); //prevents refresh
						$.ajax({
							url:'action.php',
							method: 'post', 
							data: $('#forgot-form').serialize()+'&action=forgot', //send all input data to action.php
							success: function(response){
								$('#alert').show();
								$("#result").html(response);
							}
						});
					}
					return true; 
				});
			});
		</script>
    </body>

</html>