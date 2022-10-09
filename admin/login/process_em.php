<?php

include('../database.php');

if (!empty($_POST)) {
   $stmt = $db_con->prepare("SELECT * FROM employee WHERE username = :username AND password = :password ");
   $stmt->bindParam("username", $_POST['username']);
   $stmt->bindParam("password", $_POST['password']);
   $stmt->execute();
   $rows = $stmt->fetch(PDO::FETCH_ASSOC);

   if (empty($rows)) {
      echo 'ไม่พบ username, password ในระบบ กรุณาตรวจสอบใหม่อีกครั้ง';
   } else {
      $_SESSION["login_id"] = $rows["employee_id"]; // เก็บค่าในรูปแบบของ session
      // $_SESSION["login_type"] = $rows["type"]; // เก็บค่าในรูปแบบของ session
      $_SESSION["login_username"] = $rows["username"]; // เก็บค่าในรูปแบบของ session
      // $_SESSION["login_name"] = $rows["name"]; // เก็บค่าในรูปแบบของ session
      $_SESSION["login_surname"] = $rows["employee_lname"]; // เก็บค่าในรูปแบบของ session

      if ($rows['type'] == 1) {
         header("Location: ../dasboard/member/index.php");
      } elseif ($rows['type'] == 2) {
         header("Location: ../dasboard/member/index.php");
      }
   }
}