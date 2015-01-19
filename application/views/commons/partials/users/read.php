<div id="user" class="read row">
      
      <div class="row">
        <div class="large-11 columns avatar">
          <?php 
            $img = $user->image_path;
            $img = $img ? 
                  base_url('public/uploads/' . $user->image_path) : 
                  base_url('public/img/avatar.jpg');
          ?>
          <img src="<?php echo $img; ?>" />
        </div>
        <div class="large-1 columns">
          <?php 
            if(getRoleName() == 'Employer')
            {
              $sDisabled = $isPooled ? 'disabled' : '';
          ?>
              <a href="<?php echo site_url('pooledapplicant/create'); ?>" 
                  class="pool button tiny radius" <?php echo $sDisabled; ?>
                  applicantId = "<?php echo $applicantId; ?>"
                  employerId = "<?php echo $employerId; ?>">
                <i class="fa fa-bookmark"></i> Pool
              </a>
          <?php
            }
            else
            {
              echo '&nbsp;';
            }
          ?>
        </div>
      </div>
      <br />
      <div class="row panel radius">
        <div class="large-12 columns">
          <strong>Full Name:</strong>
          <?php echo $user->title; ?>
          <?php echo $user->full_name; ?>
        </div>      
      </div>
      
      <div class="row panel radius">
        <div class="large-6 columns">
          <strong>Email:</strong> 
          <?php echo $user->email; ?>
        </div>
        <div class="large-6 columns">
          <strong>Alternate Email:</strong> 
          <?php echo $user->alternate_email; ?>    
        </div>
      </div>
          
      <div class="row panel radius">
        <div class="large-6 columns">
          <strong>Landline:</strong> 
          <?php echo $user->landline; ?>      
        </div>
        <div class="large-6 columns">
          <strong>Mobile:</strong> 
          <?php echo $user->mobile; ?>      
        </div>
      </div>
      
      <div class="row panel radius">
          <div class="large-6 columns">
            <strong>Address:</strong>
            <?php echo $user->address; ?>
          </div>
          <div class="large-6 columns">
            <strong>Nationality:</strong> 
            <?php echo $user->nationality; ?>
          </div>
      </div>
  </form>
</div>