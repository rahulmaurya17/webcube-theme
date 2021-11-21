<?php 

function add_style_inWebcube(){
    wp_enqueue_style("style-1",get_template_directory_uri() . '/css/bootstrap.css', array(),false,'all');
    wp_enqueue_style("style-2",get_template_directory_uri() . '/css/style.css', array(),false,'all');
    wp_enqueue_style("style-3",get_template_directory_uri() . '/css/responsive.css', array(),false,'all');
    wp_enqueue_style("style-4",get_template_directory_uri() . '/css/animate.css', array(),false,'all');
    wp_enqueue_style("style-5",get_template_directory_uri() . '/css/prettyPhoto.css', array(),false,'all');
    wp_enqueue_style("style-6",get_template_directory_uri() . '/css/font-awesome.css', array(),false,'all');
    wp_enqueue_style("style-7",get_template_directory_uri() . '/css/owl.carousel.css', array(),false,'all');
    wp_enqueue_style("style-8",get_template_directory_uri() . '/css/owl.theme.css', array(),false,'all');
    wp_enqueue_style("style-9",get_template_directory_uri() . '/css/owl.transitions.css', array(),false,'all');
    wp_enqueue_style("style-10",get_template_directory_uri() . '/images/Logo/01.png', array(),false,'all');

    wp_enqueue_script("script-1",get_template_directory_uri() . '/js/jquery.min.js', array(),false,true);
    wp_enqueue_script("script-2",get_template_directory_uri() . '/js/bootstrap.js', array(),false,true);
    wp_enqueue_script("script-3",get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array(),false,true);
    wp_enqueue_script("script-4",get_template_directory_uri() . '/js/jquery.nicescroll.js', array(),false,true);
    wp_enqueue_script("script-5",get_template_directory_uri() . '/js/jquery.isotope.js', array(),false,true);
    wp_enqueue_script("script-6",get_template_directory_uri() . '/js/wow.js', array(),false,true);
    wp_enqueue_script("script-7",get_template_directory_uri() . '/js/jquery.countTo.js', array(),false,true);
    wp_enqueue_script("script-8",get_template_directory_uri() . '/js/jquery.inview.min.js', array(),false,true);
    wp_enqueue_script("script-9",get_template_directory_uri() . '/js/owl.carousel.js', array(),false,true);
    wp_enqueue_script("script-10",get_template_directory_uri() . '/js/script.js', array(),false,true);
    wp_enqueue_script("script-11","http://stats.hosting24.com/count.php", array(),false,true);
    
}
add_action('wp_enqueue_scripts','add_style_inWebcube');


?>