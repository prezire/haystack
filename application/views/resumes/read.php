<div id="resume" class="read row">
  <h4></h4>
            
      Id: <?php echo $resume->id; ?>      
          
      Full Name: <?php echo $resume->full_name; ?>      
          
      Headline: <?php echo $resume->headline; ?>      
          
      Address: <?php echo $resume->address; ?>      
          
      City: <?php echo $resume->city; ?>      
          
      State: <?php echo $resume->state; ?>      
          
      Country: <?php echo $resume->country; ?>      
          
      Landline: <?php echo $resume->landline; ?>      
          
      Mobile: <?php echo $resume->mobile; ?>      
          
      Availability: <?php echo $resume->availability; ?>      
          
      Expected Salary: <?php echo $resume->expected_salary; ?>      
          
      Current Industry: <?php echo $resume->current_industry; ?>      
          
      Qualification: <?php echo $resume->qualification; ?>      
          
      Summary: <?php echo $resume->summary; ?>      
        <a href="<?php echo site_url('resume'); ?>" class="button radius small alert">Back</a>
    <a href="<?php echo site_url('resume/update'); ?>" class="button radius small">Update</a>
  </form>
</div>