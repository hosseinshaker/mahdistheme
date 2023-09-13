<?php
//register style and scripts
get_template_part('inc/stylescripts');
//register menu
register_nav_menu( 'topmenu', 'منو هدر اصلی' );
//add support image post
add_theme_support( 'post-thumbnails' );
//add_theme_support( 'title-tag' );