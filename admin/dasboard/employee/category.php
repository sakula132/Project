<?php 
include('../includes/header.php');
include('../includes/navbar.php');

?>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>


<div class="col-8 offset-3 mt-5 mr-5">
            <div class="row">
                <div class="col-8 ml-5">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h2 class="h6 text-muted"><i class="fas fa-th-list"></i> &nbsp;เพิ่มหมวดหมู่</h2>
                            <form action="#" method="post" class="mt-4">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="text-muted  m-0 p-0">หมายเลขพื้นที่จอดรถ</label>
                                            <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control form-control-sm shadow-none" name="parking_area_no" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="text-muted  m-0 p-0">ประเภทยานพาหนะ</label>
                                            <input type="text" class="form-control form-control-sm shadow-none" name="vehicle_type" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                   <label class="text-muted  m-0 p-0">จำกัดยานพาหนะ</label>
                                   <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" class="form-control form-control-sm shadow-none" name="vehicle_limit" required>
                                </div>
                                <div class="form-group">
                                   <label class="text-muted  m-0 p-0">ค่าจอดรถ</label>
                                   <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" class="form-control form-control-sm shadow-none" name="parking_charge" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="send" class="btn text-white mt-4 btn-block shadow-none border-0 bg-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h2 class="text-muted h6"><b><i class="fas fa-universal-access"></i>&nbsp; ราคา:</b></h2>
                            
                                                        <div class="mt-4">
                                <div class="media-body">
                                    รถยนต์                                    <p class="float-right"><i class="fas fa-dollar-sign"></i>&nbsp; 100</p>
                                </div>
                            </div>
                                                        <div class="mt-4">
                                <div class="media-body">
                                    มอเตอร์ไซต์                                    <p class="float-right"><i class="fas fa-dollar-sign"></i>&nbsp; 50</p>
                                </div>
                            </div>
                                                        <div class="mt-4">
                                <div class="media-body">
                                    Mini Van                                    <p class="float-right"><i class="fas fa-dollar-sign"></i>&nbsp; 5</p>
                                </div>
                            </div>
                                                        <div class="mt-4">
                                <div class="media-body">
                                    Pickup Van                                    <p class="float-right"><i class="fas fa-dollar-sign"></i>&nbsp; 5</p>
                                </div>
                            </div>
                                                    </div>
                    </div>
                </div>
                <div class="col-12 mt-3 ml-5">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h2 class="h6 text-muted"><i class="fas fa-tasks"></i> &nbsp;จัดการหมวดหมู่</h2>
                            <table class="table mt-4 table-borderless">
                                <tr>
                                    <th><b>#</b></th>
                                    <th><b>หมายเลขพื้นที่</b></th>
                                    <th><b>ประเภทยานพาหนะ</b></th>
                                    <th><b>จำกัดยานพาหนะ</b></th>
                                    <th><b>ค่าใช้จ่าย</b></th>
                                    <th><b>สถานะ</b></th>
                                    <th><b>การดำเนินการ</b></th>
                                </tr>
                                                                <tr>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>Car</td>
                                    <td>18</td>
                                    <td>4</td>
                                    <td>                                        <span class="badge badge-success">เปิดใช้งานแล้ว</span>
                                        
                                        
                                        </small></td>
                                    <td>
                                        <div class="modal fade" id="rock1">
                                           <div class="modal-dialog">
                                               <div class="modal-content">
                                                   <div class="modal-body">
                                                       <i class="far fa-frown"></i>&nbsp; Do you really want to delete this category?
                                                   </div>
                                                   <div class="modal-footer">
                                                       <a href="http://localhost/SimpleParkingMgSystem_CI/admin/delete/category/1" class="btn btn-sm btn-danger shadow-none">&nbsp; Yes &nbsp;</a>
                                                       <a href="" class="btn btn-dark btn-sm shadow-none">&nbsp; No &nbsp;</a>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       
                                                                              <a href="#" class="btn btn-sm bg-danger text-white shadow-none"><small>Deactivate</small></a>
                                                                              <button type="button" data-toggle="modal" data class="btn btn-sm btn-danger shadow-none" data-target="#rock1">
                                            <i class="fas fa-trash fa-xs"></i>
                                       </button>
                                       <a href="http://localhost/SimpleParkingMgSystem_CI/admin/edit/edit_category/1" onclick="window.open('http://localhost/SimpleParkingMgSystem_CI/admin/edit/edit_category/1', '_blank', 'width=800,height=600,scrollbars=yes,menubar=no,status=yes,resizable=yes,screenx=0,screeny=0'); return false;" class="btn btn-info btn-sm shadow-none"><i class="fas fa-edit fa-xs"></i></a>                                    </td>
                                </tr>
                                                                <tr>
                                    <td>3</td>
                                    <td>6</td>
                                    <td>Motorcycle</td>
                                    <td>26</td>
                                    <td>2</td>
                                    <td>                                        <span class="badge badge-success">เปิดใช้งานแล้ว</span>
                                        
                                        
                                        </small></td>
                                    <td>
                                        <div class="modal fade" id="rock3">
                                           <div class="modal-dialog">
                                               <div class="modal-content">
                                                   <div class="modal-body">
                                                       <i class="far fa-frown"></i>&nbsp; Do you really want to delete this category?
                                                   </div>
                                                   <div class="modal-footer">
                                                       <a href="http://localhost/SimpleParkingMgSystem_CI/admin/delete/category/3" class="btn btn-sm btn-danger shadow-none">&nbsp; Yes &nbsp;</a>
                                                       <a href="" class="btn btn-dark btn-sm shadow-none">&nbsp; No &nbsp;</a>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       
                                                                              <a href="http://localhost/SimpleParkingMgSystem_CI/admin/status/status_deactivate/3" class="btn btn-sm bg-danger text-white shadow-none"><small>Deactivate</small></a>
                                                                              <button type="button" data-toggle="modal" data class="btn btn-sm btn-danger shadow-none" data-target="#rock3">
                                            <i class="fas fa-trash fa-xs"></i>
                                       </button>
                                       <a href="http://localhost/SimpleParkingMgSystem_CI/admin/edit/edit_category/3" onclick="window.open('http://localhost/SimpleParkingMgSystem_CI/admin/edit/edit_category/3', '_blank', 'width=800,height=600,scrollbars=yes,menubar=no,status=yes,resizable=yes,screenx=0,screeny=0'); return false;" class="btn btn-info btn-sm shadow-none"><i class="fas fa-edit fa-xs"></i></a>                                    </td>
                                </tr>
                                                                <tr>
                                    <td>4</td>
                                    <td>2</td>
                                    <td>Mini Van</td>
                                    <td>8</td>
                                    <td>5</td>
                                    <td>                                        <span class="badge badge-success">เปิดใช้งานแล้ว</span>
                                        
                                        
                                        </small></td>
                                    <td>
                                        <div class="modal fade" id="rock4">
                                           <div class="modal-dialog">
                                               <div class="modal-content">
                                                   <div class="modal-body">
                                                       <i class="far fa-frown"></i>&nbsp; Do you really want to delete this category?
                                                   </div>
                                                   <div class="modal-footer">
                                                       <a href="http://localhost/SimpleParkingMgSystem_CI/admin/delete/category/4" class="btn btn-sm btn-danger shadow-none">&nbsp; Yes &nbsp;</a>
                                                       <a href="" class="btn btn-dark btn-sm shadow-none">&nbsp; No &nbsp;</a>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       
                                                                              <a href="http://localhost/SimpleParkingMgSystem_CI/admin/status/status_deactivate/4" class="btn btn-sm bg-danger text-white shadow-none"><small>Deactivate</small></a>
                                                                              <button type="button" data-toggle="modal" data class="btn btn-sm btn-danger shadow-none" data-target="#rock4">
                                            <i class="fas fa-trash fa-xs"></i>
                                       </button>
                                       <a href="http://localhost/SimpleParkingMgSystem_CI/admin/edit/edit_category/4" onclick="window.open('http://localhost/SimpleParkingMgSystem_CI/admin/edit/edit_category/4', '_blank', 'width=800,height=600,scrollbars=yes,menubar=no,status=yes,resizable=yes,screenx=0,screeny=0'); return false;" class="btn btn-info btn-sm shadow-none"><i class="fas fa-edit fa-xs"></i></a>                                    </td>
                                </tr>
                                                                <tr>
                                    <td>5</td>
                                    <td>7</td>
                                    <td>Pickup Van</td>
                                    <td>11</td>
                                    <td>5</td>
                                    <td>                                        <span class="badge badge-success">เปิดใช้งานแล้ว</span>
                                        
                                        
                                        </small></td>
                                    <td>
                                        <div class="modal fade" id="rock5">
                                           <div class="modal-dialog">
                                               <div class="modal-content">
                                                   <div class="modal-body">
                                                       <i class="far fa-frown"></i>&nbsp; Do you really want to delete this category?
                                                   </div>
                                                   <div class="modal-footer">
                                                       <a href="http://localhost/SimpleParkingMgSystem_CI/admin/delete/category/5" class="btn btn-sm btn-danger shadow-none">&nbsp; Yes &nbsp;</a>
                                                       <a href="" class="btn btn-dark btn-sm shadow-none">&nbsp; No &nbsp;</a>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       
                                                                              <a href="http://localhost/SimpleParkingMgSystem_CI/admin/status/status_deactivate/5" class="btn btn-sm bg-danger text-white shadow-none"><small>Deactivate</small></a>
                                                                              <button type="button" data-toggle="modal" data class="btn btn-sm btn-danger shadow-none" data-target="#rock5">
                                            <i class="fas fa-trash fa-xs"></i>
                                       </button>
                                       <a href="http://localhost/SimpleParkingMgSystem_CI/admin/edit/edit_category/5" onclick="window.open('http://localhost/SimpleParkingMgSystem_CI/admin/edit/edit_category/5', '_blank', 'width=800,height=600,scrollbars=yes,menubar=no,status=yes,resizable=yes,screenx=0,screeny=0'); return false;" class="btn btn-info btn-sm shadow-none"><i class="fas fa-edit fa-xs"></i></a>                                    </td>
                                </tr>
                                                                
                                                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</script>

<?php
include('../includes/scripts.php');
include('../includes/footer.php');

?>
