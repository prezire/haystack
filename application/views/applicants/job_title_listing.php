<div id="applicant" class="jobTitle index row">
  <h4>Applicant Job Title Listing</h4>
  <div class="large-12 columns">
    <table>
      <thead>
        <tr>
          <th>Expected Salary</th>
          <th>Internship Position</th>
          <th>Preferred Country</th>
          <th>Job Title</th>
          <th>Options</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($jobTitles as $a){ ?>      
        <tr>
            <td><?php echo $a->expected_salary; ?></td>
            <td><?php echo $a->internship_position; ?></td>
            <td><?php echo $a->preferred_country; ?></td>
            <td><?php echo $a->job_title; ?></td>
          <td>
            <a href="<?php echo site_url('applicant/read/' . $a->id); ?>">View</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>