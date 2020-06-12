<?php
    /* shortcode to display company address */
    function witsage_show_business_address_shortcode() {
    ob_start(); //start buffer to output after the_content()
    ?>

        <address class="business-address">

            <?php if( get_field('google_maps_link', 'option') ): ?>
            <a href="<?php the_field ('google_maps_link', 'option') ?>" class="address" target="_blank">
            <?php endif; ?>

            <?php if( get_field('business_address_line1','option') ): ?>
            	<span class="business_address_line1"><?php the_field('business_address_line1', 'option'); ?></span>
            <?php endif; ?>

            <?php if( get_field('business_address_line2','option') ): ?>
            	<span class="business_address_line2"><?php the_field('business_address_line2', 'option'); ?></span>
            <?php endif; ?>
            <?php if( get_field('business_city','option') ): ?>
            	<span class="business_city"><?php the_field('business_city', 'option'); ?>,</span>
            <?php endif; ?>

            <?php if( get_field('business_state','option') ): ?>
            	<span class="business_state"><?php the_field('business_state', 'option'); ?></span>
            <?php endif; ?>

            <?php if( get_field('business_zip_code','option') ): ?>
            	<span class="business_zip_code"><?php the_field('business_zip_code', 'option'); ?></span>
            <?php endif; ?>

	            <?php if( get_field('google_maps_link', 'option') ): ?>
             </a>
		            <?php endif; ?>

        </address>


<?php
		return ob_get_clean(); // stop buffer
	}
	add_shortcode('show_business_address', 'witsage_show_business_address_shortcode');
?>
