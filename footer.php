<?php wp_footer(); ?>
</body>
<?php
    $contact_information = get_field('contact_information', 10);
?>
<footer class="kgv-footer">
    <div class="kgv-footer-container container">
        <div class="kgv-single-footer-item">
            <h3>Kontakt</h3>
            <?php if( !empty($contact_information) ) : ?>
                <div class="kgv-location">
                    <p><?php echo $contact_information["address"]; ?></p>
                    <p><?php echo $contact_information["district"]; ?>, <?php echo $contact_information["zipcode"]; ?></p>
                </div>
                <a href="tel:<?php echo $contact_information["phonenumber"]; ?>"><?php echo $contact_information["phonenumber"]; ?></a>
            <?php endif; ?>
        </div>
        <div class="kgv-single-footer-item">
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
        </div>
        <div class="kgv-single-footer-item">
           
            <div class="kgv-social-icons">
                <?php
                    $social_media = get_field('social_media', 10);
                    if( !empty($social_media) ) :
                ?>
                    <a href="<?php echo $social_media["facebook_link"]; ?>"><i class="fa-brands fa-facebook"></i></a>
                    <a href="<?php echo $social_media["instagram_link"]; ?>"><i class="fa-brands fa-instagram"></i></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
</html>