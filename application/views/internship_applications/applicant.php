<div id="internshipApplication" class="index applicant row">
	<div class="row">
	  <div class="small-12 medium-12 large-12 columns">
	  	<h4>Applied Internships</h4>
	  	<strong>Keep track of the positions you've applied.</strong>
	  </div>
	</div>
	<?php 
		//Similar to views/commons/partials/internships/listing.php
		//but without the delete option.
		//TBD: Impl a delete option.
		foreach($applications as $i){ 
	?>
		<div class="row">
		  <div class="small-12 medium-12 large-12 columns">
				<div class="row panel radius" id="<?php echo $i->id; ?>">
				  <div class="small-12 medium-12 large-8 columns primary">
				    <a href="<?php echo site_url('internship/read/' . $i->internship_id); ?>">
				      <b><?php echo $i->name; ?></b>
				    </a>
				    <div>
				      <strong>Description:</strong>
				      <?php echo character_limiter($i->description, 150); ?>
				    </div>
				  </div>
				  <div class="small-12 medium-12 large-4 columns">
				    <div class="calendar">
				      <strong><i class="fa fa-calendar"></i></strong>
				      <?php 
				        echo toHumanReadableDate($i->date_from) . 
				              ' - ' . 
				              toHumanReadableDate($i->date_to); 
				      ?>
				    </div>
				    <div>
				    	<strong>Vacancy:</strong> 
				    	<?php echo $i->vacancy_count; ?></div>

				    	<strong>Applied on:</strong> 
				    	<?php echo toHumanReadableDate($i->date_time_applied); ?></div>
				  </div>
				</div>

		  </div>
		</div>
	<?php } ?> 
</div>