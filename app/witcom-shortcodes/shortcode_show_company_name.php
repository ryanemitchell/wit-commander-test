<?php
    /* shortcode to display company name */
    function witsage_show_company_name_shortcode() {
    ob_start(); //start buffer to output after the_content()
        if( get_field('business_name', 'option') ): ?>
            <span class="business-name">
                <?php         the_field('business_name', 'option'); ?>
            </span>
        <?php
        endif;
return ob_get_clean(); // stop buffer
	}
	add_shortcode('show_company_name', 'witsage_show_company_name_shortcode');
?>
