<?php 
include('../admin/header.php');
include('../admin/navbar.php');

?>

<link rel="stylesheet" href="../css/style.css"/>
<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
<!-- <link rel="stylesheet" href="../styles/am-o.css"/> -->
<link rel="stylesheet" href="../styles/db.css"/>

    <!-- MAIN -->
    <main>
        <h1 class="title">Dashboard</h1>
        <ul class="breadcrumbs">
        </ul>

        <div id="user">
                    <div id="Customer" class="info-box user-item">
                        <div class="heading">
                            <h5>สมาชิก</h5>
                            <div class="info">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>ข้อมูลสมาชิกทั้งหมด</p>
                            <p class="num" data-target="">
                                999
                            </p>
                        </div>
                        <a href="#customer">ดูเพิ่มเติม <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div id="Employee" class="info-box user-item">
                        <div class="heading">
                            <h5>พนักงาน</h5>
                            <div class="info">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>ข้อมูลสมาชิกทั้งหมด</p>
                            <p class="num" data-target="">
                                999
                            </p>
                        </div>
                        <a href="#customer">ดูเพิ่มเติม <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div id="Admin" class="info-box user-item">
                        <div class="heading">
                            <h5>ผู้ดูแลระบบ</h5>
                            <div class="info">
                                <i class="fas fa-user-lock"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>ข้อมูลผู้ดูแลระบบทั้งหมด</p>
                            <p class="num" data-target="">
                                999
                            </p>
                        </div>
                        <a href="#admin">ดูเพิ่มเติม <i class="fas fa-arrow-right"></i></a>
                    </div>

                    <div id="Earning" class="info-box user-item">
                        <div class="heading">
                            <h5>อัตราราคา</h5>
                            <div class="info">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>อัตราราคาทั้งหมด</p>
                            <p class="num" data-target="">
                                999
                            </p>
                        </div>
                        <a href="#Earning">ดูเพิ่มเติม <i class="fas fa-arrow-right"></i></a>
                    </div>
      </main>
      <!-- MAIN -->

<?php
include('../admin/scripts.php');
include('../admin/footer.php');

?>
