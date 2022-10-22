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
                                    <td><?php echo $row['mem_id']; ?></td>
                                    <td><?php echo $row['mem_number'];?></td>
                                    <td><?php echo $row['username'];?></td>
                                    <td><?php echo $row['mem_lname'];?></td>

                                    <td>
                                        
                                    <button type="button" class="btn btn-info editbtn" data-toggle="modal">
                                    แก้ไข
                                    </button>
                                    <a href="pr/delete.php?del=<?php echo $row['mem_id']; ?>" class="btn btn-danger">ลบ</a>


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



<?php
include('scripts.php');
include('footer.php');
include('pr/delete.php');
include('pr/update.php');

?>