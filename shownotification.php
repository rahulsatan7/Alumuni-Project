<?php
include_once('header1.php');
?>
    <div id="body" class="width">

	<section id="content" class="one-column">
<br><br><br>



<h3>Show Notification</h3>
<?php
$branch=$_SESSION['branch'];
$year=$_SESSION['year'];
mysql_connect('localhost','root','');
mysql_select_db('alumuni');
$sql="select notification,file from notification where branch='$branch' and year='$year'";
$rs=mysql_query($sql);
while($row=mysql_fetch_row($rs))
{
	echo "<table border='1'><tr><td>";
	echo $row[0];
	echo "</td><td><br><a href='$row[1]'>Download File</a></td></tr>";
}
echo "</table><br><br><br>";
?>
    </section>
        
        
    	<div class="clear"></div>
    </div>
<?php
include_once('footer1.php');

?>
