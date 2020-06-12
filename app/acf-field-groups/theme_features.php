<?php
	/**
	 * Filename: theme_features.php
	 * Description:
	 * Author: ryan
	 */

	if( function_exists('acf_add_local_field_group') ):

		acf_add_local_field_group(array(
			'key' => 'group_5bc2261acef12',
			'title' => 'Theme Features',
			'fields' => array(
				array(
					'key' => 'field_5bc2264e9cd61',
					'label' => 'Show Return to top',
					'name' => 'theme_feature_show_return_to_top',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 1,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
				array(
					'key' => 'field_5bd336d140f9c',
					'label' => 'Completely Disable Commenting',
					'name' => 'theme_feature_disable_commenting',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
//				array(
//					'key' => 'field_5cd6de591836f',
//					'label' => 'Show Breadcrumbs',
//					'name' => 'theme_feature_show_breadcrumbs',
//					'type' => 'true_false',
//					'instructions' => '',
//					'required' => 0,
//					'conditional_logic' => 0,
//					'wrapper' => array(
//						'width' => '',
//						'class' => '',
//						'id' => '',
//					),
//					'message' => '',
//					'default_value' => 1,
//					'ui' => 0,
//					'ui_on_text' => '',
//					'ui_off_text' => '',
//				),
				array(
					'key' => 'field_5cd6de591836g',
					'label' => 'Show Fields Editor (for developers)',
					'name' => 'theme_feature_show_custom_fields_editor',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 1,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),


			),
			'location' => array(
				array(
					array(
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'acf-options-theme-features',
					),
				),
			),
			'menu_order' => 13,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => '',
		));

	endif;
