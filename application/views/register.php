<section id="register">
  <h4>Register</h4>
  <?php echo validation_errors(); ?>
  <dl class="tabs" data-tab data-options="deep_linking:true">
  <dd class="active"><a href="#applicant">Applicant</a></dd>
  <dd><a href="#employer">Employer</a></dd>
  <dd><a href="#subscriber">Subscriber</a></dd>
</dl>
<div class="tabs-content">
  <div class="content active" id="applicant">
    <?php echo $this->load->view('applicants/create', null, true); ?>
  </div>
  <div class="content" id="employer">
    <?php echo $this->load->view('employers/create', null, true); ?>
  </div>
  <div class="content" id="subscriber">
    <div class="row">
      <div class="large-12 columns">
        A subscriber is somebody who can manage their profile and comment on an applicant's performance. Examples are members of academe, company managers,
      HR personnel or an applican'ts colleage.
      </div>
    </div>
    <?php echo $this->load->view('subscribers/create', null, true); ?>
  </div>
</div>
</section>