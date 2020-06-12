<?php
	/* shortcode to display phone number
	Number pulls from ACF Field and is formatted with /witsage_library/format_phone.php
	*/

	function witsage_show_phone_number_shortcode( $atts ) {

		ob_start(); //start buffer to output after the_content()
	         $business_primary_phone = get_field( 'business_primary_phone', 'option' ); ?>
            <a href="tel:1<?php echo $business_primary_phone; ?>" title="<?php echo format_phone( $business_primary_phone ); ?>" class="phone_number">
                <?php echo format_phone( $business_primary_phone ); ?>
            </a>


		<?php
		return ob_get_clean(); // stop buffer
	}

	add_shortcode( 'show_phone_number', 'witsage_show_phone_number_shortcode' );



function format_phone($phone) {
$phone = preg_replace("/[^0-9]/", "", $phone);


if(strlen($phone) == 7)
        return preg_replace("/([0-9]{3})([0-9]{4})/", "$1-$2", $phone);
    elseif(strlen($phone) == 10)

    if( get_field('business_phone_number_format','option') ) {
        $business_phone_number_format = get_field( 'business_phone_number_format', 'option' );

        switch ( $business_phone_number_format ) {
            case "domestic":
                return preg_replace( "/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $phone );
                break;
            case "usdialed":
                return preg_replace( "/([0-9]{3})([0-9]{3})([0-9]{4})/", "$1-$2-$3", $phone );
                break;
            case "international":
                return preg_replace( "/([0-9]{3})([0-9]{3})([0-9]{4})/", "$1 $2 $3", $phone );
                break;
            default:
                return $phone;
        }

    }





else
//return $phone;
echo ('bacon');
}
