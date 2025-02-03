<?php get_header();?>

<main>
    <section class="offers">
        <h6>NAJBOLJE CENE</h6>
        <h4>Specijalne ponude</h4>

        <div class="query-wrap offers__wrap">
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
                        
                        <img src="<?php echo get_the_post_thumbnail_url();?>">
                        <h5><?php the_title();?></h5>
                        <p><?php the_excerpt();?></p>
                        <a href="<?php echo get_the_permalink()?>">Detaljnije</a>
                    <?php }
                }
            ;?>
        </div>
    </section>

    <section class="activities">
        <h6>SAMO ZA NAJHRABRIJE</h6>
        <h4>Avanture na Kopu</h4>
        <p>Pobedi strahove i osvoji vrhove! Čekamo te na najlepšoj srpskoj planini, sa aktivnostima koje će razbuditi svaki atom tvog tela.</p>

        <div class="query-wrap activities__wrap">
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
                        <img src="<?php echo get_the_post_thumbnail_url();?>">
                        <h5><?php the_title();?></h5>
                    <?php }
                }
            ;?>
        </div>
    </section>

    <section class="contents">
        <h6>ZA NAJVEĆE HEDONISTE</h6>
        <h4>Sadržaj</h4>
        <p>Nakon što osvojiš vrhove, vreme je za opuštanje. Izaberi svoje zadovoljstvo.</p>

        <div class="query-wrap activities__wrap">
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
                        <img src="<?php echo get_the_post_thumbnail_url();?>">
                        <h5><?php the_title();?></h5>
                    <?php }
                }
            ;?>
        </div>
    </section>

    <section class="blog">
        <h6>Blog</h6>
        <h4>Budi u toku sa dešavanjima na Kopu</h4>

        <div class="query-wrap activities__wrap">
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
                        
                        <img src="<?php echo get_the_post_thumbnail_url();?>">
                        <h5><?php the_title();?></h5>
                        <p><?php the_excerpt();?></p>
                        <a href="<?php echo get_the_permalink()?>">Detaljnije</a>
                    <?php }
                }
            ;?>
        </div>
    </section>
</main>

<?php get_footer();?>