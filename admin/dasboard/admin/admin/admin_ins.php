

    <!-- <link rel="stylesheet" href="../css/main.css"> -->
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>




    <div class="col-8 offset-3 mt-5 mr-5">
            <div class="row">
                <div class="col-8 ml-5">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h2 class="h6 text-muted"><i class="fas fa-file-import"></i> &nbsp;เพิ่มรายชื่อผู้ดูแลระบบ</h2>
            <form action="admin_ins_1.php?action=CREATE" method="post" class="mt-4">


            <div class="form-group">
               <label class="control-label">เลขบัตรประชาชน</label>
               <input class="form-control" type="number" name="employee_card" placeholder="ระบุเลขบัตรประชาชน" autofocus>
            </div>
            <div class="form-group">
               <label class="control-label">ชื่อผู้ใช้งาน</label>
               <input class="form-control" type="text" name="username" placeholder="ระบุชื่อผู้ใช้งาน">
            </div>
            <div class="form-group">
               <label class="control-label">ชื่อ</label>
               <input class="form-control" type="text" name="employee_name" placeholder="ระบุชื่อ">
            </div>
            <div class="form-group">
               <label class="control-label">นามสกุล</label>
               <input class="form-control" type="text" name="employee_lname" placeholder="ระบุนามสกุล">
            </div>
            <div class="form-group">
               <label class="control-label">อายุ</label>
               <input class="form-control" type="number" name="employee_age" placeholder="ระบุอายุ">
            </div>
            <div class="form-group">
               <label class="control-label">เบอร์โทรศัพท์</label>
               <input class="form-control" type="number" name="employee_tel" placeholder="ระบุเบอร์โทรศัพท์">
            </div>
            <div class="form-group">
               <label class="control-label">สถานะ</label>
               <input class="form-control" type="number" name="type" placeholder="ระบุสถานะ(1=admin,2=employee)">
            </div>
            <div class="form-group">
               <label class="control-label">รหัสผ่าน</label>
               <input class="form-control" type="password" name="password" placeholder="ระบุรหัสผ่าน">
            </div>


                                <div class="form-group">
                                    <button type="submit" name="submit" class="mt-4 btn btn-block bg-success text-white shadow-none">Submit</button>
                                </div>

                                <div class="form-group">
                                    <a type="submit" name="cancel" href="../admin.php" class="mt-4 btn btn-block bg-danger text-white shadow-none">Cancel</a>
                                </div>

                                
                            </form>
                        </div>
                    </div>
                </div>




















                <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>



<div class="modal fade" id="insert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="insert">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <form action="../admin.php" method="post" class="mt-4">
            <div class="form-group">
               <label class="control-label">เลขบัตรประชาชน</label>
               <input class="form-control" type="number" name="ecard" placeholder="ระบุเลขบัตรประชาชน" autofocus>
            </div>
            <div class="form-group">
               <label class="control-label">ชื่อผู้ใช้งาน</label>
               <input class="form-control" type="text" name="username" placeholder="ระบุชื่อผู้ใช้งาน">
            </div>
            <div class="form-group">
               <label class="control-label">ชื่อ</label>
               <input class="form-control" type="text" name="employee_name" placeholder="ระบุชื่อ">
            </div>
            <div class="form-group">
               <label class="control-label">นามสกุล</label>
               <input class="form-control" type="text" name="employee_lname" placeholder="ระบุนามสกุล">
            </div>
            <div class="form-group">
               <label class="control-label">อายุ</label>
               <input class="form-control" type="number" name="employee_age" placeholder="ระบุอายุ">
            </div>
            <div class="form-group">
               <label class="control-label">เบอร์โทรศัพท์</label>
               <input class="form-control" type="number" name="employee_tel" placeholder="ระบุเบอร์โทรศัพท์">
            </div>
            <div class="form-group">
               <label class="control-label">สถานะ</label>
               <input class="form-control" type="number" name="type" placeholder="ระบุสถานะ(1=admin,2=employee)">
            </div>
            <div class="form-group">
               <label class="control-label">รหัสผ่าน</label>
               <input class="form-control" type="password" name="password" placeholder="ระบุรหัสผ่าน">
            </div>


                                <div class="form-group">
                                    <button type="submit" name="insert" class="mt-4 btn btn-block bg-success text-white shadow-none">Submit</button>
                                </div>

                                <div class="form-group">
                                    <a type="submit" name="cancel" href="../admin.php" class="mt-4 btn btn-block bg-danger text-white shadow-none">Cancel</a>
                                </div>

                                
                            </form>
            </div>
        </div>
    </div>
</div>