<?php get_header();?>

<main>
    <section class="section">
        <div class="section__content">
            <h6>NAJBOLJE CENE</h6>
            <h3>Specijalne ponude</h3>
        </div>

        <div class="section__query section__query--fullwidth">
            <?php 
                $offers = new WP_Query(array(
                    'post_type' => 'specijalne-ponude',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                ));

                if($offers->have_posts()){
                    while($offers->have_posts()){
                        $offers->the_post();
                        ?>
                        
                        <div class="card card--scaled">
                            <img src="<?php echo get_the_post_thumbnail_url();?>" class="card__image">
                            <div class="content card__content">
                                <h5><?php the_title();?></h5>
                                <?php the_excerpt();?>
                                <a href="<?php echo get_the_permalink()?>">Detaljnije</a>
                            </div>
                        </div>
                    <?php }
                }
            ;?>
        </div>

        <a href="<?php echo get_home_url();?>" class="button section__button">Pogledaj ponudu</a>
    </section>

    <section class="section">
        <div class="section__content">
            <h6>SAMO ZA NAJHRABRIJE</h6>
            <h3>Avanture na Kopu</h3>
            <p>Pobedi strahove i osvoji vrhove! Čekamo te na najlepšoj srpskoj planini, sa aktivnostima koje će razbuditi svaki atom tvog tela.</p>
        </div>

        <div class="section__query section__query--nofullwidth">
            <?php 
                $activities = new WP_Query(array(
                    'post_type' => 'aktivnosti',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                ));

                if($activities->have_posts()){
                    while($activities->have_posts()){
                        $activities->the_post();
                        ?>

                        <div class="card card--bordered">
                            <img src="<?php echo get_the_post_thumbnail_url();?>" class="card__image">
                            <h5 class="content card__content"><?php the_title();?></h5>
                        </div>
                    <?php }
                }
            ;?>
        </div>

        <a href="<?php echo get_home_url();?>" class="button section__button">Pogledaj ponudu</a>
    </section>

    <section class="section">
        <div class="section__content">
            <h6>ZA NAJVEĆE HEDONISTE</h6>
            <h3>Sadržaj</h3>
            <p>Nakon što osvojiš vrhove, vreme je za opuštanje. Izaberi svoje zadovoljstvo.</p>
        </div>
      
        <div class="section__query section__query--nofullwidth">
            <?php 
                $contents = new WP_Query(array(
                    'post_type' => 'sadrzaj',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                ));

                if($contents->have_posts()){
                    while($contents->have_posts()){
                        $contents->the_post();
                        ?>

                        <div class="card card--bordered">
                            <img src="<?php echo get_the_post_thumbnail_url();?>" class="card__image">
                            <h5 class="content card__content"><?php the_title();?></h5>
                        </div>
                    <?php }
                }
            ;?>
        </div>

        <a href="<?php echo get_home_url();?>" class="button section__button">Pogledaj ponudu</a>
    </section>

    <section class="section">
        <div class="section__content">
            <h6>Blog</h6>
            <h3>Budi u toku sa dešavanjima na Kopu</h3>
        </div>

        <div class="section__query section__query--fullwidth">
            <?php 
                $blog = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                ));

                if($blog->have_posts()){
                    while($blog->have_posts()){
                        $blog->the_post();
                        ?>

                        <div class="card card--scaled">
                            <img src="<?php echo get_the_post_thumbnail_url();?>" class="card__image">
                            <div class="content card__content">
                                <h5><?php the_title();?></h5>
                                <?php the_excerpt();?>
                                <a href="<?php echo get_the_permalink()?>">Detaljnije</a>
                            </div>
                        </div>
                    <?php }
                }
            ;?>
        </div>

        <a href="<?php echo get_home_url();?>" class="button section__button">Pogledaj ponudu</a>
    </section>
</main>

<?php get_footer();?>