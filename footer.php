<footer class="footer">
        <div class="container">
            <div class="inner">
                <h5 class="title-medium footer-subtitle"><?php the_field('footer_title', 7); ?></h5>

                <div class="text-content">
                    <h2><?php the_field('footer_subtitle', 7); ?></h2>
                    <h3 class="title-small"><?php the_field('footer_form_title', 7); ?></h3>
                </div>

                <form action="" class="footer-form">
                    <?php echo do_shortcode('[contact-form-7 id="38" title="Contact form 1"]') ?>
                </form>

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