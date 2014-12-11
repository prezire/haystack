<div id="resume" class="update row">
  <section>
    <div class="row">
      <div class="small-6 medium-6 large-6 columns"><h6>Resume</h6></div>
      <div class="small-6 medium-6 large-6 columns">
        <section class="right">
          <a href="<?php echo site_url('resume/read'); ?>" class="button tiny radius view" target="_blank">View</a>
          <a href="mailto:someone@somewhere.com" class="button tiny radius foward">Forward</a>
          <a href="#" class="button tiny radius download">Download</a>
        </section>
      </div>
    </div>
    <hr />
    <section class="resume">
      <div class="row">
        <div class="small-11 medium-11 large-11 columns"><h5>Basic Profile (Note: Disabled items are directly linked to your profile)</h5></div>
        <div class="small-1 medium-1 large-1 columns"><i class="fa fa-angle-left right"></i></div>
      </div>
      <form>
        <input type="hidden" name="id" value="<?php echo set_value('id', $resume->resume_id); ?>" />  
        <div class="row">
          <div class="small-12 medium-12 large-12 columns">
            Full Name <input type="text" name="full_name" value="<?php echo set_value('full_name', $resume->full_name); ?>" disabled />      
          </div>
        </div>
        <div class="row">
          <div class="small-12 medium-12 large-12 columns">
            Headline <input type="text" name="headline" value="<?php echo set_value('headline', $resume->headline); ?>" />      
          </div>
        </div>
        <div class="row">
          <div class="small-12 medium-12 large-12 columns">
            Address <textarea name="address" disabled><?php echo set_value('address', $resume->address); ?></textarea>      
          </div>
        </div>
        <div class="row">
          <div class="small-6 medium-6 large-6 columns">
            City <input type="text" name="city" value="<?php echo set_value('city', $resume->city); ?>" disabled />
          </div>
          <div class="small-6 medium-6 large-6 columns">
            State <input type="text" name="state" value="<?php echo set_value('state', $resume->state); ?>" disabled />
          </div>
        </div>    
        <div class="row">
          <div class="small-12 medium-12 large-12 columns">
            Country <input type="text" name="country" value="<?php echo set_value('country', $resume->country); ?>" disabled />
          </div>
        </div>
        <div class="row">
          <div class="small-6 medium-6 large-6 columns">
            Landline <input type="text" name="landline" value="<?php echo set_value('landline', $resume->landline); ?>" disabled />      
          </div>
          <div class="small-6 medium-6 large-6 columns">
            Mobile <input type="text" name="mobile" value="<?php echo set_value('mobile', $resume->mobile); ?>" disabled />
          </div>
        </div>
        <div class="row">
          <div class="small-6 medium-6 large-6 columns">
            Availability <input type="text" name="availability" value="<?php echo set_value('availability', $resume->availability); ?>" />
          </div>
          <div class="small-6 medium-6 large-6 columns">
            Expected Salary <input type="text" name="expected_salary" value="<?php echo set_value('expected_salary', $resume->expected_salary); ?>" />
          </div>
        </div>
        <div class="row">
          <div class="small-6 medium-6 large-6 columns">
            Current Industry <input type="text" name="current_industry" value="<?php echo set_value('current_industry', $resume->current_industry); ?>" disabled />
          </div>
          <div class="small-6 medium-6 large-6 columns">
            Qualification <input type="text" name="qualification" value="<?php echo set_value('qualification', $resume->qualification); ?>" />
          </div>
        </div>
        <div class="row">
          <div class="small-12 medium-12 large-12 columns">
            Summary <textarea name="summary"><?php echo set_value('summary', $resume->summary); ?></textarea>
          </div>
        </div>
        <div class="row">
          <div class="small-12 medium-12 large-12 columns"><button class="button radius small">Update</button></div>
        </div>      
      </form>
    </section>
    <hr />
    <section class="workHistories">
      <div class="row">
        <div class="small-3 medium-3 large-6 columns"><h5>Work History</h5></div>
        <div class="small-3 medium-3 large-6 columns"><i class="fa fa-angle-left right"></i></div>
      </div>
      <?php echo form_open('workhistory/update'); ?>
        <div class="row">
          <div class="small-12 medium-12 large-12 columns"><a href="#" class="button small radius addWorkHistory right">Add work history</a></div>
        </div>
        <input type="hidden" name="resume_id" value="<?php echo set_value('resume_id', $resume->resume_id); ?>" />
        <ul></ul>
        <div class="row">
          <div class="small-12 medium-12 large-12 columns"><button class="radius tiny">Save</button></div>
        </div>
      </form>
    </section>
    <hr />
    <section class="educations">
      <div class="row">
        <div class="small-3 medium-3 large-6 columns"><h5>Education</h5></div>
        <div class="small-3 medium-3 large-6 columns"><i class="fa fa-angle-left right"></i></div>
      </div>
      <?php echo form_open('education/update'); ?>
        <div class="row">
          <div class="small-12 medium-12 large-12 columns"><a href="#" class="button small radius addEducation right">Add education</a></div>
        </div>
        <input type="hidden" name="resume_id" value="<?php echo set_value('resume_id', $resume->resume_id); ?>" />
        <ul></ul>
        <div class="row">
          <div class="small-12 medium-12 large-12 columns"><button class="radius tiny">Save</button></div>
        </div>
      </form>
    </section>
    <hr />
    <section class="skills">
      <div class="row">
        <div class="small-3 medium-3 large-6 columns"><h5>Skills</h5></div>
        <div class="small-3 medium-3 large-6 columns"><i class="fa fa-angle-left right"></i></div>
      </div>
      <?php echo form_open('skill/update'); ?>
        <div class="row">
          <div class="small-12 medium-12 large-12 columns"><a href="#" class="button small radius addSkills right">Add skills</a></div>
        </div>
        <input type="hidden" name="resume_id" value="<?php echo set_value('resume_id', $resume->resume_id); ?>" />
        <ul></ul>
        <div class="row">
          <div class="small-12 medium-12 large-12 columns"><button class="radius tiny">Save</button></div>
        </div>
      </form>
    </section>
    <hr />
    <section class="certifications">
      <div class="row">
        <div class="small-3 medium-3 large-6 columns"><h5>Certifications</h5></div>
        <div class="small-3 medium-3 large-1 columns"><i class="fa fa-angle-left right"></i></div>
      </div>
      <?php echo form_open('certification/update'); ?>
        <div class="row">
          <div class="small-12 medium-12 large-12 columns"><a href="#" class="button small radius addCertification right">Add certification</a></div>
        </div>
        <input type="hidden" name="resume_id" value="<?php echo set_value('resume_id', $resume->resume_id); ?>" />
        <ul></ul>
        <div class="row">
          <div class="small-12 medium-12 large-12 columns"><button class="radius tiny">Save</button></div>
        </div>
      </form>
    </section>
    <hr />
    <section class="additionalInformations">
      <div class="row">
        <div class="small-10 medium-10 large-10 columns"><h5>Additional Information</h5></div>
        <div class="small-2 medium-2 large-2 columns"><i class="fa fa-angle-left right"></i></div>
      </div>
      <?php echo $this->load->view('resumes/additional_informations/update', array('resume' => $resume, 'additional_informations' => $additional_informations), true); ?>
    </section>
  </section>
  <script>
    $(document).ready(function(){
      function Resume()
      {
        this.siteRef;
        this.resumeId;
        this.sWorkHistoryUi;
        this.sEduUi;
        this.sCloseUi;
        //
        this.init = function(){
          this.siteRef = '<?php echo site_url(); ?>';
          this.resumeId = '<?php echo $resume->id; ?>';
          this.sCloseUi = '<a href="#" class="close">&times;</a>';
          this.sEduUi = '<?php echo $this->load->view('resumes/educations/create', null, true); ?>';
          this.sWorkHistoryUi = '<?php echo $this->load->view('resumes/work_histories/create', null, true); ?>';
          //
          $('form').hide();
          this.setListeners();
        };
        this.removeItem = function(ulContainer, liIndex){
          ulContainer.children('li:eq' + liIndex).remove();
        };
        this.addWorkHistory = function(){
          var s = '<li>' + this.sWorkHistoryUi + this.sCloseUi + '</li>';
          $('.workHistories ul').append(s);
        };
        this.addEducation = function(){
          var s = '<li>' + this.sEduUi + this.sCloseUi + '</li>';
          $('.educations ul').append(s);
        };
        this.addTextField = function(ulContainer){
          var s = '<li><input type="text" />' + this.sCloseUi + '</li>';
          console.log(s, ulContainer);
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
          $('li .close').click(function(e){
            e.preventDefault();
            var t = $(this);
            var p = t.parent();
            o.removeItem(p.parent(), p.index());
          });
          $('.button.addWorkHistory').click(function(e){
            o.addWorkHistory();
          });
          $('.button.addEducation').click(function(e){
            o.addEducation()
          });
          $('.button.addSkills, .button.addCertification').click(function(e){
            e.preventDefault();
            var ul = $(this).parent().parent().parent().parent().find('form ul');
            o.addTextField(ul);
          });
          //
          $('section i').click(function(e){
            e.preventDefault();
            var t = $(this);
            var p = t.parent().parent().parent().find('form');
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