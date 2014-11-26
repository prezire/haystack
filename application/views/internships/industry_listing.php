<div id="internship" class="industry index row">
  <h4>Internship Listing</h4>
  <div class="large-12 columns">
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Date From</th>
          <th>Date To</th>
          <th>Industry</th>
          <th>Working Hours</th>
          <th>Shift Pattern</th>
          <th>Salary</th>
          <th>Vacancy Count</th>
        <th>Options</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($internships as $i){ ?>        
        <tr>
            <td><?php echo $i->name; ?></td>
            <td><?php echo $i->description; ?></td>
            <td><?php echo $i->date_from; ?></td>
            <td><?php echo $i->date_to; ?></td>
            <td><?php echo $i->industry; ?></td>
            <td><?php echo $i->working_hours; ?></td>
            <td><?php echo $i->shift_pattern; ?></td>
            <td><?php echo $i->salary; ?></td>
            <td><?php echo $i->vacancy_count; ?></td>
          <td>
            <a href="<?php echo site_url('internship/read/' . $i->id); ?>">View</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>