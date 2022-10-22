<?php 
include('header.php');
include('navbar.php');

?>
    <link rel="stylesheet" href="../css/main.css">
    <!-- <link rel="stylesheet" href="../css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>



<style>

table {
	border-collapse: collapse;
}
.table {
	width: 100%;
	margin-bottom: 1rem;
    padding: 1rem;
	margin: -1rem -1rem -1rem auto;
	background-color: transparent;
    border-top: 2px solid #e9ecef;
}
td {
    font-size: 15px;
}
</style>
    <div class="col-8 offset-3 mt-5 mr-5">
            <div class="row">
                <div class="col-12 mt-3 ml-5">
                    <div class="card border-0 shadow-none">

                    <div class="container">
                    <button type="button" class="btn btn-dark mb-2" data-toggle="modal" data-target="#adda">Add New</button>


                        <div class="card-body">
                            <h2 class="h6 text-muted"><i class="fas fa-user-lock"></i>&nbsp; รายชื่อสมาชิก</h2>
                            <table class="table mt-4 table-borderless">
                                
                            
                            <tr>
                                    <th><b>รหัสสมาชิก</b></th>
                                    <th><b>เลขบัตรประชาชน</b></th>
                                    <th><b>ไอดีผู้ใช้งาน</b></th>
                                    <th><b>นามสกุล</b></th>
                                    <th><b>อายุ</b></th>
                                    <th><b>เบอร์โทรศัพท์</b></th>
                                    <th><b>การจัดการ</b></th>
                                </tr>


                                <?php 

                                    include_once('cus/functions.php');
                                $fetchdata = new DB_con();
                                $sql = $fetchdata->fetchdata();
                                while($row = mysqli_fetch_array($sql)) {

                                ?>
                                    <tr>
                                    <td><?php echo $row['mem_id']; ?></td>
                                    <td><?php echo $row['mem_number'];?></td>
                                    <td><?php echo $row['username'];?></td>
                                    <td><?php echo $row['mem_lname'];?></td>
                                    <td><?php echo $row['mem_age'];?></td>
                                    <td><?php echo $row['reg_tel'];?></td>

                                    <td>
                                        
                                    <button type="button" class="btn btn-info editbtn" data-toggle="modal">
                                    แก้ไข
                                    </button>
                                    <a href="cus/delete.php?del=<?php echo $row['mem_id']; ?>" class="btn btn-danger">ลบ</a>


                                    </td>


                                <td>
                                <?php 

                                }
                                ?>
                                
                                
                                </table>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







<!-- ###############DELETE###############DELETE###############DELETE###############DELETE###############DELETE###############DELETE############### -->

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> ลบข้อมูลสมาชิก </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="cus/delete.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="del" id="del">

                        <h4> คุณต้องการที่จะลบข้อมูล ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> ไม่ </button>
                        <button type="submit" name="del" class="btn btn-primary"> ใช่ !! ฉันต้องการลบ. </button>
                    </div>
                </form>

            </div>
        </div>
    </div>



    <!-- ###############UPDATE###############UPDATE###############UPDATE###############UPDATE############### -->










    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> แก้ไขรายชื่อสมาชิก </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="cus/update.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="mem_id" id="mem_id">

            <div class="form-group">
               <label  class="control-label">เลขบัตรประชาชน</label>
               <input class="form-control" type="number" name="mem_number"  id="mem_number" placeholder="ระบุเลขบัตรประชาชน" autofocus>
            </div>
            <div class="form-group">
               <label class="control-label">ชื่อผู้ใช้งาน</label>
               <input class="form-control" type="text" name="username" id="username" idusername placeholder="ระบุชื่อผู้ใช้งาน">
            </div>
            <div class="form-group">
               <label  class="control-label">นามสกุล</label>
               <input class="form-control" type="text" name="mem_lname" id="mem_lname" placeholder="ระบุนามสกุล">
            </div>
            <div class="form-group">
               <label  class="control-label">อายุ</label>
               <input class="form-control" type="number" name="mem_age" id="mem_age" placeholder="ระบุอายุ">
            </div>
            <div class="form-group">
               <label  class="control-label">เบอร์โทรศัพท์</label>
               <input class="form-control" type="number" name="reg_tel" id="reg_tel" placeholder="ระบุเบอร์โทรศัพท์">
            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="update" class="btn btn-info">Update Data</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    







    <!-- ###############INSERT###############INSERT###############INSERT###############INSERT###############INSERT###############INSERT############### -->
<div class="modal fade" id="adda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">เพิ่มรายชื่อสมาชิก</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form action="cus/insert.php" method="post" class="mt-4">

        <div class="modal-body">

            <div class="form-group">
               <label for="mem_number" class="control-label">เลขบัตรประชาชน</label>
               <input class="form-control" type="number" name="mem_number" placeholder="ระบุเลขบัตรประชาชน" autofocus>
            </div>
            <div class="form-group">
               <label for="username" class="control-label">ชื่อผู้ใช้งาน</label>
               <input class="form-control" type="text" name="username" placeholder="ระบุชื่อผู้ใช้งาน">
            </div>
            <div class="form-group">
               <label for="mem_lname" class="control-label">นามสกุล</label>
               <input class="form-control" type="text" name="mem_lname" placeholder="ระบุนามสกุล">
            </div>
            <div class="form-group">
               <label for="mem_age" class="control-label">อายุ</label>
               <input class="form-control" type="number" name="mem_age" placeholder="ระบุอายุ">
            </div>
            <div class="form-group">
               <label for="reg_tel" class="control-label">เบอร์โทรศัพท์</label>
               <input class="form-control" type="number" name="reg_tel" placeholder="ระบุเบอร์โทรศัพท์">
            </div>
            <div class="form-group">
               <label for="password" class="control-label">รหัสผ่าน</label>
               <input class="form-control" type="password" name="password" placeholder="ระบุรหัสผ่าน">
            </div>

            <div class="modal-footer">
            <div class="form-group">
                
            <button type="submit" name="insert" class="btn btn-info btn-lg text-white shadow-none" >Submit</button>
            <button type="button" name="cancel" data-dismiss="modal" aria-label="Close" class="btn btn-danger btn-lg text-white shadow-none ">Cancel</button>
            </div>
            

                                
                </form>
            </div>
        </div>
    </div>
</div>













<?php
include('../admin/scripts.php');
include('footer.php');
include('cus/delete.php');
include('cus/update.php');


?>
