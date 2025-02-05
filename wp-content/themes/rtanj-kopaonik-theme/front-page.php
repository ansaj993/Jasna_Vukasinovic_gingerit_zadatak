<?php get_header();?>

<main>
    <section class="section">
        <div class="section__content section__content--dark">
            <h6 class="subtitle">NAJBOLJE CENE</h6>
            <h3 class="title">Specijalne ponude</h3>
        </div>

        <div class="query query--fullwidth">
            <?php 
                $offers = new WP_Query(array(
                    'post_type' => 'specijalne-ponude',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                ));

                if($offers->have_posts()){
                    while($offers->have_posts()){
                        $offers->the_post();
                        
                        get_template_part( 'template-parts/content', 'card-scaled' );
                        
                    }
                }
            ;?>
        </div>

        <a href="<?php echo get_home_url();?>" class="button section__button">Pogledaj ponudu</a>
    </section>

    <section class="section">
        <div class="section__content section__content--dark">
            <h6 class="subtitle">SAMO ZA NAJHRABRIJE</h6>
            <h3 class="title">Avanture na Kopu</h3>
            <p>Pobedi strahove i osvoji vrhove! Čekamo te na najlepšoj srpskoj planini, sa aktivnostima koje će razbuditi svaki atom tvog tela.</p>
        </div>

        <div class="query query--nofullwidth">
            <?php 
                $activities = new WP_Query(array(
                    'post_type' => 'aktivnosti',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                ));

                if($activities->have_posts()){
                    while($activities->have_posts()){
                        $activities->the_post();
                       
                        get_template_part( 'template-parts/content', 'card-bordered' );

                    }
                }
            ;?>
        </div>

        <a href="<?php echo get_home_url();?>" class="button section__button">Pogledaj ponudu</a>
    </section>

    <section class="section counter">
        <div class="counter__image counter__image--top">
            <img src="wp-content/themes/rtanj-kopaonik-theme/img/vector 2.png" alt="trees-img">
        </div>

        <div class="counter__image counter__image--main">
            <img src="wp-content/themes/rtanj-kopaonik-theme/img/bf54bd45cc3351c6f34f377468a24b0a.jpeg" alt="trees-bg"  class="counter__image">
        </div>
      
        <div class="section__content section__content--light counter__content">
            <div class="counter__item">
                <h2 class="title">2017</h2>
                <h5>metara nadmorske visine</h5>
            </div>

            <div class="counter__item">
                <h2 class="title">74</h2>
                <h5>sobe</h5>
            </div>

            <div class="counter__item">
                <h2 class="title">0</h2>
                <h5>metara do ski staze</h5>
            </div>
            
            <div class="counter__image counter__image--bottom">
                <img src="wp-content/themes/rtanj-kopaonik-theme/img/Vector.png" alt="trees-img">
            </div>
        </div>
    </section>

    <section class="section">
        <div class="section__content section__content--dark">
            <h6 class="subtitle">ZA NAJVEĆE HEDONISTE</h6>
            <h3 class="title">Sadržaj</h3>
            <p>Nakon što osvojiš vrhove, vreme je za opuštanje. Izaberi svoje zadovoljstvo.</p>
        </div>
      
        <div class="query query--nofullwidth">
            <?php 
                $contents = new WP_Query(array(
                    'post_type' => 'sadrzaj',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                ));

                if($contents->have_posts()){
                    while($contents->have_posts()){
                        $contents->the_post();

                        get_template_part( 'template-parts/content', 'card-bordered' );

                    }
                }
            ;?>
        </div>

        <a href="<?php echo get_home_url();?>" class="button section__button">Pogledaj ponudu</a>
    </section>

    <section class="section about section--dark">
        <div class="about__top">
            <img src="wp-content/themes/rtanj-kopaonik-theme/img/vector 3.png" alt="trees-img">
        </div>

        <div class="section__content section__content--light">
            <h6 class="subtitle">O nama</h6>
            <h3 class="title">Dom pravih avanturista, još od 1958. godine</h3>
            <p>Rtanj je smešten ispod vrha Mali Karaman na nadmorskoj visini od 1786 metara, na samoj skijaškoj stazi. Jedno je od najčuvenijih mesta na Kopaoniku i poznat kao dom naših olimpijaca, skijaša, planinara i ljudi dobre volje još od 1958. godine. Tokom svih ovih godina postao je ikona Srebrne planine, pre svega zbog specifične atmosfere, dobre zabave i planinskog duha koji u njemu živi.</p>
        </div>

        <div class="images">
            <div class="images__item">
                <img src="wp-content/themes/rtanj-kopaonik-theme/img/60a219591272e71a81544122d0ece457.png" alt="hero-image">
            </div>

            <div class="images__item">
                <img src="wp-content/themes/rtanj-kopaonik-theme/img/d9affb58c8fb7794e6426df9cd1fd78f.jpeg" alt="hero-image">
            </div>
        </div>
    </section>

    <section class="section">
        <div class="section__content section__content--dark">
            <h6 class="subtitle">Blog</h6>
            <h3 class="title">Budi u toku sa dešavanjima na Kopu</h3>
        </div>

        <div class="query query--fullwidth">
            <?php 
                $blog = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                ));

                if($blog->have_posts()){
                    while($blog->have_posts()){
                        $blog->the_post();

                        get_template_part( 'template-parts/content', 'card-scaled' );

                    }
                }
            ;?>
        </div>

        <a href="<?php echo get_home_url();?>" class="button section__button">Pogledaj ponudu</a>
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
                            <h5 class="title"><?php the_title();?></h5>
                            <?php the_content();?>
                        </div>
                    
                    <?php }
                }
            ;?>
        </div>

        <a href="<?php echo get_home_url();?>" class="button section__button">Učitaj sve</a>
    </section>
</main>

<?php get_footer();?>