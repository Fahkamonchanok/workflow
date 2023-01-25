<?php

	$conn = mysqli_connect('localhost:3307','root','','workflow') or die("Error: " . mysqli_error($conn));
	mysqli_query($conn, "SET NAMES 'utf8' "); 

?>