<?php 

include('../database.php');

$action = $_GET['action'];
if ($action == "CREATE") {
   $stmt = $db_con->prepare("INSERT INTO member (username, mem_lname, mem_number, mem_age, reg_tel, reg_number, password ) VALUES (:username, :mem_lname, :mem_number, :mem_age, :reg_tel, :reg_number, :password )");
   $stmt->bindParam("username", $_POST['username'], PDO::PARAM_STR);
   $stmt->bindParam("mem_lname", $_POST['mem_lname'], PDO::PARAM_STR);
   $stmt->bindParam("mem_number", $_POST['mem_number'], PDO::PARAM_STR);
   $stmt->bindParam("mem_age", $_POST['mem_age'], PDO::PARAM_STR);
   $stmt->bindParam("reg_tel", $_POST['reg_tel'], PDO::PARAM_STR);
   $stmt->bindParam("reg_number", $_POST['reg_number'], PDO::PARAM_STR);
   $stmt->bindParam("password", $_POST['password'], PDO::PARAM_STR);

   $result = $stmt->execute();
   if ($result) {
      echo "<script>alert(`บันทึกข้อมูลได้สำเร็จ`)</script>";
      header("Location: /carparking/login/");
   } else {
      echo "<script>alert(`เกิดข้อผิดพลาดระหว่างบันทึกข้อมูล`)</script>";
   }
}



?>

