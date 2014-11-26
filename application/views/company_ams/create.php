<div id="company_am" class="create">
    <?php 
    echo validation_errors();
    echo form_open('companyam/create'); 
    ?>          
      Id: <input type="text" name="id" />      
          
      User Id: <input type="text" name="user_id" />      
        <a href="<?php echo site_url('companyam'); ?>">Cancel</a> | 
    <button>Create</button>
  </form>
</div>