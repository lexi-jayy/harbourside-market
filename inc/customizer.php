<?php


function mytheme_customize_register($wp_customize) {
    $wp_customize->add_section('harbourside_theme_background_section', array(
        'title' => __('Image', 'HarboursideMarket'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('image_settings', array(
        'default-image'          => '',
        'default-size'           => 'auto',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'custom_Background_Image',
            array(
                'label' => __('upload a background image', 'HarboursideMarket'),
                'section' => 'harbourside_theme_background_section',
                'settings' => 'image_settings',
            )
        )
    );


}

add_action( 'customize_register', 'mytheme_customize_register' );