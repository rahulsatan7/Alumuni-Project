<?php
include_once('header1.php');
?>
    <div id="body" class="width"  >

	<section id="content" class="one-column">
<br><br><br>

<h1 align="center">Register</h1><br><br><br> 

<form method="post" enctype="multipart/form-data">
<table align="center">
<tr>
<td>ID</td><td><input type="text" name="t1" /></td>

</tr>
<tr>
<td>NAME</td><td><input type="text" name="t6" /></td>

</tr>
<tr>
<td>PASSWORD</td><td><input type="password" name="t2" /></td>
</tr>
<tr>
<td>BRANCH</td>
<td>
<select name="s1">
<option value="sel">Select</option>
<option value="ME">ME</option>
<option value="EE">EE</option>
<option value="EEE">EEE</option>
<option value="CIVIL">CIVIL</option>
<option value="ETC">ETC</option>
<option value="IT">IT</option>
<option value="CSE">CSE</option>
</select>
</td></tr>
<tr>
<td>YEAR</td><td><input type="text" name="y" /></td>
</tr>
<tr>
<td>MOBILE</td><td><input type="text" name="t3" />
</td></tr>
<tr>
<td>E-Mail</td><td><input type="text" name="t4" /></td></tr>
<tr>
<td>IMAGE</td><td><input type="file" name="t5"/></td></tr>
<tr>
<td>STATUS</td>
<td>
<select name="s2">
<option value="Student">STUDENT</option>
<option value="Faculty">FACULTY</option>
<option value="TPO">TPO</option>
</select></td>
</tr>
<tr><td>
<input type="submit" value="SAVE" name="b1"></td></tr></table>
<?php
if(isset($_REQUEST['b1']))
{
$Studentid=$_REQUEST['t1'];
$Name=$_REQUEST['t6'];
$Password=$_REQUEST['t2'];
$Branch=$_REQUEST['s1'];
$Mobile=$_REQUEST['t3'];
$Year=$_REQUEST['y'];
$E_mail=$_REQUEST['t4'];
$Image=$_FILES['t5']['name'];
$tmp=$_FILES['t5']['tmp_name'];
//$tp=$_FILES['t5']['size'];
$status=$_REQUEST['s2'];
if(move_uploaded_file($tmp,"img/$Image"))
{
mysql_connect('localhost','root','');
mysql_select_db('alumuni');
$sql="insert into registertbl values('$Studentid','$Name','$Password','$Branch','$Year','$Mobile','$E_mail','$Image','$status')";
$rs=mysql_query($sql);
if($rs){
echo "<h1>UPLOADED SUCCESSFULLY</h1>";
}
else{
echo "<h1>ERROR</h1>";
}
}
else{
echo "<h1>error in uploading file</h1>";
}
}
?>
</form>
</section>
        
        
    	<div class="clear"></div>
    </div>
<?php
include_once('footer1.php');

?>
