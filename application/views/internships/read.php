<div id="internship" class="read row">
      <div class="row">
          <h4 class="large-12 columns">Internship</h4>
      </div>
      
      <div class="row">
        <div class="large-12 columns">
      Job ID: <?php echo $internship->id; ?>      
      </div>
      </div>
      
      <div class="row">
        <div class="large-6 columns">
          Name: <?php echo $internship->name; ?>      
        </div>
        <div class="large-6 columns">
          Date: <?php echo $internship->date_from; ?> - 
          <?php echo $internship->date_to; ?>      
        </div>
      </div>
      
      <div class="row">
        <div class="large-12 columns">
          Description: <?php echo $internship->description; ?>      
        </div>
      </div>
      
      <div class="row">
        <div class="large-12 columns">
            Industry: <?php echo $internship->industry; ?>      
          </div>
       </div>
      <div class="row">
        <div class="large-6 columns">
          Working Hours: <?php echo $internship->working_hours; ?>          
        </div>
        <div class="large-6 columns">
          Shift Pattern: <?php echo $internship->shift_pattern; ?>      
        </div>
      </div>
       
       <div class="row">
        <div class="large-6 columns">
          Salary: <?php echo $internship->salary; ?>      
        </div>
        <div class="large-6 columns">
          Vacancy Count: <?php echo $internship->vacancy_count; ?>      
        </div>
      </div>
      
      <!-- TODO: Employer details. 
        Employer Id: <?php echo $internship->employer_id; ?>
      -->
      <a href="#" class="button radius small">Apply</a>
  </form>
</div>