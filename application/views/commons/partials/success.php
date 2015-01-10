<?php if($this->session->flashdata('status')){ ?>
<div class="success row">
  <div class="small-12 medium-12 large-12 columns">
    <div data-alert class="alert-box success radius">
      <?php echo $this->session->flashdata('status'); ?>
    </div>
  </div>
</div>
<script>
  $('#contact .success.row').show().delay(5000).fadeOut();
</script>
<?php } ?>