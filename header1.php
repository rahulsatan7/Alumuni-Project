<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/styles.css" type="text/css" />
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/custom.js"></script>

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

<!--
hallux, a free CSS web template by ZyPOP (zypopwebtemplates.com/)

Download: http://zypopwebtemplates.com/

License: Creative Commons Attribution
//-->
</head>
<body>
<div id="container">

    <header> 
	<div class="width">
    		<h1><a href="/">ALUMUNI</a></h1>

		<nav>
	
    			<ul class="sf-menu dropdown">

			






<?php

if((isset($_SESSION['status']))&&(($_SESSION['status']=='Student')))
{
		echo '
		<li><a href="shownotification.php".php">  Show Notice </a></li>
<li><a  target="_blank" href="chat/home.php" >  Chat </a></li>
<li><a href="logout.php">  Logout </a></li>';
}

if((isset($_SESSION['status']))&&(($_SESSION['status']=='Faculty')||($_SESSION['status']=='TPO')))
{
?>
<li><a href="addnotice.php">  Add Notice </a></li>
<li><a  target="_blank" href="chat/home.php" >  Chat </a></li>
<li><a href="logout.php">  Logout </a></li>


<?php	
}
if(!(isset($_SESSION['status'])))
{
?>


<li><a href="login.php">  Login </a></li>
<li><a href="register.php">  Register </a></li>
<?php	
}
?>










			</ul>

			
			<div class="clear"></div>
    		</nav>
       	</div>

	<div class="clear"></div>

       
    </header>


