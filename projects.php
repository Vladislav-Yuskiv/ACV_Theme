<section class="section white projects" id="projects">
            <div class="container">
                <div class="inner">
                    <h5 class="section-subtitle">CASE STUDY</h5>

                    <div class="text-content">
                        <h2>Our projects</h2>
                    </div>

                    <div class="projects-grid">
                        <?php
                            global $post;
                            $myposts = get_posts([
                                'numberposts' => 4,
                                'category_name' => 'projects'
                            ]);
                            if ( $myposts ){
                                foreach( $myposts as $post ) {
                                    setup_postdata($post);
                        ?>

                            <div class="project-item">
                                <div class="project-item-image">
                                    <?php the_post_thumbnail(); ?>

                                    <a href="#" class="project-item-link">
                                        <p>Case Study <img src="<?php bloginfo('template_url') ?>/assets/images/arrow.svg" alt=""></p>
                                    </a>
                                </div>

                                <div class="project-item-description">
                                    <h3 class="title-medium"><?php the_title() ?></h3>
                                    <p><?php the_content() ?></p>
                                </div>
                            </div>

                        <?php
                                }
                            }
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </section>