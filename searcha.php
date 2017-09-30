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
<p style="font-size: 24px; color: #F00;">ไอพีแอดเดรสสำนักงานเลขาธิการวุฒิสภา(อาคารสุขประพฤติ)</p>
<form id="form1" name="form1" method="post">
  Search
  <label for="keyword">:</label>
  <input type="text" name="keyword" id="keyword">
  <input type="submit" name="submit" id="submit" value="OK">
</form>
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1"  bgcolor="#3399FF">
  <tr bgcolor="#3399FF">
 
<td> Name </td>
    <td>สำนัก</td>
    <td>ไอพีแอดเดรส</td>
    <td>MacAddress</td>
    <td>หมายเหตุ</td>
    <td>รหัสสำนัก</td>

   
  </tr>
  <?php
           $sql = "select * from ip";
		   if(isset($_POST['keyword']))
		   {
			 $keyword = $_POST['keyword'];
			 $sql.= " where ipaddress like '%$keyword%'";
			 
			   
			   
		   }
		   //echo $sql;
		   
		   $rst = mysql_query($sql);
		   	  $num = mysql_num_rows($rst);
		   while($arr =mysql_fetch_array($rst))
		   {
		   ?>
  
  <tr bgcolor="#FFFFFF" >
    <td> <?php echo $arr['name'];?></td>
    <td><?php echo $arr['department'] ;?> </td>
    <td><?php echo $arr['ipaddress'] ;?></td>
    <td><?php echo $arr['macaddress'] ;?></td>
  
    <td><?php echo $arr['textarea'] ;?></td>
    <td><?php echo $arr['typeid'] ;?></td>
	
  </tr>
  <?php
   
  </tr>
  <?php
		   }
		   ?>
</table>
</body>
</html>