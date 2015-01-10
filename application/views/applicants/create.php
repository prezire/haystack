<div id="applicant" class="create row">
  <?php echo form_open_multipart('applicant/create'); ?>
      <input type="hidden" name="role" value="applicant" />
      <?php echo $this->load->view('commons/partials/users/create', null, true); ?>
      
      <div class="row">
        <div class="large-6 columns">
          Preferred Country: <?php echo form_dropdown('preferred_country', getCountries(), set_value('preferred_country')); ?>
        </div>
        <div class="large-6 columns">
          Expected Salary (USD): <input type="text" name="expected_salary" value="<?php echo set_value('expected_salary'); ?>" />
        </div>
      </div>
      <div class="row">
        <div class="large-6 columns">
          Current Job Title: <input type="text" name="current_position_title" placeholder="e.g. Web Developer, Student" value="<?php echo set_value('current_position_title'); ?>" />
        </div>
         <div class="large-6 columns">
          Desired Internship Position: <input type="text" name="desired_internship_position" placeholder="e.g. Management" value="<?php echo set_value('desired_internship_position'); ?>" />
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <button class="small radius">Register</button>
        </div>
      </div>
  </form>
</div>