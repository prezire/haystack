<div id="applicant" class="create">
    <?php 
    echo validation_errors();
    echo form_open_multipart('applicant/create'); 
    ?>
      <input type="hidden" name="role" value="applicant" />
      <?php echo $this->load->view('commons/partials/users/create', null, true); ?>
      
      <div class="row">
        <div class="large-6 columns">Preferred Country: <?php echo form_dropdown('preferred_country', getCountries()); ?></div>
        <div class="large-6 columns">Expected Salary: <input type="text" name="expected_salary" /></div>
      </div>
      <div class="row">
        <div class="large-6 columns">Current Job Title: <input type="text" name="job_title" placeholder="e.g. Web Developer" /></div>
         <div class="large-6 columns">Desired Internship Position: <input type="text" name="internship_position" placeholder="e.g. Management" /></div>
      </div>
      <div class="row">
        <a href="<?php echo site_url('applicant'); ?>" class="button alert small radius">Cancel</a>
        <button class="small radius">Create</button>
      </div>
  </form>
</div>