<div id="company_am" class="update">
    <?php 
    echo validation_errors();
    echo form_open('companyam/update'); 
    ?>          
      Id: <input type="text" name="id" value="<?php echo set_value('id', $companyAm->id); ?>" />      
          
      User Id: <input type="text" name="user_id" value="<?php echo set_value('user_id', $companyAm->user_id); ?>" />      
        <a href="<?php echo site_url('companyam/read/'  . $companyAm->id); ?>">Cancel</a> | 
    <button>Update</button>
  </form>
</div>