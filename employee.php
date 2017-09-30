<?php
     include ("../inc_connect.php");


?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Employee</title>
<style type="text/css">
body,td,th {
	font-family: Tahoma, "MS Sans Serif";
	font-style: normal;
	font-weight: normal;
	font-size: 16px;
}
</style>
</head>

<body>
<div align="center">
  <h3 style="font-size: 24px; color: #C00;">รายชื่อพนักงาน </h3>
  <form id="form1" name="form1" method="post">
    <p>ค้นหา
      <label for="keyword">:</label>
      <input type="text" name="keyword" id="keyword">
      <input type="submit" name="submit" id="submit" value="SEARCH">
    </p>
  </form>
</div>
<table  bgcolor="#3399CC" width="95%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr bgcolor="#3399CC">
    <td align="center" style="font-style: normal; font-weight: normal;">รหัส</td>
    <td align="center">ชื่อ-นามสกุล</td>
    <td align="center">เพศ</td>
    <td align="center">วันเกิด</td>
    <td align="center">อีเมล์</td>
    <td align="center">โทรศัพท์</td>
    <td align="center">ตำแหน่ง</td>
    <td align="right">เงินเดือน</td>
    <td align="center">ที่อยู่</td>
    <td align="center">สถานะ</td>
  </tr>
  
  <?php
      $sql = "select * from employee ";
	  if(isset($_POST['keyword'])){  //ถ้ามีการค้นหา
		  $keyword = $_POST['keyword'];
		  $sql .=" where firstname like '%$keyword%' or lastname like '%$keyword%' or position like '%$keyword%' or salary like '%$keyword%'";
		  
	  }
	  echo "<br>";
	  echo $sql;
	  echo "<br>";
      $rst = mysql_query($sql);
	  $num = mysql_num_rows($rst); //นับจำนวนแถว
	  while ($arr = mysql_fetch_array($rst))
	  {
  
  
  ?>
         <tr   bgcolor="#FFFFFF">
            <td style="font-style: normal"><?php echo $arr['empid'];?></td>
            <td><?php echo $arr['firstname'] ." ".$arr['lastname'];?></td>
            <td><?php echo $arr['gender'];?></td>
            <td><?php echo $arr['birthday'];?></td>
            <td><?php echo $arr['email'];?></td>
            <td><?php echo $arr['tel'];?></td>
            <td><?php echo $arr['position'];?></td>
            <td><?php echo number_format($arr['salary'],2);?></td>
            <td><?php echo $arr['address'];?></td>
            <td><?php echo $arr['status'];?></td>
          </tr>
  
  <?php
  
	  }
	  ?>
</table>
<p align="center">ทั้งหมด <?php echo $num." " ?>รายการ</p>
<p align="center"><a href="menu.php">[กลับสู่เมนูหลัก]</a></p>
<p align="center">&nbsp;</p>
</body>
</html>