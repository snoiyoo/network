
<meta charset="utf-8">
<?php
	include "inc1_connect.php";
                $name = $_POST['name'];
                echo $name."<br>";
                $department = $_POST['department'];
	        echo $department."<br>";
	        $ipaddress = $_POST['ipaddress'];
	        echo $ipaddress."<br>" ;
        $macaddress = $_POST['macaddress'];
        echo $macaddress."<br>";
	$textarea = $_POST['textarea'];
	echo $textarea."<br>";
	$typeid = $_POST['typeid'];
	echo $typeid."<br>";
	
	$sql = "insert into  ip values(null,'$name','$department','$ipaddress','$macaddress','$textarea','$typeid')";

//$sql = "INSERT INTO ipaddress VALUES (null,'$name', '$department', '$ipaddress', '$macaddress', '$textarea', 'typeid')";
    $result = mysql_query($sql);
	echo $sql ;   
  header("Location:http://172.16.0.108/network/backend/backend/ip.php");
?>