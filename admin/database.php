<?php
//หน้าเชื่อมฐานข้อมูล
ob_start();
if(!isset($_COOKIE["PHPSESSID"]))
{
  session_start();
} //เรื่มต้น session

$db_host = "localhost";
$db_user = "root"; //ชื่อuser
$db_pass = ""; //ชื่อรหัสผ่าน
$db_name = "project"; //ชื่อฐานข้อมูล

try {
   $conn = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $conn->exec("set names utf8");
} catch (PDOException $e) {
   echo $e->getMessage();
}

?>