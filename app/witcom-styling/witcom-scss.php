<?php

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

    /* ==========================================================================
       Fonts
       ========================================================================== */


    if ( get_field('witcom_font_import','option') ) {
        $witcom_witcom_font_import = get_field('witcom_font_import','option');
    } else {
        $witcom_witcom_font_import = '';
    }

    if ( get_field('witcom_body_font','option') ) {
        $witcom_body_font = get_field('witcom_body_font','option');
    } else {
        $witcom_body_font = 'Georgia, serif;';
    }

    if ( get_field('witcom_header_font','option') ) {
        $witcom_header_font = get_field('witcom_header_font','option');
    } else {
        $witcom_header_font = 'Georgia, serif;';
    }

    ?>


<?php if( have_rows('witcom_breakpoints','option') ): ?>
<?php while( have_rows('witcom_breakpoints','option') ): the_row();

 // Get sub field values.
        $witcom_breakpoint_xs = get_sub_field('witcom_breakpoint_xs');
        $witcom_breakpoint_sm = get_sub_field('witcom_breakpoint_sm');
        $witcom_breakpoint_md = get_sub_field('witcom_breakpoint_md');
        $witcom_breakpoint_lg = get_sub_field('witcom_breakpoint_lg');
        $witcom_breakpoint_xl = get_sub_field('witcom_breakpoint_xl');

       endwhile; ?>
<?php endif; ?>


<?php /* ==========================================================================
   Fonts
   ========================================================================== */
?>

/*! WitCom SCSS */
.witcom-block {
    font-family: <?php echo $witcom_body_font; ?>

    /*! Headers */
    @for $index from 1 through 6 {
        h#{$index}{
        font-family: <?php echo $witcom_header_font; ?>;
        }
    }

    .site-black {
        color: <?php echo $witcom_color_site_black; ?>
    }

    .site-white {
    color: <?php echo $witcom_color_site_white; ?>
    }


/*! Visibility from https://medium.com/codyhouse/a-new-approach-to-visibility-utility-classes-based-on-css-variables-eb1e2a01fa3b */
$breakpoints: (
xs: <?php echo $witcom_breakpoint_xs ?>px,
sm: <?php echo $witcom_breakpoint_sm ?>px,
md: <?php echo $witcom_breakpoint_md ?>px,
lg: <?php echo $witcom_breakpoint_lg ?>px,
xl: <?php echo $witcom_breakpoint_xl ?>px,
);

@mixin breakpoint($breakpoint) {
@media only screen and (min-width: map-get($map: $breakpoints, $key: $breakpoint)) { @content; }
}

:root {
--display: block;
}

[class^="display--"] {
display: none !important;
}

@include breakpoint(xs) {
.display--xs {
display: var(--display) !important;
}

.hide--xs {
display: none !important;
}
}

@include breakpoint(sm) {
.display--sm {
display: var(--display) !important;
}

.hide--sm {
display: none !important;
}
}

@include breakpoint(md) {
.display--md {
display: var(--display) !important;
}

.hide--md {
display: none !important;
}
}

@include breakpoint(lg) {
.display--lg {
display: var(--display) !important;
}

.hide--lg {
display: none !important;
}
}

@include breakpoint(xl) {
.display--xl {
display: var(--display) !important;
}

.hide--xl {
display: none !important;
}
}

.is-visible {
display: var(--display) !important;
}

.is-hidden {
display: none !important;
}




}

<?php if( have_rows('witcom_colors','option') ):

    while( have_rows('witcom_colors','option') ): the_row();

        $color = get_sub_field('color');
        $color_name = get_sub_field('color_name');
        //                replace spaces in color name with underscore for slug
        $slug = str_replace(' ', '_', $color_name);
        $slug = strtolower($slug);  ?>

        .has-<?php echo $slug ?>-background-color {
        background: <?php echo $color ?>
        }

        .has-<?php echo $slug ?>-color {
        color: <?php echo $color ?>
        }



    <?php endwhile;
endif;

/* ==========================================================================
Buttons
========================================================================== */

    $witcom_button_radius = get_field ('witcom_button_radius', 'option');
        ?>

        .witcom-button {
            border-radius: <?php echo $witcom_button_radius ?> !important;
        }

        .wp-block-button {
        @extend .witcom-button;
        }

        .wp-block-button__link {
            border-radius: <?php echo $witcom_button_radius ?>px !important;
        }


<?php

    if( have_rows('witcom_buttons','option') ):

        while( have_rows('witcom_buttons','option') ): the_row();

    if( get_sub_field('witcom_button_name') ):
        $buttonName = get_sub_field('witcom_button_name');
    endif;

            if( get_sub_field('witcom_button_default_background_color') ):
                $buttonDefaultBackgroundColor = get_sub_field('witcom_button_default_background_color');
            else:
                $buttonDefaultBackgroundColor = '#red';
            endif;

            if( get_sub_field('witcom_button_hover_background_color') ):
                $buttonHoverBackgroundColor = get_sub_field('witcom_button_hover_background_color');
            else:
                $buttonHoverBackgroundColor = '#red';
            endif;

            //   replace spaces in button name with underscore for slug
            $slug = str_replace(' ', '_', $buttonName);
            $slug = strtolower($slug);  ?>

            .is-style-witcom-<?php echo $slug ?>{
            .wp-block-button__link {
            background: <?php echo $buttonDefaultBackgroundColor ?>;

            &:hover {
            background: <?php echo $buttonHoverBackgroundColor ?>;
            }
            }
            }

        <?php endwhile;
    endif; ?>


<?php

/* ==========================================================================
   core/button additional styles
   ========================================================================== */
?>
@media only screen and (max-width: <?php echo $witcom_breakpoint_md ?>px) {


.has-cols-mobile-1 {
column-count: 1 !important;
}
.has-cols-mobile-2 {
column-count: 2 !important;
column-fill: balance;
}

.has-cols-mobile-3 {
column-count: 3 !important;
column-fill: balance;
}

.has-cols-mobile-4 {
column-count: 4 !important;
column-fill: balance;
}
}
