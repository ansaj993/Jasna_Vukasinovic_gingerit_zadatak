<?php get_header();?>

<div id="main-content" class="main-content">

    <div id="primary" class="content-area">
        
        <?php 
        if(have_posts()){
            while(have_posts()){
                the_post();?>
                    <article id="content" class=" article site-content" role="main">
                        <div class="article__image">
                            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="blog-image"/>
                        </div>
                        <div class="article__body">
                            <h4><?php the_title();?></h4>
                            <p class="date"><?php echo get_the_date('d.m.Y.');?></p>
                            <p><?php the_excerpt()?></p>
                            <a href="<?php echo get_the_permalink()?>" class="article__link">Detaljnije</a>
                        </div>
                        
                    </article>
            <?php }
        };?>

    </div>
</div>

<?php get_footer();?>