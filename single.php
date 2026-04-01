<?php get_header(); ?>
<main style="padding:120px 6vw;max-width:860px;margin:0 auto;min-height:60vh">
    <?php while ( have_posts() ) : the_post(); ?>
    <article <?php post_class(); ?>>
        <a href="<?php echo esc_url( get_permalink( get_option('page_for_posts') ) ); ?>"
           style="display:inline-flex;align-items:center;gap:6px;color:#888;font-size:.82rem;font-weight:600;text-decoration:none;margin-bottom:36px">
            <i class="fas fa-arrow-left"></i> All Posts
        </a>

        <?php $cats = get_the_category(); ?>
        <?php if ( $cats ) : ?>
        <div class="bcat" style="margin-bottom:14px"><?php echo esc_html( $cats[0]->name ); ?></div>
        <?php endif; ?>

        <h1 style="font-family:'Outfit',sans-serif;font-size:clamp(2rem,4vw,3.5rem);font-weight:900;letter-spacing:-1.5px;line-height:1.1;color:#0A0A0A;margin-bottom:20px">
            <?php the_title(); ?>
        </h1>

        <div style="display:flex;align-items:center;gap:16px;margin-bottom:48px;padding-bottom:24px;border-bottom:1px solid #E5E4E0">
            <span style="font-size:.82rem;color:#888"><?php the_date( 'M j, Y' ); ?></span>
            <span style="color:#E5E4E0">|</span>
            <span style="font-size:.82rem;color:#888"><?php echo esc_html( get_the_author() ); ?></span>
        </div>

        <?php if ( has_post_thumbnail() ) : ?>
        <div style="margin-bottom:48px;border-radius:16px;overflow:hidden">
            <?php the_post_thumbnail( 'webmetro-blog', [ 'style' => 'width:100%;height:auto;display:block' ] ); ?>
        </div>
        <?php endif; ?>

        <div class="wp-post-content" style="font-size:1.05rem;line-height:1.85;color:#333">
            <?php the_content(); ?>
        </div>

        <?php wp_link_pages(); ?>

        <div style="margin-top:60px;padding-top:40px;border-top:1px solid #E5E4E0;display:flex;gap:12px;flex-wrap:wrap">
            <?php the_tags( '<span style="font-size:.8rem;color:#888;font-weight:600">Tags: </span>', ', ', '' ); ?>
        </div>
    </article>

    <?php comments_template(); ?>
    <?php endwhile; ?>
</main>
<?php get_footer(); ?>
