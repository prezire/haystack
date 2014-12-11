<input type="hidden" name="id" value="<?php echo set_value('id', $workHistory->id); ?>" />
Position: <input type="text" name="position" value="<?php echo set_value('position', $workHistory->position); ?>" />
Company: <input type="text" name="company" value="<?php echo set_value('company', $workHistory->company); ?>" />
Location: <input type="text" name="location" value="<?php echo set_value('location', $workHistory->location); ?>" />
Summary: <textarea name="summary"><?php echo set_value('summary', $workHistory->summary); ?></textarea>
From: <input type="text" name="from" value="<?php echo set_value('from', $workHistory->from); ?>" />
To: <input type="text" name="to" value="<?php echo set_value('to', $workHistory->to); ?>" />
I currently work here: <input type="checkbox" name="is_current_work" checked="<?php echo set_value('is_current_work',  $workHistory->is_current_work); ?>" />