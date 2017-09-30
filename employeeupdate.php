<?php

session_start();
if(!isset($_SESSION['loginid']) or $_SESSION['loginlevel']!="Admin"){
	
	echo "<meta http-equiv='refresh' content='0;url=login.php'>";
	exit();
}
     include ("../inc_connect.php");
  $id = $_GET['id'];
 // echo $id;
  $sql = "select * from employee where empid= $id";
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
<h1 align="center">แก้ไขข้อมูลพนักงาน</h1>
<form name="form1" method="post" action="employeeupdatedb.php">
  <p>&nbsp;</p>
  <table width="50%" border="0" align="center" cellpadding="5" cellspacing="1">
    <tr>
      <td>รหัส</td>
      <td><input name="empid" type="text" id="empid"value="<?php echo $arr['empid'] ;?>" readonly></td>
    </tr>
    <tr>
      <td>ชื่อ</td>
      <td><input type="text" name="firstname" id="firstname" value="<?php echo $arr['firstname'] ;?>"></td>
    </tr>
    <tr>
      <td>นามสกุล</td>
      <td><input type="text" name="lastname" id="lastname"  value="<?php echo $arr['lastname'] ;?>"></td>
    </tr>
    <tr>
      <td>เพศ</td>
      <td><input type="radio" name="gender" id="radio" value="ชาย" <?php if($arr['gender']=="ชาย"  )echo "checked";?> >
      <label for="gender">ชาย 
        <input type="radio" name="gender" id="radio2" value="หญิง" <?php if($arr['gender']=="หญิง"  )echo "checked";?>>
      หญิง</label></td>
    </tr>
    <tr>
      <td>วันเกิด</td>
      <td><input type="date" name="birthday" id="birthday value="<?php echo $arr['birthday'] ;?>""></td>
    </tr>
    <tr>
      <td>อีเมล์</td>
      <td><input type="text" name="email" id="email" value="<?php echo $arr['email'] ;?>"></td>
    </tr>
    <tr>
      <td>รหัสผ่าน</td>
      <td><input type="text" name="password" id="password" value="<?php echo $arr['password'] ;?>"></td>
    </tr>
    <tr>
      <td>โทรศัพท์</td>
      <td><input type="text" name="tel" id="tel" value="<?php echo $arr['tel'] ;?>"></td>
    </tr>
    <tr>
      <td>ตำแหน่ง</td>
      <td><input type="text" name="position" id="position" value="<?php echo $arr['position'] ;?>"></td>
    </tr>
    <tr>
      <td>เงินเดือน</td>
      <td><input type="text" name="salary" id="salary" value="<?php echo $arr['salary'] ;?>"></td>
    </tr>
    <tr>
      <td>ทีอยู่</td>
      <td><textarea name="address" id="address" cols="50" rows="6"><?php echo $arr['address'] ;?></textarea></td>
    </tr>
    <tr>
      <td>สถานะ</td>
      <td><select name="status" id="status">
        <option value="ปรกติ" <?php if($arr['status']=="ปรกติ"  )echo "selected";?>>ปรกติ </option>
        <option value="ลาออก" <?php if($arr['status']=="ลาออก"  )echo "selected";?>>ลาออก</option>
        <option value="พักร้อน" <?php if($arr['status']=="พักร้อน"  )echo "selected";?>>พักร้อน</option>
        <option value="พักงาน" <?php if($arr['status']=="พักงาน"  )echo "selected";?>>พักงาน</option>
      </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="UPDATE">
      <a href="employee.php"><input type="button" name="button" id="button" value="ยกเลิก" 
      onClick="javscript window.location='employee.php';"></a></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>



