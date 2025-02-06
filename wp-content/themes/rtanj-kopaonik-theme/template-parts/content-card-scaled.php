<div class="card card--scaled">
    <img src="<?php echo get_the_post_thumbnail_url();?>" class="card__image">
    <div class="content card__content section__content--light">
        <h5 class="title"><?php the_title();?></h5>
        <p><?php echo get_the_excerpt();?></p>
        <a href="<?php echo get_the_permalink()?>">Detaljnije</a>
        <div class="card__bottom">
            <?php if(( get_post_type() == 'specijalne-ponude' )){ 
                get_template_part('template-parts/content', 'ponude');
            } else {?>
                <p><?php echo get_the_date('d.m.Y');?></p>
            <?php } ?>
        </div>
    </div>
</div>