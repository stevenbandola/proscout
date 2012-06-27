<?php
	$login_email = check_input($_POST['login_email']);
	$login_password = check_input($_POST['login_password']);
	$login_submit = $_POST['login_submit'];
	
	if (isset($login_submit)){
		$query = mysql_query("SELECT * FROM ecs_users WHERE user_email = '$login_email' ");

		if ($login_email == ""){
			$login_email_error = "You must enter an email address";
		} else if (mysql_num_rows($query) < 1){
			$login_email_error = "That email does not exist.";
		} else {
			$row = mysql_fetch_assoc($query);
			$servpass = $row['user_password'];
		}
			
		if ($login_password == ""){
			$login_password_error = "You must enter a password.";
		} else if (md5($login_password) != $servpass){
			$login_password_error = "That password is incorrect.";
		}
		
		if ($login_email_error == "" && $login_password_error == ""){
			include("server/login.php");
		}
	}
?>