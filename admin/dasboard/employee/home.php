<?php 
include('../includes/header.php');
include('../includes/navbar.php');


?>


    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>

        <div class="col-7 offset-1 mt-5">
           <div class="row">
            <div class="col-6">
                <div class="card rounded-0 border-0 shadow-sm bg-info text-white">
                    <div class="card-body">
                       <div class="row">
                           <div class="col-7"><br>
                              <h1 class="ml-2">1</h1>
                              <h6 class="my-3">รถที่จอดอยู่</h6>
                           </div>
                           <div class="col-5"><br>
                               <ul class="ml-auto my-2">
                                 <i class="fas fa-parking fa-4x"></i>
                               </ul>
                           </div>
                       </div>
                    </div>
                    <br>
                </div>
            </div>
               <div class="col-6">
                   <div class="card rounded-0 border-0 shadow-sm bg-dark text-white">
                       <div class="card-body">
                          <div class="row">
                              <div class="col-7"><br>
                                 <h1 class="ml-2">1</h1>
                                 <h6 class="my-3">รถที่ยกเลิกแล้ว</h6>
                              </div>
                              <div class="col-5"><br>
                                  <ul class="ml-auto my-2">
                                    <i class="fas fa-car fa-4x"></i>
                                  </ul>
                              </div>
                          </div>
                       </div>
                       <br>
                   </div>
               </div>
               
               <div class="col-6">
                   <div class="card rounded-0 border-0 shadow-sm bg-danger text-white mt-4">
                       <div class="card-body">
                          <div class="row">
                              <div class="col-7"><br>
                                 <h1 class="ml-2">5</h1>
                                 <h6 class="my-3">ราคาเช่ารถ</h6>
                              </div>
                              <div class="col-5"><br>
                                  <ul class="ml-auto my-2">
                                    <i class="fas fa-box fa-4x"></i>
                                  </ul>
                              </div>
                          </div>
                       </div>
                       <br>
                   </div>
               </div>
               <div class="col-6">
                   <div class="card rounded-0 border-0 shadow-sm bg-success text-white mt-4">
                       <div class="card-body">
                          <div class="row">
                              <div class="col-7">
                                 <br>
                                 <h1 class="ml-2"><i class="fas fa-dollar-sign fa-xs"></i>&nbsp;12</h1>
                                 
                                 <h6 class="my-3">รายได้ทั้งหมด</h6>
                              </div>
                              <div class="col-5"><br>
                                  <ul class="ml-auto my-2">
                                    <i class="fas fa-money-check-alt fa-4x"></i>
                                  </ul>
                              </div>
                          </div>
                       </div>
                       <br>
                   </div>
               </div>
           </div> 

           <div class="row">
            <div class="col-6">
                <br>
             <div class="card rounded-0 border-0 shadow-sm bg-secondary text-white">
                 <div class="card-body">
                    <div class="row">
                        <div class="col-7"><br>
                           <h1 class="ml-2">2</h1>
                           <h6 class="my-3">บันทึกทั้งหมด</h6>
                        </div>
                        <div class="col-5"><br>
                            <ul class="ml-auto my-2">
                              <i class="fas fa-layer-group fa-4x"></i>
                            </ul>
                        </div>
                    </div>
                 </div>
                 <br>
             </div>
         </div>

               <div class="col-6">
                   <br>
                <div class="card rounded-0 border-0 shadow-sm bg-primary text-white">
                    <div class="card-body">
                       <div class="row">
                           <div class="col-7"><br>
                              <h1 class="ml-2">80</h1>
                              <h6 class="my-3">ช่องจอดรถทั้งหมด</h6>
                           </div>
                           <div class="col-5"><br>
                               <ul class="ml-auto my-2">
                                 <i class="fas fa-check-double fa-4x"></i>
                               </ul>
                           </div>
                       </div>
                    </div>
                    <br>
                </div>
            </div>

               
           </div>
        </div>
    </div>
</div>

<script>
function myFunction() {
    var x = document.getElementById("notification");
    if (x.style.display === "block") {
        x.style.display = "none";
    } 
    else {
        x.style.display = "none";
    }
}
</script>

<?php
include('../includes/scripts.php');
include('../includes/footer.php');

?>
