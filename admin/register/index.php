<!DOCTYPE html>
<html>

<head>

   <title>Register Car System</title>
   <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
   <!-- Twitter meta-->
   <meta property="twitter:card" content="summary_large_image">
   <meta property="twitter:site" content="@pratikborsadiya">
   <meta property="twitter:creator" content="@pratikborsadiya">
   <!-- Open Graph Meta-->
   <meta property="og:type" content="website">
   <meta property="og:site_name" content="Vali Admin">
   <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
   <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
   <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
   <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Main CSS-->
   <link rel="stylesheet" type="text/css" href="../assets/plugins/vali-admin/css/main.css">
   <!-- Font-icon css-->
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


   
   <section class="material-half-bg">
      <div class="cover"></div>
   </section>
   <section class="login-content">
      <div class="logo">
         <h1>Register Car System</h1>
      </div>
      <div class="register-box">
    
         <form class="regis-form" method="POST" action="process.php?action=CREATE">
            <h3" class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>เข้าสู่ระบบ</h3>
            <div class="form-group">
               <label class="control-label">ชื่อ</label>
               <input class="form-control" type="text" name="username" placeholder="ระบุชื่อผู้ใช้งาน" autofocus>
            </div>
            <div class="form-group">
               <label class="control-label">นามสกุล</label>
               <input class="form-control" type="text" name="mem_lname" placeholder="ระบุนามสกุล">
            </div>
            <div class="form-group">
               <label class="control-label">เลขบัตรประชาชน</label>
               <input class="form-control" type="text" name="mem_number" placeholder="ระบุเลขบัตรประชาชน">
            </div>
            <div class="form-group">
               <label class="control-label">อายุ</label>
               <input class="form-control" type="text" name="mem_age" placeholder="ระบุอายุ">
            </div>
            <div class="form-group">
               <label class="control-label">เบอร์โทรศัพท์</label>
               <input class="form-control" type="text" name="reg_tel" placeholder="ระบุเบอร์โทรศัพท์">
            </div>
            <div class="form-group">
               <label class="control-label">ทะเบียนรถ</label>
               <input class="form-control" type="text" name="reg_number" placeholder="ระบุทะเบียนรถ">
            </div>
            <div class="form-group">
               <label class="control-label">รหัสผ่าน</label>
               <input class="form-control" type="password" name="password" placeholder="ระบุรหัสผ่าน">
            </div>
            <div class="form-group btn-container">
               <button class="btn btn-primary btn-block"></i>สมัครสมาชิก</button>
            </div>
            <div class="row">
                <n class="text-center"><a href="../login/index.php">เข้าสู่ระบบ</a></n>
            </div>
         </form>
      </div>
   </section>
   <!-- Essential javascripts for application to work-->
   <script src="../assets/plugins/vali-admin/js/jquery-3.3.1.min.js"></script>
   <script src="../assets/plugins/vali-admin/js/popper.min.js"></script>
   <script src="../assets/plugins/vali-admin/js/bootstrap.min.js"></script>
   <script src="../assets/plugins/vali-admin/js/main.js"></script>
   <!-- The javascript plugin to display page loading on top-->
   <script src="../assets/plugins/vali-admin/js/plugins/pace.min.js"></script>
</body>
</html> 