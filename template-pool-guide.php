<?php
/**
 * Template Name: Pool Guide
 * Description: Long-form guide template for DVP's supporting search-content layer.
 */

get_header();
$guide = dvp_get_pool_guide();

if (!$guide) {
    get_template_part('template-parts/content', 'page');
    get_footer();
    return;
}
?>

<main id="primary" class="site-main dvp-guide-shell">
    <article>
        <section class="dvp-guide-hero dvp-guide-hero--article">
            <div class="dvp-guide-hero-media" style="background-image:url('<?php echo esc_url($guide['hero_image']); ?>');"></div>
            <div class="ast-container">
                <div class="dvp-guide-hero-copy">
                    <a class="dvp-guide-backlink" href="<?php echo esc_url(home_url('/pool-guides/')); ?>">Pool Guides & Resources</a>
                    <span class="dvp-guide-eyebrow"><?php echo esc_html($guide['eyebrow']); ?></span>
                    <h1><?php echo esc_html($guide['title']); ?></h1>
                    <p><?php echo esc_html($guide['intro']); ?></p>
                    <div class="dvp-guide-meta">
                        <span>Updated <?php echo esc_html(get_the_modified_date('F Y')); ?></span>
                        <span>By Dundas Valley Pools</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="dvp-guide-section">
            <div class="ast-container dvp-guide-layout">
                <aside class="dvp-guide-toc" aria-label="On this page">
                    <strong>On this page</strong>
                    <ol>
                        <?php foreach ($guide['sections'] as $index => $section) : ?>
                            <li><a href="#guide-section-<?php echo esc_attr($index + 1); ?>"><?php echo esc_html($section['title']); ?></a></li>
                        <?php endforeach; ?>
                        <li><a href="#guide-faq">Common questions</a></li>
                    </ol>
                </aside>

                <div class="dvp-guide-article">
                    <?php foreach ($guide['sections'] as $index => $section) : ?>
                        <section id="guide-section-<?php echo esc_attr($index + 1); ?>" class="dvp-guide-content-block">
                            <h2><?php echo esc_html($section['title']); ?></h2>
                            <?php foreach ($section['paragraphs'] ?? array() as $paragraph) : ?>
                                <p><?php echo esc_html($paragraph); ?></p>
                            <?php endforeach; ?>
                            <?php if (!empty($section['bullets'])) : ?>
                                <ul class="dvp-guide-checklist">
                                    <?php foreach ($section['bullets'] as $item) : ?>
                                        <li><?php echo esc_html($item); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </section>
                    <?php endforeach; ?>

                    <section id="guide-faq" class="dvp-guide-content-block dvp-guide-faq">
                        <span class="dvp-guide-eyebrow">Common questions</span>
                        <h2>Questions homeowners ask before this project</h2>
                        <?php foreach ($guide['faqs'] as $faq) : ?>
                            <details>
                                <summary><?php echo esc_html($faq['q']); ?></summary>
                                <p><?php echo esc_html($faq['a']); ?></p>
                            </details>
                        <?php endforeach; ?>
                    </section>

                    <?php if (!empty($guide['sources'])) : ?>
                    <section class="dvp-guide-content-block dvp-guide-sources">
                        <span class="dvp-guide-eyebrow">Primary sources</span>
                        <h2>Official municipal references</h2>
                        <p>Municipal rules change. Use these official pages to verify the current requirements for your property before construction.</p>
                        <ul>
                            <?php foreach ($guide['sources'] as $source) : ?>
                                <li><a href="<?php echo esc_url($source['url']); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($source['label']); ?> ↗</a></li>
                            <?php endforeach; ?>
                        </ul>
                    </section>
                    <?php endif; ?>

                    <section class="dvp-guide-next-step">
                        <span class="dvp-guide-eyebrow">Next step</span>
                        <h2>See how we handle <?php echo esc_html(strtolower($guide['service_label'])); ?></h2>
                        <p>The guide is here for the detail. The service page shows how Dundas Valley Pools approaches the work and how to request a quote.</p>
                        <div class="dvp-service-actions">
                            <a class="dvp-service-button" href="<?php echo esc_url(home_url('/' . $guide['service_slug'] . '/')); ?>">View <?php echo esc_html($guide['service_label']); ?></a>
                            <a class="dvp-service-button is-outline" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Request a Quote</a>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </article>
</main>

<?php get_footer();
