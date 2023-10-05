<?php 

function wpdevs_customizer( $wp_customize ){
    // 1 Copyright Section
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => __('Copyright Settings', 'barbershop'),
            'description' => __('Copyright Settings', 'barbershop')
        )
    );

            $wp_customize->add_setting(
                'set_copyright',
                array(
                    'type' => 'theme_mod',
                    'default' => __('© 2020 Arcstress All rights reserved', 'barbershop'),
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                'set_copyright',
                array(
                    'label' => __('Copyright Information', 'barbershop'),
                    'description' => __('Please, type your copyright here', 'barbershop'),
                    'section' => 'sec_copyright',
                    'type' => 'text'
                )
            );

    // 2 Hero
    $wp_customize->add_section(
        'sec_hero',
        array(
            'title' => __('Hero Section', 'barbershop')
        )
    );

            //Title
            $wp_customize->add_setting(
                'set_hero_title',
                array(
                    'type' => 'theme_mod',
                    'default' => __('Please add some title', 'barbershop'),
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                'set_hero_title',
                array(
                    'label' => __('Hero Title', 'barbershop'),
                    'description' => __('Please, type your hero title here', 'barbershop'),
                    'section' => 'sec_hero',
                    'type' => 'text'
                )
            );

            //Subitle
            $wp_customize->add_setting(
                'set_hero_subtitle',
                array(
                    'type' => 'theme_mod',
                    'default' => __('Please add some subtitle', 'barbershop'),
                    'sanitize_callback' => 'sanitize_textarea_field'
                )
            );

            $wp_customize->add_control(
                'set_hero_subtitle',
                array(
                    'label' => __('Hero Subtitle', 'barbershop'),
                    'description' => __('Please, type your hero subtitle here', 'wp-devs'),
                    'section' => 'sec_hero',
                    'type' => 'textarea'
                )
            );

            //Buttom Text
            $wp_customize->add_setting(
                'set_hero_button_text',
                array(
                    'type' => 'theme_mod',
                    'default' => __('Learn More', 'wp-devs'),
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                'set_hero_button_text',
                array(
                    'label' => __('Hero Button Text', 'wp-devs'),
                    'description' => __('Please, type your hero button text here', 'wp-devs'),
                    'section' => 'sec_hero',
                    'type' => 'text'
                )
            );

            //Buttom Link
            $wp_customize->add_setting(
                'set_hero_button_link',
                array(
                    'type' => 'theme_mod',
                    'default' => '#',
                    'sanitize_callback' => 'esc_url_raw'
                )
            );

            $wp_customize->add_control(
                'set_hero_button_link',
                array(
                    'label' => __('Hero Button Link', 'wp-devs'),
                    'description' => __('Please, type your hero button link here', 'wp-devs'),
                    'section' => 'sec_hero',
                    'type' => 'url'
                )
            );

            //Hero Height
            $wp_customize->add_setting(
                'set_hero_height',
                array(
                    'type' => 'theme_mod',
                    'default' => '800',
                    'sanitize_callback' => 'absint'
                )
            );

            $wp_customize->add_control(
                'set_hero_height',
                array(
                    'label' => __('Hero Height', 'wp-devs'),
                    'description' => __('Please, type your hero height', 'wp-devs'),
                    'section' => 'sec_hero',
                    'type' => 'number'
                )
            );

            //Hero Background Image
            $wp_customize->add_setting(
                'set_hero_image',
                array(
                    'type' => 'theme_mod',
                    'sanitize_callback' => 'absint'
                )
            );

            $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize, 'set_hero_image', array(
                'label' => __('Hero Image', 'barbeshop'),
                'section' => 'sec_hero',
                'mime_type' => 'image'
            ))

            );

    // 3. Services
	$wp_customize->add_section( 
        'sec_services', 
        array(
		    'title' => __('Services Section', 'barbershop')
	) );

            //Title
            $wp_customize->add_setting(
                'set_services_title',
                array(
                    'type' => 'theme_mod',
                    'default' => __('Please add some title', 'barbershop'),
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                'set_services_title',
                array(
                    'label' => __('Services Title', 'barbershop'),
                    'description' => __('Please, type your services title here', 'barbershop'),
                    'section' => 'sec_services',
                    'type' => 'text'
                )
            );

            //Subitle
            $wp_customize->add_setting(
                'set_services_subtitle',
                array(
                    'type' => 'theme_mod',
                    'default' => __('Please add some subtitle', 'barbershop'),
                    'sanitize_callback' => 'sanitize_textarea_field'
                )
            );

            $wp_customize->add_control(
                'set_services_subtitle',
                array(
                    'label' => __('Services Subtitle', 'barbershop'),
                    'description' => __('Please, type your services subtitle here', 'wp-devs'),
                    'section' => 'sec_services',
                    'type' => 'textarea'
                )
            );

            //Buttom Text
            $wp_customize->add_setting(
                'set_services_button_text',
                array(
                    'type' => 'theme_mod',
                    'default' => __('Explore now', 'barbershop'),
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                'set_hero_button_text',
                array(
                    'label' => __('Services Button Text', 'barbershop'),
                    'description' => __('Please, type your services button text here', 'wp-devs'),
                    'section' => 'sec_services',
                    'type' => 'text'
                )
            );

            //Buttom Link
            $wp_customize->add_setting(
                'set_services_button_link',
                array(
                    'type' => 'theme_mod',
                    'default' => '#',
                    'sanitize_callback' => 'esc_url_raw'
                )
            );

            $wp_customize->add_control(
                'set_services_button_link',
                array(
                    'label' => __('Services Button Link', 'barbershop'),
                    'description' => __('Please, type your services button link here', 'barbershop'),
                    'section' => 'sec_services',
                    'type' => 'url'
                )
            );
    
            // Number of Bullet points
            $wp_customize->add_setting( 
                'set_services_number_bullet', 
                array(
                    'type' => 'theme_mod',
                    'sanitize_callback' => 'absint'
            ) );

            $wp_customize->add_control( 
                'set_services_number_bullet', 
                array(
                    'label' => __('Number of bullet points', 'barbershop'),
                    'description' => __('How many bullet points to display in the services section?', 'barbershop'),			
                    'section' => 'sec_services',
                    'type' => 'number'
            ) );

            // Bullet points
            $wp_customize->add_setting( 
                'set_services_bullet', 
                array(
                    'type' => 'theme_mod',
                    'sanitize_callback' => 'sanitize_text_field'
            ) );

            $wp_customize->add_control( 
                'set_services_bullet', 
                array(
                    'label' => __('Services bullet point section', 'barbershop'),
                    'description' => __('Comma separated values', 'barbershop'),
                    'section' => 'sec_services',
                    'type' => 'text'
            ) );	

            
}

add_action('customize_register', 'wpdevs_customizer');