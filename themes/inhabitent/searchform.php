<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
	<fieldset>
		<input type="search" placeholder="TYPE AND HIT ENTER ..." class="search-field" value="<?= esc_attr(get_search_query()); ?>" name="s" title="Search for:" />
	</fieldset>
</form>