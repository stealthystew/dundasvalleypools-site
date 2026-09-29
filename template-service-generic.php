<?php
/**
 * Template Name: Service - Generic
 * Description: Premium service page template for liner replacements, safety covers, and above ground pools.
 */

get_header();

$service = dvp_get_service_page_data();
$service_title = get_the_title();
$is_safety_cover_page = is_page('safety-cover-installations');
$related_guide = dvp_get_related_guide_for_service(get_post_field('post_name', get_queried_object_id()));
?>

<main id="primary" class="site-main dvp-service-shell">
    <?php if ($is_safety_cover_page) : ?>
    <section class="dvp-safety-cover-hero">
        <div class="dvp-safety-cover-hero-media" style="background-image: url('<?php echo esc_url($service['hero_image']); ?>');"></div>
        <div class="ast-container">
            <div class="dvp-safety-cover-hero-grid">
                <div class="dvp-safety-cover-copy">
                    <span class="dvp-service-eyebrow"><?php echo esc_html($service['eyebrow']); ?></span>
                    <h1>Keep your family, pets, and pool investment safer through the off-season</h1>
                    <p>Custom-fit safety covers help protect the pool, reduce spring cleanup, and create a more secure winter setup without making the backyard feel like an afterthought.</p>
                    <ul class="dvp-safety-cover-highlights">
                        <li>Custom measured for the exact pool shape and surrounding deck</li>
                        <li>Protection for adults, children, and pets when properly installed</li>
                        <li>Cleaner openings with less debris and less seasonal hassle</li>
                        <li>Durable materials, cleaner detailing, and warranty-backed products</li>
                    </ul>
                    <div class="dvp-service-actions">
                        <a class="dvp-service-button" href="#dvp-safety-benefits">Learn More</a>
                        <a class="dvp-service-button is-outline" href="tel:9059778673">Call (905) 977-8673</a>
                    </div>
                </div>

                <aside class="dvp-safety-cover-lead-card">
                    <h2>Get your new safety cover</h2>
                    <p>Request a consultation and we'll help you figure out the right cover layout, hardware, and installation approach for your pool.</p>
                    <div class="dvp-safety-cover-card-points">
                        <span>Custom-fit cover planning</span>
                        <span>Cleaner openings and less water mess</span>
                        <span>Support for new installs and replacements</span>
                    </div>
                    <div class="dvp-service-actions">
                        <a class="dvp-service-button" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Book Consultation</a>
                    </div>
                    <div class="dvp-safety-cover-phone">
                        <strong>Or call</strong>
                        <a href="tel:9059778673">(905) 977-8673</a>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section id="dvp-safety-benefits" class="dvp-service-section">
        <div class="ast-container">
            <div class="dvp-safety-cover-section-intro">
                <h2>More than just safe</h2>
                <p class="dvp-service-lead">The best safety cover installs do more than close the pool. They make the winter setup more manageable, improve how the backyard looks, and make spring openings smoother.</p>
            </div>

            <div class="dvp-safety-cover-benefits">
                <article class="dvp-safety-cover-benefit-card">
                    <h3>Save time, water, and effort</h3>
                    <p>Reducing debris and keeping the pool covered more effectively can make opening season cleaner and less frustrating.</p>
                </article>
                <article class="dvp-safety-cover-benefit-card">
                    <h3>Protection for families and pets</h3>
                    <p>When properly measured and installed, safety covers create a more secure off-season setup around the pool area.</p>
                </article>
                <article class="dvp-safety-cover-benefit-card">
                    <h3>Long-life materials and hardware</h3>
                    <p>Quality products and the right anchor layout help the cover perform better and hold up more reliably over time.</p>
                </article>
                <article class="dvp-safety-cover-benefit-card">
                    <h3>Cleaner backyard finish</h3>
                    <p>Today's safety covers can look sharper and feel more intentional than traditional winter cover setups.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="dvp-service-band">
        <div class="ast-container">
            <div class="dvp-safety-cover-proof-grid">
                <div class="dvp-safety-cover-proof-copy">
                    <h2>Recent safety cover work</h2>
                    <p class="dvp-service-lead">We install safety covers for homeowners across Dundas, Ancaster, Hamilton, Burlington, and surrounding areas who want a neater and safer winter pool setup.</p>
                    <ul class="dvp-service-list">
                        <li>Custom-fit cover planning for the exact pool shape and deck conditions</li>
                        <li>Anchor placement reviewed around obstructions and finished hardscape</li>
                        <li>Replacement covers and new installations with cleaner site finishing</li>
                        <li>Guidance on spring removal, storage, and long-term upkeep</li>
                    </ul>
                    <div class="dvp-service-actions">
                        <a class="dvp-service-button" href="#dvp-safety-testimonials">Read Testimonials</a>
                    </div>
                </div>

                <div class="dvp-safety-cover-proof-gallery">
                    <?php foreach ($service['gallery_images'] as $image_url) : ?>
                        <figure class="dvp-safety-cover-proof-image">
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($service_title); ?>">
                        </figure>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="dvp-safety-testimonials" class="dvp-service-section">
        <div class="ast-container">
            <div class="dvp-safety-cover-testimonial-wrap">
                <h2>What homeowners tell us</h2>
                <div class="dvp-safety-cover-testimonials">
                    <blockquote class="dvp-safety-cover-testimonial">
                        <p>"The cover looks far better than our old winter setup, and opening season was noticeably easier."</p>
                        <cite>Dundas homeowner</cite>
                    </blockquote>
                    <blockquote class="dvp-safety-cover-testimonial">
                        <p>"We wanted something safer for kids and pets, but also something that looked clean in the backyard. This solved both."</p>
                        <cite>Ancaster homeowner</cite>
                    </blockquote>
                    <blockquote class="dvp-safety-cover-testimonial">
                        <p>"The fit and anchor layout were handled properly, and the whole project felt organized from measurement to final install."</p>
                        <cite>Burlington homeowner</cite>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <?php if ($related_guide) : ?>
    <section class="dvp-service-band dvp-service-resource-section">
        <div class="ast-container">
            <article class="dvp-service-resource-card">
                <div>
                    <span class="dvp-guide-eyebrow">Planning resource</span>
                    <h2><?php echo esc_html($related_guide['title']); ?></h2>
                    <p><?php echo esc_html($related_guide['intro']); ?></p>
                </div>
                <a class="dvp-guide-text-link" href="<?php echo esc_url(home_url('/pool-guides/' . $related_guide['slug'] . '/')); ?>">Read the guide →</a>
            </article>
        </div>
    </section>
    <?php endif; ?>

    <section class="dvp-service-band">
        <div class="ast-container">
            <div class="dvp-safety-cover-cta-card">
                <div>
                    <h2><?php echo esc_html($service['cta_title']); ?></h2>
                    <p><?php echo esc_html($service['cta_copy']); ?></p>
                </div>
                <div class="dvp-service-actions">
                    <a class="dvp-service-button" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Book Consultation</a>
                    <a class="dvp-service-button is-outline" href="tel:9059778673">Call (905) 977-8673</a>
                </div>
            </div>
        </div>
    </section>
    <?php else : ?>
    <section class="dvp-service-hero">
        <div class="dvp-service-hero-media" style="background-image: url('<?php echo esc_url($service['hero_image']); ?>');"></div>
        <div class="ast-container">
            <div class="dvp-service-hero-grid">
                <div class="dvp-service-hero-copy">
                    <span class="dvp-service-eyebrow"><?php echo esc_html($service['eyebrow']); ?></span>
                    <h1><?php echo esc_html($service['hero_title']); ?></h1>
                    <p><?php echo esc_html($service['hero_copy']); ?></p>
                </div>
                <aside class="dvp-service-stat-card">
                    <h2><?php echo esc_html($service_title); ?></h2>
                    <p>Clear planning, quality materials, and careful installation help this service feel smoother from the first visit to the finished result.</p>
                </aside>
            </div>
        </div>
    </section>

    <section class="dvp-service-section">
        <div class="ast-container">
            <div class="dvp-service-feature-grid">
                <div>
                    <h2>Why homeowners choose this service</h2>
                    <p class="dvp-service-lead">Every pool project benefits from better planning, stronger materials, and a cleaner finish. This service page is built to show that value clearly and make the next step easier.</p>
                    <ul class="dvp-service-list">
                        <?php foreach ($service['highlights'] as $item) : ?>
                            <li><?php echo esc_html($item); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="dvp-service-panel">
                    <img src="<?php echo esc_url($service['feature_image']); ?>" alt="<?php echo esc_attr($service_title); ?>">
                </div>
            </div>
        </div>
    </section>

    <section class="dvp-service-band">
        <div class="ast-container">
            <h2>How we approach the work</h2>
            <p class="dvp-service-lead">A straightforward process helps the work stay organized and gives you a better sense of what to expect at each stage.</p>
            <div class="dvp-service-process">
                <?php foreach ($service['process'] as $index => $step) : ?>
                    <article class="dvp-service-process-item">
                        <strong><?php echo esc_html($index + 1); ?></strong>
                        <h3>Step <?php echo esc_html($index + 1); ?></h3>
                        <p><?php echo esc_html($step); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="dvp-service-section">
        <div class="ast-container">
            <h2>Project gallery</h2>
            <p class="dvp-service-lead">Real project photos help show the kind of finish, detailing, and care that go into this work.</p>
            <div class="dvp-service-gallery">
                <?php foreach ($service['gallery_images'] as $image_url) : ?>
                    <figure class="dvp-service-gallery-card">
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($service_title); ?>">
                    </figure>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="dvp-service-band">
        <div class="ast-container">
            <h2>Service area coverage</h2>
            <ul class="dvp-service-area-list">
                <li>Dundas</li>
                <li>Hamilton</li>
                <li>Ancaster</li>
                <li>Burlington</li>
                <li>Oakville</li>
                <li>Waterdown</li>
                <li>Stoney Creek</li>
                <li>Flamborough</li>
            </ul>
        </div>
    </section>

    <?php if ($related_guide) : ?>
    <section class="dvp-service-section dvp-service-resource-section">
        <div class="ast-container">
            <article class="dvp-service-resource-card">
                <div>
                    <span class="dvp-guide-eyebrow">Planning resource</span>
                    <h2><?php echo esc_html($related_guide['title']); ?></h2>
                    <p><?php echo esc_html($related_guide['intro']); ?></p>
                </div>
                <a class="dvp-guide-text-link" href="<?php echo esc_url(home_url('/pool-guides/' . $related_guide['slug'] . '/')); ?>">Read the guide →</a>
            </article>
        </div>
    </section>
    <?php endif; ?>

    <section class="dvp-service-section">
        <div class="ast-container">
            <div class="dvp-service-cta">
                <h2><?php echo esc_html($service['cta_title']); ?></h2>
                <p><?php echo esc_html($service['cta_copy']); ?></p>
                <div class="dvp-service-actions">
                    <a class="dvp-service-button" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Book Consultation</a>
                    <a class="dvp-service-button is-outline" href="tel:9059778673">Call (905) 977-8673</a>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
</main>

<?php
get_footer();
