<div id="internshipApplication" class="index employer row">
	<div class="row">
	  <div class="small-12 medium-12 large-12 columns">
	  	<h4>Applied Internships</h4>
	  </div>
	</div>
	<?php 
		//Similar to views/commons/partials/internships/listing.php
		//but without the delete option.
		//TBD: Impl a delete option.
		foreach($appliedInternships as $ai)
		{
	?>
		<div class="row">
		  <div class="small-12 medium-12 large-12 columns">
				<div class="row panel radius" id="<?php echo $ai['id']; ?>">
				  <div class="small-12 medium-12 large-8 columns">
				    <a href="<?php echo site_url('internship/read/' . $ai['internshipId']); ?>">
				      <b><?php echo $ai['name']; ?></b>
				    </a>
				    <div>
				      <strong>Description:</strong>
				      <?php echo character_limiter($ai['description'], 150); ?>
				    </div>
				  </div>
				  <div class="small-12 medium-12 large-4 columns">
				    <div class="calendar">
				      <i class="fa fa-calendar"></i>
				      <?php 
				        echo toHumanReadableDate($ai['dateFrom']) . 
				              ' - ' . 
				              toHumanReadableDate($ai['dateTo']); 
				      ?>
				    </div>
				    <div><strong>Vacancy:</strong> <?php echo $ai['vacancyCount']; ?></div>
				  </div>

			  	  <div class="small-12 medium-12 large-12 columns applicants panel radius">
			  	  	<div class="row">
			  	  	  <div class="small-6 medium-6 large-12 columns">
				  	  	<strong>Applicants: </strong> <?php echo $ai['summaryCount']; ?><br />
				  	  	<?php 
				  	  		$appls = $ai['applicants'];
				  	  		foreach($appls as $appl)
				  	  		{
				  	  			$a = $appl['applicant'];
				  	  	?>
				  	  		<div class="row panel radius">
				  	  		  	<div class="small-12 medium-12 large-12 columns">
					  	  			<a href="<?php echo site_url('applicant/read/' . $a['id']); ?>">
					  	  				Full Name: <?php echo $a['fullName']; ?>
					  	  			</a>
				  	  			</div>
				  	  			<div class="small-12 medium-12 large-12 columns">
					  	  			Current Position Title: <?php echo $a['currentPositionTitle']; ?>
					  	  		</div>
					  	  		<div class="small-12 medium-12 large-12 columns">
					  	  		  	Date / Time Applied: <?php echo $a['dateTimeApplied']; ?>
					  	  		</div>
				  	  		  
				  	  		</div>
				  	  	<? } ?>
			  	  	  </div>
			  	  	</div>
			  	  </div>
				  	
				</div>
		  	</div>
		</div>
	<?php } ?> 
</div>