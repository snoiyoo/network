<?php 



        include"inc1_connect.php";
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
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	text-align: center;
}
</style>
</head>

<body>
<p style="font-size: 36px; color: #F00; font-weight: bolder; font-style: normal;">IP ADDRESS ของสำนักงานเลขาธิการวุฒิสภา</p>
<form id="form1" name="form1" method="post">
  Search
  <label for="keyword">:</label>
  <input type="text" name="keyword" id="keyword">
  <input type="submit" name="submit" id="submit" value="ค้นหา">
  <a href="menuip.php">
   <a href="menu.php"><input type="button" name="button" id="button" value="กลับสู่เมนูหลัก">
  </a>
</form>
<table width="80%" border="0" align="center" cellpadding="3" cellspacing="1"  bgcolor="#3399FF">
  <tr bgcolor="#3399FF">
    <td>ชื่อ-นามสกุล</td>
  
    <td>สำนัก</td>
  
    <td>IP Address</td>
    <td>MAC ADDRESS</td>
    <td>สถานที่</td>
  
    <td>จัดการ</td>
  </tr>
  <?php
           $sql = "select * from ip";
		   if(isset($_POST['keyword']))
		   {
			 $keyword = $_POST['keyword'];
			 $sql.= " where  name like '%$keyword%' or department like '%$keyword%' or ipaddress like '%$keyword%' or macaddress like '%$keyword%' or ipid like '%$keyword%'";
			   
			   
		   }
		  // echo $sql;
		   echo "<br>";
		   $rst = mysql_query($sql);
		   	  $num = mysql_num_rows($rst);
		   while($arr =mysql_fetch_array($rst))
		   {
		   ?>
  
  <tr bgcolor="#FFFFFF" >
  <td hidden=""> <?php echo $arr['proid'] ;?></td>
    <td><?php echo $arr['name'] ;?></td>
    <td><?php echo $arr['department'] ;?></td>
    <td><?php echo $arr['ipaddress'] ;?></td>
    <td><?php echo $arr['macaddress'] ;?></td>
    <td><?php echo $arr['textarea'] ;?></td>
    <td><?php echo $arr['ipid'] ;?></td>
 
  
    <td>&nbsp;<a href="ipaddressupdate.php?id=<?php echo $arr['ipid'];?>"><img src="pencil.jpg" width="20" height="20"  alt=""/><a>&nbsp;<a href="ipaddressdelete.php?id=<?php echo $arr['ipid'] ;?> "onClick="javascript:if(!confirm('ต้องการลบเดี๋ยวนี้')) return false;"><img src="rubber.jpg" width="20" height="20"  alt=""/></a></td>
  </tr>
  <?php
		   }
		   ?>
</table>
<p align="center">ทั้งหมด <?php echo $num." " ?>รายการ</p>
<p align="center"><a href="menu.php">[กลับสู่เมนูหลัก]</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="ip.php">[เพิ่ม IP ADDRESS]</a></p>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<p>

</p>
</body>
</html>