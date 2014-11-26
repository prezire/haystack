<div id="subscriber_applicant_comment" class="read">
            
      Id: <?php echo $subscriberApplicantComment->id; ?>      
          
      Subscriber Id: <?php echo $subscriberApplicantComment->subscriber_id; ?>      
          
      Applicant Id: <?php echo $subscriberApplicantComment->applicant_id; ?>      
          
      Date: <?php echo $subscriberApplicantComment->date; ?>      
          
      Comment: <?php echo $subscriberApplicantComment->comment; ?>      
        <a href="<?php echo site_url('subscriberapplicantcomment'); ?>">Back</a> | 
    <a href="<?php echo site_url('subscriberapplicantcomment/update'); ?>">Update</a>
  </form>
</div>