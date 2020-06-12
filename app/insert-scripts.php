<?php

	/**
	 * Filename: insert-scripts.php
	 * Description:
	 * Author:  Ryan E. Mitchell
	 */

//	Additional Header Code

    if( get_field('additional_header_code','option') ):
        function witcom_insertScript_head() {
            the_field('additional_header_code','option');
        }
        add_action( 'wp_head', 'witcom_insertScript_head', 999 );
    endif;

//	Additional Body Code
    if( get_field('post_opening_body_code','option') ):
        function witcom_insertScript_body() {
            the_field('post_opening_body_code','option');
        }
        add_action( 'wp_body_open', 'witcom_insertScript_body', 999 );
    endif;

//	Additional footer Code
    if( get_field('additional_footer_code','option') ):
        function witcom_insertScript_body() {
            the_field('additional_footer_code','option');
        }
        add_action( 'wp_footer', 'additional_footer_code', 999 );
    endif;



