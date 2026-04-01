<?php
$email     = wm_option( 'contact_email',   'info@webmetro.co.ke' );
$phone     = wm_option( 'contact_phone',   '+254 700 000 000' );
$tagline   = wm_option( 'footer_tagline',  'Nairobi-based digital agency helping African businesses grow through web, apps, and marketing — local insight, global standards.' );
$copyright = wm_option( 'footer_copyright','© ' . date('Y') . ' Web Metro Limited. All rights reserved.' );
$kuza_url  = wm_option( 'kuza_url',        'https://kuzaerp.com' );
$linkedin  = wm_option( 'social_linkedin', '#' );
$twitter   = wm_option( 'social_twitter',  '#' );
$instagram = wm_option( 'social_instagram','#' );
$facebook  = wm_option( 'social_facebook', '#' );
?>

<footer>
    <div class="ft">
        <div class="fb">
            <a class="fb-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <span>Web</span><strong>Metro</strong><span class="dot"></span>
            </a>
            <p><?php echo esc_html( $tagline ); ?></p>
            <div class="fsoc">
                <a class="soc" href="<?php echo esc_url( $linkedin );  ?>" aria-label="LinkedIn"  target="_blank" rel="noopener"><i class="fab fa-linkedin-in"></i></a>
                <a class="soc" href="<?php echo esc_url( $twitter );   ?>" aria-label="Twitter"   target="_blank" rel="noopener"><i class="fab fa-x-twitter"></i></a>
                <a class="soc" href="<?php echo esc_url( $instagram ); ?>" aria-label="Instagram" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
                <a class="soc" href="<?php echo esc_url( $facebook );  ?>" aria-label="Facebook"  target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>

        <div>
            <h4><?php esc_html_e( 'Services', 'webmetro' ); ?></h4>
            <ul>
                <li><a href="#services"><?php esc_html_e( 'Web Development',   'webmetro' ); ?></a></li>
                <li><a href="#services"><?php esc_html_e( 'App Development',   'webmetro' ); ?></a></li>
                <li><a href="#services"><?php esc_html_e( 'Digital Marketing', 'webmetro' ); ?></a></li>
                <li><a href="#contact"><?php esc_html_e( 'Free Consultation',  'webmetro' ); ?></a></li>
            </ul>
        </div>

        <div>
            <h4><?php esc_html_e( 'Products', 'webmetro' ); ?></h4>
            <ul>
                <li><a href="<?php echo esc_url( $kuza_url ); ?>" target="_blank" rel="noopener">KuzaERP &rarr;</a></li>
                <li><a href="#portfolio"><?php esc_html_e( 'Case Studies', 'webmetro' ); ?></a></li>
                <li><a href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ); ?>"><?php esc_html_e( 'Blog', 'webmetro' ); ?></a></li>
            </ul>
        </div>

        <div>
            <h4><?php esc_html_e( 'Company', 'webmetro' ); ?></h4>
            <ul>
                <li><a href="#process"><?php esc_html_e( 'How We Work',    'webmetro' ); ?></a></li>
                <li><a href="#testi"><?php esc_html_e( 'Client Stories',    'webmetro' ); ?></a></li>
                <li><a href="#contact"><?php esc_html_e( 'Contact Us',      'webmetro' ); ?></a></li>
                <li><a href="<?php echo esc_url( get_privacy_policy_url() ); ?>"><?php esc_html_e( 'Privacy Policy', 'webmetro' ); ?></a></li>
            </ul>
        </div>
    </div>

    <div class="fb-bot">
        <span><?php echo esc_html( $copyright ); ?></span>
        <span>Built in Nairobi &#x1F1F0;&#x1F1EA; &mdash; Building Digital Africa</span>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
