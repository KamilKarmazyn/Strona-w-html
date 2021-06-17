<?php
	$conn = new PDO( 'mysql:host=localhost;dbname=baza', 'root', '');
	if(!$conn){
		die("Error: Failed to coonect to database!");
	}
?>