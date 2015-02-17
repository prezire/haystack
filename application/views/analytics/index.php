<div id="analytics" class="index">
	<div class="row">
	  <div class="small-12 medium-12 large-12 columns">
	  	<h4>Analytics</h4>

	  	<?php
	      echo $this->load->view
	      (
	        'commons/partials/success', 
	        array('useSession' => true), 
	        true
	      );
	      //
	      echo $this->load->view
	      (
	        'commons/partials/errors', 
	        $this->session->flashdata('error') ? 
	        array('error' => $this->session->flashdata('error')) : 
	        null, 
	        true
	      ); 
	    ?>

	  </div>
	</div>

	<?php 
		$roleName = getRoleName();
		echo $this->load->view
		(
			'commons/partials/analytics/index_header', 
			null, 
			true
		);
		echo $this->load->view
		(
			'commons/partials/analytics/' . strtolower($roleName), 
			null, 
			true
		);
		echo $this->load->view
		(
			'commons/partials/analytics/index_footer', 
			null, 
			true
		);
	?>
	
</div>