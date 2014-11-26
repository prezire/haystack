<div id="subscriber_applicant_comment" class="index">
	<table>
		<thead>
			<tr>
									<th>Id</th>
									<th>Subscriber Id</th>
									<th>Applicant Id</th>
									<th>Date</th>
									<th>Comment</th>
								<th>Options</th>
			</tr>
		</thead>
		<tbody>
      <?php foreach($subscriberApplicantComment as $s){ ?>      
			<tr>
				<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Warning</p>
<p>Message:  Invalid argument supplied for foreach()</p>
<p>Filename: cruds/index.php</p>
<p>Line Number: 22</p>

</div>				<td>
					<a href="<?php echo site_url('subscriberapplicantcomment/read/' . $s->id); ?>">View</a> | 
					<a href="<?php echo site_url('subscriberapplicantcomment/update/' . $s->id); ?>">Update</a> | 
					<a href="<?php echo site_url('subscriberapplicantcomment/delete/' . $s->id); ?>">Delete</a>
				</td>
			</tr>
      <?php } ?>      
		</tbody>
	</table>
</div>