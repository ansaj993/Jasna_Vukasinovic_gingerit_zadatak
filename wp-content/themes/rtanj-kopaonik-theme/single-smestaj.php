<?php get_header();?>

<div id="main-content" class="main-content">

    <div id="primary" class="content-area">
        <article id="content" class="smestaj site-content" role="main">
            <?php
                // Start the Loop.
                while ( have_posts() ) {
                    
                    the_post();

                    $images = get_field('gallery');
                    if( $images ){ ?>
                        <ul class="gallery">
                            <?php foreach( $images as $image ){ ?>
                                <li>
                                    <a href="<?php echo esc_url($image['url']); ?>">
                                        <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                <?php }  ?>
        </article><!-- #content -->
    </div><!-- #primary -->
</div><!-- #main-content -->
<?php get_footer();?>