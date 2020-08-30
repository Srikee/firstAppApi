<?php
	header('Access-Control-Allow-Origin: *');
	
	$POSTDATA = file_get_contents("php://input");
	$REQUEST = json_decode($POSTDATA);						// ตัวแปรสำหรับดึงข้อมูลจากแอพที่ส่งข้อมูล

	include_once("class.database.php");						// ดึง class สำหรับการติดต่อฐานข้อมูล
	define("host", "localhost");
	define("user", "root");
	define("pass", "");
	define("dbname", "db_first_app");
	$DATABASE = new Database(host, user, pass, dbname);		// ตัวแปรสำหรับการเชือมต่อข้อมูลในฐานข้อมูล

	