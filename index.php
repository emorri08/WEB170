<?php get_header(); ?>
<div id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();    //loop starting point ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <article class="blog-excerpt">
    <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>" rel="bookmark" title="PermanentLink to <?php the_title(); ?>"><?php the_title(); ?>&nbsp;&raquo;</a></h3>
    <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php echo get_the_post_thumbnail($page->ID,'thumbnail'); ?></a>
    
    <p><?php echo get_the_excerpt(); ?><a href="<?php the_permalink() ?>" class="more" rel="bookmark" title="Permanaent Link to <?php the_title(); ?>">Full Story&nbsp;&raquo;</a></p>
    <small>Posted on<?php the_time('F jS, Y') ?> in <?php the_category(', ') ?></small>
</article>
    <?php endwhile; endif;  //this is the end, my friend. ?>
    <small>index.php</small>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>