<section class="section white testimonials">
            <div class="container">
                <div class="inner">
                    <h5 class="section-subtitle">TESTIMONIALS</h5>

                    <div class="text-content">
                        <h2>What our clients say</h2>
                    </div>

                    <div class="swiper testimonials-swiper">
                        <div class="swiper-wrapper">
                            <?php
                                global $post;
                                $myposts = get_posts([
                                    'numberposts' => 3,
                                    'category_name' => 'testimonials'
                                ]);
                                if ( $myposts ){
                                    foreach( $myposts as $post ) {
                                        setup_postdata($post);
                            ?>

                                <div class="swiper-slide">
                                    <div class="testimonial-slide">
                                        <p><?php the_title() ?></p>

                                        <div>
                                            <div class="actor-img"><?php the_post_thumbnail(); ?></div>
                                            <div class="testimonials-actor">
                                                <?php the_content() ?>
                                            </div>
                                        </div>
                                        <a href="" class="btn black">Case study</a>
                                    </div>
                                </div>

                            <?php
                                    }
                                }
                                wp_reset_postdata();
                            ?>
                        </div>

                        <div class="swiper-actions">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>