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
   
<style>
.login-content .register-box {
  position: relative;
  min-width: 350px;
  min-height: 770px;
  background-color: #fff;
  -webkit-box-shadow: 0px 29px 147.5px 102.5px rgba(0, 0, 0, 0.05), 0px 29px 95px 0px rgba(0, 0, 0, 0.16);
          box-shadow: 0px 29px 147.5px 102.5px rgba(0, 0, 0, 0.05), 0px 29px 95px 0px rgba(0, 0, 0, 0.16);
  -webkit-perspective: 800px;
          perspective: 800px;
  -webkit-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}

.login-content .register-box .login-head {
  margin-top: 0;
  margin-bottom: 20px;
  padding-bottom: 10px;
  border-bottom: 0px solid #ddd;
  text-align: left;
}

.login-content .register-box label {
  color: #666;
  font-weight: 700;
}

.login-content .register-box .utility {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: 1px;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.login-content .register-box .btn-container {
  margin-bottom: 0;
}

.login-content .register-box .regis-form, .login-content .register-box .forget-form {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 40px;
  backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  -webkit-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}

.login-content .register-box .forget-form {
  opacity: 0;
  -webkit-transform: rotateY(180deg);
          transform: rotateY(180deg);
}

.login-content .register-box.flipped {
  min-height: 300px;
}

.login-content .register-box.flipped .regis-form {
  opacity: 0;
  -webkit-transform: rotateY(-180deg);
          transform: rotateY(-180deg);
}

.login-content .register-box.flipped .forget-form {
  opacity: 1;
  -webkit-transform: rotateY(0deg);
          transform: rotateY(0deg);
}

@media (max-width: 351px) {
  .login-content .register-box {
    min-width: 100%;
  }
  .login-content .register-box .regis-form, .login-content .register-box .forget-form {
    width: 100%;
  }
}

label {
  display: inline-block;
  margin-bottom: 0.5rem;
}

h3, .h3 {
  font-size: 3.53125rem;
}
h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
  margin-bottom: 0.5rem;
  font-weight: bold;
  line-height: 1.2;
}
</style>
   <section class="material-half-bg">
      <div class="cover"></div>
   </section>
   <section class="login-content">
      <div class="logo">
         <h1>Register Car System</h1>
      </div>
      <div class="register-box">
    
         <form class="regis-form" method="POST" action="process.php?action=CREATE">
            <!-- <h3" class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>สมัครสมาชิก</h3> -->
            <div class="form-group">
               <label class="control-label">ชื่อผู้ใช้งาน</label>
               <input class="form-control" type="text" name="username" placeholder="ระบุชื่อผู้ใช้งาน" autofocus>
            </div>
            <div class="form-group">
               <label class="control-label">ชื่อ</label>
               <input class="form-control" type="text" name="mem_name" placeholder="ระบุชื่อผู้ใช้งาน" autofocus>
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