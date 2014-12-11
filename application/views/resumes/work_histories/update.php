<div>
	<input type="hidden" name="id" value="<?php echo set_value('id', $workHistory->id); ?>" />
	<div class="row">
	  <div class="small-6 medium-6 large-6 columns">
	  	Position <input type="text" name="position" value="<?php echo set_value('position', $workHistory->position); ?>" />
	  </div>
	  <div class="small-6 medium-6 large-6 columns">
	  	Company <input type="text" name="company" value="<?php echo set_value('company', $workHistory->company); ?>" />
	  </div>
	</div>
	
	<div class="row">
	  <div class="small-12 medium-12 large-12 columns">
	  	Location <input type="text" name="location" value="<?php echo set_value('location', $workHistory->location); ?>" />
	  </div>
	</div>
	
	<div class="row">
	  <div class="small-12 medium-12 large-12 columns">
	  	Summary <textarea name="summary"><?php echo set_value('summary', $workHistory->summary); ?></textarea>
	  </div>
	</div>
	
	<div class="row">
	  <div class="small-6 medium-6 large-6 columns">
	  	From <input type="text" name="from" value="<?php echo set_value('from', $workHistory->from); ?>" />
	  </div>
	  <div class="small-6 medium-6 large-6 columns">
	  	To <input type="text" name="to" value="<?php echo set_value('to', $workHistory->to); ?>" />
	  </div>
	</div>
	
	<div class="row">
	  <div class="small-12 medium-12 large-12 columns">
	  	<input type="checkbox" name="is_current_work" checked="<?php echo set_value('is_current_work',  $workHistory->is_current_work); ?>" />I currently work here 
	  </div>
	</div>
	
</div>