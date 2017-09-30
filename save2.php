
<meta charset="utf-8">
<?php
	include "inc1_connect.php";

	$sql = "insert into  ip values('name','department','ipaddress','textarea','17')";
    $result = mysql_db_query("ip",$sql);
	echo $sql ;   

?>