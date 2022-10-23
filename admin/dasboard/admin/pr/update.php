<?php 

    include_once('functions.php');
    include('cp.php');

    $updatedata = new DB_con();

    if (isset($_POST['update'])) {


        $userid = $_POST['price_id'];

        $price_number = $_POST['price_number'];
        $unit = $_POST['unit'];
        $price = $_POST['price'];


        $sql = $updatedata->update($price_number, $unit, $price, $userid);
        if ($sql) {
            echo "<script>alert('Updated Successfully!');</script>";
            echo "<script>window.location.href='../pr.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='../pr.php'</script>";
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

                $('#price_id').val(data[0]);
                $('#price_number').val(data[1]);
                $('#unit').val(data[2]);
                $('#price').val(data[3]);

            });
        });



</script>
