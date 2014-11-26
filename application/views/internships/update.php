<div id="internship" class="update row">
  <div class="row">
    <h4>Update Internship</h4>
  </div>
    <?php 
    echo validation_errors();
    echo form_open('internship/update'); 
    ?>          
      <input type="hidden" name="id" value="<?php echo set_value('id', $internship->id); ?>" />
      <input type="hidden" name="employer_id" value="<?php echo set_value('employer_id', $internship->employer_id); ?>" />         
          
      <div class="row">
        <div class="large-6 columns">Name: <input type="text" name="name" value="<?php echo set_value('name', $internship->name); ?>" /></div>
        <div class="large-6 columns">Salary: <input type="text" name="salary" value="<?php echo set_value('salary', $internship->salary); ?>" /></div>
      </div>
      
      <div class="row">      
        <div class="large-12 columns">Description: <textarea name="description"><?php echo set_value('description', $internship->description); ?></textarea></div>
      </div>
      
      <div class="row">
        <div class="large-6 columns">Date From: <input type="text" name="date_from"  class="datepicker" value="<?php echo set_value('date_from', $internship->date_from); ?>" /></div>
        <div class="large-6 columns">Date To: <input type="text" name="date_to" class="datepicker" value="<?php echo set_value('date_to', $internship->date_to); ?>" /></div>
      </div>
      
      <div class="row">
        <div class="large-6 columns">Industry: <input type="text" name="industry" value="<?php echo set_value('industry', $internship->industry); ?>" /></div>
        <div class="large-6 columns">Working Hours: <input type="text" name="working_hours" value="<?php echo set_value('working_hours', $internship->working_hours); ?>" /></div>
       </div>
      <div class="row"> 
        <div class="large-6 columns">Shift Pattern: 
          <?php echo form_dropdown('shift_pattern', getShiftPatterns(), set_value('shift_pattern', $internship->shift_pattern)); ?>
        </div>
        <div class="large-6 columns">Vacancy Count: <input type="text" name="vacancy_count" value="<?php echo set_value('vacancy_count', $internship->vacancy_count); ?>" /></div>
       </div>
       
       <div class="row">
        <a href="<?php echo site_url('internship/read/'  . $internship->id); ?>" class="button alert small radius">Cancel</a>
        <button class="small radius">Update</button>
      </div>
  </form>
</div>