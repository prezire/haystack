<div id="home" class="index">
  
  <?php echo $this->load->view('commons/partials/search', null, true); ?>
  
  <div class="row expandable">
    <div class="large-12 columns">
      <dl class="tabs" data-tab>
        <dd class="active"><a href="#applicantsSummary">For Employers</a></dd>
        <dd><a href="#internshipsSummary">For Applicants</a></dd>
      </dl>
      <div class="tabs-content">
        <?php 
            $applsSummary = $groupedSummary['applicants'];
            $intsSummary = $groupedSummary['internships'];
        ?>
        <div class="content active" id="applicantsSummary">
          <h5>Applicant Job Titles</h5>
          <ul>
            <?php 
              foreach($applsSummary as $a){
                $jt = $a->current_position_title;
            ?>
            <li>
              <a href="<?php echo site_url('applicant/readByJobTitle/' . $jt); ?>">
                <?php echo $jt . ' (' . $a->count . ')'; ?>
              </a>
            </li>
            <?php
              }
            ?>
          </ul>
        </div>
        <div class="content" id="internshipsSummary">
          <h5>Internship Industries</h5>
          <ul>
            <?php 
              foreach($intsSummary as $i){
                $ind = $i->industry;
            ?>
            <li>
              <?php $encodedUrl = str_replace('/', 'haystackescapedslash', $ind); ?>
              <a href="<?php echo site_url('internship/readByIndustry/' . $encodedUrl); ?>">
                <?php echo $ind . ' (' . $i->count . ')'; ?>
              </a>
            </li>
            <?php 
              }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="small-12 medium-12 large-12 columns">
      <h4>Applicants</h4>
    </div>
  </div>

  <div class="row works">
    <?php foreach($applicants as $a){ ?>
      <div class="work">
        <a href="<?php echo site_url('applicant/readByUserId/' . $a->user_id); ?>">
          <?php 
            if(empty($a->image_path))
            {
              $img = base_url('public/img/avatar.jpg');
            }
            else
            {
              $img = base_url('public/uploads/' . $a->image_path);
            }
          ?>
          <img src="<?php echo $img; ?>" class="media" alt=""/>
          <div class="caption">
            <div class="work_title">
              <h1><?php echo $a->full_name?></h1>
              <div>
                <?php echo $a->current_position_title?>
              </div>
            </div>
          </div>
        </a>
      </div>
    <?php } ?>
  </div>

<div class="row features">
    <div class="small-12 medium-4 large-4 columns">
      <h5>Organizer</h5>
      <img src="<?php echo base_url('public/img/organizer.jpg'); ?>" />
      <hr />
      <div>
        Manage your applications, comments and relevent information
        from a single site. For employers, vacancies, 
        track applied posts, comments / feedbacks and sent
        messages. For applicants, track which internships you've
        applied, manage comments and easily search for opportunities.
      </div>
      <a href="#" class="button radius tiny">Read more</a>
    </div>
    <div class="small-12 medium-4 large-4 columns">
      <h5>Analytics</h5>
      <img src="<?php echo base_url('public/img/analytics.jpg'); ?>" />
      <hr />
      <div>
        Employers need all the information when it comes to
        their posts' effectiveness. Filter by days according
        to applicant profiles, demographics and searched keywords.
      </div>
      <a href="#" class="button radius tiny">Read more</a>
    </div>
    <div class="small-12 medium-4 large-4 columns">
      <h5>Multiple Resumes</h5>
      <img src="<?php echo base_url('public/img/resume.jpg'); ?>" />
      <hr />
      <div>
        At times, applicants need to apply multiple roles.
        It's imperitave to have multiple resumes with relavant
        skills to cater such roles without constantly changing 
        your resume.
      </div>
      <a href="#" class="button radius tiny">Read more</a>
    </div>
  </div>

</div>



