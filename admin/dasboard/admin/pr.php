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
                    <button type="button" class="btn btn-dark mb-2" data-toggle="modal" data-target="#adda">กดเพื่อเพิ่ม</button>


                        <div class="card-body">
                            <h2 class="h6 text-muted"><i class="fas fa-user-lock"></i>&nbsp; อัตราราคา</h2>
                            <table class="table mt-4 table-borderless">
                                
                            
                            <tr>
                                    <th><b>รหัสอัตราราคา</b></th>
                                    <th><b>ระยะเวลา</b></th>
                                    <th><b>หน่วย</b></th>
                                    <th><b>ราคา</b></th>
                                    <th><b>การจัดการ</b></th>
                                </tr>


                                <?php 

                                    include_once('pr/functions.php');
                                $fetchdata = new DB_con();
                                $sql = $fetchdata->fetchdata();
                                while($row = mysqli_fetch_array($sql)) {

                                ?>
                                    <tr>
                                    <td><?php echo $row['price_id']; ?></td>
                                    <td><?php echo $row['price_number'];?></td>
                                    <td><?php echo $row['unit'];?></td>
                                    <td><?php echo $row['price'];?></td>

                                    <td>
                                        
                                    <button type="button" class="btn btn-info editbtn" data-toggle="modal">
                                    แก้ไข
                                    </button>
                                    <a href="pr/delete.php?del=<?php echo $row['price_id']; ?>" class="btn btn-danger">ลบ</a>


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

                <form action="pr/delete.php" method="POST">

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
                    <h5 class="modal-title" id="exampleModalLabel"> แก้ไขอัตราราคา </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="pr/update.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="price_id" id="price_id">

            <div class="form-group">
               <label  class="control-label">ระยะเวลา</label>
               <input class="form-control" type="number" name="price_number"  id="price_number" placeholder="ระบุระยะเวลา" autofocus>
            </div>
            <div class="form-group">
               <label class="control-label">หน่วย</label>
               <input class="form-control" type="text" name="unit" id="unit" idusername placeholder="ระบุหน่วย">
            </div>
            <div class="form-group">
               <label  class="control-label">ราคา</label>
               <input class="form-control" type="text" name="price" id="price" placeholder="ระบุราคา">
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
        <h5 class="modal-title" id="exampleModalLabel">เพิ่มอัตราราคา</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form action="cus/insert.php" method="post" class="mt-4">

        <div class="modal-body">

            <div class="form-group">
               <label for="price_number" class="control-label">ระยะเวลา</label>
               <input class="form-control" type="number" name="price_number" placeholder="ระบุระยะเวลา" autofocus>
            </div>
            <div class="form-group">
               <label for="unit" class="control-label">หน่วย</label>
               <input class="form-control" type="text" name="unit" placeholder="ระบุหน่วย">
            </div>
            <div class="form-group">
               <label for="price" class="control-label">ราคา</label>
               <input class="form-control" type="text" name="price" placeholder="ระบุราคา">
            </div>

            <div class="modal-footer">
            <div class="form-group">
                
            <button type="submit" name="insert" class="btn btn-info btn-lg text-white shadow-none" >ยืนยัน</button>
            <button type="button" name="cancel" data-dismiss="modal" aria-label="Close" class="btn btn-danger btn-lg text-white shadow-none ">ยกเลิก</button>
            </div>
            

                                
                </form>
            </div>
        </div>
    </div>
</div>










<?php
include('scripts.php');
include('footer.php');
include('pr/delete.php');
include('pr/update.php');

?>