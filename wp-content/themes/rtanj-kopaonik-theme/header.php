<?php
/* The header of the theme */
?>

<!DOCTYPE html>
<html lang="en">
<head <?php language_attributes();?>>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
   <header>
        <nav>
            <?php wp_nav_menu( array(
                'theme_location' => 'top-menu'
            ));?>
        </nav>
        
        <?php if(is_front_page()){ ;?>
            <h1>RANI BOOKING POPUST NA REZERVACIJE!</h1>
            <p>Rezerviši sada svoj odmor i ostvari 10% popusta! Prepusti se najboljem što ova planina nudi, jer RTANJ JE KOP!</p>
            
            <div class="booking-box">
                <h2>9.1</h2>
                <p>BOOKING.COM RANKING</p>
            </div>
        <?php } else {;?>
            <h1><?php the_title();?></h1>
        <?php };?>
    </header>
    
