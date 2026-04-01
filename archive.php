<?php
/**
 * archive.php — Portfolio archive + category archives
 */
get_header();
$post_type = get_post_type();
?>
<main style="padding:120px 6vw;min-height:60vh;background:#F8F8F6">

    <div class="eyebrow rv" style="margin-bottom:20px">
        <?php echo $post_type === 'wm_portfolio' ? esc_html__( 'Our Work', 'webmetro' ) : esc_html__( 'Archive', 'webmetro' ); ?>
    </div>
    <h1 class="stitle rv" style="margin-bottom:60px">
        <?php the_archive_title(); ?>
    </h1>

    <?php if ( $post_type === 'wm_portfolio' ) : ?>
    <!-- Portfolio archive grid -->
    <div class="port-grid" id="pgrid">
        <?php $i = 0; while ( have_posts() ) : the_post();
            $client  = get_post_meta( get_the_ID(), '_wm_client',  true );
            $url     = get_post_meta( get_the_ID(), '_wm_url',     true );
            $emoji   = get_post_meta( get_the_ID(), '_wm_emoji',   true ) ?: '🌐';
            $bgcolor = get_post_meta( get_the_ID(), '_wm_bgcolor', true ) ?: 'linear-gradient(135deg,#e4f4ed,#c2e8d4)';
            $cats    = get_the_terms( get_the_ID(), 'wm_portfolio_cat' );
        ?>
        <div class="pi rv" data-c="<?php echo $cats ? esc_attr( implode(' ', wp_list_pluck($cats,'slug') ) ) : ''; ?>"
             style="transition-delay:<?php echo $i * 0.06; ?>s">
            <div class="pi-in">
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="pi-bg" style="background:#f0f0ee">
                        <?php the_post_thumbnail( 'webmetro-portfolio', ['style'=>'width:100%;height:100%;object-fit:cover;position:absolute;inset:0'] ); ?>
                    </div>
                <?php else : ?>
                    <div class="pi-bg" style="background:<?php echo esc_attr($bgcolor); ?>"><?php echo esc_html($emoji); ?></div>
                <?php endif; ?>
                <div class="pi-ov">
                    <?php if ($cats) : ?>
                    <div class="pi-tags">
                        <?php foreach($cats as $cat) echo '<span class="pitag">'.esc_html($cat->name).'</span>'; ?>
                    </div>
                    <?php endif; ?>
                    <div class="pi-nm"><?php the_title(); ?></div>
                    <?php if ($client) echo '<div class="pi-cl">'.esc_html($client).'</div>'; ?>
                    <a class="pi-lk" href="<?php echo $url ? esc_url($url) : get_permalink(); ?>">
                        <?php esc_html_e('View Project','webmetro'); ?> <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <?php $i++; endwhile; ?>
    </div>

    <?php else : ?>
    <!-- Generic archive (blog categories etc) -->
    <div class="blog-grid">
        <?php $i = 0; while ( have_posts() ) : the_post(); ?>
        <div class="bcard rv" style="transition-delay:<?php echo $i * 0.1; ?>s">
            <?php if (has_post_thumbnail()) : ?>
                <div class="bthumb" style="background:#e8f0fe;overflow:hidden;padding:0">
                    <?php the_post_thumbnail('webmetro-blog',['style'=>'width:100%;height:100%;object-fit:cover']); ?>
                </div>
            <?php else : ?>
                <div class="bthumb" style="background:linear-gradient(135deg,#e8f0fe,#ccd8fc)">📝</div>
            <?php endif; ?>
            <div class="bcontent">
                <div class="bcat"><?php the_category(', '); ?></div>
                <h3><?php the_title(); ?></h3>
                <div class="bmeta">
                    <span><?php the_date('M j, Y'); ?></span>
                    <a class="rm" href="<?php the_permalink(); ?>">Read <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <?php $i++; endwhile; ?>
    </div>
    <?php endif; ?>

    <div style="margin-top:60px;text-align:center">
        <?php the_posts_pagination(['prev_text'=>'&larr; Previous','next_text'=>'Next &rarr;']); ?>
    </div>
</main>
<?php get_footer(); ?>
