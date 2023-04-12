<?php
/*
Template Name: contact
*/
?>
<?php get_header(); ?>

<main class="main">
        <section class="contact">
            <div class="container">
                <div class="inner">
                    <div class="contact-content">
                        <h1 class="contact-title"><?php the_field('title'); ?></h1>
                        <h3 class="title-medium contact-subtitle"><?php the_field('subtitle'); ?></h3>

                        <div class="map">
                            <img  src="<?php the_field('contact_image'); ?>" alt="">
                        </div>

                        <p class="title-small contact-address"><?php the_field('address'); ?></p>
                    </div>

                    <div class="contact-form-wrapper">
                        <form action="" class="contact-form">
                            <h3>Project inquiry</h3>
                            <?php echo do_shortcode('[contact-form-7 id="182" title="contact page form"]') ?>

                            <!-- <div class="form-input-area contact-input-area">
                                <p>Phone</p>
                                <span><input type="text" id="phone"></span>
                            </div>

                            <div class="form-input-area contact-input-area">
                                <p>Email</p>
                                <span><input type="email" id="email"></span>
                            </div>

                            <div class="form-input-area contact-input-area">
                                <p>Tell us a bit about your project</p>
                                <span><textarea id="message"></textarea></span>
                            </div>

                            <button class="contact-submit-btn btn-large black" type="submit">SEND</button> -->
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>
</html>