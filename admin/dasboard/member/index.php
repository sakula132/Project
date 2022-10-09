<?php 
include('../includes/header.php');
include('../includes/navbar.php');


?>
    <!-- MAIN -->
    <main>
        <h1 class="title">Dashboard</h1>
        <ul class="breadcrumbs">
          <li><a href="#">Home</a></li>
          <li class="divider">/</li>
          <li><a href="#" class="active">Dashboard</a></li>
        </ul>
        <div class="info-data">
          <div class="card">
            <div class="head">
              <div>
                <h2>2</h2>
                <p>พนักงาน</p>
              </div>
              <i class='bx bxs-user icon'></i>
            </div>
            <span class="progress" data-value="100%"></span>
            <span class="label">Full</span>
          </div>
          <div class="card">
            <div class="head">
              <div>
                <h2>14</h2>
                <p>สมาชิก</p>
              </div>
              <i class='bx bxs-user-rectangle icon down'></i>
            </div>
            <span class="progress" data-value="70%"></span>
            <span class="label">70%</span>
          </div>
          <div class="card">
            <div class="head">
              <div>
                <h2>30</h2>
                <p>พื้นที่จอดรถว่าง</p>
              </div>
              <i class='bx bx-car icon free'></i>
            </div>
            <span class="progress" data-value="75%"></span>
            <span class="label">75%</span>
          </div>
          <div class="card">
            <div class="head">
              <div>
                <h2>10</h2>
                <p>พื้นที่รถจอด</p>
              </div>
              <i class='bx bxs-car-garage icon garage'></i>
              </div>
              <span class="progress" data-value="25%"></span>
              <span class="label">25%</span>
          </div>

      </main>
      <!-- MAIN -->

<?php
include('../includes/scripts.php');
include('../includes/footer.php');

?>
