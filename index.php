<meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?> />
<?php get_header(); ?>
<div id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();    //loop starting point ?>
    <article class="post-excerpt">
        <h2>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
            <small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?></small>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail') ?></a>
        <?php the_excerpt(); ?>
        <p class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></p>
    </article>
        <?php endwhile; endif;  //this is the end, my friend. ?>
    <small>index.php</small>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>