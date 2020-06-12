<?php

    /**
     * Filename: witcom-app.php
     * Description: Main Application file for Wit Commander plugin
     * Author: ryan@witdelivers.com
     */

//namespace witcom;

// Include ACF Field Groups
foreach (glob(plugin_dir_path(__FILE__) . "acf-field-groups/*.php") as $file) {
    include_once $file;
}

// Include ACF Options Pages
foreach (glob(plugin_dir_path(__FILE__) . "acf-options-pages/*.php") as $file) {
    include_once $file;
}

// Include Shortcodes - Comment out and and add individual files if necessary.
foreach (glob(plugin_dir_path(__FILE__) . "witcom-shortcodes/*.php") as $file) {
    include_once $file;
}

// Include Widgets
foreach (glob(plugin_dir_path(__FILE__) . "witcom-widgets/*.php") as $file) {
    include_once $file;
}

// Include Acf Blocks
foreach (glob(plugin_dir_path(__FILE__) . "acf-blocks/**/index.php") as $file) {
    include_once $file;
}


    include_once plugin_dir_path(__FILE__) . "insert-scripts.php";

// Include Witcom Styling
include_once plugin_dir_path(__FILE__) . "witcom-styling/witcom-dynamic-styles.php";

include_once plugin_dir_path(__FILE__) . "witcom-styling/witcom-editor-palette.php";

//add_theme_support( 'editor-color-palette', array() );


