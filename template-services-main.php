<?php
/**
 * Template Name: Services - Main
 * Description: Main services page refreshed with real imagery and stronger service cards.
 */

get_header();

$cards = dvp_get_service_cards();
?>

<main id="primary" class="site-main dvp-service-shell">
    <section class="dvp-service-hero">
        <div class="dvp-service-hero-media" style="background-image: url('<?php echo esc_url(dvp_upload_image_url('2024/07/img-34715-min.jpg')); ?>');"></div>
        <div class="ast-container">
            <div class="dvp-service-hero-grid">
                <div class="dvp-service-hero-copy">
                    <span class="dvp-service-eyebrow">Our Services</span>
                    <h1>Pool services designed to keep your backyard looking its best</h1>
                    <p>From seasonal service to liners, covers, equipment, and construction, we help homeowners care for and improve their pools with a more thoughtful, polished approach.</p>
                </div>
                <aside class="dvp-service-stat-card">
                    <h2>Seasonal, structural, and visual work</h2>
                    <p>Explore the services that support your pool through every season, from essential maintenance to major upgrades and full backyard projects.</p>
                </aside>
            </div>
        </div>
    </section>

    <section class="dvp-service-section">
        <div class="ast-container">
            <h2>Explore services</h2>
            <p class="dvp-service-lead">Each service page gives you a clearer overview of what is included, how the work is approached, and what the next step looks like.</p>
            <div class="dvp-service-card-grid">
                <?php foreach ($cards as $card) : ?>
                    <article class="dvp-service-card">
                        <div class="dvp-service-card-media">
                            <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>">
                        </div>
                        <div class="dvp-service-card-body">
                            <h3><?php echo esc_html($card['title']); ?></h3>
                            <p><?php echo esc_html($card['summary']); ?></p>
                            <div class="dvp-service-actions">
                                <a class="dvp-service-button" href="<?php echo esc_url(home_url('/' . $card['slug'] . '/')); ?>">View Service</a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="dvp-service-band">
        <div class="ast-container">
            <article class="dvp-service-resource-card">
                <div>
                    <span class="dvp-guide-eyebrow">Need more detail before you call?</span>
                    <h2>Pool Guides & Resources</h2>
                    <p>Read the deeper planning guides for safety covers, vinyl liners, winterization and pool renovations without cluttering the main service pages.</p>
                </div>
                <a class="dvp-guide-text-link" href="<?php echo esc_url(home_url('/pool-guides/')); ?>">Browse the guide library →</a>
            </article>
        </div>
    </section>
</main>

<?php
get_footer();
