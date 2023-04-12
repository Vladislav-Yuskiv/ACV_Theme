<section class="section services" id="services">
            <div class="container">
                <div class="inner">
                    <div class="text-content">
                        <h2><?php the_field('services_title'); ?></h2>

                        <div class="description">
                            <p><?php the_field('services_description'); ?></p>
                        </div>
                    </div>

                    <div class="services-grid">

                            <?php
                                global $post;
                                $myposts = get_posts([
                                    'numberposts' => -1,
                                    'category_name' => 'services',
                                    'orderby'           => 'date',
                                    'order'             => 'ASC',
                                ]);
                                if ( $myposts ){
                                    foreach( $myposts as $post ) {
                                        setup_postdata($post);
                            ?>

                                <?php the_content() ?>

                            <?php
                                    }
                                }
                                wp_reset_postdata();
                            ?>

                    </div>
                </div>
            </div>
        </section>