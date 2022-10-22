<?php 

    include_once('functions.php');
    include('cp.php');

    $insertdata = new DB_con();

    if (isset($_POST['insert'])) {
        $ecard = $_POST['employee_card'];
        $username = $_POST['username'];
        $elname = $_POST['employee_lname'];
        $eage = $_POST['employee_age'];
        $etel = $_POST['employee_tel'];
        $type = $_POST['type'];
        $password = $_POST['password'];

        $sql = $insertdata->insert($ecard, $username, $elname, $eage, $etel, $type, $password);

        if ($sql) {
            echo "<script>alert('บันทึกสำเร็จ!');</script>";
            echo "<script>window.location.href='../emp.php'</script>";
        } else {
            echo "<script>alert('มีบางอย่างผิดพลาด!');</script>";
            echo "<script>window.location.href='../emp.php'</script>";
        }
    }

?>