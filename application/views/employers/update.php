<div id="employer" class="update">
    <?php 
    echo validation_errors();
    echo form_open('employer/update'); 
    ?>          
      Id: <input type="text" name="id" value="<?php echo set_value('id', $employer->id); ?>" />      
          
      User Id: <input type="text" name="user_id" value="<?php echo set_value('user_id', $employer->user_id); ?>" />      
      <a href="<?php echo site_url('employer/read/'  . $employer->id); ?>" class="button alert small radius">Cancel</a>
    <button class="small radius">Update</button>
  </form>
</div>