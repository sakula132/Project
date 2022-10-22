<?php 

    include_once('functions.php');
    include('cp.php');

    $insertdata = new DB_con();

    if (isset($_POST['insert'])) {
        $mem_number = $_POST['mem_number'];
        $username = $_POST['username'];
        $mem_lname = $_POST['mem_lname'];
        $mem_age = $_POST['mem_age'];
        $reg_tel = $_POST['reg_tel'];
        $password = $_POST['password'];
        
        $sql = $insertdata->insert($mem_number, $username, $mem_lname, $mem_age, $reg_tel, $password);


        if ($sql) {
            echo "<script>alert('บันทึกสำเร็จ!');</script>";
            echo "<script>window.location.href='../cus.php'</script>";
        } else {
            echo "<script>alert('มีบางอย่างผิดพลาด!');</script>";
            echo "<script>window.location.href='../cus.php'</script>";
        }
    }

?>
