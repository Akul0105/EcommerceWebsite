<?php
	$conn = new mysqli("localhost","root","","addtocart");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>