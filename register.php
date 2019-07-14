<?php 
if(isset($_POST['loginButton'])){
	//Login Button was pressed

}
if(isset($_POST['registerButton'])){
	//Register Button was pressed
	
}


 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Sotify</title>
</head>
<body>
	<div id="inputContainer">
<!-- login Form		 -->

		<form id="loginForm" action="register.php"	method="POST">
			<h2>Login to your account</h2>
			<p>
				<label for="loginUsername">Username: </label>
				<input id="loginUsername" type="text" name="loginUsername" placeholder="e.g. adityaK" required>
			</p>
			<p>
				<label for="loginPassword">Password:
				</label>
				<input id="loginPassword" type="password" name="loginPassword" placeholder="Your Password" required>
			</p>
			<button type="submit" name="loginButton">Login</button>
		</form>


<!-- Register Form -->

		<form id="registerForm" action="register.php"	method="POST">
			<h2>Create your free account!</h2>
			<p>
				<label for="Username">Username: </label>
				<input id="Username" type="text" name="Username" placeholder="e.g. adityaK" required>
			</p>
				<p>
				<label for="firstName">First name: </label>
				<input id="firstName" type="text" name="firstName" placeholder="e.g. aditya" required>
			</p>
				<p>
				<label for="lastName">Last name: </label>
				<input id="lastName" type="text" name="lastName" placeholder="e.g. Sharma" required>
			</p>
			<p>
				<label for="email">Email: </label>
				<input id="email" type="email" name="email" placeholder="e.g. aditya@kmail.com" required>
			</p>
			<p>
				<label for="email2">Confirm Email: </label>
				<input id="email2" type="email" name="email2" placeholder="e.g. aditya@kmail.com" required>
			</p>
			<p>
				<label for="password">Password:
				</label>
				<input id="password" type="password" name="password" placeholder="Your Password" required>
			</p>
			<p>
				<label for="password2">Confirm Password:
				</label>
				<input id="password2" type="password" name="password2" placeholder="Enter Your Password Again" required>
			</p>
			<button type="submit" name="registerButton">Sign Up!</button>
		</form>
	</div>
</body>
</html>