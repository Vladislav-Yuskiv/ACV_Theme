<?php
/*
Template Name: career
*/
?>
<?php get_header(); ?>

<main class="main">
        <section class="section career">
            <div class="container">
                <div class="inner">
                    <div class="career-grid">
                        <div class="text-content">
                            <h5 class="section-subtitle"><?php the_field('title') ?></h5>

                            <h2 class="title-big"><?php the_field('subtitle') ?></h2>

                            <div class="description">
                                <p><?php the_field('description') ?></p>
                            </div>
                        </div>

                        <div class="career-img first">
                            <img src="<?php the_field('image_1') ?>" alt="">
                        </div>

                        <div class="career-img second">
                            <img src="<?php the_field('image_2') ?>" alt="">

                            <div class="career-text">
                                <span>CAREER</span>
                                <span>CAREER</span>
                                <span>CAREER</span>
                                <span>CAREER</span>
                                <span>CAREER</span>
                            </div>
                        </div>

                        <div class="career-img third">
                            <img src="<?php the_field('image_3') ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section white job">
            <div class="container">
                <div class="inner job-inner">
                    <div class="text-content">
                        <h2 class="title-big"><?php the_field('job_title') ?></h2>

                        <div class="description">
                            <p><?php the_field('job_subtitle') ?></p>
                        </div>
                    </div>

                    <div class="job-grid">

                        <?php
                            global $post;
                            $myposts = get_posts([
                                'numberposts' => -1,
                                'post_type' => 'vacancies'
                            ]);
                            if ( $myposts ){
                                foreach( $myposts as $post ) {
                                    setup_postdata($post);
                        ?>

                            <div class="job-card">
                                <h3><?php echo get_field( 'job' ); ?></h3>

                                <p class="job-card-option"><span>Level:</span> <?php echo get_field( 'level' ); ?></p>
                                <p class="job-card-option"><span>Location:</span> <?php echo get_field( 'location' ); ?></p>

                                <p class="job-card-description"><?php echo get_field( 'description' ); ?></p>

                                <a href="" class="btn big black">read more</a>
                            </div>

                        <?php
                                }
                            }
                            wp_reset_postdata();
                        ?>

                    </div>
                </div>

                <div class="inner vacancy-inner">
                    <div class="text-content">
                        <h2 class="title-big"><?php the_field('form_title') ?></h2>

                        <div class="description">
                            <h4><?php the_field('form_subtitle') ?></h4>
                        </div>
                    </div>

                    <form action="" class="vacancy-form">
                    <?php echo do_shortcode('[contact-form-7 id="181" title="career form"]') ?>
                        <!-- <div class="contact-form-row">
                            <div class="form-input-area contact-input-area">
                                <p>First name</p>
                                <input type="text" id="firstname">
                            </div>

                            <div class="form-input-area contact-input-area">
                                <p>Last name</p>
                                <input type="text" id="lastname">
                            </div>
                        </div>

                        <div class="contact-form-row">
                            <div class="form-input-area contact-input-area">
                                <p>Email</p>
                                <input type="email" id="email">
                            </div>

                            <div class="form-input-area contact-input-area">
                                <p>Phone number</p>
                                <input type="text" id="phone">
                            </div>
                        </div>

                        <div class="contact-form-row optional">
                            <div class="form-input-area contact-input-area">
                                <p>Linkedin (optional)</p>
                                <input type="text" id="linkedin">
                            </div>

                            <div class="form-input-area contact-input-area">
                                <p>Skype (optional)</p>
                                <input type="text" id="skype">
                            </div>
                        </div>

                        <div class="contact-form-row flex-row-between optional">
                            <label for="" class="custom-file-input">
                                <input type="file" id="" accept=".doc, .docx, .rtf, .txt, .odt, .pdf">
                                <span>
                                    <img src="<?php the_field('attach_cv_image') ?>" alt="">
                                </span>

                                <div>
                                    <h4>Attach your CV</h4>
                                    <p>Format: doc, docx, rtf, txt, odt, pdf (5Mb max size)</p>
                                </div>
                            </label>

                            <button type="submit" class="btn-large black">send</button>
                        </div> -->
                    </form>
                </div>
            </div>
        </section>
    </main>

<?php get_footer('carieer'); ?>