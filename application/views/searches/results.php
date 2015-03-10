<div id="search" class="results">
	<h4>Search Results</h4>
	<p>Results for <i><?php echo $keywords; ?></i></p>
	<a href="<?php echo site_url('search'); ?>" class="button tiny">
		Search again
	</a>
	<div class="row">
		<?php 
			$bEmpty = true;	
			foreach($results as $items)
			{
				$bEmpty = count($items) < 1;
				if($bEmpty) break;
				foreach($items as $i)
				{
		?>
					<div class="result small-12 medium-12 large-12 columns">
						<a href="<?php echo $i['href']; ?>">
							<?php echo $i['title']; ?>
						</a>
						<div class="description">
							<?php echo $i['description']; ?>
						</div>
					</div>
				<?php 
				}
			}  
		?>
	</div>
	<?php if(!$bEmpty){ ?>
	<a href="<?php echo site_url('search'); ?>" class="button tiny">
		Search again
	</a>
	<?php } ?>
</div>