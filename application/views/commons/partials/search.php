<section id="search">
    <?php echo form_open('main/search'); ?>
    <div class="large-6 columns">
      <?php echo form_dropdown('country', getCountries()); ?>
    </div>
    <div class="large-6 columns">
      <div class="row collapse">
        <div class="small-10 columns">
          <input type="text" name="keywords" placeholder="Keywords">
        </div>
        <div class="small-2 columns">
          <a href="#" class="button postfix">
            <i class="fa fa-search"></i>
          </a>
        </div>
      </div>
    </div>
    </form>
</section>