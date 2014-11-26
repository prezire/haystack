<section id="contact" class="row">
	<section id="map"></section><!-- end main/map -->
  <section class="about">
    <div class="vcard">
      <h4>About</h4>
      <div class="large-2 columns">Address:</div><div class="large-10 columns">addr</div>
      <div class="large-2 columns">Landline:</div><div class="large-10 columns">land</div>
      <div class="large-2 columns">Mobile:</div><div class="large-10 columns">mob</div>
      <div class="large-2 columns">Fax:</div><div class="large-10 columns">fx</div>
    </div>
  <section class="contact">
    <h4>Contact Us</h4>
    <?php 
      echo validation_errors();
      echo form_open('main/contact');
    ?>
      <div class="large-2 columns">Full Name: *</div><div class="large-10 columns"><input type="text" name="full_name" /></div>
      <div class="large-2 columns">Email: *</div><div class="large-10 columns"><input type="text" name="email" /></div>
      <div class="large-2 columns">Topic: *</div><div class="large-10 columns"><input type="text" name="title" /></div>
      <div class="large-2 columns">Message: *</div><div class="large-10 columns"><textarea name="message"></textarea></div>
      <div class="large-2 columns">&nbsp;</div><div class="large-10 columns"><button>Send</button></div>
    </form>
  </section>
  <ul class="social clearfix large-12 columns">
    <li><a href="#" class="fb" data-title="Facebook"></a></li>
    <li><a href="#" class="google" data-title="Google +"></a></li>
    <li><a href="#" class="behance" data-title="Behance"></a></li>
    <!--<li><a href="#" class="twitter" data-title="Twitter"></a></li>
    <li><a href="#" class="dribble" data-title="Dribble"></a></li>-->
    <li><a href="#" class="rss" data-title="RSS"></a></li>
  </ul><!-- end social -->
</section>