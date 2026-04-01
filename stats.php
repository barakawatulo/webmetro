<?php /* template-parts/kuza.php */ ?>
<?php
$title   = wm_option( 'kuza_title',       'Meet KuzaERP. Built for Africa.' );
$desc    = wm_option( 'kuza_description', 'Manage inventory, finance, sales, HR and more in one platform purpose-built for Kenyan and African businesses.' );
$url     = wm_option( 'kuza_url',         'https://kuzaerp.com' );
$btn_txt = wm_option( 'kuza_btn_text',    'Visit KuzaERP.com' );
// Split title at period for blue highlight
$parts   = explode( '.', $title, 2 );
?>
<section id="kuza">
    <div class="kuza-wrap">
        <div class="rvl">
            <div class="k-badge"><i class="fas fa-star" style="font-size:.7rem"></i> <?php esc_html_e( 'Flagship Product', 'webmetro' ); ?></div>
            <h2 class="k-title">
                <?php if ( count($parts) > 1 ) : ?>
                    <span><?php echo esc_html( trim($parts[0]) ); ?>.</span><?php echo esc_html( $parts[1] ); ?>
                <?php else : ?>
                    <?php echo esc_html( $title ); ?>
                <?php endif; ?>
            </h2>
            <p class="k-desc"><?php echo esc_html( $desc ); ?></p>
            <ul class="k-feats">
                <li><i class="fas fa-check-circle"></i> <?php esc_html_e( 'M-Pesa Integration',           'webmetro' ); ?></li>
                <li><i class="fas fa-check-circle"></i> <?php esc_html_e( 'Multi-currency Support',        'webmetro' ); ?></li>
                <li><i class="fas fa-check-circle"></i> <?php esc_html_e( 'Cloud-based & Mobile-ready',    'webmetro' ); ?></li>
                <li><i class="fas fa-check-circle"></i> <?php esc_html_e( 'KRA Tax Compliance',            'webmetro' ); ?></li>
                <li><i class="fas fa-check-circle"></i> <?php esc_html_e( 'Inventory Management',          'webmetro' ); ?></li>
                <li><i class="fas fa-check-circle"></i> <?php esc_html_e( 'HR & Payroll Module',           'webmetro' ); ?></li>
            </ul>
            <a class="btn-blue" href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener">
                <?php echo esc_html( $btn_txt ); ?> <i class="fas fa-external-link-alt" style="font-size:.75rem"></i>
            </a>
        </div>
        <div class="rvr">
            <!-- Browser Mockup Dashboard -->
            <div class="mock">
                <div class="mock-bar">
                    <div class="mdots">
                        <div class="mdot" style="background:#FF5F57"></div>
                        <div class="mdot" style="background:#FEBC2E"></div>
                        <div class="mdot" style="background:#28C840"></div>
                    </div>
                    <div class="mock-url">kuzaerp.com/dashboard</div>
                </div>
                <div class="mock-body">
                    <div class="db-top">
                        <div class="db-logo">KuzaERP</div>
                        <div class="db-nav"><span>Dashboard</span><span>Inventory</span><span>Finance</span></div>
                    </div>
                    <div class="db-grid">
                        <div class="db-side">
                            <div class="dbi act"><i class="fas fa-th-large" style="font-size:.6rem"></i> Overview</div>
                            <div class="dbi"><i class="fas fa-box" style="font-size:.6rem"></i> Inventory</div>
                            <div class="dbi"><i class="fas fa-dollar-sign" style="font-size:.6rem"></i> Finance</div>
                            <div class="dbi"><i class="fas fa-users" style="font-size:.6rem"></i> HR</div>
                            <div class="dbi"><i class="fas fa-chart-bar" style="font-size:.6rem"></i> Reports</div>
                        </div>
                        <div class="db-main">
                            <div class="db-cards">
                                <div class="dbc"><div class="dbv g">KES 2.4M</div><div class="dbl">Revenue</div></div>
                                <div class="dbc"><div class="dbv">847</div><div class="dbl">Orders</div></div>
                                <div class="dbc"><div class="dbv g">+23%</div><div class="dbl">Growth</div></div>
                            </div>
                            <div class="db-chart">
                                <div class="dbt">Revenue &mdash; Last 7 Days</div>
                                <div class="bars">
                                    <div class="bar" style="height:40%"></div>
                                    <div class="bar" style="height:65%"></div>
                                    <div class="bar" style="height:45%"></div>
                                    <div class="bar" style="height:82%"></div>
                                    <div class="bar" style="height:55%"></div>
                                    <div class="bar" style="height:92%"></div>
                                    <div class="bar" style="height:70%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
