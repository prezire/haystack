<div id="comment" class="index row">
  <div class="row">
    <div class="small-12 medium-12 large-12 columns">
      <h4>Comments</h4>
    </div>
  </div>
  <?php 
    foreach($comments as $c)
    {
      echo $this->load->view
      (
        'commons/partials/comments/listing', 
        array('comment' => $c), 
        true
      );
    }
  ?>
</div>