<?php
/**
 * Template Name: Service - Pool Construction
 * Description: Premium template for pool construction and renovation services.
 */

get_header();
?>

<main id="primary" class="site-main dvp-service-shell">
    <section class="dvp-service-hero">
        <div class="dvp-service-hero-media" style="background-image: url('<?php echo esc_url(dvp_upload_image_url('2024/08/img-45825166.jpg')); ?>');"></div>
        <div class="ast-container">
            <div class="dvp-service-hero-grid">
                <div class="dvp-service-hero-copy">
                    <span class="dvp-service-eyebrow">Pool Construction</span>
                    <h1>Pool construction and major renovations that feel designed for the property</h1>
                    <p>New pool construction and major renovations should feel thoughtfully planned from the start. We approach each project with attention to the property, the surrounding space, and how the backyard will actually be used.</p>
                </div>
                <aside class="dvp-service-stat-card">
                    <h2>Built around the backyard</h2>
                    <p>From the first conversation through the final walkthrough, the goal is to shape a project that works with the home, the grade, and the way the space will actually be used.</p>
                </aside>
            </div>
        </div>
    </section>

    <section class="dvp-service-section">
        <div class="ast-container">
            <div class="dvp-service-feature-grid">
                <div>
                    <h2>What goes into a well-planned pool project</h2>
                    <p class="dvp-service-lead">Construction projects work best when the pool, hardscape, access, and finished backyard experience are considered together from the beginning.</p>
                    <ul class="dvp-service-list">
                        <li>Custom steel wall vinyl liner pools planned around the property</li>
                        <li>Landscape and hardscape coordination that supports the pool design</li>
                        <li>Major renovation work that modernizes tired or damaged pool areas</li>
                        <li>Project flow that feels deliberate from consultation to completion</li>
                    </ul>
                </div>
                <div class="dvp-service-panel">
                    <img src="<?php echo esc_url(dvp_upload_image_url('2024/08/img-45825166.jpg')); ?>" alt="Pool construction project">
                </div>
            </div>
        </div>
    </section>

    <section class="dvp-service-band">
        <div class="ast-container">
            <h2>Construction process</h2>
            <p class="dvp-service-lead">A clear process helps keep the build organized and gives you a better picture of how the project will move from planning to completion.</p>
            <div class="dvp-service-process">
                <article class="dvp-service-process-item">
                    <strong>1</strong>
                    <h3>Initial consultation</h3>
                    <p>We start by learning how you want the backyard to function, what you are hoping to build, and what constraints the property may bring.</p>
                </article>
                <article class="dvp-service-process-item">
                    <strong>2</strong>
                    <h3>Site review</h3>
                    <p>We walk the property, confirm grade conditions, access, layout possibilities, and what the project needs to succeed.</p>
                </article>
                <article class="dvp-service-process-item">
                    <strong>3</strong>
                    <h3>Design and scope alignment</h3>
                    <p>Pool size, shape, surrounding finishes, and supporting work are framed into a plan that suits the space and the budget.</p>
                </article>
                <article class="dvp-service-process-item">
                    <strong>4</strong>
                    <h3>Build and coordination</h3>
                    <p>Construction moves through excavation, installation, equipment work, and surrounding project details with close attention to sequencing.</p>
                </article>
                <article class="dvp-service-process-item">
                    <strong>5</strong>
                    <h3>Clean-up and completion</h3>
                    <p>The project should feel finished, not abandoned at the final technical milestone. Clean-up and handoff matter.</p>
                </article>
                <article class="dvp-service-process-item">
                    <strong>6</strong>
                    <h3>Post-project support</h3>
                    <p>Questions around use, maintenance, and next upgrades are easier when the homeowner leaves the project with a clear understanding of the pool.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="dvp-service-section">
        <div class="ast-container">
            <div class="dvp-service-card-grid">
                <article class="dvp-service-card">
                    <h3>Custom builds</h3>
                    <p>New pool projects that are planned around the shape of the yard, the movement through the backyard, and the way the family wants to use the space.</p>
                </article>
                <article class="dvp-service-card">
                    <h3>Major renovations</h3>
                    <p>Structural, visual, and equipment-focused renovations that help an existing pool area feel current, safer, and more enjoyable again.</p>
                </article>
                <article class="dvp-service-card">
                    <h3>Backyard integration</h3>
                    <p>Hardscape, circulation, grade changes, steps, and surrounding outdoor features that make the pool feel connected to the rest of the property.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="dvp-service-band">
        <div class="ast-container">
            <h2>Project imagery</h2>
            <div class="dvp-service-gallery">
                <figure class="dvp-service-gallery-card">
                    <img src="<?php echo esc_url(dvp_upload_image_url('2024/08/img-45825166.jpg')); ?>" alt="Pool construction">
                </figure>
                <figure class="dvp-service-gallery-card">
                    <img src="<?php echo esc_url(dvp_upload_image_url('2024/08/IMG_5505.jpg')); ?>" alt="Pool renovation">
                </figure>
                <figure class="dvp-service-gallery-card">
                    <img src="<?php echo esc_url(dvp_upload_image_url('2024/08/IMG_5508.jpg')); ?>" alt="Backyard pool project">
                </figure>
            </div>
        </div>
    </section>

    <?php $construction_guide = dvp_get_related_guide_for_service('pool-construction-services'); ?>
    <?php if ($construction_guide) : ?>
    <section class="dvp-service-section dvp-service-resource-section">
        <div class="ast-container">
            <article class="dvp-service-resource-card">
                <div>
                    <span class="dvp-guide-eyebrow">Local planning resource</span>
                    <h2><?php echo esc_html($construction_guide['title']); ?></h2>
                    <p><?php echo esc_html($construction_guide['intro']); ?></p>
                </div>
                <a class="dvp-guide-text-link" href="<?php echo esc_url(home_url('/pool-guides/' . $construction_guide['slug'] . '/')); ?>">Read the guide →</a>
            </article>
        </div>
    </section>
    <?php endif; ?>

    <section class="dvp-service-section">
        <div class="ast-container">
            <div class="dvp-service-cta">
                <h2>Thinking about a new build or a major renovation?</h2>
                <p>Share your backyard goals and we can talk through the right next step for the property, the pool, and the surrounding space.</p>
                <div class="dvp-service-actions">
                    <a class="dvp-service-button" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Book Consultation</a>
                    <a class="dvp-service-button is-outline" href="<?php echo esc_url(home_url('/gallery/')); ?>">View Project Gallery</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
