
<meta charset="utf-8">
<?php
     include ("inc1_connect.php");
  $ipid = $_GET['id'];
 // echo $id;
  $sql = "select * from ip where ipid= $ipid";
  $rst = mysql_query($sql);
  $arr = mysql_fetch_array($rst);
// echo  $arr['firstname'];
  

?>
<style type="text/css">
body,td,th {
	font-family: Tahoma, "MS Sans Serif";
	color: #333;
}
</style>
<h1 align="center">แก้ไขข้อมูลไอพีแอดเดรส</h1>
<form name="form1" method="post" action="ipaddressupdatedb.php">
  <p>&nbsp;</p>
  <table width="50%" border="0" align="center" cellpadding="5" cellspacing="1">
    <tr>
      <td>รหัส</td>
      <td><input name="ipid" type="text" id="ipid"value="<?php echo $arr['ipid'] ;?>" readonly></td>
    </tr>
    <tr>
      <td>ชื่อ</td>
      <td><input type="text" name="name" id="name" value="<?php echo $arr['name'] ;?>"></td>
    </tr>
    <tr>
      <td>สำนัก</td>
      <td><input type="text" name="department" id="department"  value="<?php echo $arr['department'] ;?>"></td>
    </tr>
    <tr>
      <td>ipaddress</td>
     <td><input type="text" name="ipaddress" id="ipaddress" value="<?php echo $arr['ipaddress'] ;?>">   </td>
    </tr>
    <tr>
      <td>macaddress</td>
      <td><input type="text" name="macaddress" id="macaddress" value="<?php echo $arr['macaddress'] ;?>"></td>
    </tr>
    <tr>
      <td>หมายเหตุ</td>
      <td><input type="text" name="textarea" id="textarea" value="<?php echo $arr['textarea'] ;?>"></td>
    </tr>
   
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="UPDATE">
        <a href="search.php">
        <input type="button" name="button" id="button" value="ยกเลิก" 
      onClick="javscript window.location='search1.php';">
      </a></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>



