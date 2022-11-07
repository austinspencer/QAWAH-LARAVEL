<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel| Log In</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminTheme/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('adminTheme/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminTheme/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
  <div style="text-align: center; margin-top: 19px; object-fit: cover;">
  <img style="width:100px;" src="https://scontent.fkhi8-1.fna.fbcdn.net/v/t1.6435-1/p148x148/97554394_109731607410394_925268115997065216_n.png?_nc_cat=109&ccb=1-3&_nc_sid=1eb0c7&_nc_ohc=d7ctylwWfCcAX8FUXM7&_nc_ht=scontent.fkhi8-1.fna&_nc_tp=30&oh=29b570593e69c7e6293dc68b91d894d0&oe=6096AF0E">
  </div>
    <div class="card-header text-center">
    
      <a href="#" class="h1"><b>Admin</b>Login</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger" style="font-size: 14px; font-family: inherit;">{{ $error }}</p>
            @endforeach
        @endif

        @if (session()->has('message'))
            <p class="alert alert-success" style="font-size: 14px; font-family: inherit;">{{ session('message') }}</p>
        @endif

      <form action="{{ route('admin.login') }}" method="post">
      @csrf
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> -->
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('adminTheme/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminTheme/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminTheme/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
