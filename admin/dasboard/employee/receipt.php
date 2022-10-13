
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>

<div class="container my-5">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h2 class="h6 text-muted"><i class="fas fa-receipt"></i>&nbsp; ใบเสร็จจ่ายเงิน</h2>
                                                <table class="table mt-4 table-borderless">
                            <tr>
                                <th><b>ลำดับ : </b></th>
                                <td><b>3</b></td>
                            </tr>
                            <tr>
                                <th><b>หมายเลขยานพาหนะ : </b></th>
                                <td><b>กข 123</b></td>
                            </tr>
                            <tr>
                                <th><b>ประเภทยานพาหนะ : </b></th>
                                <td><b>รถยนต์</b></td>
                            </tr>
                            <tr>
                                <th><b>หมายเลขพื้นที่ : </b></th>
                                <td><b>7</b></td>
                            </tr>
                            <tr>
                                <th><b>ค่าใช้จ่าย : </b></th>
                                <td style="color:green"><b><i class="fas fa-dollar-sign"></i>&nbsp;100</b></td>
                            </tr>
                            <tr>
                                <th><b>เวลา : </b></th>
                                <td><b>2022-10-14 00:45:37</b></td>
                            </tr>
                        </table>
                                                <button class="btn btn-secondary shadow-none" onclick="printpage()" id="printpagebutton"><i class="fas fa-print"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        printButton.style.visibility = 'visible';
    }
    </script>

