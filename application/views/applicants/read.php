<div id="applicant" class="read row">
      
      <?php echo $this->load->view('commons/partials/users/read', array('user' => $user), true); ?>
      
      
      <div class="row">
        <div class="large-6 columns">
          Job Title: <?php echo $applicant->job_title; ?>
        </div>
        <div class="large-6 columns">
          Internship Position: <?php echo $applicant->internship_position; ?>
        </div>
      </div>
      <div class="row">
        <div class="large-6 columns">
          Expected Salary: <?php echo $applicant->expected_salary; ?>      
        </div>
        <div class="large-6 columns">
          Preferred Country: <?php echo $applicant->preferred_country; ?>      
        </div>
      </div>
                
      
      <?php if(getLoggedUser()){ ?>
      <hr />
      <h5>Send Message</h5>
      <div class="row">
        <?php echo form_open('applicant/sendMessage'); ?>
          <div class="large-12 columns">
            <div><input type="text" name="title" placeholder="Title*" /></div>
            <div><textarea name="message" placeholder="Message*"></textarea></div>
            <div><a href="#" class="button tiny radius btnSendMsg">Send</a></div>
          </div>
        </form>
      </div>
      
      <hr />
      
      <h5><a name="comments">&nbsp;</a></h5>
      <div class="row comments">
        <?php foreach($comments as $c){ ?>
          <div class="large-12 medium-12 small-12 columns comment">
            <div>
              <a href="#" class="commenter">
                <?php echo $c->commenter_full_name; ?>
              </a>
              <span class="comment"><?php echo $c->comment; ?></span>
            </div>
            <div class="dateTime"><?php echo $c->date_time; ?></div>
          </div>
        <?php } ?>
      </div>
      <div class="row">
        <?php echo form_open('comment/createForProfile'); ?>
          <input type="hidden" name="applicant_id" value="<?php echo $applicant->id; ?>" />
          <input type="hidden" name="from_user_id" value="<?php echo getLoggedUser()->id; ?>" />
          <div class="large-12 columns">
            <div><textarea name="comment" placeholder="Write a comment..."></textarea></div>
            <div><button class="tiny radius btnSendMsg">Post Comment</button></div>
          </div>
        </form>
      </div>
    <?php } ?>
</div>