<form role="search" method="get" class="search-form" action="<?php echo site_url();?>">
	<button type="submit" class="search-submit"><i class="dashicons dashicons-search"></i></button>
	<label>
		<span class="screen-reader-text"><?php printf( __( 'Search for:', 'earthpro' )); ?></span>
		<input type="search" class="search-field" placeholder="Search and hit enter" value="" name="s" title="Search for:">
	</label>
</form>