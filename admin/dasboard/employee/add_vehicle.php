<?php 
include('../includes/header.php');
include('../includes/navbar.php');

?>
    <link rel="stylesheet" href="../css/main.css">
    <!-- <link rel="stylesheet" href="../css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>

    <style>
/* .card{    
max-width: 100px;
padding: 10px 10px 10px 10px;
transform: translateX(-15%);
transition: all .3s ease;
} */
.card{    
padding: 10px 10px 10px 10px;
}
.form-control-sm {
	height: calc(1.8125rem + 2px);
	padding: 0rem 0.5rem;
	font-size: 0.875rem;
	line-height: 1.5;
	border-radius: 0.2rem;
}

</style>
<div class="col-8 offset-3 mt-5 mr-5">
            <div class="row">
                <div class="col-8 ml-5">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h2 class="h6 text-muted"><i class="fas fa-file-import"></i> &nbsp;Add Vehicle</h2>
                            <form action="" method="post" class="mt-4">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                        <label for="" class=" m-0 p-0 text-muted">ทะเบียนรถ</label>
                                        <input type="text" class="form-control form-control-sm shadow-none" name="vehicle_number" required autofocus>
                                    </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="" class=" m-0 p-0 text-muted">ประเภทยานพาหนะ</label>
                                            <select name="vehicle_type" class="form-control form-control-sm shadow-none">
                                                <option value="" selected disabled>โปรดเลือกประเภทยานพาหนะ</option>
                                                                                                <option value="Pickup Van" >Pickup Van</option>
                                                                                                <option value="Minibus" >Minibus</option>
                                                                                                <option value="Super buss" >Super buss</option>
                                                                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class=" m-0 p-0 text-muted">หมายเลขพื้นที่จอดรถ</label>
                                    <select name="parking_area_number" class="form-control form-control-sm shadow-none">
                                        <option value="" selected disabled>โปรดเลือกหมายเลขพื้นที่จอดรถ</option>
                                                                                <option value="7" >7 &#8594; <span>(Pickup Van)</span></option>
                                                                                <option value="9" >9 &#8594; <span>(Minibus)</span></option>
                                                                                <option value="3" >3 &#8594; <span>(Super buss)</span></option>
                                                                            </select>
                                </div>
                                <div class="form-group">
                                    <label for="" class=" m-0 p-0 text-muted">ราคาที่จอดรถ</label>
                                    <select name="parking_charge" class="form-control form-control-sm shadow-none">
                                        <option value="" selected disabled>โปรดเลือกราคาที่จอดรถ</option>
                                                                                <option value="5" >$5 &#8594; <span>(Pickup Van)</span></option>
                                                                                <option value="6" >$6 &#8594; <span>(Minibus)</span></option>
                                                                                <option value="10" >$10 &#8594; <span>(Super buss)</span></option>
                                                                            </select>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Add Vehicle" class="mt-4 btn btn-block bg-success text-white shadow-none">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h2 class="text-muted h6 "><b><i class="fab fa-staylinked fa-xs"></i>&nbsp; พื้นที่จอดรถ :</b></h2>
                            
                                                                                    <div class="mt-4">
                                <div class="media-body">
                                    รถยนต์<br>
                                    <b>จำกัด: </b><span class='badge badge-success'>80</span>  จาก 80                                </div>
                            </div>
                                                                                    <div class="mt-4">
                                <div class="media-body">
                                    มอเตอร์ไซต์<br>
                                    <b>จำกัด: </b><span class='badge badge-success'>20</span>  จาก 20                                </div>
                            </div>
                                                    </div>
                    </div>
                </div>
                <div class="col-12 mt-3 ml-5">
                    <div class="card border-0 shadow-none">
                        <div class="card-body">
                            <h2 class="h6 text-muted"><i class="fas fa-receipt"></i>&nbsp; ใบเสร็จจ่ายเงิน</h2>
                            <table class="table mt-4 table-borderless">
                                <tr>
                                    <th><b>ลำดับ</b></th>
                                    <th><b>หมายเลขยานพาหนะ</b></th>
                                    <th><b>หมายเลขพื้นที่</b></th>
                                    <th><b>เวลา</b></th>
                                    <th><b>สถานะ</b></th>
                                    <th><b>ใบเสร็จ</b></th>
                                </tr>
                                                                <tr>
                                    <td>3</td>
                                    <td>กข 123</td>
                                    <td>7</td>
                                    <td>2022-10-14 00:45:37</td>
                                    <td>                                        
                                        <p class="text-white badge badge-success badge-pill"><b>จอดอยู่</b></p>
                                        </small></td>
                                    <td>                                       
                                       <a href="receipt.php" onclick="window.open('receipt.php', '_blank', 'width=800,height=600,scrollbars=yes,menubar=no,status=yes,resizable=yes,screenx=0,screeny=0'); return false;" class="btn btn-info btn-sm shadow-none">&nbsp; <i class="fas fa-eye fa-xs"></i> &nbsp;</a>                                    </td>
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
