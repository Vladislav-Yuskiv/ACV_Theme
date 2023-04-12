<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php the_title() ?></title>
    <link href="<?php bloginfo('template_url') ?>/assets/images/favicon.ico" rel="icon" />

    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="inner">
                <a href="<?php echo get_page_link(7); ?>" class="logo">
                    <img src="<?php the_field('logo', 7); ?>" alt="">
                </a>

                <nav class="menu">
                    <div class="menu-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <ul>
                        <li>
                            <a href="<?php echo get_page_link(7); ?>"><?php the_field('home', 7); ?></a>
                        </li>

                        <li>
                            <a href="<?php echo get_page_link(7) . '#services' ?>"><?php the_field('services', 7); ?></a>
                        </li>

                        <li>
                            <a href="<?php echo get_page_link(7) . '#projects' ?>"><?php the_field('case_study', 7); ?></a>
                        </li>

                        <li>
                            <a href="<?php echo get_page_link(105); ?>"><?php the_field('career', 7); ?></a>
                        </li>

                        <li>
                            <a href=""><?php the_field('blog', 7); ?></a>
                        </li>
                    </ul>
                </nav>

                <div class="btn"><a href="<?php echo get_page_link(79); ?>"><?php the_field('contact_button', 7); ?></a></div>
            </div>
        </div>
    </header>