<!-- 





<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">แก้ไขรายชื่อสมาชิก</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

                    <form action="" method="POST">
                    <input type="hidden" name="update_id" id="update_id">

                    <div class="modal-body">

                    <div class="form-group">
                    <label class="control-label">เลขบัตรประชาชน</label>
                       <input class="form-control" type="number" name="employee_card" id="employee_card" placeholder="ระบุเลขบัตรประชาชน" autofocus>
                    </div>
                    <div class="form-group">
                   <label class="control-label">ชื่อผู้ใช้งาน</label>
                   <input class="form-control" type="text" name="username" id="username" placeholder="ระบุชื่อผู้ใช้งาน">
                        </div>
                        <div class="form-group">
                   <label class="control-label">ชื่อ</label>
                   <input class="form-control" type="text" name="employee_name" id="employee_name" placeholder="ระบุชื่อ">
                        </div>
                        <div class="form-group">
                   <label class="control-label">นามสกุล</label>
                   <input class="form-control" type="text" name="employee_lname" id="employee_lname" placeholder="ระบุนามสกุล">
                        </div>
                        <div class="form-group">
                    <label class="control-label">อายุ</label>
                    <input class="form-control" type="number" name="employee_age" id="employee_age" placeholder="ระบุอายุ">
                        </div>
                        <div class="form-group">
                   <label class="control-label">เบอร์โทรศัพท์</label>
                   <input class="form-control" type="number" name="employee_tel" id="employee_tel" placeholder="ระบุเบอร์โทรศัพท์">
                        </div>
                        <div class="form-group">
                    <label class="control-label">สถานะ</label>
                    <input class="form-control" type="number" name="type" id="type" placeholder="ระบุสถานะ(1=admin,2=employee)">
                        </div>
                        <div class="form-group">
                    <label class="control-label">รหัสผ่าน</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="ระบุรหัสผ่าน">
                        </div>
                    </div>

                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </form>
    </div>
  </div>
</div>
 -->

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
                $('#employee_name').val(data[3]);
                $('#employee_lname').val(data[4]);
                $('#employee_age').val(data[5]);
                $('#employee_tel').val(data[6]);
                $('#type').val(data[7]);
                $('#password').val(data[8]);

            });
        });



</script>





<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">แก้ไขรายชื่อผู้ดูแลระบบ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

                    <form action="admin/admin_ud_1.php" method="POST">
                    <input type="hidden" name="updatedata" id="updatedata">

                    <div class="modal-body">

                    <div class="form-group">
                    <label class="control-label">เลขบัตรประชาชน</label>
                       <input class="form-control" type="number" name="employee_card" id="employee_card" placeholder="ระบุเลขบัตรประชาชน" autofocus >
                    </div>
                    <div class="form-group">
                   <label class="control-label">ชื่อผู้ใช้งาน</label>
                   <input class="form-control" type="text" name="username" id="username" placeholder="ระบุชื่อผู้ใช้งาน">
                        </div>
                        <div class="form-group">
                   <label class="control-label">ชื่อ</label>
                   <input class="form-control" type="text" name="employee_name" id="employee_name" placeholder="ระบุชื่อ">
                        </div>
                        <div class="form-group">
                   <label class="control-label">นามสกุล</label>
                   <input class="form-control" type="text" name="employee_lname" id="employee_lname" placeholder="ระบุนามสกุล">
                        </div>
                        <div class="form-group">
                    <label class="control-label">อายุ</label>
                    <input class="form-control" type="text" name="employee_age" id="employee_age" placeholder="ระบุอายุ">
                        </div>
                        <div class="form-group">
                   <label class="control-label">เบอร์โทรศัพท์</label>
                   <input class="form-control" type="text" name="employee_tel" id="employee_tel" placeholder="ระบุเบอร์โทรศัพท์">
                        </div>
                        <div class="form-group">
                    <label class="control-label">สถานะ</label>
                    <input class="form-control" type="text" name="type" id="type" placeholder="ระบุสถานะ(1=admin,2=employee)">
                        </div>


                    </div>

                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                    <button type="submit" name="updatedata" class="btn btn-primary">บันทึก</button>
                </div>
                </form>
    </div>
  </div>
</div>