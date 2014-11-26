<div id="blog" class="read row">
      <div class="row">
        <h5 class="large-12 columns">
          <span class="header">
            <?php echo $blog->name; ?>
          </span> - <?php echo $blog->publish_state; ?>
        </h5>
      </div>
          
       <div class="row">
        <div class="large-12 columns">
          <?php echo $blog->content; ?>      
         </div>
       </div>
      
  </form>
</div>