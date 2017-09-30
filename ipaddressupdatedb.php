<?php
  include "inc1_connect.php";
    
  $ipid = $_POST['ipid'];


  $name = $_POST['name'];
 
  $department = $_POST['department'];

  $ipaddress = $_POST['ipaddress'];

  $macaddress  = $_POST['macaddress'];

  $textarea  = $_POST['textarea'];


 // $address = $_POST['address'];
  //$status = $_POST['status'];
 

  $sql = "update ip set name='$name',department='$department',ipaddress='$ipaddress',macaddress='$macaddress',textarea='$textarea' where ipid='$ipid'";
  echo $sql;
  mysql_query($sql);
  
  
  
  ?>






<style type="text/css">
body,td,th {
	font-family: Tahoma, "MS Sans Serif";
	color: #333;
}
</style>
<h1 align="center" style="color: #C00">แก้ไข้อมูล IPADDRESS</h1>
<p>&nbsp;</p>
<div align="center">
  <h2 style="color: #6C6">แก้ไขข้อมูล ipaddress เรียบร้อยแล้ว</h2>
</div>
<p align="center"><a href="search1.php">[ย้อนกลับ]</a></p>
