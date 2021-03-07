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
    <?php
        echo get_bloginfo( 'name' );
        if(function_exists('the_custom_logo')) {
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src( $custom_logo_id );
        } 
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex">
                <div class="logo_conatiner">
                    <img class="img-fluid" src="<?php echo $logo[0];  ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <h1><?php the_title(); ?></h1>