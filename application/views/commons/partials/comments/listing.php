<div class="row panel radius comment">
	<div class="small-12 medium-12 large-12 columns">
	  <div>
	    <a href="#" class="commenter">
	      <strong>
	      	<?php echo $comment->commenter_full_name; ?>
	      </strong>
	    </a>
	    <span class="comment"><?php echo $comment->comment; ?></span>
	  </div>
	  <div class="dateTime"><?php echo $comment->date_time; ?></div>
	</div>
	<div class="row">
	  <div class="small-12 medium-12 large-12 columns">
	  	<?php 
		    if(getRoleName() == 'Applicant')
		    {
		    	//TODO: Delete btn.
		    	//TODO: Approve btn
		    } 
		    else if(getRoleName() == 'Employer')
		    {
		    	//TODO: Delete btn.
		    } 
		?>
	  </div>
	</div>
</div>