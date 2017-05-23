<?php get_header(); ?>

<!-- begin content of page.php -->
<div id="content" class="page">
    
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    
<article id="page-content-<?php the_ID(); ?>" class="page-content">
    <h2><?php the_title(); ?></h2>
    
    <?php get_gateway_spotlights(); ?>
<?php the_content(''); ?>    
</article>
    <?php endwhile; endif; ?>
    <?php get_child_pages(); ?>
</div>
<!-- end content of page.php -->

<?php get_footer(); ?>