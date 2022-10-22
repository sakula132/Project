<?php 

    include_once('functions.php');
    include('cp.php');

    $updatedata = new DB_con();

    if (isset($_POST['update'])) {


        $userid = $_POST['mem_id'];

        $mem_number = $_POST['mem_number'];
        $username = $_POST['username'];
        $mem_lname = $_POST['mem_lname'];
        $mem_age = $_POST['mem_age'];
        $reg_tel = $_POST['reg_tel'];
        $password = $_POST['password'];


        $sql = $updatedata->update($mem_number, $username, $mem_lname, $mem_age, $reg_tel, $password, $userid);
        if ($sql) {
            echo "<script>alert('Updated Successfully!');</script>";
            echo "<script>window.location.href='../cus.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='../cus.php'</script>";
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

                $('#mem_id').val(data[0]);
                $('#mem_number').val(data[1]);
                $('#username').val(data[2]);
                $('#mem_lname').val(data[3]);
                $('#mem_age').val(data[4]);
                $('#reg_tel').val(data[5]);
                $('#password').val(data[6]);

            });
        });



</script>
