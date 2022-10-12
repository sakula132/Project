<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Parking Management System</title>
    <link rel="icon" href="http://localhost/SimpleParkingMgSystem_CI/assets/images/ico.png">
    <link rel="stylesheet" href="http://localhost/SimpleParkingMgSystem_CI/assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
</head>

        <div class="col-7 offset-1 mt-5">
           <div class="row">
            <div class="col-6">
                <div class="card rounded-0 border-0 shadow-sm bg-info text-white">
                    <div class="card-body">
                       <div class="row">
                           <div class="col-7"><br>
                              <h1 class="ml-2">1</h1>
                              <h6 class="my-3">Vehicles Parked</h6>
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
                                 <h6 class="my-3">Departed Vehicles</h6>
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
                                 <h6 class="my-3">Available Category</h6>
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
                                 
                                 <h6 class="my-3">Total Earnings</h6>
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
                           <h6 class="my-3">Total Records</h6>
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
                              <h1 class="ml-2">69</h1>
                              <h6 class="my-3">Total Parking Slots</h6>
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

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>