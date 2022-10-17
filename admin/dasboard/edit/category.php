
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>

<div class="container my-3">
        <div class="row">
            <div class="col-11 mx-auto mt-5">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h2 class="h6 text-muted"><i class="fas fa-edit"></i> &nbsp;แก้ไขรายละเอียด</h2>
                                                
                        <form action="" method="post" class="mt-4">
                            <div class="form-group">
                              <label class="text-muted  m-0 p-0">หมายเลขพื้นที่</label>
                              <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control form-control-sm shadow-none" name="parking_area_no" value="7" autofocus>
                           </div>
                            <div class="form-group">
                               <label class="text-muted  m-0 p-0">ประเภทยานพาหนะ</label>
                               <input type="text" class="form-control form-control-sm shadow-none" name="vehicle_type" value="Car">
                            </div>
                            <div class="form-group">
                               <label class="text-muted  m-0 p-0">จำกัดยานพาหนะ</label>
                               <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" class="form-control form-control-sm shadow-none" name="vehicle_limit" value="80">
                            </div>
                            <div class="form-group">
                               <label class="text-muted  m-0 p-0">ค่าใช้จ่าย</label>
                               <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control form-control-sm shadow-none" name="parking_charge" value="100">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="send" class="btn btn-sm text-white mt-4 btn-block shadow-none border-0 bg-success">
                            </div>
                        </form>
                        
                                            </div>
                </div>
            </div>
        </div>
    </div>