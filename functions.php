<?php
/**
 * WebMetro Theme — functions.php
 * Registers everything: CPTs, Customizer, menus, scripts, ACF fields
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'WEBMETRO_VERSION', '1.0.0' );
define( 'WEBMETRO_DIR', get_template_directory() );
define( 'WEBMETRO_URI', get_template_directory_uri() );

/* ═══════════════════════════════════════════════════════════
   1. THEME SETUP
═══════════════════════════════════════════════════════════ */
function webmetro_setup() {
    load_theme_textdomain( 'webmetro', WEBMETRO_DIR . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'gallery', 'caption', 'style', 'script' ] );
    add_theme_support( 'custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ] );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );

    register_nav_menus( [
        'primary' => __( 'Primary Navigation', 'webmetro' ),
        'footer'  => __( 'Footer Navigation',  'webmetro' ),
    ] );

    add_image_size( 'webmetro-portfolio', 800, 600, true );
    add_image_size( 'webmetro-blog',      720, 480, true );
    add_image_size( 'webmetro-hero',     1920, 1080, true );
}
add_action( 'after_setup_theme', 'webmetro_setup' );

/* ═══════════════════════════════════════════════════════════
   2. ENQUEUE SCRIPTS & STYLES
═══════════════════════════════════════════════════════════ */
function webmetro_assets() {
    // Google Fonts
    wp_enqueue_style(
        'webmetro-fonts',
        'https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Inter:wght@300;400;500;600&display=swap',
        [],
        null
    );

    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
        [],
        '6.5.0'
    );

    // Main theme CSS
    wp_enqueue_style(
        'webmetro-main',
        WEBMETRO_URI . '/assets/css/main.css',
        [ 'webmetro-fonts', 'font-awesome' ],
        WEBMETRO_VERSION
    );

    // Main theme JS
    wp_enqueue_script(
        'webmetro-main',
        WEBMETRO_URI . '/assets/js/main.js',
        [],
        WEBMETRO_VERSION,
        true
    );

    // Pass PHP data to JS
    wp_localize_script( 'webmetro-main', 'webmetroData', [
        'ajaxUrl'   => admin_url( 'admin-ajax.php' ),
        'nonce'     => wp_create_nonce( 'webmetro_nonce' ),
        'siteUrl'   => get_site_url(),
        'themeUri'  => WEBMETRO_URI,
    ] );

    // Comments
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'webmetro_assets' );

/* ═══════════════════════════════════════════════════════════
   3. CUSTOM POST TYPES
═══════════════════════════════════════════════════════════ */
function webmetro_register_cpts() {

    // ── SERVICES ──────────────────────────────────────────
    register_post_type( 'wm_service', [
        'labels'      => [
            'name'          => __( 'Services',       'webmetro' ),
            'singular_name' => __( 'Service',        'webmetro' ),
            'add_new_item'  => __( 'Add New Service', 'webmetro' ),
            'edit_item'     => __( 'Edit Service',    'webmetro' ),
        ],
        'public'       => true,
        'show_in_rest' => true,
        'supports'     => [ 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ],
        'menu_icon'    => 'dashicons-admin-tools',
        'has_archive'  => false,
        'rewrite'      => [ 'slug' => 'services' ],
        'menu_position'=> 5,
    ] );

    // ── PORTFOLIO ─────────────────────────────────────────
    register_post_type( 'wm_portfolio', [
        'labels'      => [
            'name'          => __( 'Portfolio',          'webmetro' ),
            'singular_name' => __( 'Project',            'webmetro' ),
            'add_new_item'  => __( 'Add New Project',    'webmetro' ),
            'edit_item'     => __( 'Edit Project',       'webmetro' ),
        ],
        'public'       => true,
        'show_in_rest' => true,
        'supports'     => [ 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ],
        'menu_icon'    => 'dashicons-portfolio',
        'has_archive'  => true,
        'rewrite'      => [ 'slug' => 'portfolio' ],
        'menu_position'=> 6,
    ] );

    // Portfolio taxonomy: Category
    register_taxonomy( 'wm_portfolio_cat', 'wm_portfolio', [
        'labels'       => [
            'name'          => __( 'Project Categories', 'webmetro' ),
            'singular_name' => __( 'Category',           'webmetro' ),
        ],
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite'      => [ 'slug' => 'portfolio-category' ],
    ] );

    // ── TESTIMONIALS ──────────────────────────────────────
    register_post_type( 'wm_testimonial', [
        'labels'      => [
            'name'          => __( 'Testimonials',       'webmetro' ),
            'singular_name' => __( 'Testimonial',        'webmetro' ),
            'add_new_item'  => __( 'Add New Testimonial', 'webmetro' ),
            'edit_item'     => __( 'Edit Testimonial',   'webmetro' ),
        ],
        'public'       => false,
        'show_ui'      => true,
        'show_in_rest' => true,
        'supports'     => [ 'title', 'editor', 'page-attributes' ],
        'menu_icon'    => 'dashicons-format-quote',
        'menu_position'=> 7,
    ] );
}
add_action( 'init', 'webmetro_register_cpts' );

/* ═══════════════════════════════════════════════════════════
   4. CUSTOMIZER — THEME OPTIONS
═══════════════════════════════════════════════════════════ */
function webmetro_customizer( $wp_customize ) {

    // ── PANEL: WebMetro Settings ───────────────────────────
    $wp_customize->add_panel( 'webmetro_panel', [
        'title'    => __( 'WebMetro Settings', 'webmetro' ),
        'priority' => 30,
    ] );

    // ── SECTION: Hero ──────────────────────────────────────
    $wp_customize->add_section( 'webmetro_hero', [
        'title' => __( 'Hero Section', 'webmetro' ),
        'panel' => 'webmetro_panel',
    ] );
    webmetro_add_setting( $wp_customize, 'hero_eyebrow',      'Nairobi, Kenya — Building Digital Africa' );
    webmetro_add_setting( $wp_customize, 'hero_line1',        'We Grow' );
    webmetro_add_setting( $wp_customize, 'hero_line2',        'African' );
    webmetro_add_setting( $wp_customize, 'hero_line3',        'Businesses' );
    webmetro_add_setting( $wp_customize, 'hero_line4',        'Online.' );
    webmetro_add_setting( $wp_customize, 'hero_description',  'Web development, mobile apps & digital marketing that drive real growth — built by a Nairobi team with a global mindset.' );
    webmetro_add_setting( $wp_customize, 'hero_btn1_text',    'See Our Work' );
    webmetro_add_setting( $wp_customize, 'hero_btn1_url',     '#portfolio' );
    webmetro_add_setting( $wp_customize, 'hero_btn2_text',    'Talk to Us' );
    webmetro_add_setting( $wp_customize, 'hero_btn2_url',     '#contact' );
    webmetro_add_setting( $wp_customize, 'hero_badge_text',   'Trusted by 50+ Kenyan businesses' );

    foreach ( [ 'hero_eyebrow', 'hero_line1', 'hero_line2', 'hero_line3', 'hero_line4', 'hero_description', 'hero_btn1_text', 'hero_btn1_url', 'hero_btn2_text', 'hero_btn2_url', 'hero_badge_text' ] as $key ) {
        $wp_customize->add_control( $key, [
            'label'   => ucwords( str_replace( '_', ' ', str_replace( 'hero_', '', $key ) ) ),
            'section' => 'webmetro_hero',
            'type'    => ( strpos( $key, 'description' ) !== false ) ? 'textarea' : 'text',
        ] );
    }

    // ── SECTION: Stats ─────────────────────────────────────
    $wp_customize->add_section( 'webmetro_stats', [
        'title' => __( 'Stats Bar', 'webmetro' ),
        'panel' => 'webmetro_panel',
    ] );
    $stats = [
        [ 'stat1_number', '50+', 'Stat 1 Number' ],
        [ 'stat1_label',  'Projects Delivered', 'Stat 1 Label' ],
        [ 'stat2_number', '5+',  'Stat 2 Number' ],
        [ 'stat2_label',  'Years in Business',  'Stat 2 Label' ],
        [ 'stat3_number', '3',   'Stat 3 Number' ],
        [ 'stat3_label',  'Core Services',      'Stat 3 Label' ],
        [ 'stat4_number', '98%', 'Stat 4 Number' ],
        [ 'stat4_label',  'Client Satisfaction','Stat 4 Label' ],
    ];
    foreach ( $stats as [ $key, $default, $label ] ) {
        webmetro_add_setting( $wp_customize, $key, $default );
        $wp_customize->add_control( $key, [ 'label' => $label, 'section' => 'webmetro_stats', 'type' => 'text' ] );
    }

    // ── SECTION: Contact Details ────────────────────────────
    $wp_customize->add_section( 'webmetro_contact', [
        'title' => __( 'Contact Details', 'webmetro' ),
        'panel' => 'webmetro_panel',
    ] );
    $contacts = [
        [ 'contact_address',   'Nairobi, Kenya',         'Address' ],
        [ 'contact_email',     'info@webmetro.co.ke',    'Email' ],
        [ 'contact_phone',     '+254 700 000 000',       'Phone' ],
        [ 'contact_whatsapp',  '254700000000',           'WhatsApp Number (no + or spaces)' ],
    ];
    foreach ( $contacts as [ $key, $default, $label ] ) {
        webmetro_add_setting( $wp_customize, $key, $default );
        $wp_customize->add_control( $key, [ 'label' => $label, 'section' => 'webmetro_contact', 'type' => 'text' ] );
    }

    // ── SECTION: Social Media ──────────────────────────────
    $wp_customize->add_section( 'webmetro_social', [
        'title' => __( 'Social Media Links', 'webmetro' ),
        'panel' => 'webmetro_panel',
    ] );
    foreach ( [ 'linkedin', 'twitter', 'instagram', 'facebook' ] as $network ) {
        webmetro_add_setting( $wp_customize, "social_{$network}", '' );
        $wp_customize->add_control( "social_{$network}", [
            'label'   => ucfirst( $network ) . ' URL',
            'section' => 'webmetro_social',
            'type'    => 'url',
        ] );
    }

    // ── SECTION: KuzaERP Spotlight ─────────────────────────
    $wp_customize->add_section( 'webmetro_kuza', [
        'title' => __( 'KuzaERP Section', 'webmetro' ),
        'panel' => 'webmetro_panel',
    ] );
    webmetro_add_setting( $wp_customize, 'kuza_title',       'Meet KuzaERP. Built for Africa.' );
    webmetro_add_setting( $wp_customize, 'kuza_description', 'Manage inventory, finance, sales, HR and more in one platform purpose-built for Kenyan and African businesses. Stop fighting foreign software.' );
    webmetro_add_setting( $wp_customize, 'kuza_url',         'https://kuzaerp.com' );
    webmetro_add_setting( $wp_customize, 'kuza_btn_text',    'Visit KuzaERP.com' );
    foreach ( [ 'kuza_title', 'kuza_description', 'kuza_url', 'kuza_btn_text' ] as $key ) {
        $wp_customize->add_control( $key, [
            'label'   => ucwords( str_replace( '_', ' ', str_replace( 'kuza_', 'KuzaERP ', $key ) ) ),
            'section' => 'webmetro_kuza',
            'type'    => ( strpos( $key, 'description' ) !== false ) ? 'textarea' : 'text',
        ] );
    }

    // ── SECTION: Footer ─────────────────────────────────────
    $wp_customize->add_section( 'webmetro_footer', [
        'title' => __( 'Footer', 'webmetro' ),
        'panel' => 'webmetro_panel',
    ] );
    webmetro_add_setting( $wp_customize, 'footer_tagline', 'Nairobi-based digital agency helping African businesses grow through web, apps, and marketing — local insight, global standards.' );
    webmetro_add_setting( $wp_customize, 'footer_copyright', '© 2025 Web Metro Limited. All rights reserved.' );
    $wp_customize->add_control( 'footer_tagline',   [ 'label' => 'Footer Tagline',   'section' => 'webmetro_footer', 'type' => 'textarea' ] );
    $wp_customize->add_control( 'footer_copyright', [ 'label' => 'Copyright Line',   'section' => 'webmetro_footer', 'type' => 'text'     ] );
}
add_action( 'customize_register', 'webmetro_customizer' );

// Helper: add customizer setting with transport=refresh
function webmetro_add_setting( $wp_customize, $id, $default = '' ) {
    $wp_customize->add_setting( $id, [
        'default'           => $default,
        'sanitize_callback' => 'wp_kses_post',
        'transport'         => 'refresh',
    ] );
}

// Helper: get customizer value
function wm_option( $key, $fallback = '' ) {
    return get_theme_mod( $key, $fallback );
}

/* ═══════════════════════════════════════════════════════════
   5. CONTACT FORM AJAX HANDLER
═══════════════════════════════════════════════════════════ */
function webmetro_handle_contact() {
    check_ajax_referer( 'webmetro_nonce', 'nonce' );

    $name    = sanitize_text_field( $_POST['name']    ?? '' );
    $email   = sanitize_email(      $_POST['email']   ?? '' );
    $phone   = sanitize_text_field( $_POST['phone']   ?? '' );
    $service = sanitize_text_field( $_POST['service'] ?? '' );
    $message = sanitize_textarea_field( $_POST['message'] ?? '' );

    if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
        wp_send_json_error( [ 'message' => 'Please fill in all required fields.' ] );
    }

    if ( ! is_email( $email ) ) {
        wp_send_json_error( [ 'message' => 'Please enter a valid email address.' ] );
    }

    $to      = get_theme_mod( 'contact_email', get_option( 'admin_email' ) );
    $subject = "New enquiry from {$name} — Web Metro Website";
    $body    = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nService: {$service}\n\nMessage:\n{$message}";
    $headers = [ "Reply-To: {$name} <{$email}>", 'Content-Type: text/plain; charset=UTF-8' ];

    $sent = wp_mail( $to, $subject, $body, $headers );

    if ( $sent ) {
        wp_send_json_success( [ 'message' => 'Message sent! We\'ll be in touch within 24 hours.' ] );
    } else {
        wp_send_json_error( [ 'message' => 'Sorry, there was an error sending your message. Please try WhatsApp or email us directly.' ] );
    }
}
add_action( 'wp_ajax_webmetro_contact',        'webmetro_handle_contact' );
add_action( 'wp_ajax_nopriv_webmetro_contact', 'webmetro_handle_contact' );

/* ═══════════════════════════════════════════════════════════
   6. META BOXES FOR CUSTOM POST TYPES
═══════════════════════════════════════════════════════════ */
function webmetro_add_meta_boxes() {
    add_meta_box( 'wm_service_meta',     __( 'Service Details',     'webmetro' ), 'webmetro_service_meta_cb',     'wm_service',     'normal', 'high' );
    add_meta_box( 'wm_portfolio_meta',   __( 'Project Details',     'webmetro' ), 'webmetro_portfolio_meta_cb',   'wm_portfolio',   'normal', 'high' );
    add_meta_box( 'wm_testimonial_meta', __( 'Testimonial Details', 'webmetro' ), 'webmetro_testimonial_meta_cb', 'wm_testimonial', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'webmetro_add_meta_boxes' );

function webmetro_service_meta_cb( $post ) {
    wp_nonce_field( 'webmetro_meta', 'webmetro_meta_nonce' );
    $icon  = get_post_meta( $post->ID, '_wm_icon',       true );
    $stack = get_post_meta( $post->ID, '_wm_tech_stack', true );
    $order = get_post_meta( $post->ID, '_wm_order',      true );
    ?>
    <table class="form-table">
        <tr><th><label>Font Awesome Icon Class</label></th><td><input type="text" name="wm_icon" value="<?php echo esc_attr( $icon ); ?>" class="regular-text" placeholder="e.g. fa-code" /><p class="description">Find icons at fontawesome.com/icons</p></td></tr>
        <tr><th><label>Tech Stack Tags</label></th><td><input type="text" name="wm_tech_stack" value="<?php echo esc_attr( $stack ); ?>" class="regular-text" placeholder="e.g. React, Next.js, Laravel" /><p class="description">Comma-separated list</p></td></tr>
        <tr><th><label>Display Order</label></th><td><input type="number" name="wm_order" value="<?php echo esc_attr( $order ); ?>" class="small-text" min="1" /></td></tr>
    </table>
    <?php
}

function webmetro_portfolio_meta_cb( $post ) {
    wp_nonce_field( 'webmetro_meta', 'webmetro_meta_nonce' );
    $client  = get_post_meta( $post->ID, '_wm_client',   true );
    $url     = get_post_meta( $post->ID, '_wm_url',      true );
    $emoji   = get_post_meta( $post->ID, '_wm_emoji',    true );
    $bgcolor = get_post_meta( $post->ID, '_wm_bgcolor',  true );
    ?>
    <table class="form-table">
        <tr><th><label>Client Name</label></th><td><input type="text" name="wm_client" value="<?php echo esc_attr( $client ); ?>" class="regular-text" /></td></tr>
        <tr><th><label>Project URL</label></th><td><input type="url" name="wm_url" value="<?php echo esc_url( $url ); ?>" class="regular-text" /></td></tr>
        <tr><th><label>Thumbnail Emoji (if no image)</label></th><td><input type="text" name="wm_emoji" value="<?php echo esc_attr( $emoji ); ?>" class="small-text" placeholder="🛒" /></td></tr>
        <tr><th><label>Background Gradient (CSS)</label></th><td><input type="text" name="wm_bgcolor" value="<?php echo esc_attr( $bgcolor ); ?>" class="regular-text" placeholder="linear-gradient(135deg,#e4f4ed,#c2e8d4)" /></td></tr>
    </table>
    <?php
}

function webmetro_testimonial_meta_cb( $post ) {
    wp_nonce_field( 'webmetro_meta', 'webmetro_meta_nonce' );
    $company = get_post_meta( $post->ID, '_wm_company',  true );
    $rating  = get_post_meta( $post->ID, '_wm_rating',   true ) ?: 5;
    $color   = get_post_meta( $post->ID, '_wm_color',    true ) ?: '#00C853';
    ?>
    <table class="form-table">
        <tr><th><label>Client Name</label></th><td><input type="text" name="title" value="<?php echo esc_attr( get_the_title( $post ) ); ?>" class="regular-text" /><p class="description">The reviewer's full name (also editable as the post title above)</p></td></tr>
        <tr><th><label>Company</label></th><td><input type="text" name="wm_company" value="<?php echo esc_attr( $company ); ?>" class="regular-text" placeholder="e.g. Mama's Kitchen, Nairobi" /></td></tr>
        <tr><th><label>Star Rating</label></th><td><select name="wm_rating"><?php for( $i=1; $i<=5; $i++ ) echo '<option value="'.$i.'"'.selected($rating,$i,false).'>'.$i.' Stars</option>'; ?></select></td></tr>
        <tr><th><label>Avatar Colour</label></th><td><input type="color" name="wm_color" value="<?php echo esc_attr( $color ); ?>" /><p class="description">Background colour of the initials avatar</p></td></tr>
    </table>
    <?php
}

// Save all meta boxes
function webmetro_save_meta( $post_id ) {
    if ( ! isset( $_POST['webmetro_meta_nonce'] ) || ! wp_verify_nonce( $_POST['webmetro_meta_nonce'], 'webmetro_meta' ) ) return;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;

    $fields = [ 'wm_icon', 'wm_tech_stack', 'wm_order', 'wm_client', 'wm_url', 'wm_emoji', 'wm_bgcolor', 'wm_company', 'wm_rating', 'wm_color' ];
    foreach ( $fields as $field ) {
        if ( isset( $_POST[ $field ] ) ) {
            update_post_meta( $post_id, "_$field", sanitize_text_field( $_POST[ $field ] ) );
        }
    }
}
add_action( 'save_post', 'webmetro_save_meta' );

/* ═══════════════════════════════════════════════════════════
   7. HELPER FUNCTIONS FOR TEMPLATES
═══════════════════════════════════════════════════════════ */

// Get services for homepage
function webmetro_get_services( $limit = -1 ) {
    return get_posts( [
        'post_type'      => 'wm_service',
        'posts_per_page' => $limit,
        'orderby'        => 'meta_value_num',
        'meta_key'       => '_wm_order',
        'order'          => 'ASC',
        'post_status'    => 'publish',
    ] );
}

// Get portfolio items
function webmetro_get_portfolio( $limit = 6, $cat = '' ) {
    $args = [
        'post_type'      => 'wm_portfolio',
        'posts_per_page' => $limit,
        'post_status'    => 'publish',
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
    ];
    if ( $cat ) {
        $args['tax_query'] = [ [ 'taxonomy' => 'wm_portfolio_cat', 'field' => 'slug', 'terms' => $cat ] ];
    }
    return get_posts( $args );
}

// Get testimonials
function webmetro_get_testimonials( $limit = -1 ) {
    return get_posts( [
        'post_type'      => 'wm_testimonial',
        'posts_per_page' => $limit,
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
        'post_status'    => 'publish',
    ] );
}

// Render star rating
function webmetro_stars( $rating = 5 ) {
    $out = '<div class="tstars">';
    for ( $i = 1; $i <= 5; $i++ ) {
        $out .= $i <= $rating ? '<i class="fas fa-star"></i>' : '<i class="far fa-star"></i>';
    }
    $out .= '</div>';
    return $out;
}

/* ═══════════════════════════════════════════════════════════
   8. CLEAN UP WP HEAD
═══════════════════════════════════════════════════════════ */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );

/* ═══════════════════════════════════════════════════════════
   9. FLUSH REWRITE RULES ON ACTIVATION
═══════════════════════════════════════════════════════════ */
function webmetro_flush_rewrites() {
    webmetro_register_cpts();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'webmetro_flush_rewrites' );

/* ═══════════════════════════════════════════════════════════
   10. ALLOW SVG UPLOADS
═══════════════════════════════════════════════════════════ */
function webmetro_allow_svg( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'webmetro_allow_svg' );
