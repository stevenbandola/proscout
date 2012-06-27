<?php

	session_start();
	ob_start();

	if (!isset($_SESSION['visits'])){
		$_SESSION['visits'] = 1;
	} else { 
		$_SESSION['visits']++;
	}
	
	if (!isset($_SESSION['initiated'])) {
		session_regenerate_id();
		$_SESSION['initiated'] = true;
	}
	
	if (isset($_SESSION['HTTP_USER_AGENT'])) {
		if ($_SESSION['HTTP_USER_AGENT'] != md5($_SERVER['HTTP_USER_AGENT'])){
			
			$_SESSION = array();
			session_destroy();
			
			exit;
		}
	}
	else{
		$_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']);
	}

?>