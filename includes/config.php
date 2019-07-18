<?php 
	ob_start();
	//output buffering starts
	session_start();
	$timezone = date_default_timezone_set("Indian/Mauritius");

	$con = mysqli_connect("localhost","root","","spot");

	if(mysqli_connect_errno())	{
		echo "Failed to connect: " .mysqli_connect_errno();
	}
 ?>