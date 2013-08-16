<form role="search" method="get" action="<?php echo home_url('/'); ?>">
	<div class="row collapse">
    	<div class="large-9 columns">
        	<input type="text" name="s" value="<?php if (is_search()) { echo get_search_query(); } ?>" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>">
		</div>
		<div class="large-3 columns">
			<button type="submit" class="button prefix"><?php _e('Search', 'roots'); ?></button>
    	</div>
	</div>
</form>

