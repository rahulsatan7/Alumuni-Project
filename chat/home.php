<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="jquery-1.9.1.js"></script>
<script>

setInterval(function(){
		$.post('showdata.php',{},function(data){
			$('#msg').html(data);
		});
	},100);
$(document).ready(function() {
    $('#b1').click(function(){
		var msg=$('#t').val();
		$.post('insert.php',{m:msg},function(data){
			$(this).val('');
			});
		});
});
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<link href="style.css" rel="stylesheet" />
<body>
<div id="header">Welcome  <?php echo $_SESSION['name'];?>

<a href="logout.php">Logout</a>
</div>
<div id="msg"></div>
<center>
<textarea id="t" cols="50" rows="5"></textarea>
<input type="button" id="b1" value="Send"/>
</center>
</body>
</html>