<?php 
include("includes/config.php");
	if(isset($_SESSION['userLoggedIn'])){
		$userLoggedIn = $_SESSION['userLoggedIn'];
	}
	else{
		header("Location: register.php");
	}
 ?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<title>	</title>
</head>
<body>
	<div id="mainContainer">

		<div id="topContainer">
			<?php include("includes/navBarContainer.php") 
			 ?>

			 <div id="mainViewContainer">
			 		
			 	<div id="mainContent">