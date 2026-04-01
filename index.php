<?php
/**
 * index.php — Blog listing fallback
 */
get_header();
?>
<main id="main" style="padding:120px 6vw;background:#F8F8F6;min-height:60vh">
    <div class="eyebrow rv" style="margin-bottom:20px">Blog</div>
    <h1 class="stitle rv">Latest Posts</h1>
    <div class="blog-grid" style="margin-top:48px">
        <?php if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                $cats     = get_the_category();
                $cat_name = $cats ? $cats[0]->name : 'Insights';
        ?>
        <div class="bcard">
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="bthumb" style="background:#e8f0fe;overflow:hidden;padding:0">
                    <?php the_post_thumbnail( 'webmetro-blog', [ 'style' => 'width:100%;height:100%;object-fit:cover' ] ); ?>
                </div>
            <?php else : ?>
                <div class="bthumb" style="background:linear-gradient(135deg,#e8f0fe,#ccd8fc)">📝</div>
            <?php endif; ?>
            <div class="bcontent">
                <div class="bcat"><?php echo esc_html( $cat_name ); ?></div>
                <h3><?php the_title(); ?></h3>
                <p style="color:#555;font-size:.92rem;line-height:1.7;margin-bottom:12px"><?php the_excerpt(); ?></p>
                <div class="bmeta">
                    <span><?php the_date( 'M j, Y' ); ?></span>
                    <a class="rm" href="<?php the_permalink(); ?>">Read <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <?php endwhile;
        else : ?>
            <p style="color:#888">No posts found. <a href="<?php echo esc_url( admin_url('post-new.php') ); ?>">Write your first post &rarr;</a></p>
        <?php endif; ?>
    </div>
    <div style="margin-top:60px">
        <?php the_posts_pagination( [ 'prev_text' => '&larr; Older', 'next_text' => 'Newer &rarr;' ] ); ?>
    </div>
</main>
<?php get_footer(); ?>
