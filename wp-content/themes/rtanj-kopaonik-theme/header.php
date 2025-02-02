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
   <header class="header">
        <?php if(is_front_page()){?>
            <div class="header__image">
                <img src="wp-content/themes/rtanj-kopaonik-theme/img/1729073661301344.png" alt="hero-image">
            </div>
        <?php } ?>
        <nav>
            <?php wp_nav_menu( array(
                'theme_location' => 'top-menu'
            ));?>
        </nav>
        
        <?php if(is_front_page()){ ;?>
            <div class="header__wrapper">
                <h1>Rani booking popust na rezervacije!</h1>
                <h4>Rezerviši sada svoj odmor i ostvari 10% popusta! Prepusti se najboljem što ova planina nudi, jer RTANJ JE KOP!</h4> 
            </div>

            <div class="booking-box">
                <h2>9.1</h2>
                <p>booking.com ranking</p>
            </div>
        <?php } else {;?>
            <h1><?php the_title();?></h1>
        <?php };?>
    </header>
    
