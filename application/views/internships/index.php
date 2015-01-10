<div id="internship" class="index row">
  <h4>My Posted Internships</h4>
  <a href="<?php echo site_url('internship/create'); ?>" class="button radius small">New Internship</a>
	<div class="listing">
    <?php 
      foreach($internships as $i)
      { 
        echo $this->load->view
        (
          'commons/partials/internships/listing', 
          array('internship' => $i, 'method' => 'read'), 
          true
        );        
      }
    ?>
  </div>
</div>