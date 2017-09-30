<?php
	$username = $_GET['username'];
	$password = $_GET['password'];
	
	if($username == 'zmx'&& $password =='123'){
		echo '1';
	} else {
		echo '0';
	}
	
?>