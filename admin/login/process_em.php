<?php

include('../database.php');
include('../dasboard/employee/footer.php');

if (!empty($_POST)) {
   $stmt = $db_con->prepare("SELECT * FROM employee WHERE username = :username AND password = :password ");
   $stmt->bindParam("username", $_POST['username']);
   $stmt->bindParam("password", $_POST['password']);
   $stmt->execute();
   $rows = $stmt->fetch(PDO::FETCH_ASSOC);

   if (empty($rows)) {
      // echo 'ไม่พบ username, password ในระบบ กรุณาตรวจสอบใหม่อีกครั้ง';
      echo "<script>";
      echo "Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'ไม่พบ username, password ในระบบ กรุณาตรวจสอบใหม่อีกครั้ง',
            showConfirmButton: false,
            timer: 2000
            }).then((result) => {
               if(result){
                  window.location.href = 'indexem.php';
               }
            })";
      echo "</script>";
   } else {
      $_SESSION["login_id"] = $rows["employee_id"]; // เก็บค่าในรูปแบบของ session
      // $_SESSION["login_type"] = $rows["type"]; // เก็บค่าในรูปแบบของ session
      $_SESSION["login_username"] = $rows["username"]; // เก็บค่าในรูปแบบของ session
      // $_SESSION["login_name"] = $rows["name"]; // เก็บค่าในรูปแบบของ session
      $_SESSION["login_surname"] = $rows["employee_lname"]; // เก็บค่าในรูปแบบของ session

      if ($rows['type'] == 1) {
         // header("Location: ../dasboard/admin/index.php");
         echo "<script>";
         echo "Swal.fire({
               position: 'top-end',
               icon: 'success',
               title: 'เข้าสู่ระบบสำเร็จ',
               showConfirmButton: false,
               timer: 1200
               }).then((result) => {
                  if(result){
                     window.location.href = '../dasboard/admin/index.php';
                  }
               })";
         echo "</script>";
      } elseif ($rows['type'] == 2) {
         // header("Location: ../dasboard/employee/index.php");
         echo "<script>";
         echo "Swal.fire({
               position: 'top-end',
               icon: 'success',
               title: 'เข้าสู่ระบบสำเร็จ',
               showConfirmButton: false,
               timer: 1200
               }).then((result) => {
                  if(result){
                     window.location.href = '../dasboard/employee/index.php';
                  }
               })";
         echo "</script>";
      }
   }
}