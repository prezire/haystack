<div id="employer" class="create row">
    <?php 
    echo validation_errors();
    echo form_open_multipart('employer/create'); 
    ?>          
      <input type="hidden" name="role" value="employer" />
      <?php echo $this->load->view('commons/partials/users/create', null, true); ?>      
      
      <div class="row">
        <a href="<?php echo site_url('applicant'); ?>" class="button alert small radius">Cancel</a>
        <button class="small radius">Create</button>
      </div>
  </form>
</div>