
<!DOCTYPE html>
<html lang="en">
    <head><!-- Oh everything's cruel according to you. Keeping him chained us in the backyard is cruel. Pulling his tail is cruel. Yelling in his ears is cruel. Everything is cruel. So excuse me if I'm cruel. -Homer Simpson-->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta name="viewport" content="width=device-width" />
        <meta name="robots" content="noindex,nofollow" />
                <title><?php bloginfo('description'); ?><?php bloginfo('name'); ?></title>
            <script src="script.js"></script>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all"/>
        <?php wp_head(); ?>
    </head>
<!-- end of invisible content -->
    <body <?php body_class(); ?>>
        <header>
            <img id="morrison" src="<?php bloginfo('template_directory'); ?>/images/morrison01.svg" height="150px" alt="the morrisons"/>
 <!--           <h1>The Morrisons</h1>  -->
                <h2>Family Photo Gallery &amp; Blog</h2>
<!--begin navigation-->
            <div id="navigation">
                <nav id="top-nav">
                    <ul id="main-nav">
                        <li class="navigation">
                            <a class="nav" href="index.php">Home</a>
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
                            <a class="nav" href="blog">Blog</a>
                        </li>
                        <li class="navigation">
                            <a class="nav" href="contact">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
<!--end navigation-->
        </header>
<!-- cut here for php includes header -->