<div id="internship" class="industry index row">
  <div class="row">
    <div class="small-12 medium-12 large-12 columns">
      <h4>Internships</h4>
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