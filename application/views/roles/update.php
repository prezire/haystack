<div id="role" class="update">
    <?php 
    echo validation_errors();
    echo form_open('role/update'); 
    ?>          
      Id: <input type="text" name="id" value="<?php echo set_value('id', $role->id); ?>" />      
          
      Name: <input type="text" name="name" value="<?php echo set_value('name', $role->name); ?>" />      
        <a href="<?php echo site_url('role/read/'  . $role->id); ?>">Cancel</a> | 
    <button>Update</button>
  </form>
</div>