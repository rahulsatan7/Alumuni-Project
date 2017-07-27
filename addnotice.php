

<?php
include_once('header1.php');
?>
    <div id="body" class="width">

	<section id="content" class="one-column">
<br><br><br>
<h1>New Notice...</h1><br>
<br>
<br>


<form action="addnotice.php" method="post" enctype="multipart/form-data">
<table align="center">
<tr>
<td>Branch</td>
<td><input type="checkbox" name="b" value='ME'/>ME &nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="b" value='EE'/>EE &nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="b" value='EEE's/>EEE &nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="b" value='CIVIL'/>CIVIL &nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="b" value='ETC'/>ETC &nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="b" value='IT'/>IT &nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="b" value='CSE'/>CSE &nbsp;&nbsp;&nbsp;&nbsp;
</td>
</tr>
<tr>
<td>Year</td><td>
<?php
for($i=2008;$i<=2016;$i++)
{
echo "<input type='checkbox' name=$i value='$i'/>$i &nbsp;&nbsp;&nbsp;&nbsp;";
}
?></td></tr>
<tr>

<td>Notification</td><td><textarea name="t1"></textarea></td>
</tr>
<tr>
<td>Attach File </td><td> <input type="file" name="f"/></td></tr>
<tr>
<td>
<input type="submit" name="b1" value="ADD" /></td></tr></table>
</form>

<?php
if(isset($_REQUEST['b1']))
{
mysql_connect('localhost','root','');
mysql_select_db('alumuni');
$tmp=$_FILES['f']['tmp_name'];
$fname=$_FILES['f']['name'];
move_uploaded_file($tmp,"notice/$fname");
$Branch=$_REQUEST['b'];
$Not=$_REQUEST['t1'];

for($i=2008;$i<=2016;$i++)
{
if(isset($_REQUEST[$i]))
{
$Year=$_REQUEST[$i];
$sql="insert into notification values('$Branch','$Year','$Not','notice/$fname')";
$rs=mysql_query($sql);
}
}
if($rs){
echo "<h1>UPLOADED SUCCESSFULLY</h1>";
}


else{
echo "<h1>error in uploading file</h1>";
}
}

?>

<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>

        </section>
        
        
    	<div class="clear"></div>
    </div>
<?php
include_once('footer1.php');

?>
