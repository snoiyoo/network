<?php
  include "../inc1_connect.php";

  $id = $_GET['id'];
 

  $sql = "delete from ip where ipid=$id";
  echo $sql;
  mysql_query($sql);
  
  
  
  ?>






<style type="text/css">
body,td,th {
	font-family: Tahoma, "MS Sans Serif";
	color: #333;
}
</style>
<h1 align="center" style="color: #C00">ลบข้อมูล ipaddress</h1>
<p>&nbsp;</p>
<div align="center">
  <h2 style="color: #6C6">ลบข้อมูล ip address เรียบร้อยแล้ว</h2>
</div>
<p align="center"><a href="search1.php">[ย้อนกลับ]</a></p>
