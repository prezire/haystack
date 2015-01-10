<div id="auth" class="updatePassword row">
	<h4>Update Password</h4>
	<?php echo form_open('auth/updatePassword'); ?>
		<div class="row">
		  <div class="small-12 medium-6 large-6 columns">
	  		<input type="hidden" name="id" value="<?php echo $id; ?>" />
		  	New Password: <input type="password" name="password" />
		  </div>
		  <div class="small-12 medium-6 large-6 columns">
	  		<input type="hidden" name="id" value="<?php echo $id; ?>" />
		  	Confirm Password: <input type="password" name="confirmPassword" />
		  </div>
		  <button class="tiny radius">Update</button>
		</div>
	</form>
</div>