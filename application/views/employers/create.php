<div id="employer" class="create row">
    <?php echo form_open_multipart('employer/create'); ?>          
      <input type="hidden" name="role" value="employer" />
      <?php echo $this->load->view('commons/partials/users/create', null, true); ?>      
      
      <div class="row">
        <div class="large-12 columns">
          Organization Name: 
          <input type="text" name="organization_name" value="<?php echo set_value('organization_name'); ?>" />
        </div>
      </div>

      <div class="row">
        <div class="large-12 columns">
          <button class="small radius">Register</button>
        </div>
      </div>
  </form>
</div>