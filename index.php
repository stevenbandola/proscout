<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="title" content="Proscout">
    <meta name="description" content="The best way to be found">
    <meta name="keywords" content="Modeling, Fashion, proscout">  
    
    <title>Proscout</title>
</head>

<body>

	<h1>Proscout!</h1> 
    
    <a href="#">Get started</a>
    <a href="#">Log In</a>
    <a href="#">Signup</a>
    
    <div class='jqModal' id='modal_login'>
		
        <form action='' method="post">
        
        	<p>Email Address: <input type="text" name="login_email" id='login_email' /></p>
            <p>Password: <input type="password" name="login_password" id='login_password' /></p>
            <p>Remember Me: <input type='checkbox' name='login_remember' id='login_remember'  /></p>
        	<p><input type='submit' name='login_submit' id='login_submit' value='Login'  /></p>
        	
        </form>
        
    </div>
    
    <div class='jqModal' id='modal_signup'>
		
        <form action='' method="post">
        	
            
        	<p>First Name: <input type="text" name="login_fname" id='login_fname' /></p>
        	<p>Last Name: <input type="text" name="login_lname" id='login_lname' /></p>
        	<p>Email Address: <input type="text" name="login_email" id='login_email' /></p>
            <p>Password: <input type="password" name="login_password" id='login_password' /></p>
            <p>Confirm Password: <input type="password" name="login_cpassword" id='login_cpassword' /></p>
        	<p><input type='submit' name='signup_submit' id='signup_submit' value='Signup'  /></p>
        	
        </form>
        
    </div>  

</body>
</html>
