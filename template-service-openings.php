<?php
/**
 * Template Name: Service - Pool Openings Closings
 * Description: Premium seasonal-service template for pool openings and closings.
 */

get_header();
?>

<main id="primary" class="site-main dvp-service-shell">
    <section class="dvp-service-hero">
        <div class="dvp-service-hero-media" style="background-image: url('<?php echo esc_url(dvp_upload_image_url('2024/07/img-35705-min.jpg')); ?>');"></div>
        <div class="ast-container">
            <div class="dvp-service-hero-grid">
                <div class="dvp-service-hero-copy">
                    <span class="dvp-service-eyebrow">Pool Openings / Closings</span>
                    <h1>Seasonal pool service that starts cleaner and closes with fewer surprises</h1>
                    <p>Seasonal pool care should feel organized, dependable, and easy to plan. Our opening and closing services help protect the pool, reduce hassle, and set the season up properly.</p>
                </div>
                <aside class="dvp-service-stat-card">
                    <h2>32-point seasonal review</h2>
                    <p>Whether you need a straightforward seasonal visit or a more complete service package, the goal is the same: make spring startup smoother and winter shutdown more dependable.</p>
                </aside>
            </div>
        </div>
    </section>

    <section class="dvp-service-section">
        <div class="ast-container">
            <div class="dvp-service-section-intro">
                <h2>Opening and closing packages</h2>
                <p class="dvp-service-lead">Choose the service level that matches your pool setup, cover type, and how much support you want at the start or end of the season.</p>
            </div>
            <div class="dvp-service-package-grid dvp-service-package-grid--seasonal">
                <article class="dvp-service-package">
                    <span class="dvp-service-package-kicker">Most common opening</span>
                    <h3>Standard</h3>
                    <div class="dvp-service-package-price">$395</div>
                    <ul class="dvp-service-list">
                        <li>Pump water off the cover and clear surface debris</li>
                        <li>Remove and store the cover neatly</li>
                        <li>Reinstall fittings and reassemble equipment</li>
                        <li>System testing and startup chemistry treatment</li>
                    </ul>
                </article>

                <article class="dvp-service-package is-featured">
                    <span class="dvp-service-package-kicker">Best for safety covers</span>
                    <h3>Safety Cover</h3>
                    <div class="dvp-service-package-price">$325</div>
                    <ul class="dvp-service-list">
                        <li>Safety cover removal or installation with anchor review</li>
                        <li>Cleaner seasonal transitions and less surface debris</li>
                        <li>Spring tension and hardware check</li>
                        <li>32-point inspection review</li>
                    </ul>
                </article>

                <article class="dvp-service-package">
                    <span class="dvp-service-package-kicker">More hands-on support</span>
                    <h3>Executive</h3>
                    <div class="dvp-service-package-price">$475</div>
                    <ul class="dvp-service-list">
                        <li>Everything from the seasonal service package</li>
                        <li>One hour of focused cleaning support</li>
                        <li>Chemical balancing and water-quality check</li>
                        <li>Priority-style setup for a stronger opening day</li>
                    </ul>
                    <p class="dvp-service-package-note">Additional cleaning time can be quoted if the pool needs more recovery work.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="dvp-service-band">
        <div class="ast-container">
            <div class="dvp-service-feature-grid">
                <div>
                    <h2>What a stronger seasonal visit should include</h2>
                    <ul class="dvp-service-list">
                        <li>Practical preparation before the pool is opened or closed</li>
                        <li>Attention to covers, fittings, and equipment condition</li>
                        <li>Clear notes on anything that needs follow-up service</li>
                        <li>Less guesswork for the homeowner when the season changes</li>
                    </ul>
                </div>
                <div class="dvp-service-panel">
                    <img src="<?php echo esc_url(dvp_upload_image_url('2024/08/IMG_5782.jpg')); ?>" alt="Pool openings and closings">
                </div>
            </div>
        </div>
    </section>

    <section class="dvp-service-section">
        <div class="ast-container">
            <h2>How the service is paced</h2>
            <div class="dvp-service-process">
                <article class="dvp-service-process-item">
                    <strong>1</strong>
                    <h3>Schedule around the season</h3>
                    <p>We confirm timing based on the pool setup, cover type, and how ready the yard is for service.</p>
                </article>
                <article class="dvp-service-process-item">
                    <strong>2</strong>
                    <h3>Handle the practical work first</h3>
                    <p>Debris, cover condition, fittings, and equipment are addressed before the job moves into testing and startup tasks.</p>
                </article>
                <article class="dvp-service-process-item">
                    <strong>3</strong>
                    <h3>Review the pool condition</h3>
                    <p>Seasonal visits are also a good time to spot issues with equipment, liners, covers, and general wear.</p>
                </article>
                <article class="dvp-service-process-item">
                    <strong>4</strong>
                    <h3>Leave the next step clear</h3>
                    <p>You should know whether the pool is ready to use, what still needs attention, and what to plan for next.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="dvp-service-band">
        <div class="ast-container">
            <h2>Areas we serve for seasonal pool service</h2>
            <ul class="dvp-service-area-list">
                <li>Dundas</li>
                <li>Hamilton</li>
                <li>Ancaster</li>
                <li>Burlington</li>
                <li>Oakville</li>
                <li>Stoney Creek</li>
                <li>Waterdown</li>
                <li>Milton</li>
            </ul>
        </div>
    </section>

    <?php $seasonal_guide = dvp_get_related_guide_for_service('pool-openings-closings'); ?>
    <?php if ($seasonal_guide) : ?>
    <section class="dvp-service-section dvp-service-resource-section">
        <div class="ast-container">
            <article class="dvp-service-resource-card">
                <div>
                    <span class="dvp-guide-eyebrow">Seasonal resource</span>
                    <h2><?php echo esc_html($seasonal_guide['title']); ?></h2>
                    <p><?php echo esc_html($seasonal_guide['intro']); ?></p>
                </div>
                <a class="dvp-guide-text-link" href="<?php echo esc_url(home_url('/pool-guides/' . $seasonal_guide['slug'] . '/')); ?>">Read the guide →</a>
            </article>
        </div>
    </section>
    <?php endif; ?>

    <section class="dvp-service-section">
        <div class="ast-container">
            <div class="dvp-service-cta">
                <h2>Ready to book your seasonal service?</h2>
                <p>Tell us whether you need an opening, a closing, or a safety-cover visit and we can help you plan it properly.</p>
                <div class="dvp-service-actions">
                    <a class="dvp-service-button" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Book Consultation</a>
                    <a class="dvp-service-button is-outline" href="tel:9059778673">Call (905) 977-8673</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
