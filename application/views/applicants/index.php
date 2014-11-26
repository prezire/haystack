<div id="applicant" class="index">
	<table>
		<thead>
			<tr>
									<th>Id</th>
									<th>User Id</th>
									<th>Expected Salary</th>
									<th>Internship Position</th>
									<th>Preferred Country</th>
									<th>Job Title</th>
								<th>Options</th>
			</tr>
		</thead>
		<tbody>
      <?php foreach($applicant as $a){ ?>      
			<tr>
									<td><?php echo $applicant->id; ?></td>
									<td><?php echo $applicant->user_id; ?></td>
									<td><?php echo $applicant->expected_salary; ?></td>
									<td><?php echo $applicant->internship_position; ?></td>
									<td><?php echo $applicant->preferred_country; ?></td>
									<td><?php echo $applicant->job_title; ?></td>
								<td>
					<a href="<?php echo site_url('applicant/read/' . $a->id); ?>">View</a> | 
					<a href="<?php echo site_url('applicant/update/' . $a->id); ?>">Update</a> | 
					<a href="<?php echo site_url('applicant/delete/' . $a->id); ?>">Delete</a>
				</td>
			</tr>
      }      
		</tbody>
	</table>
</div>