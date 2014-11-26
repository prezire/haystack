<div id="subscriber_applicant_comment" class="update">
    <?php 
    echo validation_errors();
    echo form_open('subscriberapplicantcomment/update'); 
    ?>          
      Id: <input type="text" name="id" value="<?php echo set_value('id', $subscriberApplicantComment->id); ?>" />      
          
      Subscriber Id: <input type="text" name="subscriber_id" value="<?php echo set_value('subscriber_id', $subscriberApplicantComment->subscriber_id); ?>" />      
          
      Applicant Id: <input type="text" name="applicant_id" value="<?php echo set_value('applicant_id', $subscriberApplicantComment->applicant_id); ?>" />      
          
      Date: <input type="text" name="date" value="<?php echo set_value('date', $subscriberApplicantComment->date); ?>" />      
          
      Comment: <textarea name="comment"><?php echo set_value('comment', $subscriberApplicantComment->comment); ?></textarea>      
        <a href="<?php echo site_url('subscriberapplicantcomment/read/'  . $subscriberApplicantComment->id); ?>">Cancel</a> | 
    <button>Update</button>
  </form>
</div>