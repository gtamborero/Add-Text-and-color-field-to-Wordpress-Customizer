<?php

/* Customizer Register data */
add_action( 'customize_register', 'samsara_register_theme_customizer' );
function samsara_register_theme_customizer( $wp_customize ) {

	// TEXT HEADER ALERT
	$wp_customize->add_setting(
		'head-alert',
		array(
			'default'    => 'RECOGIDA EN TIENDA GRATIS. ENVÍOS EN 24H LABORABLES',
			'type'       => 'option',
			'capability' => 'manage_options',
		)
	);

	$wp_customize->add_control(
		'head-alert_text',
		array(
			'label'   => __( 'Texto de Cabecera' ),
			'section' => 'header_image', // Search add_section( inside /wp-includes or theme to find created sections to hook on
			'settings' => 'head-alert',
			'type' => 'text'
		)
	);

	// TEXT COLOR
	$wp_customize->add_setting(
		'head-alert_color_text', //give it an ID
		array(
			'default' => '#fff', // Give it a default
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'head-alert_color_text_select', //give it an ID
			array(
				'label'      => 'Color del texto de la Alerta', //set the label to appear in the Customizer
				'section'    => 'header_image', //select the section for it to appear under  
				'settings'   => 'head-alert_color_text' //pick the setting it applies to
			)
		)
	);

	// BACK COLORS
	$wp_customize->add_setting(
		'head-alert_color', //give it an ID
		array(
			'default' => '#333333', // Give it a default
		)
	);
	$wp_customize->add_control(
	   new WP_Customize_Color_Control(
		   $wp_customize,
		   'head-alert_color_select', //give it an ID
		   array(
			   'label'      => 'Color de fondo de la Alerta', //set the label to appear in the Customizer
			   'section'    => 'header_image', //select the section for it to appear under  
			   'settings'   => 'head-alert_color' //pick the setting it applies to
		   )
	   )
	);

}
