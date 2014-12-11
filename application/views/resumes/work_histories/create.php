<div id="work_history" class="create row">
  <h4></h4>
    <?php 
    echo validation_errors();
    echo form_open('workhistory/create'); 
    ?>          
      Id: <input type="text" name="id" />      
          
      Resume Id: <input type="text" name="resume_id" />      
          
      Position: <input type="text" name="position" />      
          
      Company: <input type="text" name="company" />      
          
      Location: <input type="text" name="location" />      
          
      Summary: <textarea name="summary"></textarea>      
          
      :       
          
      :       
          
      Is Current Work: <input type="checkbox" name="is_current_work" />      
        <a href="<?php echo site_url('workhistory'); ?>" class="button radius small alert">Cancel</a>
    <button class="button radius small">Create</button>
  </form>
</div>