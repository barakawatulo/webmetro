<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- CURSOR -->
<div id="cur"></div>
<div id="cur-r"></div>
<button id="btop" aria-label="Back to top"><i class="fas fa-arrow-up"></i></button>

<!-- NAV -->
<nav id="nav" role="navigation" aria-label="Primary Navigation">
    <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php bloginfo( 'name' ); ?>">
        <?php
        if ( has_custom_logo() ) {
            the_custom_logo();
        } else {
            echo 'WebMetro<span class="dot"></span>';
        }
        ?>
    </a>

    <?php
    wp_nav_menu( [
        'theme_location' => 'primary',
        'container'      => false,
        'menu_class'     => 'nav-links',
        'items_wrap'     => '<ul class="nav-links">%3$s</ul>',
        'fallback_cb'    => function() {
            echo '<ul class="nav-links">
                <li><a href="#services">Services</a></li>
                <li><a href="#kuza">Products</a></li>
                <li><a href="#portfolio">Work</a></li>
                <li><a href="#process">Process</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>';
        },
    ] );
    ?>

    <a class="nav-cta" href="#contact"><?php esc_html_e( 'Get a Free Quote', 'webmetro' ); ?></a>
    <div class="ham" id="ham" aria-label="Toggle Menu" role="button" tabindex="0">
        <span></span><span></span><span></span>
    </div>
</nav>

<!-- MOBILE MENU -->
<div class="mob" id="mob" role="dialog" aria-modal="true" aria-label="Mobile Navigation">
    <a href="#services"><?php esc_html_e( 'Services',  'webmetro' ); ?></a>
    <a href="#portfolio"><?php esc_html_e( 'Work',     'webmetro' ); ?></a>
    <a href="#kuza"><?php esc_html_e( 'Products',      'webmetro' ); ?></a>
    <a href="#blog"><?php esc_html_e( 'Blog',          'webmetro' ); ?></a>
    <a href="#contact"><?php esc_html_e( 'Contact',    'webmetro' ); ?></a>
</div>
