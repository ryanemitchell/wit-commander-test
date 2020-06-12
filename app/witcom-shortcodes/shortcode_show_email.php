<?php
    /* shortcode to display email */
    function witsage_show_email_shortcode() {
    ob_start(); //start buffer to output after the_content()
        if( get_field('primary_email', 'option') ): ?>
                <?php the_field('primary_email', 'option'); ?>
        <?php
        endif;
return ob_get_clean(); // stop buffer
	}
	add_shortcode('show_email', 'witsage_show_email_shortcode');
?>
