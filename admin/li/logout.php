<?php 

include('../dasboard/employee/footer.php');

session_start();

session_unset();
session_destroy();


echo "<script>";
echo    "const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: 'กำลังออกจากระบบ'
            }).then((result) => {
                if(result){
                   window.location.href = '../login/index.php';
                }
             })";
echo "</script>";


// echo "<script>";
// echo "Swal.fire({
//       position: 'top-end',
//       icon: 'success',
//       title: 'กำลังออกจากระบบ',
//       showConfirmButton: false,
//       timer: 1200
//       }).then((result) => {
//          if(result){
//             window.location.href = '../login/index.php';
//          }
//       })";
// echo "</>";



// header("Location: ../login/index.php");