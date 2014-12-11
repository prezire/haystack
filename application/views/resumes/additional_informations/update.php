<div id="additional_information" class="update row">
  <?php 
    echo form_open('additionalinformation/update'); 
    $a = $additional_informations;
  ?>
    <input type="hidden" name="resume_id" value="<?php echo set_value('resume_id', $resume->resume_id); ?>" />  
    <div class="row">
      <div class="small-12 medium-12 large-12 columns">
      	<textarea name="information"><?php echo set_value('information', $a->information); ?></textarea>
      </div>
    </div>    
    <div class="row">
      <div class="small-12 medium-12 large-12 columns">
      	<button class="button radius small">Save</button>
      </div>
    </div>
  </form>
</div>