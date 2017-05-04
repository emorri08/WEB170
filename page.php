<?php get_header(); ?>
    <div id="content" class="page">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <article id="page-content-<?php the_ID(); ?>" class="page-content">
            <h2><?php the_title(); ?></h2>
<?php the_content(''); ?>        
        </article>
<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>