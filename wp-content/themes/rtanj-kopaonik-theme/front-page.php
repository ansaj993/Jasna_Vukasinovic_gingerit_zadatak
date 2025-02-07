<?php get_header();?>

<main>
    <?php 
    get_template_part( 'template-parts/content', 'booking' );
    ?>

    <section class="section">
        <div class="section__content section__content--dark">
            <h6 class="subtitle">NAJBOLJE CENE</h6>
            <h3 class="title">Specijalne ponude</h3>
        </div>

        <div class="query query--carousel query--fullwidth">
            <i class="fa-solid fa-angle-left"></i>

            <div class="query__wrap">
                <?php 
                    $offers = new WP_Query(array(
                        'post_type' => 'specijalne-ponude',
                        'order' => 'ASC',
                        'posts_per_page' => 6
                    ));

                    if($offers->have_posts()){
                        while($offers->have_posts()){
                            $offers->the_post();
                            
                            get_template_part( 'template-parts/content', 'card-scaled' );
                            
                        }
                    }

                    wp_reset_query();
                ;?>
            </div>
            
            <i class="fa-solid fa-angle-right"></i>
        </div>

        <a href="<?php echo get_permalink( get_page_by_path( 'specijalne-ponude' ) ); ?>" class="button section__button">Pogledaj ponudu</a>
    </section>

    <section class="section">
        <div class="section__content section__content--dark">
            <h6 class="subtitle">SAMO ZA NAJHRABRIJE</h6>
            <h3 class="title">Avanture na Kopu</h3>
            <p>Pobedi strahove i osvoji vrhove! Čekamo te na najlepšoj srpskoj planini, sa aktivnostima koje će razbuditi svaki atom tvog tela.</p>
        </div>

        <div class="query query--carousel query--nofullwidth">
            <i class="fa-solid fa-angle-left"></i>

            <?php 
                $activities = new WP_Query(array(
                    'post_type' => 'aktivnosti',
                    'posts_per_page' => 6,
                    'order' => 'ASC'
                ));?>

            <div class="query__wrap">

                <?php 
                if($activities->have_posts()){
                    while($activities->have_posts()){
                        $activities->the_post();
                    
                        get_template_part( 'template-parts/content', 'card-bordered' );

                    }
                };
                wp_reset_query();?>
                
            </div>
            <i class="fa-solid fa-angle-right"></i>

        </div>

        <a href="<?php echo get_permalink( get_page_by_path( 'aktivnosti' ) ); ?>" class="button section__button">Pogledaj ponudu</a>
    </section>

    <?php get_template_part( 'template-parts/content', 'counter' );?>
   
    <section class="section">
        <div class="section__content section__content--dark">
            <h6 class="subtitle">ZA NAJVEĆE HEDONISTE</h6>
            <h3 class="title">Sadržaj</h3>
            <p>Nakon što osvojiš vrhove, vreme je za opuštanje. Izaberi svoje zadovoljstvo.</p>
        </div>
      
        <div class="query query--carousel query--nofullwidth">
            <i class="fa-solid fa-angle-left"></i>

            <?php 
                $contents = new WP_Query(array(
                    'post_type' => 'sadrzaji',
                    'posts_per_page' => 6,
                    'order' => 'ASC'
                ));?>

            <div class="query__wrap">

                <?php
                if($contents->have_posts()){
                    while($contents->have_posts()){
                        $contents->the_post();

                        get_template_part( 'template-parts/content', 'card-bordered' );

                    }
                };

                wp_reset_query();
                ?>
            </div>
            <i class="fa-solid fa-angle-right"></i>
        </div>

        <a href="<?php echo get_permalink( get_page_by_path( 'sadrzaji' ) ); ?>" class="button section__button">Pogledaj ponudu</a>
    </section>

    <section class="section">
        <div class="section__content section__content--dark">
            <h6 class="subtitle">Galerija</h6>
            <h3 class="title">Vaš savršen odmor u slikama</h3>
        </div>

        <div class="query query--gallery-titles">
            <?php 
                $gallery = new WP_Query(array(
                    'post_type' => 'galerija',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                ));

                if($gallery->have_posts()){
                    while($gallery->have_posts()){
                        $gallery->the_post();
                        ?>

                        <h5 class="query__title"><?php the_title();?></h5>
                        
                    <?php }
                }
                wp_reset_query();
            ;?>
        </div>

        <div class="query query--carousel query--fullwidth">
            <i class="fa-solid fa-angle-left"></i>

            <div class="query__wrap query__wrap--gallery">
                <?php 
                    $gallery = new WP_Query(array(
                        'post_type' => 'smestaj',
                        'posts_per_page' => -1,
                        'order' => 'ASC'
                    ));

                    if($gallery->have_posts()){
                        while($gallery->have_posts()){
                            $gallery->the_post();
                            ?>

                            <?php 
                                $images = get_field('gallery');
                                if( $images ){ ?>
                                    <ul class="gallery" id="<?php echo get_the_title();?>">
                                        <?php foreach( $images as $image ){ ?>
                                            <li class="card">
                                                <a href="<?php echo esc_url($image['url']); ?>">
                                                    <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                        <?php }
                    }

                    wp_reset_query();
                ;?>
            </div>
            
            <i class="fa-solid fa-angle-right"></i>
        </div>
    </section>

    <section class="section">
        <div class="section__content section__content--dark">
            <h6 class="subtitle">Iskustva korisnika</h6>
            <h3 class="title">Pogledaj šta naši gosti kažu o nama</h3>
        </div>

        <div class="query query--carousel query--nofullwidth">
            <i class="fa-solid fa-angle-left"></i>

            <?php 
                $testimonials = new WP_Query(array(
                    'post_type' => 'iskustva',
                    'posts_per_page' => 6,
                    'order' => 'ASC'
                ));?>

                <div class="query__wrap">
                    <?php
                    if($testimonials->have_posts()){
                        while($testimonials->have_posts()){
                            $testimonials->the_post();
                            ?>

                            <div class="card testimonial">
                                <i class="fa-solid fa-quote-left"></i>
                                <p>
                                    <?php the_field('testimonial_text');?>
                                </p>

                                <p class="name">
                                    <?php the_field('testimonial_name');?>
                                </p>
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                        
                        <?php }
                    }
                    wp_reset_query();
                ;?>
            </div>
            <i class="fa-solid fa-angle-right"></i>                
        </div>
    </section>

    <?php get_template_part( 'template-parts/content', 'about' );?>

    <section class="section">
        <div class="section__content section__content--dark">
            <h6 class="subtitle">Blog</h6>
            <h3 class="title">Budi u toku sa dešavanjima na Kopu</h3>
        </div>

        <div class="query query--carousel query--fullwidth">
            <i class="fa-solid fa-angle-left"></i>
            <div class="query__wrap">
                <?php 
                    $blog = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 6,
                        'order' => 'ASC',
                    ));

                    if($blog->have_posts()){
                        while($blog->have_posts()){
                            $blog->the_post();

                            get_template_part( 'template-parts/content', 'card-scaled' );

                        }
                    }

                    wp_reset_query();
                ;?>
            </div>
            
            <i class="fa-solid fa-angle-right"></i>
        </div>

        <a href="<?php echo get_permalink( get_page_by_path( 'blog' ) ); ?>" class="button section__button">Pogledaj ponudu</a>
    </section>

    <section class="section">
        <div class="section__content section__content--dark">
            <h6 class="subtitle">Česta pitanja</h6>
            <h3 class="title">Imate Pitanja? Imamo Odgovore!</h3>
        </div>

        <div class="query query--faq">
            <?php 
                $blog = new WP_Query(array(
                    'post_type' => 'cesta-pitanja',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                ));

                if($blog->have_posts()){
                    while($blog->have_posts()){
                        $blog->the_post();
                        ?>

                        <div class="faq section__content--dark">
                            <h5 class="title"><?php the_title();?><i class="fa-solid fa-angle-down"></i></h5>
                            <?php the_content();?>
                        </div>
                    
                    <?php }
                }

                wp_reset_query();
            ;?>
        </div>

        <a href="#" class="button section__button">Učitaj sve <i class="fa-solid fa-angle-down"></i></a>
    </section>
</main>

<?php get_footer();?>