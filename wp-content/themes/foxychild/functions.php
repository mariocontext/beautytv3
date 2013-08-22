<?php

	function load_my_scripts() {

	$my_child_path = get_stylesheet_directory_uri();

			//wp_register_script('mycssmediaq', $my_child_path.'/js/css3-mediaqueries.js', array(), '1.0', false);
			wp_register_script('myrespond', $my_child_path.'/js/respond.min.js', array(), '1.0', false);

			wp_register_script('mymodernizr', $my_child_path.'/js/modernizr-2.5.3-min.js', array(), '2.5.3', false);

			//wp_register_script('myhelper', $my_child_path.'/js/helper.js', array(), '1.0', true);

			wp_register_script('mystacktable', $my_child_path.'/js/stacktable.js', array('jquery'), '1.1', true);

			//wp_register_script('myfitvids', $my_child_path.'/js/jquery.fitvids.js', array('jquery'), '1.0', true);

			//wp_register_script('faded', $my_child_path.'/js/jquery.faded.js', array('jquery'), '0.3.2', true);

			//wp_enqueue_script('mycssmediaq');
			wp_enqueue_script('myrespond');
			wp_register_script('myscripts', $my_child_path.'/js/scripts.js', array('jquery'), '1.21', true);

			wp_enqueue_script('mymodernizr');
			//wp_enqueue_script('myhelper');
			wp_enqueue_script('mystacktable');
			//wp_enqueue_script('myfitvids');
			//wp_enqueue_script('faded');
			wp_enqueue_script('myscripts', $my_child_path.'/js/scripts.js', array('fitvids'), '1.21', true);

		}

add_action('wp_enqueue_scripts', 'load_my_scripts', 11); /* 11 loads scripts after main theme files which are at 10 */

/* Slider from theme1164 */

function my_post_type_slider() {
	register_post_type( 'slider',
                array( 
				'label' => __('Slider'), 
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => false,
				'menu_position' => 5,
				'supports' => array(
						'title',
						'custom-fields',
            'thumbnail')
					) 
				);
}

add_action('init', 'my_post_type_slider');

/* customized functions and filters for hairlab- mario@contextmultimedia.com */
/* removes automatic insertion of explicit height and widths for images so that the image can be scaled using css for responsive design */

	add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
	add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

	function remove_width_attribute( $html ) {
	$html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	return $html;
	}