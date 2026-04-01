<?php
/**
 * page.php — Standard page template
 */
get_header();
?>
<main style="padding:120px 6vw;max-width:900px;margin:0 auto;min-height:60vh">
    <?php while ( have_posts() ) : the_post(); ?>
    <article <?php post_class(); ?>>
        <h1 style="font-family:'Outfit',sans-serif;font-size:clamp(2rem,4vw,3.5rem);font-weight:900;letter-spacing:-1.5px;margin-bottom:40px;color:#0A0A0A">
            <?php the_title(); ?>
        </h1>
        <div style="font-size:1.05rem;line-height:1.85;color:#333">
            <?php the_content(); ?>
        </div>
    </article>
    <?php endwhile; ?>
</main>
<?php get_footer(); ?>
