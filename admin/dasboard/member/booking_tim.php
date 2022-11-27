<?php 
include('header.php');
include('navbar.php');

?>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="sty.css">
    <script src="jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
  
  
	<script type="text/javascript">
		$(document).ready(function(){
			$("#car_type").change(function(){
				var aid = $("#car_type").val();
				$.ajax({
					url: 'data.php',
					method: 'post',
					data: 'aid=' + aid
				}).done(function(car_number){
					console.log(car_number);
					car_number = JSON.parse(car_number);
					$('#car_number').empty();
					car_number.forEach(function(car_number){
						$('#car_number').append('<option>' + car_number.car_numbers + '</option>')
					})
				})
			})
		})
	</script>
    

<style>
    

table {
	border-collapse: collapse;
}
.table {
	width: 100%;
    margin-bottom: 1rem;
    background-color: transparent;
    border-top: 2px solid #e9ecef;
}

.form-row {
	display: -ms-flexbox;
	display: flex;
	-ms-flex-wrap: wrap;
	flex-wrap: wrap;
	margin-right: -5px;
	margin-left: -5px;
}

.form-row > .col,
.form-row > [class*="col-"] {
	padding-right: 5px;
	padding-left: 5px;
}



</style>
<div class="col-8 offset-3 mt-5 mr-5">
            <div class="row">
                <div class="col-12 mt-3 ml-5">
                    <div class="card border-0 shadow-none">

                        <div class="card-body">
                            <h2 class="h6 text-muted"><i class="fas fa-user-lock"></i>&nbsp; รายชื่อผู้ดูแลระบบ</h2>
                            <table class="table mt-4 table-borderless">
                               
            <td>
                <form>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputEmail4">ชื่อ</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="ระบุชื่อ">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputPassword4">นามสกุล</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="ระบุนามสกุล">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputPassword4">เบอร์โทรศัพท์</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="เบอร์โทรศัพท์">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="car_type">ประเภท</label>
                    <select id="car_type" name="car_type" class="form-control">
                            <option value="" disabled selected>--โปรดเลือกประเภท--</option>

                            <?php 
		                    		require 'data.php';
		                    		$car_type = loadAuthors();
		                    		foreach ($car_type as $cartype) {
		                    			echo "<option id='".$cartype['type_id']."' value='".$cartype['type_id']."'>".$cartype['type_name']."</option>";
		                    		}
		                    ?>

                    </select>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="car_number">หมายเลข</label>
                    <select id="car_number" name="car_number" class="form-control">
                            <option value="" disabled selected>--โปรดเลือกหมายเลข--</option>
                    </select>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="inputZip">ทะเบียนรถ</label>
                    <input type="text" class="form-control" id="inputZip" placeholder="ป้ายทะเบียนรถ">
                    </div>
                    <div class="form-group col-md-3">
                    <label for="inputState">ระยะเวลา</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                    </div>
                </div>
                <div class="form-row">

                    <div class="form-group col-md-5">
                    <label class="control-label" for="date">วันที่ทำรายการ</label>
                    <input class="form-control" id="date" name="date" placeholder="วัน/เดือน/ปี" type="text"/>
                    </div>
                </div>
                <div class="form-row">

                    <div class="form-group col-md-5">
                    <label class="control-label" for="date">วันที่จอง</label>
                    <input class="form-control" id="date" name="date" placeholder="วัน/เดือน/ปี" type="text"/>
                    </div>
                </div>
                <div class="form-row">

                    <div class="form-group col-md-5">
                    <label class="control-label" for="date">วันที่หมดอายุการจอง</label>
                    <input class="form-control" id="date" name="date" placeholder="วัน/เดือน/ปี" type="text"/>
                    </div>
                </div>

                            <div class="modal-footer">
            <div class="form-group">
                
            <button type="submit" name="insert" class="btn btn-info btn-lg text-white shadow-none" >ยืนยัน</button>
            <button type="button" name="cancel" data-dismiss="modal" aria-label="Close" class="btn btn-danger btn-lg text-white shadow-none ">ยกเลิก</button>
            </div>




                </form>
        


                    </td>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('scripts.php');
include('footer.php');
include('data_time.php');

?>







