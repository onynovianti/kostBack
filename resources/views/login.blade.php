<!DOCTYPE html>
<html lang="en">
@include('_include.head')
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Aplikasi</b>Kost
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="/auth" method="post"> @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @if(session('error_username'))
                        <div class="alert alert-danger">
                            {{ session('error_username') }}
                            </div>
                        @endif
                        
                        @if(session('error_password'))
                        <div class="alert alert-danger">
                            {{ session('error_password') }}
                        </div>
                        @endif
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block float-end">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

@include('_include.foot')
</body>
</html>
