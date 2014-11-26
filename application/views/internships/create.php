<div id="internship" class="create row">
  <div class="row">
    <h4>New Internship</h4>
  </div>
    <?php 
      echo validation_errors();
      echo form_open('internship/create'); 
    ?>      
      
      <div class="row">
        <div class="large-6 columns">Name: <input type="text" name="name" /></div>
        <div class="large-6 columns">Salary: <input type="text" name="salary" /></div>
      </div>
      
      <div class="row">
        <div class="large-12 columns">Description: <textarea name="description" placeholder="e.g. Job description and job requirements"></textarea></div>
      </div>
      
      <div class="row">
        <div class="large-6 columns">Date From: <input type="text" name="date_from" class="datepicker" /></div>
        <div class="large-6 columns">Date To: <input type="text" name="date_to" class="datepicker" /></div>
      </div>
      
      <div class="row">
        <div class="large-6 columns">Industry: <?php echo form_dropdown('industry', getIndustries()); ?></div>
        <div class="large-6 columns">Working Hours: <input type="text" name="working_hours" /></div>
      </div>
       
      <div class="row">
        <div class="large-6 columns">Shift Pattern: <?php echo form_dropdown('shift_pattern', getShiftPatterns(), 'No Shift'); ?></div>
        <div class="large-6 columns">Vacancy: <input type="text" name="vacancy_count" /></div>
      </div>
      <div class="row">
        <a href="<?php echo site_url('internship/readMyPosts'); ?>" class="button alert small radius">Cancel</a>
        <button class="small radius">Create</button>
      </div>
  </form>
</div>