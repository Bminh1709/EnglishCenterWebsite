<div class="thisIsLoginAdmin">
<div class="login-box">
  <div class="login-logo">
    <img class="loginad-img" src="/public/images/logo_transparent.png" alt="">
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign up to be a member of our center</p>
      <!-- enctype="multipart/form-data" -->
      <form action="" enctype="multipart/form-data" method="post" name="frmRegister" onsubmit="return checkRegister();">

        <!-- LAST NAME AND FIRST NAME -->
        <div class="input-group mb-3">
          <input style="margin-right:7px; border-radius:7px;" type="text" name="us_firstname" class="form-control" placeholder="First Name">
          <input style="margin-left:7px; border-radius:7px;" type="text" name="us_lastname" class="form-control" placeholder="Last Name">
        </div>

        <!-- EMAIL -->
        <div class="input-group mb-3">
          <input type="email" name="us_gmail" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <!-- PASSWORD -->
        <div class="input-group mb-3">
          <input type="password" name="us_pass" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <!-- PHONE NUMBER -->
        <div class="input-group mb-3">
          <input type="text" name="us_phone" class="form-control" placeholder="Phone Number">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>

        <!-- GENDER -->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <input type="radio" name="us_gender" id="Male" value="Male">
            </span>
          </div>
          <input style="margin-right:7px; border-radius:0 7px 7px 0;" type="text" class="form-control" value="Male" readonly>

          <div class="input-group-prepend">
            <span class="input-group-text" style="margin-left:7px; border-radius:7px 0 0 7px;">
              <input type="radio" name="us_gender" id="Female" value="Female">
            </span>
          </div>
          <input type="text" class="form-control" value="Female" readonly>
        </div>
        <!-- /input-group -->


        <div class="input-group mb-3">
          <input type="file" name="us_img" accept="image/*" class="form-control">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-file-image"></span>
            </div>
          </div>
        </div>


        <!-- Alert when login success and fail -->
        <?php 
        if (isset($_SESSION['SignupSuccess'])) 
          {
        ?>
          <div class="alert alert-success" role="alert">
              <?php 
                echo $_SESSION['SignupSuccess'];
                unset($_SESSION['SignupSuccess']);
                // header( "refresh:1;URL=home" );
              ?> 
          </div>
        <?php 
          }
        ?>
        <?php 
        if (isset($_SESSION['SignupFail'])) 
          {
        ?>
          <div class="alert alert-danger" role="alert">
              <?php 
                echo $_SESSION['SignupFail'];
                unset($_SESSION['SignupFail']);
              ?> 
          </div>
        <?php 
          }
        ?>



        <div class="row" style="margin-top:20px;">
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
            <button type="submit" name="btn-us-signup" class="btn btn-primary btn-block">Sign Up</button>
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