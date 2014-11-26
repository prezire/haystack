<div id="employer" class="index">
	<table>
		<thead>
			<tr>
									<th>Id</th>
									<th>User Id</th>
								<th>Options</th>
			</tr>
		</thead>
		<tbody>
      <?php foreach($employer as $e){ ?>      
			<tr>
									<td><?php echo $employer->id; ?></td>
									<td><?php echo $employer->user_id; ?></td>
								<td>
					<a href="<?php echo site_url('employer/read/' . $e->id); ?>">View</a> | 
					<a href="<?php echo site_url('employer/update/' . $e->id); ?>">Update</a> | 
					<a href="<?php echo site_url('employer/delete/' . $e->id); ?>">Delete</a>
				</td>
			</tr>
      }      
		</tbody>
	</table>
</div>