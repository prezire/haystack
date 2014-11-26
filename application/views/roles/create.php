<div id="role" class="create">
    <?php 
    echo validation_errors();
    echo form_open('role/create'); 
    ?>          
      Id: <input type="text" name="id" />      
          
      Name: <input type="text" name="name" />      
        <a href="<?php echo site_url('role'); ?>">Cancel</a> | 
    <button>Create</button>
  </form>
</div>