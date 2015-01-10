<div id="pooledApplicant" class="index row">
  <h4>Pooled</h4>
	<table>
		<thead>
			<tr>
									<th>Id</th>
									<th>Applicant Id</th>
									<th>Employer Id</th>
								<th>Options</th>
			</tr>
		</thead>
		<tbody>
      <?php foreach($pooledApplicants as $p){ ?>      
			<tr>
									<td><?php echo $p->id; ?></td>
									<td><?php echo $p->applicant_id; ?></td>
									<td><?php echo $p->employer_id; ?></td>
								<td>
					<a href="<?php echo site_url('pooledapplicant/read/' . $p->id); ?>" class="button radius small">View</a>
					<a href="<?php echo site_url('pooledapplicant/update/' . $p->id); ?>" class="button radius small">Update</a>
					<a href="<?php echo site_url('pooledapplicant/delete/' . $p->id); ?>" class="button radius small alert">Delete</a>
				</td>
			</tr>
      <?php } ?>      
		</tbody>
	</table>
</div>