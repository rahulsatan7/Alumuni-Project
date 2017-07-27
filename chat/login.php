<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="login.php" method="get">
<div id="main">
Name <br><br>
<input type="text" name="name" id="text" />
<br><br>
<center> <input type="submit" name="b" value="Go" id="btn" />
</center>
</div>
</form>
<?php
if(isset($_REQUEST['b']))
{
	$_SESSION['name']=$_REQUEST['name'];
	echo "<script>window.location='home.php'</script>";
}
?>
</body>
</html>