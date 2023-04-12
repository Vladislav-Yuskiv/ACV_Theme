<footer class="footer">
        <div class="container">
            <div class="inner">
            <div class="footer-bottom-content">
                    <div class="footer-bottom-content-top">
                        <a href="<?php echo get_page_link(7); ?>" class="logo-footer">
                            <img src="<?php the_field('logo', 7); ?>" alt="">
                            <p>ArtCodeVision</p>
                        </a>

                        <a class="footer-mail" href="mailto::<?php the_field('email_address', 7); ?>"><?php the_field('email_address', 7); ?></a>
                    </div>

                    <div class="footer-bottom-content-bottom">
                        <p><?php the_field('footer_address', 7); ?></p>

                        <a class="footer-phone" href="tel:<?php the_field('phone_number_tel', 7); ?>"><?php the_field('phone_number_text', 7); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>

</body>
</html>