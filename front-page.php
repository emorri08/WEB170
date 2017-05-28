<?php get_header(); ?>
<div id="content">
    <section class="widget-item">
        <h2 id="headline">About:</h2>
            <?php if(have_posts()) : while(have_posts()) : the_post(); //start first loop ?>
            <?php the_content(); ?>
            <?php endwhile; endif; //end first loop ?><!-- I bet Einstein turned himself all sorts of colors before he invented the lightbulb. -Homer Simpson -->
    </section>
    <section class="widget-item">
        <h2>Latest Blog Posts:</h2>
            <ul>
                <?php rewind_posts();   //stops the first loop ?>
                <?php query_posts('showposts=4'); //instructions for loop two ?>
                <?php while(have_posts()) : the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                <?php endwhile; ?>
            </ul>
    </section>
        <small>front-page.php</small>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>