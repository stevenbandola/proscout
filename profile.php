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

	<h1>Proscout Profile!</h1> 
   
    <a href='server/logout.php'>Logout</a> 
    


</body>
</html>
