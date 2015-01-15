<div id="internship_application" class="index row">
  <h4></h4>
	<table>
		<thead>
			<tr>
									<th>Id</th>
									<th>Applicant Id</th>
									<th>Employer Id</th>
									<th>Internship Id</th>
								<th>Options</th>
			</tr>
		</thead>
		<tbody>
      <?php foreach($internshipApplications as $i){ ?>      
			<tr>
									<td><?php echo $i->id; ?></td>
									<td><?php echo $i->applicant_id; ?></td>
									<td><?php echo $i->employer_id; ?></td>
									<td><?php echo $i->internship_id; ?></td>
								<td>
					<a href="<?php echo site_url('internshipapplication/read/' . $i->id); ?>" class="button radius small">View</a>
					<a href="<?php echo site_url('internshipapplication/update/' . $i->id); ?>" class="button radius small">Update</a>
					<a href="<?php echo site_url('internshipapplication/delete/' . $i->id); ?>" class="button radius small alert">Delete</a>
				</td>
			</tr>
      <?php } ?>      
		</tbody>
	</table>
</div>