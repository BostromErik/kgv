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
            <div class="kgv-google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d504.87235323285546!2d16.51364487326093!3d59.591564452066514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465e6176cba5f6a5%3A0x2f7590fc7e14270a!2sSlakterigatan%2010%2C%20721%2032%20V%C3%A4ster%C3%A5s!5e0!3m2!1ssv!2sse!4v1658691221464!5m2!1ssv!2sse" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
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