<?php $this->setSiteTitle('AMCC SMS | Log in'); ?>

<?php $this->start('head'); ?>

	
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<body class="hold-transition login-page">
<div class="login-box">
  <div ><?=$this->displayErrors ?></div>
  <div class="login-logo">
    <a href="../../index.php"><b>A M C C  SMS</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to load your info</p>

      <form action="<?=PROOT?>login/index" method="POST">
        <div class="input-group mb-3">
          <input type="text" name ="username" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
             <!-- <span class="fas fa-envelope"></span> -->
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name ="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember_me" name="remember_me" value="on">
              <label for="remember_me">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name ="login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
        <a href="forgot-password.php">I forgot my password</a>
      </form>

      <p class="mb-1">
      </p>
     <!-- <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<?php $this->end(); ?>