<div id="resume" class="update row">
  <section>
    <h4>Resume</h4>
    Note: Disabled items are directly related to your profile.
    <section class="resume">
      <i class="fa fa-angle-left"></i>
      <form>
        <input type="hidden" name="id" value="<?php echo set_value('id', $resume->id); ?>" />  
        <div class="row">
          <div class="small-12 medium-12 large-12 columns">
            Full Name: <input type="text" name="full_name" value="<?php echo set_value('full_name', $resume->full_name); ?>" />      
          </div>
        </div>
        <div class="row">
          <div class="small-12 medium-12 large-12 columns">
            Headline: <input type="text" name="headline" value="<?php echo set_value('headline', $resume->headline); ?>" />      
          </div>
        </div>
        <div class="row">
          <div class="small-12 medium-12 large-12 columns">
            Address: <textarea name="address"><?php echo set_value('address', $resume->address); ?></textarea>      
          </div>
        </div>
        <div class="row">
          <div class="small-6 medium-6 large-6 columns">
            City: <input type="text" name="city" value="<?php echo set_value('city', $resume->city); ?>" />
          </div>
          <div class="small-6 medium-6 large-6 columns">
            State: <input type="text" name="state" value="<?php echo set_value('state', $resume->state); ?>" />
          </div>
        </div>    
        <div class="row">
          <div class="small-12 medium-12 large-12 columns">
            Country: <input type="text" name="country" value="<?php echo set_value('country', $resume->country); ?>" />
          </div>
        </div>
        <div class="row">
          <div class="small-6 medium-6 large-6 columns">
            Landline: <input type="text" name="landline" value="<?php echo set_value('landline', $resume->landline); ?>" />      
          </div>
          <div class="small-6 medium-6 large-6 columns">
            Mobile: <input type="text" name="mobile" value="<?php echo set_value('mobile', $resume->mobile); ?>" />
          </div>
        </div>
        <div class="row">
          <div class="small-6 medium-6 large-6 columns">
            Availability: <input type="text" name="availability" value="<?php echo set_value('availability', $resume->availability); ?>" />
          </div>
          <div class="small-6 medium-6 large-6 columns">
            Expected Salary: <input type="text" name="expected_salary" value="<?php echo set_value('expected_salary', $resume->expected_salary); ?>" />
          </div>
        </div>
        <div class="row">
          <div class="small-6 medium-6 large-6 columns">
            Current Industry: <input type="text" name="current_industry" value="<?php echo set_value('current_industry', $resume->current_industry); ?>" />
          </div>
          <div class="small-6 medium-6 large-6 columns">
            Qualification: <input type="text" name="qualification" value="<?php echo set_value('qualification', $resume->qualification); ?>" />
          </div>
        </div>
        <div class="row">
          <div class="small-12 medium-12 large-12 columns">
            Summary: <textarea name="summary"><?php echo set_value('summary', $resume->summary); ?></textarea>
          </div>
        </div>
        <div class="row">
          <div class="small-6 medium-6 large-6 columns">&nbsp;</div>
          <div class="small-6 medium-6 large-6 columns"><button class="button radius small">Update</button></div>
        </div>      
      </form>
    </section>
    <section class="workHistories">
      <i class="fa fa-angle-left"></i>
      <a href="#" class="button small radius addWorkHistory">Add work history</a>
      <?php echo $this->load->view('resumes/work_histories/update', $resume, true); ?>
    </section>
    <section class="educations">
      <i class="fa fa-angle-left"></i>
      <a href="#" class="button small radius addEducation">Add education</a>
      <?php form_open('education/update'); ?>
        <input type="hidden" name="resume_id" value="<?php echo set_value('resume_id', $additionalInformation->resume_id); ?>" />
        <ul></ul>
        <button class="radius tiny">Save</button>
      </form>
    </section>
    <section class="skills">
      <i class="fa fa-angle-left"></i>
      <a href="#" class="button small radius addSkills">Add skills</a>
      <?php form_open('skill/update'); ?>
        <input type="hidden" name="resume_id" value="<?php echo set_value('resume_id', $additionalInformation->resume_id); ?>" />
        <ul></ul>
        <button class="radius tiny">Save</button>
      </form>
    </section>
    <section class="certifications">
      <i class="fa fa-angle-left"></i>
      <a href="#" class="button small radius addCertification">Add certification</a>
      <?php form_open('certification/update'); ?>
        <input type="hidden" name="resume_id" value="<?php echo set_value('resume_id', $additionalInformation->resume_id); ?>" />
        <ul></ul>
        <button class="radius tiny">Save</button>
      </form>
    </section>
    <section class="additionalInformations">
      <i class="fa fa-angle-left"></i>
      <a href="#" class="button small radius additionalInformation">Add certification</a>
      <?php echo $this->load->view('additional_informations/update', $resume, true); ?>
    </section>
  </section>
  <section>
    <a href="<?php echo site_url('resume/read'); ?>" class="button view" target="_blank">View resume</a>
    <a href="mailto:someone@somewhere.com" class="button foward">Forward resume</a>
    <a href="#" class="button download">Download resume</a>
  </section>
  <script>
    $(document).ready(function(){
      function Resume()
      {
        this.siteRef;
        this.resumeId;
        //
        this.init = function(){
          this.siteRef = '<?php echo site_url(); ?>';
          this.resumeId = '<?php echo $resume->id; ?>';
          this.setListeners();
        };
        this.removeItem = function(ulContainer, liIndex){
          ulContainer.children('li:eq' + liIndex).remove();
        };
        this.addWorkHistory = function(){
          var s = '<li></li>';
          $('.workHistories ul').append();
        };
        this.addEducation = function(){
          var s = '<li></li>';
          $('.workHistories ul').append();
        };
        this.addTextField = function(ulContainer){
          var s = '<li><input type="text" /></li>';
          ulContainer.append(s);
        };
        this.update = function(containerName, callback){
          var url = $(containerName + ' form').attr('action');
          var form =  $(containerName + ' form');
          $.ajax
          (
            {
              url: o.siteRef + url, 
              method: 'POST',
              params: form.serialize(),
              success: callback
            }
          );
        };
        this.setListeners = function(){
          var o = this;
          $('button.addWorkHistory').click(function(e){
            o.addWorkHistory();
          });
          $('button.addEducation').click(function(e){
            o.addEducation()
          });
          $('button.addSkills, button.addCertification').click(function(e){
            e.preventDefault();
            var ul = $(this).parent().children('form ul');
            o.addTextField(ul);
          });
          //
          $('section i').click(function(e){
            e.preventDefault();
            var t = $(this);
            var p = t.parent();
            p.slideToggle('slow');
            var b = t.hasClass('fa-angle-left');
            if(b)
            {
              t.removeClass('fa-angle-left');
              t.addClass('fa-angle-down');
            }
            else
            {
              t.removeClass('fa-angle-down');
              t.addClass('fa-angle-left'); 
            }
          });
          $('.resume button').click(function(e){
            e.preventDefault();
            o.update('.resume', function(response){
              console.log(response);
            });
          });
          $('.workHistories button').click(function(e){
            e.preventDefault();
            o.update('.workHistories', function(response){
              console.log(response);
            });
          });
          $('.educations button').click(function(e){
            e.preventDefault();
            o.update('.educations', function(response){
              console.log(response);
            });
          });
          $('.skills button').click(function(e){
            e.preventDefault();
            o.update('.skills form', function(response){
              console.log(response);
            });
          });
          $('.certifications button').click(function(e){
            e.preventDefault();
            o.update('.certifications', function(response){
              console.log(response);
            });
          });
          $('.additionalInformations button').click(function(e){
            e.preventDefault();
            o.update('.additionalInformations', function(response){
              console.log(response);
            });
          });
        };
      }
      new Resume().init();
    });
  </script>
</div>