<div id="internship" class="read row">
  <div class="row">
    <div class="large-12 columns">
      <h4>Internship</h4>
    </div>
  </div>

  <div class="row panel radius">
    <div class="small-12 medium-9 large-9 columns">
      <strong>Job ID:</strong> <?php echo $internship->internship_id; ?><br /><br />
       <i class="fa fa-newspaper-o"></i> <?php echo $internship->name; ?><br /><br />
       <i class="fa fa-calendar"></i>
        <?php
          echo toHumanReadableDate($internship->date_from) .
          ' - ' .
          toHumanReadableDate($internship->date_to);
        ?>
    </div>
    <div class="small-12 medium-3 large-3 columns">
      <div class="right">
        <?php
          $sDisabled = 'disabled ';
          if(getLoggedUser())
          {
            $usr = getLoggedUser();
            $roleName = getRoleName();
            if($roleName == 'Applicant')
            {
              if(!$hasApplied)
              {
                $sDisabled = '';
              }
              echo '<a href="' . site_url('internshipapplication/createFromApplication/' . $internship->internship_id) . '" class="' . $sDisabled . 'button radius small apply"><i class="fa fa-check-circle"></i> Apply</a> ';
            }
          }
          //echo '<a href="#" class="' . $sDisabled . 'button tiny radius"><i class="fa fa-bookmark"></i> Bookmark</a>';
        ?>
      </div>
    </div>
  </div>

  <div class="row panel radius">
    <div class="small-12 medium-12 large-12 columns">
      <i class="fa fa-pencil-square"></i> 
      <strong>Job Description:</strong><br />
      <?php echo nl2br($internship->description); ?>
    </div>
  </div>

  
  <div class="row panel radius">
    <div class="small-12 medium-6 large-6 columns">
      <strong>Industry:</strong> <?php echo $internship->industry; ?><br /><br />
 
      <strong>Working Hours:</strong> 
      <?php echo $internship->working_hours; ?><br /><br />

      <strong>Shift Pattern:</strong> <?php echo $internship->shift_pattern; ?>
    </div>
    <div class="small-12 medium-6 large-6 columns">
      <strong>Salary (USD):</strong> <?php echo $internship->salary; ?><br /><br />

      <strong>Vacancy:</strong> <?php echo $internship->vacancy_count; ?>
    </div>
  </div>

  <div class="row panel">
    <div class="small-12 medium-6 large-6 columns">
      <strong>Employer:</strong>
      <?php echo $internship->organization_name; ?>
    </div>
    <div class="small-12 medium-6 large-6 columns">
      <strong>Address:</strong> <?php echo $internship->internship_address; ?><br /><br />
      <strong>Country:</strong> <?php echo $internship->country; ?>
    </div>
  </div>
  
    
</form>
  <?php
    if(getLoggedUser())
    { 
      if($roleName == "Employer")
      {
        echo '<a href="' . site_url('internship/update/' . $internship->internship_id) . '" class="button radius small">Update</a> ';    
      }
    }
  ?>
</div>