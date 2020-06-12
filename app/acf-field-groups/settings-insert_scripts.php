<?php
	/**
	 * insert-scripts.php
	 */
	if( function_exists('acf_add_local_field_group') ):

		acf_add_local_field_group(array(
			'key' => 'group_5a03a8bfc2bf5',
			'title' => 'Site Settings - Insert Scripts',
			'fields' => array(


				array(
					'key' => 'field_5a16bf038e906',
					'label' => 'Additional Header Code',
					'name' => 'additional_header_code',
					'type' => 'textarea',
					'instructions' => 'This code will appear LAST inside the sites HEAD section. Before the BODY tag. Uses do_action( \'wp_head\' )',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => '',
				),
				array(
					'key' => 'field_5b0f2535871b5',
					'label' => 'After Opening Body Code',
					'name' => 'post_opening_body_code',
					'type' => 'textarea',
					'instructions' => 'This code will appear just after the opening BODY tag. Uses do_action( \'wp_body_open\' )',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => '',
				),
				array(
					'key' => 'field_5a16bf19d147c',
					'label' => 'Additional Footer Code',
					'name' => 'additional_footer_code',
					'type' => 'textarea',
					'instructions' => 'This code will appear LAST, just before the closing BODY tag. Uses do_action( \'wp_footer\' )',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => '',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'acf-options-insert-scripts',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => 1,
			'description' => '',
		));

	endif;
