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
            ) );?>
        </nav>
   </header>
    
