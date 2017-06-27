<?php

if (!function_exists('cs_style_js')) {
    function cs_style_js() {
    	// Styles
        wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all'  );
    	//scripts 
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array('jquery'), '1.0.0', false );
        wp_enqueue_script( 'downCount', get_template_directory_uri() . '/js/jquery.downCount.js', array('jquery'), '1.0.0', false );
        wp_enqueue_script( 'rain', get_template_directory_uri() . '/js/rain.js', array('jquery'), '1.0.0', false );
        wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', false );
    }
    add_action( 'wp_enqueue_scripts', 'cs_style_js' );
}

// IE Support

if (!function_exists('cs_ie_support')) {
    function cs_ie_support(){
    	?>
        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    	<?php
    }
    add_action('wp_head', 'cs_ie_support');
}

?>