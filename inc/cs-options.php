<?php
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = "cs";

    $theme = wp_get_theme();
    $args = array(
        'opt_name'             => $opt_name,
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_type'            => 'menu',
        'allow_sub_menu'       => true,

        'menu_title'           => __( 'CS Options', 'redux-framework-demo' ),
        'page_title'           => __( 'CS Options', 'redux-framework-demo' ),
        'dev_mode'             => false,
        'admin_bar_priority'   => 60,
        'page_icon'            => 'icon-themes',
        'menu_icon'            => '',
        'page_priority'        => null,

        'google_api_key'       => '',
        'google_update_weekly' => false,
        'async_typography'     => true,
        'admin_bar'            => true,
        'admin_bar_icon'       => 'dashicons-portfolio',
        'global_variable'      => '',
        'update_notice'        => true,
        'customizer'           => true,
        'page_parent'          => 'themes.php',
        'page_permissions'     => 'manage_options',
        'last_tab'             => '',
        'page_slug'            => '_options',
        'save_defaults'        => true,
        'default_show'         => false,
        'default_mark'         => '',
        'show_import_export'   => true,
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        'output_tag'           => true,
        'database'             => '',
        'use_cdn'              => true,

        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );


    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    Redux::setArgs( $opt_name, $args );
    // For General Setting
    Redux::setSection( $opt_name, array(
        'title'            => __( 'General Settings', 'redux-framework-demo' ),
        'id'               => 'basic',
        'icon'             => 'el el-cogs',
        'fields'           => array(
            array(
                'id'       => 'upload_facivon',
                'type'     => 'switch',
                'title'    => 'Upload Favicon',
                'default'  => false
            ),
            array(
                'id'        => 'favicon',
                'type'      => 'media',
                'title'     => __( 'Favicon Icon', 'redux-framework-demo' ),
                'required' => array( 'upload_facivon', '=', true )
            ),
            array(
                'id'       => 'show-footer',
                'type'     => 'switch',
                'title'    => 'Show Footer',
                'default'  => true
            ),
            array(
                'id'        => 'copyright-text',
                'type'      => 'textarea',
                'required' => array( 'show-footer', '=', true ),
                'title'     => __( 'Copyright Text', 'redux-framework-demo' ),
                'default'   => 'Copyright 2016 | All Rightas Reserved | Design & Develop BY <a href="http://www.revoltheme.com/" target="_blank">Revol Theme</a>'
            ),
        )
    ) );

    // For menus
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Menu Setting', 'redux-framework-demo' ),
        'id'               => 'nav',
        'desc'    => 'Drag menu item in order to show Menu item as the order item order. (Please Don\'t disable home and cantact section. It might brock your website.)',
        'icon'             => 'el el-cog-alt',
        'fields'           => array(
            array(
                'id'       => 'show-menu',
                'type'     => 'switch',
                'title'    => 'Show Navigation',
                'default'  => true
            ),
            array(
                'id'      => 'nav-item',
                'type'    => 'sorter',
                'required' => array( 'show-menu', '=', true ),
                'options' => array(
                    'enabled'  => array(
                        'when'          => 'Launch Date',
                        'about'         => 'About',
                        'contact'       => 'Contact'
                    ),
                    'disabled' => array(
                    )
                ),
            ),
        )
    ) );


    // For Home
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Home', 'redux-framework-demo' ),
        'id'               => 'home',
        'icon'             => 'el el-home',
        'fields'           => array(
            array(
                'id'        => 'home-header-text',
                'type'      => 'text',
                'title'     => __( 'Header', 'redux-framework-demo' ),
                'default'   => 'Coming Soon'
            ),
            array(
                'id'        => 'home-sub-header-text',
                'type'      => 'text',
                'title'     => __( 'Sub Header', 'redux-framework-demo' ),
                'default'   => 'MODERN & CREATIVE TEMPLATE'
            ),
            array(
                'id'        => 'mailchimp',
                'type'      => 'textarea',
                'title'     => __( 'MailChimp Form Action Text', 'redux-framework-demo' ),
                'default'   => 'http://facebook.us16.list-manage.com/subscribe/post?u=3c6471708ddac41170d516748&amp;id=0e879c373c',
                'subtitle'  => 'If you need some help to do this then please contact with <a href="http://www.facebook.com/mdmortuza.hossain/">me</a>.'
            ),
        )
    ) );

    // For Lunch Date
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Launch Time', 'redux-framework-demo' ),
        'id'               => 'lunch',
        'icon'             => 'el el-calendar',
        'fields'           => array(
            array(
                'id'        => 'lunch-header',
                'type'      => 'text',
                'title'     => __( 'Lunch Header', 'redux-framework-demo' ),
                'default'   => 'Launch <span>Date</span>'
            ),
            array(
                'id'        => 'lunch-subheader',
                'type'      => 'text',
                'title'     => __( 'Lunch Sub Header', 'redux-framework-demo' ),
                'default'   => 'Our Website Is Coming Soon. We`ll be here soon with our new Imagination.'
            ),
            array(
                'id'       => 'lunch_datepicker',
                'type'     => 'date',
                'title'    => __( 'Launch Date', 'redux-framework-demo' ),
            ),
            array(
                'id'            => 'lunch_houre',
                'type'          => 'slider',
                'title'         => __( 'Launch Houre', 'redux-framework-demo' ),
                'default'       => 15,
                'min'           => 1,
                'step'          => 1,
                'max'           => 24,
                'display_value' => 'text'
            ),
            array(
                'id'            => 'lunch_minute',
                'type'          => 'slider',
                'title'         => __( 'Launch Minute', 'redux-framework-demo' ),
                'default'       => 00,
                'min'           => 1,
                'step'          => 1,
                'max'           => 59,
                'display_value' => 'text'
            ),

        ),
    ) );
    //For About
    Redux::setSection( $opt_name, array(
        'title'            => __( 'About', 'redux-framework-demo' ),
        'id'               => 'about',
        'icon'             => 'el el-briefcase ',
        'fields'           => array(
            array(
                'id'          => 'about_content',
                'type'        => 'slides',
                'title'       => __('About Content', 'redux-framework-demo'),
                'subtitle'      => 'Get the logo code from <a href="http://fontawesome.io/" target="_blank" >Here</a>',
                'placeholder' => array(
                    'title'           => __('Title', 'redux-framework-demo'),
                    'description'     => __('Description', 'redux-framework-demo'),
                    'url'             => __('Logo Code (fa-mobile)', 'redux-framework-demo'),
                )
            ),
        )
    ) );

    // For Contact Us
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Contact', 'redux-framework-demo' ),
        'id'               => 'contact',
        'icon'             => 'el el-comment-alt',
        'fields'           => array(
            array(
                'id'        => 'contact-header',
                'type'      => 'text',
                'title'     => __( 'Contact Header', 'redux-framework-demo' ),
                'default'   => 'Write us a letter'
            ),
            array(
                'id'       => 'admin-email',
                'type'     => 'text',
                'title'    => __('Admin Email', 'redux-framework-demo'),
                'subtitle' => __('Fill the email address where you want to receive the email.', 'redux-framework-demo'),
                'validate' => 'email',
                'msg'      => 'Please Provide Real Email Address',
                'default'  => get_option( 'admin_email' )
            ),

        )
    ) );

    
    // For Address
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Address', 'redux-framework-demo' ),
        'id'               => 'address',
        'icon'             => 'el el-map-marker',
        'fields'           => array(
            array(
                'id'        => 'address-header',
                'type'      => 'text',
                'title'     => __( 'Address Header', 'redux-framework-demo' ),
                'default'   => 'Address'
            ),
            array(
                'id'       => 'show_main_address',
                'type'     => 'switch',
                'title'    => 'Show Main Address',
                'default'  => true
            ),
            array(
                'id'        => 'main-address',
                'type'      => 'textarea',
                'title'     => __( 'Main Address', 'redux-framework-demo' ),
                'default'   => '
                        <p>
                            <a href="https://goo.gl/maps/2eF6Z" target="_blank">66 Grand Central,<br>
                            New York, USA</a>
                        </p>',
                'required' => array( 'show_main_address', '=', true )
            ),

            array(
                'id'       => 'show_call_us',
                'type'     => 'switch',
                'title'    => 'Show Main Address',
                'default'  => true
            ),
            array(
                'id'        => 'call-us',
                'type'      => 'textarea',
                'title'     => __( 'Call Us', 'redux-framework-demo' ),
                'default'   => '
                        <p>
                            <strong><a href="tel:+661254611">(+33) 66-1254-611</a></strong><br>
                            <strong><a href="tel:+665628146">(+37) 66-5628-146</a></strong>
                        </p>',
                'required' => array( 'show_call_us', '=', true )
            ),

            array(
                'id'       => 'show_write_us',
                'type'     => 'switch',
                'title'    => 'Show Main Address',
                'default'  => true
            ),
            array(
                'id'        => 'write-us',
                'type'      => 'textarea',
                'title'     => __( 'Write Us', 'redux-framework-demo' ),
                'default'   => '
                        <p>
                            <a href="mailto:moet@exemple.com">malin@marketing.com</a><br>
                            <a href="mailto:moet@exemple.com">malin@customer.com</a>
                        </p>',
                'required' => array( 'show_write_us', '=', true )
            ),

        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Social', 'redux-framework-demo' ),
        'id'               => 'social',
        'icon'             => 'el el-share',
        'fields'           => array(
            array(
                'id'          => 'social-icons',
                'type'        => 'slides',
                'title'       => __('Social Links', 'redux-framework-demo'),
                'desc'        => 'You can get the icon from <a href="http://fontawesome.io/" target="_blank">here</a>',
                'placeholder' => array(
                    'title'           => __('Social Icon Name(fa-facebook)', 'redux-framework-demo'),
                    'url'           => __('URL(http://www.facebook.com)', 'redux-framework-demo'),
                ),
                'show' => array(
                    'title' => true,
                    'url' => true,
                ),
            ),
        )
    ) );

    
