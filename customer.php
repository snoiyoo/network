<?php

include("../inc_connect.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
body,td,th {
	font-family: Tahoma, "MS Sans Serif";
	font-style: normal;
	font-weight: normal;
	font-size: 16px;
	text-align: center;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post">
  <p>&nbsp;</p>
  <p>ค้นหา
    <label for="keyword">:</label>
    <input type="text" name="keyword" id="keyword">
    <input type="submit" name="submit" id="submit" value="SEARCH">
  </p>
</form>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">รายชื่อลูกค้า</p>
<table width="95%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#FF3300">
  <tr>
    <td align="center" bgcolor="#FF3300">รหัส</td>
    <td align="center" bgcolor="#FF3300">ชื่อลูกค้า</td>
    <td align="center" bgcolor="#FF3300">บริษัท</td>
    <td align="center" bgcolor="#FF3300">โทรศัพท์</td>
    <td align="center" bgcolor="#FF3300">อีเมล์</td>
    <td align="center" bgcolor="#FF3300">ที่อยู่</td>
  </tr>
  <?php
      $sql = "select * from customer";
	   if(isset($_POST['keyword'])){ 
	  
	  $keyword = $_POST['keyword'];
		  $sql .=" where cusname like '%$keyword%' or company like '%$keyword%' or tel like '%$keyword%' or email like '%$keyword%' or address like '%$keyword'";
		  
		  
		  
		  
	  }
	  echo $sql;
	  $rst = mysql_query($sql);
	  $num = mysql_num_rows($rst);
	  
	  
	  
	  
	  
	  
	  
	  while($arr = mysql_fetch_array($rst))
	  {
  
  ?>
  
  <tr bgcolor="#FFFFFF">
    <td align="center"><?php echo $arr['cusid'];?></td>
    <td align="center"><?php echo $arr['cusname'];?></td>
    <td align="center"><?php echo $arr ['company'];?></td>
    <td align="center"><?php echo $arr['tel'];?></td>
    <td align="center"><?php echo $arr['email'];?></td>
    <td align="center"><?php echo $arr['address'];?></td>
  </tr>
  <?php
	  }
	  ?>
</table>
<p>ทั้งหมด <?php echo $num." "?> รายการ</p>
</body>
</html>