<?php 
//LOGIN FUNCTIONS
if(isset($_POST['loginButton'])){
	//Login Button was pressed
	$username = $_POST['loginUsername'];
	$password = $_POST['loginPassword'];

	$result = $account->login($username, $password);
	if($result == true){
			$_SESSION['userLoggedIn'] = $username;
			header("location: index.php");
				
	}
}
?>

