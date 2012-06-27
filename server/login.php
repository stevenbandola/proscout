<?php

$_SESSION = array();
session_destroy();
session_start();

if ($login_email_error == "" && $login_password_error == ""){
	$_SESSION['uid'] = $row['uid'];
	$_SESSION['logged_in'] = 1;
	
	header("Location: profile.php");
} else {
	header("Location: index.php");
}

?>