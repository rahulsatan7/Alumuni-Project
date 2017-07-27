<?php
session_start();
$name=$_SESSION['name'];
?>
<style>
#data
{
	background-color:black;
	padding:10px 7px;
	margin-top:10px;
}

</style>
<?php
mysql_connect('localhost','root','');
mysql_select_db('chat');
$q="select * from message";
$rs=mysql_query($q);
while($row=mysql_fetch_row($rs)){
	echo"<p id='data'>
		<h5>Send By : $row[2]
		$row[3]
				<p>
				
				$row[1]
				</p>
		
		</H5>";
	}
?>
