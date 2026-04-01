<?php
/**
 * Template Name: Homepage
 * Front page template — assembles all homepage sections
 */
get_header();
?>

<?php get_template_part( 'template-parts/hero' ); ?>
<?php get_template_part( 'template-parts/stats' ); ?>
<?php get_template_part( 'template-parts/services' ); ?>
<?php get_template_part( 'template-parts/kuza' ); ?>
<?php get_template_part( 'template-parts/portfolio' ); ?>
<?php get_template_part( 'template-parts/process' ); ?>
<?php get_template_part( 'template-parts/testimonials' ); ?>
<?php get_template_part( 'template-parts/blog-preview' ); ?>
<?php get_template_part( 'template-parts/contact' ); ?>

<?php get_footer(); ?>
