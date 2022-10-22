<?php 

include "../../../database.php";
include "../../admin/footer.php";

$action = $_GET['action'];
if ($action == "CREATE") {
   $stmt = $conn->prepare("INSERT INTO employee (employee_id , employee_card, username, employee_name, employee_lname, employee_age, employee_tel, type, password ) VALUES (:employee_id, :employee_card, :username, :employee_name, :employee_lname, :employee_age, :employee_tel, :type, :password )");
   $stmt->bindParam("employee_id", $_POST['employee_id'], PDO::PARAM_STR);
   $stmt->bindParam("employee_card", $_POST['employee_card'], PDO::PARAM_STR);
   $stmt->bindParam("username", $_POST['username'], PDO::PARAM_STR);
   $stmt->bindParam("employee_name", $_POST['employee_name'], PDO::PARAM_STR);
   $stmt->bindParam("employee_lname", $_POST['employee_lname'], PDO::PARAM_STR);
   $stmt->bindParam("employee_age", $_POST['employee_age'], PDO::PARAM_STR);
   $stmt->bindParam("employee_tel", $_POST['employee_tel'], PDO::PARAM_STR);
   $stmt->bindParam("type", $_POST['type'], PDO::PARAM_STR);
   $stmt->bindParam("password", $_POST['password'], PDO::PARAM_STR);

   $result = $stmt->execute();
   if ($result) {
    echo "<script>";
    echo "Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'ทำการบันทึกสำเร็จ',
          showConfirmButton: false,
          timer: 1200
          }).then((result) => {
             if(result){
                window.location.href = '../admin.php';
             }
          })";
    echo "</script>";
   } else {
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
   }
}
?>
