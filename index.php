<?php
	
	include("server/sec.php");
	include("server/connect.php");
	include("server/func.php");

	print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="title" content="Proscout">
    <meta name="description" content="The best way to be found">
    <meta name="keywords" content="Modeling, Fashion, proscout">  
    
    <link src='css/global.css' media='screen' rel="stylesheet" />
    
    <script type='text/javascript' src='scripts/jquery.js'></script>  
    <script type='text/javascript' src='scripts/jqmodal.js'></script>  
    <script type='text/javascript' src='scripts/global.js'></script>
    
    <title>Proscout</title>
</head>

<body>

	<noscript>
    	<p>Please Enable Javascript. Without it, you will not be able to use this website.</p>
        <a href='http://enable-javascript.com/'>Click Here to learn how to enable Javascript on youyr browser.</a>
    </noscript>

	<h1>Proscout!</h1> 
    
    <a href="#">Get started</a>
    <a href="#">Log In</a>
    <a href="#">Signup</a>
    
    <div class='jqModal' id='modal_login'>
    
    	<?php include("includes/login_validation.php"); ?>
		
        <form action='' method="post" id='form_login' >
        
        	<p>Email Address: <input type="text" name="login_email" id='login_email' value='<?=$login_email?>'  /><span class='error_msg' id='login_email_error' ><?=$login_email_error?></span></p>
            <p>Password: <input type="password" name="login_password" id='login_password' /><span class='error_msg' id='login_password_error' ><?=$login_password_error?></span></p>
            <p>Remember Me: <input type='checkbox' name='login_remember' id='login_remember'  /></p>
        	<p><input type='submit' name='login_submit' id='login_submit' value='Login'  /></p>
        	
        </form>
        
    </div>
    
    <div class='jqModal' id='modal_signup'>
		
        <form action='' method="post">
            
        	<p>First Name: <input type="text" name="signup_fname" id='signup_fname' /><span class='error_msg' id='signup_fname_error' ></span></p>
        	<p>Last Name: <input type="text" name="signup_lname" id='signup_lname' /><span class='error_msg' id='signup_lname_error' ></span></p>
        	<p>Email Address: <input type="text" name="signup_email" id='signup_email' /><span class='error_msg' id='signup_email_error' ></span></p>
            <p>Password: <input type="password" name="signup_password" id='signup_password' /><span class='error_msg' id='signup_password_error' ></span></p>
            <p>Confirm Password: <input type="password" name="signup_cpassword" id='signup_cpassword' /><span class='error_msg' id='signup_cpassword_error' ></span></p>
        	<p><input type='submit' name='signup_submit' id='signup_submit' value='Signup'  /></p>
        	
        </form>
        
    </div>  

</body>
</html>
