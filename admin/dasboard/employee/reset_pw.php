
<?php 
include('../includes/header.php');
include('../includes/navbar.php');

?>

<style>
.card{    
max-width: 500px;
padding: 10px 10px 10px 10px;
transform: translateX(-5%);
transition: all .3s ease;
}


</style>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>

        <div class="col-8 offset-3 mr-5 mt-5">
            <div class="row">

                <div class="col-12 ml-5">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h2 class="h6 text-muted"><i class="fas fa-cog"></i> &nbsp;Change Your Password</h2>
                            <form action="#" method="post" class="mt-4">
                                <div class="form-group">
                                    <label class=" m-0 p-0 text-muted">Current Password</label>
                                    <input type="password" name="current_password" class="form-control form-control-sm shadow-none" placeholder="รหัสผ่านเดิม" autofocus>
                                </div>
                                <div class="form-group">
                                    <label class=" m-0 p-0 text-muted">New Password</label>
                                    <input type="password" name="new_password" class="form-control form-control-sm shadow-none" placeholder="รหัสผ่านใหม่" >
                                </div>
                                <div class="form-group">
                                    <label class=" m-0 p-0 text-muted">Re enter Password</label>
                                    <input type="password" name="reenter_password" class="form-control form-control-sm shadow-none" placeholder="ยืนยันรหัสผ่านใหม่อีกครั้ง">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="send" class="btn btn-block bg-success text-white shadow-none mt-4" value="Change Password">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('../includes/scripts.php');
include('../includes/footer.php');

?>
