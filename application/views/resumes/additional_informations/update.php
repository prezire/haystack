<div id="additional_information" class="update row">
  <h4>Additional Information</h4>
    <?php echo form_open('additionalinformation/update'); ?>          
      <input type="hidden" name="id" value="<?php echo set_value('id', $additionalInformation->id); ?>" />      
      <textarea name="information"><?php echo set_value('information', $additionalInformation->information); ?></textarea>      
      <button class="button radius small">Save</button>
  </form>
</div>