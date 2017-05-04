<?php get_header(); #get header.php ?>
    <div id="content" class="page">
<?php if(have_posts()) : while(have_posts()) : the_post(); #the ifwhile loop ?>
        <article id="page-content-<?php the_ID(); ?>" class="page-content">
            <h2><?php the_title(); #insert the title?></h2>
<?php the_content(''); #the actual content of the page ?>
        </article>
<?php endwhile; endif; #end the ifwhile loop ?>   

    </div>
<?php get_footer(); #get footer.php?>