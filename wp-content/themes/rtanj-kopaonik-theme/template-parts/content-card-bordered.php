<div class="card card--bordered">
    <img src="<?php echo get_the_post_thumbnail_url();?>" class="card__image">
    <a href="<?php echo get_the_permalink();?>">
        <h5 class="content card__content section__content--light"><?php the_title();?></h5>
    </a>
</div>