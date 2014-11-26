<div id="comment" class="index row">
  <h4>Comments</h4>
	<table>
		<thead>
			<tr>
      <th>Commenter</th>
      <th>Comment</th>
      <th>Date Time</th>
      <th>Approved</th>
      <th>Options</th>
			</tr>
		</thead>
		<tbody>
      <?php foreach($comments as $c){ ?>      
			<tr>
        <td><?php echo $c->commenter_full_name; ?></td>
        <td><?php echo $c->comment; ?></td>
        <td><?php echo $c->date_time; ?></td>
        <td>
          <?php 
            $b = $c->approved == 1;
            $s = 'class="cbApproved" id="' . $c->id . '"';
            echo form_checkbox('approved', $c->approved, $b, $s); 
          ?>
          </td>
        <td>
					<a href="<?php echo site_url('comment/delete/' . $c->id); ?>" class="button radius tiny alert">Delete</a>
				</td>
			</tr>
      <?php } ?>      
		</tbody>
	</table>
</div>