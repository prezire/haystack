<div id="internship" class="index row">
  <h4>My Posted Internships</h4>
  <a href="<?php echo site_url('internship/create'); ?>" class="button radius small">New Internship</a>
	<table>
		<thead>
			<tr>
        <th>ID</th>
        <th>Name</th>
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
          <td><?php echo $i->id; ?></td>
          <td><?php echo $i->name; ?></td>
          <td><?php echo $i->date_from; ?></td>
          <td><?php echo $i->date_to; ?></td>
          <td><?php echo $i->industry; ?></td>
          <td><?php echo $i->working_hours; ?></td>
          <td><?php echo $i->shift_pattern; ?></td>
          <td><?php echo $i->salary; ?></td>
          <td><?php echo $i->vacancy_count; ?></td>
        <td>
					<a href="<?php echo site_url('internship/update/' . $i->id); ?>" class="button radius small alert">Update</a>
					<a href="<?php echo site_url('internship/delete/' . $i->id); ?>" class="button radius small">Delete</a>
				</td>
			</tr>
      <?php } ?>      
		</tbody>
	</table>
</div>