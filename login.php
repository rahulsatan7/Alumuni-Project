<?php
include_once('header1.php');
?>
    <div id="body" class="width">

	<section id="content" class="one-column">
<br><br><br>
<h1 align="center">Login To Continue...</h1><br><br><br>  
<form action="login.php">
<table align="center">
<tr>
<td>ID</td><td><input type="text" name="t1" /></td>
</tr>
<tr>
<td>PASSWORD</td><td><input style="width:300px;" type="password" name="t2" /></td>
</tr>
<tr>
<td>STATUS</td>
<td><select name="s2">
<option value="Student">STUDENT</option>
<option value="Faculty">FACULTY</option>
<option value="TPO">TPO</option>
</select></td></tr>
<tr>
<td>
<input type="submit" value="SUBMIT" name="b1" /></td></tr></table>
</form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
if(isset($_REQUEST['b1']))
{
mysql_connect('localhost','root','');
mysql_select_db('alumuni');
$uname=$_REQUEST['t1'];
$pass=$_REQUEST['t2'];
$status=$_REQUEST['s2'];
echo $sql="select * from registertbl where studentid='$uname' and password='$pass' and status='$status'";
$rs=mysql_query($sql);
if($row=mysql_fetch_row($rs))
{
	$status=$row[8];
$year=$row[4];
$branch=$row[3];
$_SESSION['name']=$row[1];

$_SESSION['status']=$status;
$_SESSION['year']=$year;
$_SESSION['branch']=$branch;

if($status=='Student'){
	echo "<script>
	alert('WELCOME STUDENT');
	window.location='shownotification.php';
	</script>";
}
if($status=='Faculty'){
echo "<script>
alert('WELCOME FACULTY');
window.location='addnotice.php';
</script>";
}
if($status=='TPO'){
echo "<script>
alert('WELCOME TPO');
window.location='addnotice.php';
</script>";
}
}
else{
echo "<script>
alert('INVALID USERNAME OR PASSWORD OR STATUS');
</script>";
}
}
?>





        </section>
        
        
    	<div class="clear"></div>
    </div>
<?php
include_once('footer1.php');

?>
