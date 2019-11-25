<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
	<fieldset>
		<label for="search-input" aria-label="Seach"></labe>
			<input type="search" id="search-input" class="search-field" placeholder="TYPE AND HIT ENTER ..." value="<?= esc_attr(get_search_query()); ?>" name="s" title="Search for:" />
		</label>
	</fieldset>
</form>