<div id="education" class="create row">
  <h4></h4>
    <?php 
    echo validation_errors();
    echo form_open('education/create'); 
    ?>          
      Id: <input type="text" name="id" />      
          
      Resume Id: <input type="text" name="resume_id" />      
          
      Degree: <input type="text" name="degree" />      
          
      Field Of Study: <input type="text" name="field_of_study" />      
          
      School: <input type="text" name="school" />      
          
      Country: <input type="text" name="country" />      
          
      City: <input type="text" name="city" />      
          
      :       
          
      :       
        <a href="<?php echo site_url('education'); ?>" class="button radius small alert">Cancel</a>
    <button class="button radius small">Create</button>
  </form>
</div>