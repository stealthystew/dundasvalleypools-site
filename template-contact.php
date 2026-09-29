<?php
/**
 * Template Name: Contact Page
 * Description: Refined contact page template.
 */

get_header();
?>

<main id="primary" class="site-main dvp-contact-page">
    <section class="dvp-contact-hero">
        <div class="dvp-contact-hero-media" style="background-image: url('<?php echo esc_url(dvp_upload_image_url('2024/08/img-4557053.jpg')); ?>');"></div>
        <div class="ast-container">
            <div class="dvp-contact-hero-copy">
                <span class="dvp-contact-eyebrow">Contact Dundas Valley Pools</span>
                <h1>Let's plan the right next step for your pool project</h1>
                <p>Whether you need seasonal service, a liner replacement, equipment upgrades, or a larger backyard project, we're here to make the process feel clear, responsive, and easy to start.</p>
                <div class="dvp-contact-hero-actions">
                    <a class="dvp-service-button" href="tel:9059778673">Call (905) 977-8673</a>
                    <a class="dvp-service-button is-outline" href="mailto:info@dundasvalleypools.ca">Email Us</a>
                </div>
            </div>
        </div>
    </section>

    <section class="dvp-contact-main">
        <div class="ast-container">
            <div class="dvp-contact-grid">
                <aside class="dvp-contact-sidebar">
                    <div class="dvp-contact-panel">
                        <h2>Get in touch</h2>
                        <p class="dvp-contact-lead">Reach out for a consultation, estimate, or a quick question about your pool. If you know the type of project you have in mind, include that in the form so we can point you in the right direction faster.</p>

                        <div class="dvp-contact-detail-list">
                            <article class="dvp-contact-detail">
                                <span class="dvp-contact-detail-label">Phone</span>
                                <a href="tel:9059778673">(905) 977-8673</a>
                                <p>Best for urgent service questions or booking discussions.</p>
                            </article>

                            <article class="dvp-contact-detail">
                                <span class="dvp-contact-detail-label">Email</span>
                                <a href="mailto:info@dundasvalleypools.ca">info@dundasvalleypools.ca</a>
                                <p>Send photos, project details, or general inquiries.</p>
                            </article>

                            <article class="dvp-contact-detail">
                                <span class="dvp-contact-detail-label">Address</span>
                                <p>108 Alma Street<br>Dundas, ON L9H 2E4</p>
                            </article>

                            <article class="dvp-contact-detail">
                                <span class="dvp-contact-detail-label">Hours</span>
                                <p>Monday to Friday: 8:00 AM - 6:00 PM<br>Saturday: 9:00 AM - 4:00 PM<br>Sunday: Closed</p>
                            </article>
                        </div>
                    </div>

                    <div class="dvp-contact-panel dvp-contact-panel-muted">
                        <h3>What helps us respond faster</h3>
                        <ul class="dvp-service-list">
                            <li>Tell us which service you need, such as openings, closings, liners, covers, construction, or equipment.</li>
                            <li>Include your community so we can confirm service coverage right away.</li>
                            <li>Add a few project notes or photos if there is a specific issue you want us to review.</li>
                        </ul>
                    </div>
                </aside>

                <div class="dvp-contact-content">
                    <div class="dvp-contact-panel dvp-contact-form-panel">
                        <div class="dvp-contact-form-header">
                            <h2>Request a consultation</h2>
                            <p>Use the form below and our team will follow up with the next steps for your pool service or renovation project.</p>
                        </div>

                        <div class="dvp-contact-form-wrap">
                            <?php echo do_shortcode('[quform id="1"]'); ?>
                        </div>
                    </div>

                    <div class="dvp-contact-panel dvp-contact-map-panel">
                        <div class="dvp-contact-map-copy">
                            <h3>Serving Dundas, Hamilton, Ancaster, Burlington, Oakville, Waterdown, Stoney Creek, and nearby communities</h3>
                            <p>Use the map to confirm where we're based and whether your project is within our regular service area before you reach out.</p>
                        </div>
                        <div class="dvp-contact-map-frame">
                            <iframe
                                loading="lazy"
                                src="https://maps.google.com/maps?q=Dundas%20Valley%20Pools&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near"
                                title="Dundas Valley Pools map"
                                aria-label="Dundas Valley Pools map"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="dvp-contact-areas">
        <div class="ast-container">
            <div class="dvp-contact-areas-intro">
                <span class="dvp-contact-eyebrow">Areas We Serve</span>
                <h2>Pool construction, renovation, opening, closing, and equipment service in the Hamilton and Halton areas</h2>
                <p>Dundas Valley Pools works with homeowners across Dundas, Ancaster, Hamilton, Burlington, Oakville, Waterdown, Stoney Creek, Milton, and nearby communities.</p>
            </div>

            <div class="dvp-contact-area-shell">
                <div class="dvp-contact-area-grid">
                    <span>Dundas</span>
                    <span>Ancaster</span>
                    <span>Hamilton</span>
                    <span>Burlington</span>
                    <span>Oakville</span>
                    <span>Stoney Creek</span>
                    <span>Waterdown</span>
                    <span>Milton</span>
                    <span>Flamborough</span>
                    <span>West Hamilton</span>
                </div>

                <p class="dvp-contact-area-note">If you're nearby and not sure whether your address falls within our normal service area, reach out and we can confirm the best next step for your property.</p>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
