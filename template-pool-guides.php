<?php
/**
 * Template Name: Pool Guides Hub
 * Description: Search-focused resource hub kept separate from the primary sales pages.
 */

get_header();
$guides = dvp_get_pool_guides();
?>

<main id="primary" class="site-main dvp-guide-shell dvp-guide-hub">
    <section class="dvp-guide-hero">
        <div class="ast-container">
            <div class="dvp-guide-hero-copy">
                <span class="dvp-guide-eyebrow">Dundas Valley Pools Resource Library</span>
                <h1>Pool guides built from the details that actually change the job</h1>
                <p>Long-form planning resources for homeowners who want to understand the work before they request a quote. The main service pages stay simple; the technical detail lives here.</p>
            </div>
        </div>
    </section>

    <section class="dvp-guide-section">
        <div class="ast-container">
            <div class="dvp-guide-intro-grid">
                <div>
                    <span class="dvp-guide-eyebrow">Start with the project</span>
                    <h2>Useful before a measurement visit, renovation meeting or seasonal booking</h2>
                </div>
                <p>These guides explain the decisions behind safety covers, liner replacement, winterization and larger pool renovations. They are written for Southern Ontario pool conditions and link back to the relevant service only when the reader is ready for the next step.</p>
            </div>

            <div class="dvp-guide-card-grid">
                <?php foreach ($guides as $slug => $guide) : ?>
                    <article class="dvp-guide-card">
                        <a class="dvp-guide-card-image" href="<?php echo esc_url(home_url('/pool-guides/' . $slug . '/')); ?>">
                            <img src="<?php echo esc_url($guide['hero_image']); ?>" alt="<?php echo esc_attr($guide['title']); ?>">
                        </a>
                        <div class="dvp-guide-card-body">
                            <span class="dvp-guide-eyebrow"><?php echo esc_html($guide['eyebrow']); ?></span>
                            <h2><a href="<?php echo esc_url(home_url('/pool-guides/' . $slug . '/')); ?>"><?php echo esc_html($guide['title']); ?></a></h2>
                            <p><?php echo esc_html($guide['intro']); ?></p>
                            <a class="dvp-guide-text-link" href="<?php echo esc_url(home_url('/pool-guides/' . $slug . '/')); ?>">Read the guide →</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="dvp-guide-band">
        <div class="ast-container">
            <div class="dvp-guide-cta">
                <div>
                    <span class="dvp-guide-eyebrow">Have a specific pool?</span>
                    <h2>Send photos and the basic dimensions. We can help turn the guide into a project plan.</h2>
                </div>
                <div class="dvp-service-actions">
                    <a class="dvp-service-button" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Request a Quote</a>
                    <a class="dvp-service-button is-outline" href="tel:9059778673">Call (905) 977-8673</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer();

