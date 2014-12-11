<div id="education" class="update row">
  <h4></h4>
    <?php 
    echo validation_errors();
    echo form_open('education/update'); 
    ?>          
      Id: <input type="text" name="id" value="<?php echo set_value('id', $education->id); ?>" />      
          
      Resume Id: <input type="text" name="resume_id" value="<?php echo set_value('resume_id', $education->resume_id); ?>" />      
          
      Degree: <input type="text" name="degree" value="<?php echo set_value('degree', $education->degree); ?>" />      
          
      Field Of Study: <input type="text" name="field_of_study" value="<?php echo set_value('field_of_study', $education->field_of_study); ?>" />      
          
      School: <input type="text" name="school" value="<?php echo set_value('school', $education->school); ?>" />      
          
      Country: <input type="text" name="country" value="<?php echo set_value('country', $education->country); ?>" />      
          
      City: <input type="text" name="city" value="<?php echo set_value('city', $education->city); ?>" />      
          
      From: <input type="text" name="from" value="<?php echo set_value('from', $education->from); ?>" />      
          
      To: <input type="text" name="to" value="<?php echo set_value('to', $education->to); ?>" />      
        <a href="<?php echo site_url('education/read/'  . $education->id); ?>" class="button radius small alert">Cancel</a>
    <button class="button radius small">Update</button>
  </form>
</div>