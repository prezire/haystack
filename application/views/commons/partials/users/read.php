<div id="user" class="read row">
      
      <div class="row">
        <div class="avatar">
          <img src="<?php echo base_url('public/uploads/' . $user->image_path); ?>" />
        </div>
      </div>
      <br />
      <div class="row">
        <div class="large-12 columns">
          <?php echo $user->title; ?>
          <?php echo $user->full_name; ?>
        </div>      
      </div>
      
      <div class="row">
        <div class="large-6 columns">Email: <?php echo $user->email; ?>      </div>
        <div class="large-6 columns">Alternate Email: <?php echo $user->alternate_email; ?>    </div>
      </div>
          
      <div class="row">
        <div class="large-6 columns">Landline: <?php echo $user->landline; ?>      </div>
        <div class="large-6 columns">Mobile: <?php echo $user->mobile; ?>      </div>
      </div>
      
      <div class="row">
          <div class="large-6 columns">Address: <?php echo $user->address; ?>      </div>
          <div class="large-6 columns">Nationality: <?php echo $user->nationality; ?>      </div>
      </div>
  </form>
</div>