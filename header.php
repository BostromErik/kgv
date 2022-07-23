<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
    <header class="kgv-header-container">
        <div class="container">
            <div class="kgv-social-icons">
                <?php
                    $social_media = get_field('social_media', 10);
                    if( !empty($social_media) ) :
                ?>
                    <a href="<?php echo $social_media["facebook_link"]; ?>"><i class="fa-brands fa-facebook"></i></a>
                    <a href="<?php echo $social_media["instagram_link"]; ?>"><i class="fa-brands fa-instagram"></i></a>
                <?php endif; ?>
            </div>
            <div class="kgv-logo-container">
                <?php 
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    
                    if ( has_custom_logo() ) {
                        echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                    } else {
                        echo '<h1>' . get_bloginfo('name') . '</h1>';
                    }
                ?>
            </div>
            <nav class="main-nav">
                <?php wp_nav_menu( 
                    array(
                        'theme_location' => 'main_menu',
                        'container' => false
                    )
                ); ?>
            </nav>
        </div>
    </header>
