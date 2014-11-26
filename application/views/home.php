<section id="home" class="index row">
  
  <?php echo $this->load->view('commons/partials/search', null, true); ?>
  
  
  <div class="row">
    <div class="listing panel">
      <div class="row">
        <a href="#" class="large-2 columns button small radius btnShowListing">Listing</a>
      </div>
      <br />
      <div class="row expandable">
        <div class="large-12 columns">
          <dl class="tabs" data-tab>
            <dd class="active"><a href="#applicantsSummary">Applicants</a></dd>
            <dd><a href="#internshipsSummary">Internships</a></dd>
          </dl>
          <div class="tabs-content">
            <?php 
                $applsSummary = $groupedSummary['applicants'];
                $intsSummary = $groupedSummary['internships'];
            ?>
            <div class="content active" id="applicantsSummary">
              <div class="row">
                <div class="large-12 columns">Job Titles</div>
              </div>
              <ul>
                <?php 
                  foreach($applsSummary as $a)
                  {
                    $jt = $a->job_title;
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
             <div class="row">
                <div class="large-12 columns">Industries</div>
              </div>
              <ul>
                <?php 
                  foreach($intsSummary as $i)
                  {
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
    </div>
  </div>
  
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
              <?php echo $a->job_title?>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
  <?php } ?>
  
</div>