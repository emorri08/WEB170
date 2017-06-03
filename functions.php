<?php 
/* Eleanor A. Boyd
WEB170
Project site:
    The Morrison Family Photo Gallery and Blog
© 2017, Eleanor A. Boyd, All Rights Reserved.

Don't steal my shit!
*/

//functions.php

//site keys for the server: eleanorboyd.com
$siteKey = "6LdFgAoUAAAAAFlH5ACIp95JLnzgeOU6kLzZDILN";
$secretKey = "6LdFgAoUAAAAADE5GQB4HJI9rT-_Pn6doIMLJPnH";

//avoid date errors
date_default_timezone_set('America/LosAngeles');

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//switch statement - dynamic page titles
switch(THIS_PAGE){

    default:
        $title = THIS_PAGE;
}
//end switch statement


//register sidebar
register_sidebar(array(
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));


//register menus

//begin register nav menus function
register_nav_menus(array('main-menu' => __('Main Menu'), 'secondary-menu' => __('Secondary Menu'),));

//end



//create thumbnails
add_theme_support('post-thumbnails');

//end



//excerpts
add_post_type_support('page', 'excerpt');

//end


//get title tag function
function get_my_title_tag() {
	
    global $post;
    if (is_front_page()) {
        bloginfo('description');
    } elseif (is_page()) {
        the_title();
        if ($post->post_parent) {
            echo ' | ';
            echo get_the_title($post->post_parent);
        }
    } elseif (is_category()) {
        echo get_the_category()[0]->cat_name;
    } elseif (is_single()) {
        the_title(); 
        echo ' | ';
        echo get_the_category()[0]->cat_name;
    } else {
        bloginfo('description');
    }
    echo ' | ';
    bloginfo('name');
    echo ' | ';
    echo 'Seattle, WA.';
	
}






















?>