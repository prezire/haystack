<div id="internship" class="update row">
  <div class="row">
    <div class="large-12 columns">
      <h4>Update Internship</h4>
    </div>
  </div>

    <?php
      echo $this->load->view
      (
        'commons/partials/success', 
        array('useSession' => true), 
        true
      );
      //
      echo $this->load->view
      (
        'commons/partials/errors', 
        $this->session->flashdata('error') ? 
        array('error' => $this->session->flashdata('error')) : 
        null, 
        true
      ); 
    ?>

    <?php echo form_open('internship/update'); ?>          
      <input type="hidden" name="id" value="<?php echo set_value('id', $internship->internship_id); ?>" />
      <input type="hidden" name="employer_id" value="<?php echo set_value('employer_id', $internship->employer_id); ?>" />         
          
      <div class="row">
        <div class="large-6 columns">Name: <input type="text" name="name" value="<?php echo set_value('name', $internship->name); ?>" /></div>
        <div class="large-6 columns">Salary (USD): <input type="text" name="salary" value="<?php echo set_value('salary', $internship->salary); ?>" /></div>
      </div>

      <div class="row">
        <div class="large-6 columns">Address: <input type="text" name="address" value="<?php echo set_value('address', $internship->internship_address); ?>" /></div>
        <div class="small-6 medium-6 large-6 columns">Country: <?php echo form_dropdown('country', getCountries(), set_value('country', $internship->country)); ?></div>
      </div>
      
      <div class="row">      
        <div class="large-12 columns">Description: <textarea name="description"><?php echo set_value('description', $internship->description); ?></textarea></div>
      </div>
      
      <div class="row">
        <div class="large-6 columns">Date From: <input type="text" name="date_from"  class="from datepicker" value="<?php echo set_value('date_from', $internship->date_from); ?>" /></div>
        <div class="large-6 columns">Date To: <input type="text" name="date_to" class="to datepicker" value="<?php echo set_value('date_to', $internship->date_to); ?>" /></div>
      </div>
      
      <div class="row">
        <div class="large-6 columns">Industry: <?php echo form_dropdown('industry', getIndustries(), set_value('industry', $internship->industry)); ?></div>
        <div class="large-6 columns">Working Hours: <input type="text" name="working_hours" placeholder="e.g. 9 AM - 6 PM" value="<?php echo set_value('working_hours', $internship->working_hours); ?>" /></div>
       </div>
      <div class="row"> 
        <div class="large-6 columns">Shift Pattern: 
          <?php echo form_dropdown('shift_pattern', getShiftPatterns(), set_value('shift_pattern', $internship->shift_pattern)); ?>
        </div>
        <div class="large-6 columns">Vacancy Count: <input type="text" name="vacancy_count" value="<?php echo set_value('vacancy_count', $internship->vacancy_count); ?>" /></div>
       </div>
       
       <div class="row">
        <div class="large-12 columns">
          <a href="<?php echo site_url('internship/read/' . $internship->internship_id); ?>" class="button tiny radius">Preview</a>
          <button class="small radius">Update</button>
        </div>
      </div>
  </form>
</div>