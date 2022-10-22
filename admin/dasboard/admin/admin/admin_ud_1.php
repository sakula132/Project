<?php 

include "../../../database.php";
include "../../admin/footer.php";

if (isset ($_POST['updatedata'])) 
{

   $stmt = $conn->prepare("UPDATE employee SET(employee_id , employee_card, username, employee_name, employee_lname, employee_age, employee_tel, type) 
                        VALUES (:employee_id, :employee_card, :username, :employee_name, :employee_lname, :employee_age, :employee_tel, :type)");


   if($_POST){
    echo '<script> Alert("Data Updated"); </script>';
    header("location: ../admin.php");
   }else{
    echo '<script> Alert("Data not Updated"); </script>';
   }
}
?>
