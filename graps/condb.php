<?php
	$host = "localhost"; // ชื่อ host หรือ ip ที่ใช้
	$userhost = "root"; // ชื่อ user ที่ใช้ในการล็อกอิน
	//$userhost = "siit2010"; // ชื่อ user ที่ใช้ในการล็อกอิน
	$passhost = "abcd1234"; // password ที่ใช้ในการล็อกอิน
	$database = "5508113315db"; // ชื่อ Database
	$conn = mysql_connect($host,$userhost,$passhost);
	if(!$conn){
		echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้";
	}
	mysql_query("use $database"); // เลือกฐานข้อมูลที่ใช้
?>