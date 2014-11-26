<div id="user" class="update row">
     <div class="row">
      <h4>Update User</h4>
      <?php 
        if($this->session->flashdata('update') == 'success') { ?>
        <div class="alert-box success radius">
          User was updated.
        </div>
      <?php } ?>
     </div>
    <?php 
        echo validation_errors();
        echo form_open_multipart('user/update'); 
    ?>
      <input type="hidden" name="id" value="<?php echo set_value('id', $user->id); ?>" />      
      <div class="row">
        <?php 
          $img = base_url('public/uploads') . '/' . set_value('image_path', $user->image_path);
        ?>
        <div class="avatar">
          <img src="<?php echo $img; ?>" />
        </div>
        <br />
        <div class="large-12 columns"><input type="file" name="image_path" /></div>
      </div>
      <div class="row">
          <?php 
            $t = set_value('title', $user->title); 
            $mr = $t == 'Mr.';
            $ms = $t == 'Ms.';
            $mrs = $t == 'Mrs.';
          ?>
          <div class="large-12 columns">
            <input type="radio" name="title" value="Mr." checked="<?php echo $mr; ?>" id="mr" /><label for="mr">Mr.</label>
            <input type="radio" name="title" value="Ms." checked="<?php echo $ms; ?>" id="ms" /><label for="ms">Ms.</label>
            <input type="radio" name="title" value="Mrs." checked="<?php echo $mrs; ?>" id="mrs" /><label for="mrs">Mrs.</label>   
          </div>
      </div>
      <div class="row">
        <div class="large-6 columns">Full Name: <input type="text" name="full_name" value="<?php echo set_value('full_name', $user->full_name); ?>" /></div>
        <div class="large-6 columns">Email: <input type="text" name="email" value="<?php echo set_value('email', $user->email); ?>" />      </div>
      </div>
      
      <div class="row">
        <div class="large-6 columns">Alternate Email: <input type="text" name="alternate_email" value="<?php echo set_value('alternate_email', $user->alternate_email); ?>" /></div>      
        <div class="large-6 columns">Password: <input type="text" name="password" value="<?php echo set_value('password', $user->password); ?>" /></div>
      </div>
            
      <div class="row">
        <div class="large-6 columns">Landline: <input type="text" name="landline" value="<?php echo set_value('landline', $user->landline); ?>" />          </div>
        <div class="large-6 columns">Mobile: <input type="text" name="mobile" value="<?php echo set_value('mobile', $user->mobile); ?>" />      </div>
      </div>
      
      <div class="row">
        <div class="large-6 columns">Address: <input type="text" name="address" value="<?php echo set_value('address', $user->address); ?>" />      </div>
        <div class="large-6 columns">Nationality: <input type="text" name="nationality" value="<?php echo set_value('nationality', $user->nationality); ?>" /></div>
      </div>
      
      <!-- TODO: Contact Me form. -->
      
      <div class="row">
        <a href="<?php echo site_url('user/read/'  . $user->id); ?>" class="button alert small radius">Cancel</a>
        <button class="small radius">Update</button>
      </div>
  </form>
</div>