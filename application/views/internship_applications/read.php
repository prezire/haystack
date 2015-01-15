<div id="internship_application" class="read row">
  <h4></h4>
            
      Id: <?php echo $internshipApplication->id; ?>      
          
      Applicant Id: <?php echo $internshipApplication->applicant_id; ?>      
          
      Employer Id: <?php echo $internshipApplication->employer_id; ?>      
          
      Internship Id: <?php echo $internshipApplication->internship_id; ?>      
        <a href="<?php echo site_url('internshipapplication'); ?>" class="button radius small alert">Back</a>
    <a href="<?php echo site_url('internshipapplication/update'); ?>" class="button radius small">Update</a>
  </form>
</div>