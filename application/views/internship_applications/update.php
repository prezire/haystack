<div id="internship_application" class="update row">
  <h4></h4>
    <?php 
    echo validation_errors();
    echo form_open('internshipapplication/update'); 
    ?>          
      Id: <input type="text" name="id" value="<?php echo set_value('id', $internshipApplication->id); ?>" />      
          
      Applicant Id: <input type="text" name="applicant_id" value="<?php echo set_value('applicant_id', $internshipApplication->applicant_id); ?>" />      
          
      Employer Id: <input type="text" name="employer_id" value="<?php echo set_value('employer_id', $internshipApplication->employer_id); ?>" />      
          
      Internship Id: <input type="text" name="internship_id" value="<?php echo set_value('internship_id', $internshipApplication->internship_id); ?>" />      
        <a href="<?php echo site_url('internshipapplication/read/'  . $internshipApplication->id); ?>" class="button radius small alert">Cancel</a>
    <button class="button radius small">Update</button>
  </form>
</div>