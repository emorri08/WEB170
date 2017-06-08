
<!DOCTYPE html>
<html lang="en">
    <head><!-- Oh everything's cruel according to you. Keeping him chained us in the backyard is cruel. Pulling his tail is cruel. Yelling in his ears is cruel. Everything is cruel. So excuse me if I'm cruel. -Homer Simpson-->
        <meta charset="utf-8" />
<!--
Theme Name: boyd-sp17-web170
Description: Created in the process of learning how to create Wordpress themes
Author: E. Boyd
http://eleanorboyd.com
-->
        <meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?> />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta name="viewport" content="width=device-width" />
        <meta name="robots" content="noindex,nofollow" />
        <meta name="keywords" content="Morrison Family Blog and Photo Gallery" />
                <title><?php get_my_title_tag(); ?></title>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="script.js"></script>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all"/>
        <?php wp_head(); ?>
    </head>
<!-- end of invisible content -->
    <body <?php body_class(); ?>>
        <header>
            <img id="morrison" src="<?php bloginfo('template_directory'); ?>/images/morrison01.svg" height="150px" alt="the morrisons"/>
 <!--           <h1>The Morrisons</h1>  -->
                <h2 id="mainHeadline" class="headline">Family Photo Gallery &amp; Blog</h2>

<!--begin navigation-->
             
                 <!--<div id="navigation">
                <ul id="main-nav">
                        <li class="navigation">
                            <a class="nav" href="home">Home</a>
                        </li>
                        <li class="navigation">
                            <a class="nav" href="blog">Blog</a>
                        </li>
                        <li class="navigation">
                            <a class="nav" href="about">About</a>
                                <ul id="sub-nav">
                                    <li class="sub-navigation">
                                        <a class="sub-nav" href="about/sub-page-one">Sub-page One</a>
                                    </li>
                                    <li class="sub-navigation">
                                        <a class="sub-nav" href="about/sub-page-two">Sub-page Two</a>
                                    </li>
                                    <li class="sub-navigation">
                                        <a class="sub-nav" href="about/sub-page-three">Sub-page Three</a>
                                    </li>
                                </ul>
                        </li>
                        <li class="navigation">
                            <a class="nav" href="contact">Contact</a>
                        </li>
                    </ul>   
                </div>-->

<!--end navigation-->
<?php wp_nav_menu(array('theme_location' => 'main-menu', 'menu' => 'main-menu', 'menu_class' => 'menu')); ?>
    
    
    
        </header>
<!-- cut here for php includes header -->