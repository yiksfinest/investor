<div class="container">
  <div class="content">
    <div class="row" style="height: 600px;"> 
      
      <!-- Left Column / Login Logo -->
      <div class="col-lg-8 col-md-7 col-sm-12" style="margin-top: 14%;">
        <div class="login-logo" style="text-align: center;"> <img src="assets/images/login-logo.png" style="height: auto; width: 100%;max-width:600px;" alt="Vitalyze.Me" /> </div>
      </div>
      <!-- /.col-lg-6 --> 
      
      <!-- Right Column / Login / Register Form -->
      <div class="col-lg-4 col-md-5 col-sm-12" style="margin-top: 10%;">
        <div role="tabpanel"> 
          
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" style="margin-bottom: -10px;" role="tablist">
            <li id="signup-tab" role="presentation" style="height:60px !important; background:#fff;box-shadow: -5px 0 0 #1274cd; font-size: 20px;width:60%; text-align: center;" class="<?php print (($current_page == 'signup') ? "active" : ""); ?>"> <a style="border:none !important;" href="#signup" aria-controls="signup" role="tab" data-toggle="tab">Request Credentials</a> </li>
            <li id="login-tab" role="presentation" style="height:60px !important; background: #28a8ee !important;float: right; font-size: 20px;width: 40%; text-align: center;" class="<?php print (($current_page == 'login') ? "active" : ""); ?>"> <a href="#login" style="color: #fff;background: #28a8ee !important;border:none !important;" aria-controls="login" role="tab" data-toggle="tab">Login</a> </li>
          </ul>
          
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in <?php print (($current_page == 'signup') ? "active" : ""); ?>" id="signup">
              <div class="registration-form">
                <form id="reg-form" class="form-horizontal" action="register" role="form" method="POST">
                  <input type="hidden" name="_token" value="xzWit1O1t8t53ppjLnPlC8KKQ45BVKznk1aA51I3">
                  <div class="form-group has-feedback home-fix">
                    <div class="col-md-12">
                      <input type="text" name="full_name" id="full_name" value="" required placeholder="Full Name" class="login-input" />
                      <span class="glyphicon form-control-feedback home-icon" id="full_name1"></span> </div>
                  </div>
                  <div class="form-group has-feedback home-fix">
                    <div class="col-md-12">
                      <input type="text" name="email_address" id="email_address" value="" required placeholder="Email Address" class="login-input" />
                      <span class="glyphicon form-control-feedback home-icon" id="email_address1"></span> </div>
                  </div>


                  <br />
                  <div style="float: right;">
                    <button class="join-button">Request Credentials</button>
                  </div>
                </form>
                <div class="clearfix cf"></div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane  <?php print (($current_page == 'login') ? "active" : "fade"); ?>" id="login">
              <div class="login-form">
                <form id="login-form" class="form-horizontal" method="POST" action="login" role="form">
                  <input type="hidden" name="_token" value="xzWit1O1t8t53ppjLnPlC8KKQ45BVKznk1aA51I3">
                  <div class="form-group has-feedback home-fix">
                    <div class="col-md-12">
                      <input type="text" name="username" id="username" required placeholder="Email Address" class="login-input" />
                      <span class="glyphicon form-control-feedback home-icon" id="username1"></span> </div>
                  </div>
                  <div class="form-group has-feedback home-fix">
                    <div class="col-md-12">
                      <input type="password" name="login_password" id="login_password" required placeholder="Password" class="login-input" />
                      <span class="glyphicon form-control-feedback home-icon" id="login_password1"></span> </div>
                  </div>
                  <div>
                    <div class="remember-me">
                      <input type="checkbox" value="1" name="remember_me" checked style="margin-top: 2px;">
                      Remember Me </div>
                    <div class="forgot-pw"> <a href="#">Forgot Password?</a> </div>
                  </div>
                  <div class="login-button-container" style="float: right;">
                    <button class="login-button">Login</button>
                  </div>
                </form>
                <div class="clearfix cf"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.col-lg-6 --> 
      
    </div>
    <!-- /.row --> 
    
    <div class="clearfix cf"></div>
    
    <!-- Footer Links -->
    <div class="row" style="margin-top: -10px;">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <ul class="footer-links">
          <li> <a href="http://www.vitalyze.me/about-us" target="_blank">About</a> </li>
          <li> <a href="http://www.vitalyze.me/questions" target="_blank">Help</a> </li>
          <li> <a href="#" data-toggle="modal" data-target="#terms">Terms</a> </li>
          <li> <a href="#" data-toggle="modal" data-target="#privacy">Privacy</a> </li>
          <li> <a href="http://www.vitalyze.me" target="_blank">Contact Us</a> </li>
        </ul>
        <div class="text-right" style="color:#ffffff;">&copy; 2015 Vitalyze.Me</div>
      </div>
    </div>
    <br />
    <br />
    <div class="clearfix cf"></div>
  </div>
  <!-- /.content --> 
</div>
<!-- /.container --> 

<!-- PRIVACY MODAL -->
<div class="modal fade" id="privacy">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Vitalyze.Me Privacy Policy</h4>
      </div>
      <div class="modal-body">
        <p>Coming soon...</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal --> 

<!-- TERMS MODAL -->
<div class="modal fade" id="terms">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Vitalyze.Me Terms & Conditions</h4>
      </div>
      <div class="modal-body">
        <p>Coming soon...</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal -->