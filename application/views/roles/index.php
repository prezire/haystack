<div id="role" class="index">
	<table>
		<thead>
			<tr>
									<th>Id</th>
									<th>Name</th>
								<th>Options</th>
			</tr>
		</thead>
		<tbody>
      <?php foreach($role as $r){ ?>      
			<tr>
									<td><?php echo $role->id; ?></td>
									<td><?php echo $role->name; ?></td>
								<td>
					<a href="<?php echo site_url('role/read/' . $r->id); ?>">View</a> | 
					<a href="<?php echo site_url('role/update/' . $r->id); ?>">Update</a> | 
					<a href="<?php echo site_url('role/delete/' . $r->id); ?>">Delete</a>
				</td>
			</tr>
      }      
		</tbody>
	</table>
</div>