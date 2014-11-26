<div id="subscriber_applicant_comment" class="create">
    <?php 
    echo validation_errors();
    echo form_open('subscriberapplicantcomment/create'); 
    ?>          
      Id: <input type="text" name="id" />      
          
      Subscriber Id: <input type="text" name="subscriber_id" />      
          
      Applicant Id: <input type="text" name="applicant_id" />      
          
      Date: <input type="text" name="date" />      
          
      Comment: <textarea name="comment"></textarea>      
        <a href="<?php echo site_url('subscriberapplicantcomment'); ?>">Cancel</a> | 
    <button>Create</button>
  </form>
</div>