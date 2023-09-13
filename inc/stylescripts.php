<?php
//register styles and scripts
function theme_files() { 
    //css register

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css'); 
    wp_enqueue_style('awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css'); 
    wp_enqueue_style('themify', get_template_directory_uri() . '/assets/css/themify-icons.css'); 
    wp_enqueue_style('flaticon', get_template_directory_uri() . '/assets/css/flaticon-set.css'); 
    wp_enqueue_style('magnific-popup.css', get_template_directory_uri() . '/assets/css/magnific-popup.css'); 
    wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css'); 
    wp_enqueue_style('owl.theme.defaul', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css'); 
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css'); 
    wp_enqueue_style('bootsnav', get_template_directory_uri() . '/assets/css/bootsnav.css'); 
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css'); 
    wp_enqueue_style('responsive.css', get_template_directory_uri() . '/assets/css/responsive.css'); 
    //js register
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/assets/js/jquery-1.12.4.min.js', array(), '1.0', true );
    wp_enqueue_script( 'my-script1', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0', true );
    wp_enqueue_script( 'my-script2', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0', true );
    wp_enqueue_script( 'my-script3', get_template_directory_uri() . '/assets/js/equal-height.min.js', array(), '1.0', true );
    wp_enqueue_script( 'my-script4', get_template_directory_uri() . '/assets/js/jquery.appear.js', array(), '1.0', true );
    wp_enqueue_script( 'my-script5', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array(), '1.0', true );
    wp_enqueue_script( 'my-script6', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), '1.0', true );
    wp_enqueue_script( 'my-script7', get_template_directory_uri() . '/assets/js/modernizr.custom.13711.js', array(), '1.0', true );
    wp_enqueue_script( 'my-script8', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0', true );
    wp_enqueue_script( 'my-script9', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.0', true );
    wp_enqueue_script( 'my-script99', get_template_directory_uri() . '/assets/js/progress-bar.min.js', array(), '1.0', true );
    wp_enqueue_script( 'my-script999', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array(), '1.0', true );
    wp_enqueue_script( 'my-script9999', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array(), '1.0', true );
    wp_enqueue_script( 'my-script99999', get_template_directory_uri() . '/assets/js/count-to.js', array(), '1.0', true );
    wp_enqueue_script( 'my-script999999', get_template_directory_uri() . '/assets/js/YTPlayer.min.js', array(), '1.0', true );
    wp_enqueue_script( 'my-script9999999', get_template_directory_uri() . '/assets/js/progresscircle.js', array(), '1.0', true );
    wp_enqueue_script( 'my-script99999999', get_template_directory_uri() . '/assets/js/bootsnav.js', array(), '1.0', true );
    wp_enqueue_script( 'my-script9999999999', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );
} 

add_action('wp_enqueue_scripts', 'theme_files');


?>