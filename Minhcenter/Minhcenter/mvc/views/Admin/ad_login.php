<div class="thisIsLoginAdmin">
<div class="login-box">
  <div class="login-logo">
    <img class="loginad-img" src="/public/images/logo_transparent.png" alt="">
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <!-- enctype="multipart/form-data" -->
      <form action="" method="post" name="frmLogin" onsubmit="return checkLogin();">
        <div class="input-group mb-3">
          <input type="email" name="ad_gmail" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="ad_pass" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>


        
        <!-- Alert when login success and fail -->
        <?php 
        if (isset($_SESSION['AdminLoginSuccess'])) 
          {
        ?>
          <div class="alert alert-success" role="alert">
              <?php 
                echo $_SESSION['AdminLoginSuccess'];
                unset($_SESSION['AdminLoginSuccess']);
                header( "refresh:1;URL=home" );
              ?> 
          </div>
        <?php 
          }
        ?>
        <?php 
        if (isset($_SESSION['AdminLoginFail'])) 
          {
        ?>
          <div class="alert alert-danger" role="alert">
              <?php 
                echo $_SESSION['AdminLoginFail'];
                unset($_SESSION['AdminLoginFail']);
              ?> 
          </div>
        <?php 
          }
        ?>





        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" id="remember">
              <label for="remember" style="color:#fff;">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="btn-ad-login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
    </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</div>