<?php 

    include_once('functions.php');
    include('cp.php');

    $updatedata = new DB_con();

    if (isset($_POST['update'])) {

        $userid = $_POST['employee_id'];

        $employee_card = $_POST['employee_card'];
        $username = $_POST['username'];
        $employee_lname = $_POST['employee_lname'];
        $employee_age = $_POST['employee_age'];
        $employee_tel = $_POST['employee_tel'];
        $type = $_POST['type'];
        $password = $_POST['password'];

        $sql = $updatedata->update($employee_card, $username, $employee_lname, $employee_age, $employee_tel, $type, $password, $userid);
        if ($sql) {
            echo "<script>alert('Updated Successfully!');</script>";
            echo "<script>window.location.href='../emp.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='../emp.php'</script>";
        }
    }


?>

<script>
        $(document).ready(function() {
            $('.editbtn').on('click', function(){
                
                $('#editmodal').modal('show');
                
                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();

                console.log(data);

                
                $('#employee_id').val(data[0]);
                $('#employee_card').val(data[1]);
                $('#username').val(data[2]);
                $('#employee_lname').val(data[3]);
                $('#employee_age').val(data[4]);
                $('#employee_tel').val(data[5]);
                $('#type').val(data[6]);
                $('#password').val(data[7]);

            });
        });



</script>
