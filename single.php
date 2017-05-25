<?php get_header(); ?>
<div id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();    //loop starting point ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(); ?></small>
    <?php the_content(); ?>
    <?php endwhile; endif;  //this is the end, my friend. ?>
    <small>single.php</small>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>