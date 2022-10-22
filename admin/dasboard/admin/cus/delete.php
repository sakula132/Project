<?php 

    include_once('functions.php');
    include('cp.php');

    if (isset($_GET['del'])) {
        $userid = $_GET['del'];
        $deletedata = new DB_con();
        $sql = $deletedata->delete($userid);

        if ($sql) {
            echo "<script>";
            echo "Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'ทำการลบสำเร็จ',
                showConfirmButton: false,
                timer: 1200
                }).then((result) => {
                  if(result){
                     window.location.href = '../cus.php';
                  }
               })";
            echo "</script>";
        }
        else
        {
            echo '<script> alert("Data Not Deleted"); </script>';
        }
    }

?>



<script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
</script>