
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/admin-lte/dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/admin-lte/plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style type="text/css">
    body {
     background-image: url("/admin-lte/img/login-page2.jpg")!important;
     background-color: #cccccc!important;
     background-position: center!important; /* Center the image */
     background-repeat: no-repeat!important; /* Do not repeat the image */
     background-size: cover!important; /* Resize the background image to cover the entire container */
   }
 </style>
</head>
<body class="hold-transition login-page">
  <div class="login-box">
<!--     <div class="login-logo">
      <a href="#" class="text-light"><b>Login-Page</b></a>
    </div> -->
    <!-- /.login-logo -->
    <div class="card" style="margin-top: 200px;">
      <div class="card-body login-card-body">
        <h4 class="login-box-msg">Welcome</h4>
        <!-- ----------------logo-------------------- -->
        <div class="col-12 text-center mb-3">
          <img src="/admin-lte/img/logo2.png" width="120" height="100">
        </div>
        <!-- ----------------logo-------------------- -->
        <form action="" method="get">
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Username">
            <div class="input-group-append">
              <span class="fa fa-envelope input-group-text" style="font-size: 1em;"></span>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <span class="fa fa-lock input-group-text pd-1" style="font-size: 1.25em; padding-left: 0.8rem!important; padding-right: 0.8rem!important;"></span>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-6">
              <label class="ml-3" style="margin-top: 7px;">
               Forget Password
             </label>
           </div>
           <!-- /.col -->
         </div>
       </form>

     </div>
     <!-- /.login-card-body -->
   </div>
 </div>
 <!-- /.login-box -->

 <!-- jQuery -->
 <script src="/admin-lte/plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap 4 -->
 <script src="/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- iCheck -->
 <script src="/admin-lte/plugins/iCheck/icheck.min.js"></script>
 <script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>
</html>
