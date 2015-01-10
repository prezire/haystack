<section id="contact" class="row">
  <div class="row">
    <div class="small-12 medium-12 large-12 columns">
      <h4>Contact Us</h4>
    </div>
  </div>

  <div class="row">
    <div class="small-12 medium-12 large-12 columns">
      <?php
        echo $this->load->view
        (
        'commons/partials/errors',
        isset($error) ? array('error' => $error) : null,
        true
        );
      ?>
    </div>
  </div>

  <?php echo $this->load->view('commons/partials/success', null, true); ?>

  <div class="row">
    <?php echo form_open('main/contact'); ?>
      <div class="large-2 columns">
        Full Name:*
      </div>
      <div class="large-10 columns">
        <input type="text" name="full_name" value="<?php echo set_value('full_name'); ?>" />
      </div>
      <div class="large-2 columns">
        Email:*
      </div>
      <div class="large-10 columns">
        <input type="text" name="email" value="<?php echo set_value('email'); ?>" />
      </div>
      <div class="large-2 columns">
        Topic:*
      </div>
      <div class="large-10 columns">
        <input type="text" name="topic" value="<?php echo set_value('topic'); ?>" />
      </div>
      <div class="large-2 columns">
        Message:*
      </div>
      <div class="large-10 columns">
        <textarea name="message"><?php echo set_value('message'); ?></textarea>
      </div>
      <div class="large-2 columns">&nbsp;</div><div class="large-10 columns"><button class="tiny radius">Send</button></div>
    </form>
</div>

<div class="row">
  <div class="small-12 medium-2 large-2 columns">&nbsp;</div>
  <div class="small-12 medium-10 large-10 columns">
    <ul class="social clearfix">
      <li><a href="#" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
      <li><a href="#" target="_blank"><i class="fa fa-google-plus-square"></i></a></li>
      <li><a href="#" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
      <li><a href="#" target="_blank"><i class="fa fa-rss-square"></i></a></li>
    </ul>
  </div>
</div>
</section>