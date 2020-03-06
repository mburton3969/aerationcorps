<!DOCTYPE html>
<html lang="en">

<head>
  <title>Aeration Corps | Back Office</title>
  <?php include 'global/sections/head.php'; ?>
</head>

<body onload="cred_check();">
  <!-- Preloader -->
  <?php include 'global/sections/preloader.php'; ?>
  <!-- /Preloader -->
  <div class="wrapper theme-4-active pimary-color-red">

    <!--Login-->

    <div class="wrapper pa-0">
      <div class="form-group mb-0 pull-right">
        <span class="inline-block pr-10">Having Issues?</span>
        <a class="inline-block btn btn-info btn-rounded btn-outline" href="mailto:support@ignition-innovations.com?subject=Portal%20Issue%20Report&body=I%20am%20having%20an%20issue%20with%20the%20following:">Contact Us</a>
      </div>
      <div class="clearfix"></div>

      <!-- Main Content -->
      <div class="page-wrapper pa-0 ma-0 auth-page" style="min-height: 322px;">
        <div class="container-fluid">
          <!-- Row -->
          <div class="table-struct full-width full-height" style="height: 322px;">
            <div class="table-cell vertical-align-middle auth-form-wrap">
              <div class="auth-form  ml-auto mr-auto no-float">
                <div class="row">
                  <div class="col-sm-12 col-xs-12">
                    <div class="mb-30">
                      <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/acpics/demo-aeration-logo.jpg" style="width:100%;">
                      <h3 class="text-center txt-dark mb-10">Sign In</h3>
                      <h6 class="text-center nonecase-font txt-grey">Enter your credentials below</h6>
                    </div>
                    <div class="form-wrap">
                      <form action="global/php/validate.php" method="post">
                        <div class="form-group">
                          <label class="control-label mb-10" for="username">Username &nbsp;&nbsp; <span id="error_message" style="color:red;"><?php echo $_GET['r']; ?></span></label>
                          <input type="text" class="form-control" required="" id="username" name="username" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                          <label class="pull-left control-label mb-10" for="password">Password</label>
                          <!--<a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="forgot-password.html">forgot password ?</a>-->
                          <div class="clearfix"></div>
                          <input type="password" class="form-control" required="" id="password" name="password" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                          <div class="checkbox checkbox-primary pr-10 pull-left">
                            <input id="cb" name="cb" type="checkbox">
                            <label for="cb"> Remember Me</label>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                        <div class="form-group text-center">
                          <button type="submit" class="btn btn-info btn-rounded">sign in</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Row -->
        </div>

      </div>
      <!-- /Login -->

    </div>

  </div>
  <!-- /#wrapper -->

  <!-- Footer -->
  <?php include 'global/sections/footer.php'; ?>
  <!-- /Footer -->
  <?php include 'global/sections/includes.php'; ?>
</body>
<script src="global/js/credentials.js"></script>

</html>