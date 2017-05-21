<?php get_header(); #get header.php ?>
    <div id="content" class="page">
        
<?php if ( have_posts()) : while ( have_posts()) : the_post(); ?>
        <?php get_sidebar(); #get sidebar.php ?>
        <h2><a href="<?php the_permalink();?><?php the_title(); ?>"></a></h2>
<?php the_content(''); ?>        
<?php endwhile; endif; ?>
    </div>
<?php get_footer(); #get footer.php?>