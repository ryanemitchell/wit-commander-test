<?php

    /*
    Plugin Name: Wit Commander 10
    Plugin URI: https://witdelivers.com
    Description: WordPress plugin that provides base functionality for use with Wit Digital themes and plugins
    Version: 0.0.1
    Author: Ryan E. Mitchell
    Author URI: https://witdelivers.com
    Text Domain: witcom
    */

//    namespace witcom;
    require __DIR__ . '/vendor/autoload.php';
    /**
     * Helper function for prettying up errors taken from Sage
     *
     * @param string $message
     * @param string $subtitle
     * @param string $title
     */

    $witcom_error = function ($message, $subtitle = '', $title = '') {
        $title   = $title ?: __('WitCom &rsaquo; Error', 'witcom');
        $footer  = '';
        $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
        wp_die($message, $title);
    };

// If this file is called directly, abort. //
    if (! defined('WPINC')) {
        die;
    } // end if


    $myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
        'https://github.com/ryanemitchell/wit-commander-test/',
        __FILE__, //Full path to the main plugin file or functions.php.
        'wit-commander-10'
    );

//    $myUpdateChecker->setAuthentication('f6c9d5d85636f2c030a9896d5a38e946da31818f');
    $myUpdateChecker->setBranch('stable');


    //  Load up witlib Files
    array_map(function ($file) use ($witcom_error) {

        if (file_exists(plugin_dir_path(__FILE__) . 'witlib/' . $file . '.php')) {
            require_once(plugin_dir_path(__FILE__) . 'witlib/' . $file . '.php');
        } else {
            $witcom_error(
                __($file . '.php not found', 'witsage'),
                __('Resource not found.', 'witsage')
            );
        }
    }, [ 'include_acf_pro', 'tgm-plugin-activation']);



//  Load up Plugin Files
    array_map(function ($file) use ($witcom_error) {

        if (file_exists(plugin_dir_path(__FILE__) . 'app/' . $file . '.php')) {
            require_once(plugin_dir_path(__FILE__) . 'app/' . $file . '.php');
        } else {
            $witcom_error(
                __($file . '.php not found', 'witsage'),
                __('Resource not found.', 'witsage')
            );
        }
    }, [ 'witcom-setup', 'witcom-app' ]);


    class WitCommander {

    }






