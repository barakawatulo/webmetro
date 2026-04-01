<?php
$eyebrow  = wm_option( 'hero_eyebrow',     'Nairobi, Kenya — Building Digital Africa' );
$line1    = wm_option( 'hero_line1',       'We Grow' );
$line2    = wm_option( 'hero_line2',       'African' );
$line3    = wm_option( 'hero_line3',       'Businesses' );
$line4    = wm_option( 'hero_line4',       'Online.' );
$desc     = wm_option( 'hero_description', 'Web development, mobile apps & digital marketing that drive real growth — built by a Nairobi team with a global mindset.' );
$btn1txt  = wm_option( 'hero_btn1_text',   'See Our Work' );
$btn1url  = wm_option( 'hero_btn1_url',    '#portfolio' );
$btn2txt  = wm_option( 'hero_btn2_text',   'Talk to Us' );
$btn2url  = wm_option( 'hero_btn2_url',    '#contact' );
$badge    = wm_option( 'hero_badge_text',  'Trusted by 50+ Kenyan businesses' );
?>

<section id="hero">
    <div class="hero-wm" id="hwm">DIGITAL</div>
    <div class="h-scroll">Scroll Down</div>
    <div class="h-vline"></div>

    <div class="hero-content">
        <div>
            <div class="h-eye">
                <span class="h-eye-line"></span>
                <?php echo esc_html( $eyebrow ); ?>
            </div>
            <h1 class="h-hl" id="hhl">
                <span class="ln"><span class="lni"><?php echo esc_html( $line1 ); ?></span></span>
                <span class="ln"><span class="lni"><?php echo esc_html( $line2 ); ?></span></span>
                <span class="ln"><span class="lni grn"><?php echo esc_html( $line3 ); ?><span style="color:#0A0A0A"><?php echo ( substr( $line3, -2 ) === 'es' ) ? '' : ''; ?></span></span></span>
                <span class="ln"><span class="lni"><?php echo esc_html( $line4 ); ?></span></span>
            </h1>
        </div>

        <div class="h-right" id="hright">
            <p class="h-desc"><?php echo esc_html( $desc ); ?></p>
            <div class="h-btns">
                <a class="btn-blk" href="<?php echo esc_url( $btn1url ); ?>">
                    <?php echo esc_html( $btn1txt ); ?> <i class="fas fa-arrow-right" style="font-size:.75rem"></i>
                </a>
                <a class="btn-bdr" href="<?php echo esc_url( $btn2url ); ?>">
                    <?php echo esc_html( $btn2txt ); ?>
                </a>
            </div>
            <div class="h-badge">
                <span class="bdot"></span>
                <?php echo esc_html( $badge ); ?>
            </div>
        </div>
    </div>

    <!-- Marquee strip -->
    <div class="mq-strip">
        <div class="mq-inner">
            <?php
            $items = [ 'Web Development', 'App Development', 'Digital Marketing', 'KuzaERP', 'M-Pesa Integration', 'SEO & Growth', 'Nairobi Based' ];
            $all   = array_merge( $items, $items ); // duplicate for infinite loop
            foreach ( $all as $item ) :
            ?>
            <div class="mq-item">
                <span class="mq-dot"></span>
                <?php echo esc_html( $item ); ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
