<?php

    /**
     * Filename: witcom-setup.php
     * Description:
     * Author:  Ryan E. Mitchell
     */


    /* ==========================================================================
       Enqueue BLock elements
       ========================================================================== */

    function witcom_block_editor_styles() {

        $css_dependencies = array();

        // Enqueue the editor styles.
        $asset_file = include( plugin_dir_path( __FILE__ ) . '../dist/app.asset.php');

        wp_enqueue_style(
            'wit-commander-editor-styles',
            plugins_url( '../dist/editor.css', __FILE__ ),
            array( ),
            filemtime( plugin_dir_path( __FILE__ ) . '../dist/editor.css' )
        );

        // Enqueue the editor script.
        wp_enqueue_script(
            'wit-commander-editor-scripts',
            plugins_url( '../dist/app.js', __FILE__ ),
            [ 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-components', 'wp-editor' ],
            $asset_file['version']
        );    }

    add_action( 'enqueue_block_editor_assets', 'witcom_block_editor_styles', 1, 1 );



    function wit_commander_init() {

        // automatically load dependencies and version

        if (file_exists(plugin_dir_path( __FILE__ ) . '../dist/index.asset.php')) {
            $asset_file = include( plugin_dir_path( __FILE__ ) . '../dist/index.asset.php' );

            wp_register_script(
                'wit-commander-editor-scripts',
                plugins_url( '../dist/app.js', __FILE__ ),
                $asset_file['dependencies'],
                $asset_file['version']
            );
        }

        wp_register_style(
            'wit-commander-editor-styles',
            plugins_url( '../dist/editor.css', __FILE__ ),
            array( ),
            filemtime( plugin_dir_path( __FILE__ ) . '../dist/editor.css' )
        );

        wp_register_style(
            'wit-commander-styles',
            plugins_url( '../dist/app.css', __FILE__ ),
            array( ),
            filemtime( plugin_dir_path( __FILE__ ) . '../dist/app.css' )
        );

        register_block_type( 'fancy-block-plugin/fancy-custom-block', array(
            'editor_script' => 'wit-commander-editor',
            'editor_style'  => 'wit-commander-editor',
            'style'         => 'wit-commander',
        ) );

//        wp_enqueue_script('wit-commander-editor-scripts');

        wp_enqueue_style('wit-commander-styles');
    }

//    add_action( 'init', 'wit_commander_init' );


    add_action( 'wp_enqueue_scripts', 'wit_commander_init' );

function register_wit_block_category($categories, $post)
{
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'wit-blocks',
                'title' => __('Wit Blocks', 'wit-blocks'),
            ),
        )
    );
}
    add_filter('block_categories', 'register_wit_block_category', 10, 2);



function klf_acf_input_admin_footer()
{
    ?>

        <?php
        $witcom_colors_array = array();

        if (get_field('witcom_color_site_black', 'option')) :
            $witcom_color_site_black =  get_field('witcom_color_site_black', 'option');
        else :
            $witcom_color_site_black = "#000000";
        endif;

        if (get_field('witcom_color_site_white', 'option')) :
            $witcom_color_site_white =  get_field('witcom_color_site_white', 'option');
        else :
            $witcom_color_site_white = "#FFFFFF";
        endif;




        if (get_field('witcom_colors', 'option')) :
            $witcom_colors = get_field('witcom_colors', 'option');
            foreach ($witcom_colors as $color) {
                $witcom_color = $color['color'];
                array_push($witcom_colors_array, $witcom_color);
            }
        endif;

                array_push($witcom_colors_array, $witcom_color_site_black, $witcom_color_site_white);


                $colors_string = implode(', ', array_map(function($val){return sprintf("'%s'", $val);}, $witcom_colors_array));
            ?>
        </div>

        <script type="text/javascript">
            (function($) {
                acf.add_filter('color_picker_args', function( args, $field ){
// add the hexadecimal codes here for the colors you want to appear as swatches
                    args.palettes = [<?php echo $colors_string; ?>]
// return colors
                    return args;
                });
            })(jQuery);
        </script>
<?php }
    add_action('acf/input/admin_footer', 'klf_acf_input_admin_footer');


    add_action('init', function() {
//        unregister_block_style('core/button', 'default');
    });


    /* ==========================================================================
       Developer Tools
       ========================================================================== */






