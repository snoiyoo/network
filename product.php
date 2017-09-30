<?php 
        include"../inc_connect.php";
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
<p style="font-size: 24px; color: #F00;">รายการอุปกรณ์ของกลุ่มงานบริหารระบบเครือข่ายคอมพิวเตอร์</p>
<form id="form1" name="form1" method="post">
  Search
  <label for="keyword">:</label>
  <input type="text" name="keyword" id="keyword">
  <input type="submit" name="submit" id="submit" value="OK">
</form>
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1"  bgcolor="#3399FF">
  <tr bgcolor="#3399FF">
    <td>รหัส</td>
    <td>รายการอุปกรณ์</td>
    <td>รายละเอียด</td>
    <td>ครุภัณฑ์</td>
    <td>หมายเลข Serial</td>
    <td>หน่วย</td>
    <td>คงอยู่</td>
    <td>รูปภาพ</td>
    <td>สถานะ</td>
    <td>อุปกรณ์</td>
  </tr>
  <?php
           $sql = "select * from product";
		   if(isset($_POST['keyword']))
		   {
			 $keyword = $_POST['keyword'];
			 $sql.= " where proid like '%$keyword%' or name like '%$keyword%' or detail  like '%$keyword%'";
			 
			   
			   
		   }
		   echo $sql;
		   
		   $rst = mysql_query($sql);
		   	  $num = mysql_num_rows($rst);
		   while($arr =mysql_fetch_array($rst))
		   {
		   ?>
  
  <tr bgcolor="#FFFFFF" >
    <td><?php echo $arr['proid'] ;?> </td>
    <td><?php echo $arr['name'] ;?></td>
    <td><?php echo $arr['detail'] ;?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo $arr['quantity'] ;?></td>
    <td><?php echo $arr['stock'] ;?></td>
    <td><?php echo $arr['picture'] ;?></td>
    <td><?php echo $arr['status'] ;?></td>
    <td><?php echo $arr['typeid'] ;?></td>
  </tr>
  <?php
		   }
		   ?>
</table>
</body>
</html>