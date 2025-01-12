<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package everest-ads
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Slick Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicon.png">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/assets/css/style.css">

    <?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e('Skip to content', ''); ?></a>
			<header>
        <nav>
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-4 logo-wrapper">
                        <a href="index.php">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-10 nav-items-wrapper d-flex justify-content-end">
                        <div id="close-menu" class="d-xl-none d-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="44"
                                height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="18" y1="6" x2="6" y2="18" />
                                <line x1="6" y1="6" x2="18" y2="18" />
                            </svg>
                        </div>
                        <ul class="nav-items">
                            <li class="nav-item"><a href="#">About</a></li>
                            <li class="nav-item"><a href="#">Features</a></li>
                            <li class="nav-item"><a href="#">Support</a></li>
                            <li class="nav-item"><a href="#">Contact</a></li>
                            <li class="nav-item"><a href="#">Login</a></li>
                            <li class="nav-item"><a href="#">Sign Up</a></li>
                        </ul>

                    </div>

                    <div class="col-2 d-xl-none burger-menu-wrapper position-centered">
                        <div class="burger-menu" id="burger-menu">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="4" y1="6" x2="20" y2="6" />
                                <line x1="4" y1="12" x2="20" y2="12" />
                                <line x1="4" y1="18" x2="20" y2="18" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

        <!-- #masthead -->