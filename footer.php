<!-- cut here for php includes footer -->
    <footer>
        <div id="sub-menu" class="widget">
            <h2 class="sub-menu-title"><?php echo get_the_title($post->post_parent);#gets the title of the gateway page ?></h2>
    <!-- begin side bar navigation -->
                <ul class="sub-navigation-items"><?php
                    if ($post->post_parent) {
                        wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __('')));#if there is a parent page, list the sub pages
                    } else {
                        wp_list_pages(array('child_of' => $post->ID, 'title_li' => __('')));#if the page doesn't have a parent, list the sub pages
                    }
?>
<!--commented out sub navigation
                    <li>
                        <a class="sub-foot-nav" href="about/sub-page-one">Sub-page One</a>
                    </li>
                    <li>
                        <a class="sub-foot-nav" href="about/sub-page-two">Sub-page Two</a>
                    </li><!-- There are two absolutes in this universe....We're all gonna die and FARTS ARE FUNNY. -->
 <!--               <li>
                        <a class="sub-foot-nav" href="about/sub-page-three">Sub-page Three</a>
                    </li> end commented out sub navigation-->
                </ul>
    <!-- end side bar navigation -->
</div>
            <p class="copy">
                <small>&copy;<?php echo date('Y'); ?> E. Boyd, <a href="http://3tabbies.com" target="_blank">3 Tabbies</a>, All Rights Reserved. </small>
            </p>
    </footer>
<?php wp_footer(); ?>
    </body>
</html>
