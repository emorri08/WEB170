<!-- SIDEBAR.PHP -->
<aside>
    <div id="sidebar">    
<!--SUB MENU -->
        <div id="sub-navigation" class="widget">
        
            <h2 class="sub-navigation-title"><?php echo $parentname; ?></h2>
    
                <ul class="sub-navigation-items">
                    <?php echo $children; ?>    
                </ul>
        </div>
<!-- END -->
<!-- quote -->

<?php if (get_post_meta($post->ID, 'Quote', true)) : #this checks to see if there is a quote ?>

<blockquote><?php echo get_post_meta($post->ID, 'Quote', true); ?></blockquote>

<?php endif; ?>
<!-- end -->
        
<!-- Dynamic Sidebar -->
        <?php dynamic_sidebar(1); ?>
<!-- end -->
        
    </div>
</aside>