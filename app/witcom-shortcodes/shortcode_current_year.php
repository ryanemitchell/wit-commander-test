<?php
	/* shortcode for the current year */
	function year_shortcode() {
		$year = date('Y');
		return $year;
	}
	add_shortcode('current_year', 'year_shortcode');
?>
