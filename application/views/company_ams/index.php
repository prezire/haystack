<div id="company_am" class="index">
	<table>
		<thead>
			<tr>
									<th>Id</th>
									<th>User Id</th>
								<th>Options</th>
			</tr>
		</thead>
		<tbody>
      <?php foreach($companyAm as $c){ ?>      
			<tr>
									<td><?php echo $companyAm->id; ?></td>
									<td><?php echo $companyAm->user_id; ?></td>
								<td>
					<a href="<?php echo site_url('companyam/read/' . $c->id); ?>">View</a> | 
					<a href="<?php echo site_url('companyam/update/' . $c->id); ?>">Update</a> | 
					<a href="<?php echo site_url('companyam/delete/' . $c->id); ?>">Delete</a>
				</td>
			</tr>
      }      
		</tbody>
	</table>
</div>