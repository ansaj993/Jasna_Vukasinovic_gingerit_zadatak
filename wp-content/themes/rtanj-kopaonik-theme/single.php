<?php get_header();?>

<div id="main-content" class="main-content">

    <div id="primary" class="content-area">
        <article id="content" class="site-content" role="main">
            <?php
                // Start the Loop.
                while ( have_posts() ) : the_post();?>

                    <?php the_content();?>

               <?php endwhile;
            ?>
        </article><!-- #content -->
        
        <aside>
               <?php dynamic_sidebar('main-sidebar');?>
        </aside>
    </div><!-- #primary -->
</div><!-- #main-content -->
<?php get_footer();?>