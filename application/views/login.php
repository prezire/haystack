<div id="auth" class="login row">
  <h4 class="large-12 columns">Login</h4>
  <?php
   echo validation_errors();
   echo form_open('auth/login'); 
  ?>
    <div class="large-2 columns">Email: *</div><div class="large-10 columns"><input type="text" name="email" /></div>
    <div class="large-2 columns">Password: *</div><div class="large-10 columns"><input type="password" name="password" /></div>
    <div class="large-10 columns">
      <button class="small radius">Login</button>
       <a href="<?php echo site_url('main/register'); ?>">Regsiter</a> | <a href="">Forgot Password</a>
    </div>
  </form>
  <div class="row">
    <div class="large-2 columns">&nbsp;</div>
    <div class="large-10 medium-12 small-12 columns">
      <a class="btnFb" permissions="public_profile,email,user_location,user_birthday">FB Login</a>
      <div id="status"></div>
      </div>
  </div>
</div>