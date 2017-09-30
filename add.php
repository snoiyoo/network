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
<p style="font-size: 24px; color: #03F;">การเพิ่มรายการอุปกรณ์อุปกรณ์ระบบเครือข่ายคอมพิวเตอร์ สำนักเทคโนโลยีสารสนเทศ</p>
<form id="form1" name="form1" method="post">
  <table width="65%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CC3366">
    <tr bgcolor="#CC3366">
      <td colspan="4" style="text-align: center"><span style="color: #3F0; font-size: 24px; text-align: justify;">ตารางการเพิ่มรายการอปกรณ์</span></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="12%">อุปกรณ์</td>
      <td width="45%" style="text-align: left"><input type="text" name="name" id="name"></td>
      <td width="22%" style="text-align: left">1. Aruba</td>
      <td width="21%" style="text-align: left">9. Dell</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td>รายละเอียด</td>
      <td style="text-align: left"><textarea name="detail" id="detail"></textarea></td>
      <td style="text-align: left">2. cisco 2960 </td>
      <td style="text-align: left">10. HP</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td>ครุภัณฑ์</td>
      <td style="text-align: left"><input type="text" name="kharuphan" id="kharuphan"> 
        7440-008-007(14/58)</td>
      <td style="text-align: left">3. Juniper </td>
      <td style="text-align: left">11. IBM</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td>หมายเลข Serial</td>
      <td style="text-align: left"><input type="text" name="serial" id="serial"></td>
      <td style="text-align: left">4. 3com 7760</td>
      <td style="text-align: left">12. ASUS</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td>จำนวน</td>
      <td style="text-align: left"><label for="quantity">:</label>
        <select name="quantity" id="quantity">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
      </select></td>
      <td style="text-align: left">5. 3COM 5500-EI</td>
      <td style="text-align: left">&nbsp;</td>
    </tr >
    <tr bgcolor="#FFFFFF">
      <td>สถานะ</td>
      <td style="text-align: left"><select name="status" id="status">
        <option value="ปรกติ">ปรกติ</option>
        <option value="ส่งซ่อม">ส่งซ่อม</option>
      </select></td>
      <td style="text-align: left">6. PALOALTO</td>
      <td style="text-align: left">&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td>สถานที่</td>
      <td style="text-align: left"><textarea name="Location" id="Location"></textarea></td>
      <td style="text-align: left">7. Bluecoate</td>
      <td style="text-align: left">&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td>id อุปกรณ์</td>
      <td style="text-align: left"><select name="typeid" id="typeid">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select></td>
      <td style="text-align: left">8. CiscoASA</td>
      <td style="text-align: left">&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td>&nbsp;</td>
      <td style="text-align: left"><input name="submit" type="submit" id="submit" formaction="save.php" value="เพิ่มข้อมูล"></td>
      <td style="text-align: left">9. Dell</td>
      <td style="text-align: left">&nbsp;</td>
    </tr>

  
  </table>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>