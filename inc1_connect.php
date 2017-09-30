<?php
// 1 เชื่อมต่อไปยัง  MySQL
$conn = @mysql_connect("localhost","root","password")or die("notconnect");

// 2) ระบุฐานข้อมูลที่ต้องการใช้งาน

mysql_select_db("ipaddress");
// 3 ระบุภาษาที่ใช้

mysql_query("set names UTF8");
//4 กำหนด timezone
date_default_timezone_set("Asia/Bangkok");

?>