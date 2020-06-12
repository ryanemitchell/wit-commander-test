<?php

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Site General Settings',
        'menu_title' => 'Site Settings',
        'menu_slug'  => 'site-general-settings',
        'capability' => 'edit_posts',
        'redirect'   => true,
        'icon_url'   => plugin_dir_url( __FILE__ ). "/icons/wit-digital-star.png",
        // Add this line and replace the second inverted commas with class of the icon you like
        'position'   => 1,
        'show_in_graphql' => true
    ));

    acf_add_options_sub_page(array(
        'page_title'  => 'Business Information',
        'menu_title'  => 'Business Information',
        'parent_slug' => 'site-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'  => 'Social Media',
        'menu_title'  => 'Social Media',
        'parent_slug' => 'site-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'  => 'Design Options',
        'menu_title'  => 'Design Options',
        'parent_slug' => 'site-general-settings',
        'show_in_graphql' => true
    ));

//    acf_add_options_sub_page(array(
//        'page_title'  => 'Blog Settings',
//        'menu_title'  => 'Blog Settings',
//        'parent_slug' => 'site-general-settings',
//    ));
//
//    acf_add_options_sub_page(array(
//        'page_title'  => 'Not Found Page',
//        'menu_title'  => 'Not Found Page',
//        'parent_slug' => 'site-general-settings',
//    ));

    acf_add_options_sub_page(array(
        'page_title'  => 'For Developers',
        'menu_title'  => 'Developers',
        'parent_slug' => 'site-general-settings',
        'show_in_graphql' => true
    ));


    acf_add_options_sub_page(array(
        'page_title'  => 'Insert Scripts',
        'menu_title'  => 'Insert Scripts',
        'parent_slug' => 'site-general-settings',
    ));
}
