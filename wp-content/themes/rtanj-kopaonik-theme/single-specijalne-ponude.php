<?php get_header();?>

<div id="main-content" class="main-content">

    <div id="primary" class="content-area">
        <article id="content" class="site-content" role="main">
            <?php
                // Start the Loop.
                while ( have_posts() ) {
                    
                    the_post();

                    get_template_part('template-parts/content', 'ponude');

                    the_content();

                }
            ?>
        </article><!-- #content -->
    </div><!-- #primary -->
</div><!-- #main-content -->
<?php get_footer();?>