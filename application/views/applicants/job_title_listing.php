<div id="applicant" class="jobTitle index row">
  <div class="row">
    <div class="small-12 medium-12 large-12 columns">
      <h4>Applicant Job Title Listing</h4>
    </div>
  </div>
  <?php foreach($jobTitles as $a){ ?>
      <div class="row panel radius">
        <div class="large-6 columns">

          <?php $url = site_url('applicant/read/' . $a->id); ?>

          <strong>Desired Internship Position:</strong>
          <a href="<?php echo $url; ?>">
            <?php echo $a->desired_internship_position; ?>
          </a>
          <br />
          <strong>Current Position Title:</strong>
          <a href="<?php echo $url; ?>">
            <?php echo $a->current_position_title; ?>
          </a>
        </div>
        <div class="large-6 columns">
          <strong>Expected Salary:</strong> 
          $<?php echo $a->expected_salary; ?>
          <br />
          <strong>Preferred Country:</strong>
          <?php echo $a->preferred_country; ?>
        </div>
      </div>
  <?php } ?>
</div>