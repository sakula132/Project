<?php 

    include_once('functions.php');
    include('cp.php');

    $insertdata = new DB_con();

    if (isset($_POST['insert'])) {
        $price_number = $_POST['price_number'];
        $unit = $_POST['unit'];
        $price = $_POST['price'];
        
        $sql = $insertdata->insert($price_number, $unit, $price);


        if ($sql) {
            echo "<script>alert('บันทึกสำเร็จ!');</script>";
            echo "<script>window.location.href='../cus.php'</script>";
        } else {
            echo "<script>alert('มีบางอย่างผิดพลาด!');</script>";
            echo "<script>window.location.href='../cus.php'</script>";
        }
    }

?>
