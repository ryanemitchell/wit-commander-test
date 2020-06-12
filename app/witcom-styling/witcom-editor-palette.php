<?php






    add_action( 'after_setup_theme', function() {
//        add_theme_support('disable-custom-colors');
//        add_theme_support('disable-custom-gradients');


        //    Set variables and default values if necessary
        if ( get_field('witcom_color_site_black','option') ) {
            $witcom_color_site_black = get_field('witcom_color_site_black','option');
        } else {
            $witcom_color_site_black = '#000000';
        }

        if ( get_field('witcom_color_site_white','option') ) {
            $witcom_color_site_white = get_field('witcom_color_site_white','option');
        } else {
            $witcom_color_site_white = '#FFFFFF';
        }


            if( have_rows('witcom_colors','option') ):

            $color_array = array();



            while( have_rows('witcom_colors','option') ): the_row();

                $color = get_sub_field('color');
                $color_name = get_sub_field('color_name');
//                replace spaces in color name with underscore for slug
                $slug = str_replace(' ', '_', $color_name);

                $add_color = array(
                    'name'  => __( $color_name, 'witcom' ),
                    'slug'  => $slug,
                    'color' => $color,
                );

                array_push($color_array, $add_color);



            endwhile;

//            add site black
                $add_color = array(
                    'name'  => __( 'site-black', 'witcom' ),
                    'slug'  => 'site-black',
                    'color' => $witcom_color_site_black,
                );

                array_push($color_array, $add_color);

//            add site white
                $add_color = array(
                    'name'  => __( 'site-white', 'witcom' ),
                    'slug'  => 'site-white',
                    'color' => $witcom_color_site_white,
                );

                array_push($color_array, $add_color);

            add_theme_support(
                'editor-color-palette',
                $color_array
            );
             endif;

//        add_theme_support(
//            'editor-gradient-presets',
//            array(
//                array(
//                    'name'     => __( 'Vivid cyan blue to vivid purple', 'themeLangDomain' ),
//                    'gradient' => 'linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)',
//                    'slug'     => 'vivid-cyan-blue-to-vivid-purple'
//                ),
//                array(
//                    'name'     => __( 'Vivid green cyan to vivid cyan blue', 'themeLangDomain' ),
//                    'gradient' => 'linear-gradient(135deg,rgba(0,208,132,1) 0%,rgba(6,147,227,1) 100%)',
//                    'slug'     =>  'vivid-green-cyan-to-vivid-cyan-blue',
//                ),
//                array(
//                    'name'     => __( 'Light green cyan to vivid green cyan', 'themeLangDomain' ),
//                    'gradient' => 'linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%)',
//                    'slug'     => 'light-green-cyan-to-vivid-green-cyan',
//                ),
//                array(
//                    'name'     => __( 'Luminous vivid amber to luminous vivid orange', 'themeLangDomain' ),
//                    'gradient' => 'linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%)',
//                    'slug'     => 'luminous-vivid-amber-to-luminous-vivid-orange',
//                ),
//                array(
//                    'name'     => __( 'Luminous vivid orange to vivid red', 'themeLangDomain' ),
//                    'gradient' => 'linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%)',
//                    'slug'     => 'luminous-vivid-orange-to-vivid-red',
//                ),
//            )
//        );
    }, 50 );




