<div id="internship" class="create row">
  <div class="row">
    <div class="large-12 columns">
      <h4>New Internship</h4>
    </div>
  </div>
    <?php 
      echo validation_errors();
      echo form_open('internship/create'); 
    ?>      
      
      <div class="row">
        <div class="large-6 columns">Name: <input type="text" name="name" placeholder="e.g. Project Manager" /></div>
        <div class="large-6 columns">Salary (USD): <input type="text" name="salary" /></div>
      </div>

      <div class="row">
        <div class="large-6 columns">Address: <input type="text" name="address" /></div>
        <div class="large-6 columns">Country: <?php echo form_dropdown('country', getCountries()); ?></div>
      </div>
      
      <div class="row">
        <div class="large-12 columns">Description: <textarea name="description" placeholder="e.g. Job description and requirements"></textarea></div>
      </div>
      
      <div class="row">
        <div class="large-6 columns">Date From: <input type="text" name="date_from" class="from datepicker" /></div>
        <div class="large-6 columns">Date To: <input type="text" name="date_to" class="to datepicker" /></div>
      </div>
      
      <div class="row">
        <div class="large-6 columns">Industry: <?php echo form_dropdown('industry', getIndustries()); ?></div>
        <div class="large-6 columns">Working Hours: <input type="text" name="working_hours" placeholder="e.g. 9" /></div>
      </div>
       
      <div class="row">
        <div class="large-6 columns">Shift Pattern: <?php echo form_dropdown('shift_pattern', getShiftPatterns(), 'No Shift'); ?></div>
        <div class="large-6 columns">Vacancy Count: <input type="text" name="vacancy_count" placeholder="e.g. 1" /></div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <button class="small radius">Create</button>
        </div>
      </div>
  </form>
</div>