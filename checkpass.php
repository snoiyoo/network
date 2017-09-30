
<meta charset="utf-8">
<?php
include "inc1_connect.php";
echo $_POST['email'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = " select * from employee where email='$email' and password ='$password'";
$rst = mysql_query($sql);
$arr = mysql_fetch_array($rst);


if(empty($arr['empid'])) {
	
	echo "<meta http-equiv='refresh' content='0; url=login.php?'>";
}else {

echo "ถูกต้องนะคร๊าบบบบ";

	echo "<meta http-equiv='refresh' content='0; url=menu.php?'>";
}




?>