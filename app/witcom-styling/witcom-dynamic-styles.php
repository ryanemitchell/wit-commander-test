<?php

	/**
	 * Filename: witcom-dynamic-styles.php
	 * Description:
	 * Author:  Ryan E. Mitchell
	 */

    use ScssPhp\ScssPhp\Compiler;

function get_witcom_scss(){
    //buffer php scss file
    ob_start();
    include 'witcom-scss.php';
    $witcom_css = ob_get_clean();

    return $witcom_css;
}

    add_action('wp_footer','witcom_dynamic_styles',20);
    add_action('admin_footer','witcom_dynamic_styles',20);

    function witcom_dynamic_styles() {
        $witcom_scss = get_witcom_scss();

        $scss = new Compiler();

// Option to crunch SCSS
        if( get_field('crunch_witcom_scss','option') ):
                    $scss->setFormatter('ScssPhp\ScssPhp\Formatter\Crunched');
                else:
            $scss->setFormatter('ScssPhp\ScssPhp\Formatter\Expanded');
       endif;

        if ( get_field('witcom_font_import','option') ) {
            $witcom_witcom_font_import = get_field('witcom_font_import','option');
        } else {
            $witcom_witcom_font_import = '';
        }



        echo ('<style id="witcom_css">');

        if (!empty($witcom_witcom_font_import )):
            echo $witcom_witcom_font_import;
        endif;


        $compiledCssCode = $scss->compile( $witcom_scss);

        echo ('@import url("https://use.typekit.net/jws5bmw.css");');
        echo $compiledCssCode;
        echo ('</style>');
    }
