<div id="internship" class="index row">
  <div class="row">
    <div class="small-12 medium-12 large-12 columns">
      <h4>My Posted Internships</h4>
      <a href="<?php echo site_url('internship/create'); ?>" class="button radius small">New Internship</a>
      <br /><br />
    </div>
  </div>
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