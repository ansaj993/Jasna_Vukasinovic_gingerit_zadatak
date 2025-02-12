<?php
// The header of the theme 
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
            <div class="header__image--top">
                <img src="/wp-content/themes/rtanj-kopaonik-theme/img/1729073661301344.png" alt="hero-image">
            </div>
        <?php } else {
            if(!has_post_thumbnail() || is_archive() || is_home()){?>
                 <div class="header__image--top" style="background-color: #1C4259;">
                 </div>
            <?php } else {;?>
                <div class="header__image--top">
                    <?php echo get_the_post_thumbnail();?>
                </div>
            <?php }
        }; ?>

        <div class="menu-icon">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>

        <nav>
            <?php wp_nav_menu( array(
                'theme_location' => 'top-menu'
            ));?>
        </nav>
        
        <?php if(is_front_page()){ ;?>
            <div class="header__wrapper header__wrapper--light">
                <h1>Rani booking popust na rezervacije!</h1>
                <h4>Rezerviši sada svoj odmor i ostvari 10% popusta! Prepusti se najboljem što ova planina nudi, jer RTANJ JE KOP!</h4> 
            </div>

            <div class="booking-box">
                <h2>9.1</h2>
                <p>booking.com ranking</p>
            </div>
        <?php } else {;?>
           <?php if(is_archive()){?>
                <h1 class="header__wrapper header__wrapper--light"><?php post_type_archive_title();?></h1>
           <?php } else {;?>
                <h1 class="header__wrapper header__wrapper--light"><?php single_post_title();?></h1>
           <?php }
        };?>

        <div class="header__image--bottom">
            <img src="/wp-content/themes/rtanj-kopaonik-theme/img/Vector.png" alt="bottom-image">
        </div>
</header>
    
