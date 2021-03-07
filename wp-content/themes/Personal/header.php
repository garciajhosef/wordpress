<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
        wp_head();
    ?>
</head>
<body>
    <?php
        wp_nav_menu( 
            array(
                'menu' => 'primary',
                'container' => '',
                'theme_location' => 'primary_menu',
                'items_wrap' => '<ul class="my_class">%3$s</ul>'
            )
        );
    ?>
    <h1><?php the_title(); ?></h1>