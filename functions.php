<?php
/**
 * Child theme functions and definitions
 * SEO enhancements for Dundas Valley Pools
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue parent and child theme styles
 */
add_action('wp_enqueue_scripts', function() {
    // Parent theme style
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    
    // Child theme style
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'), '1.0.0');
});

/**
 * Add LocalBusiness Schema to head
 */
add_action('wp_head', function() {
    $schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        'name' => 'Dundas Valley Pools',
        'image' => 'https://dundasvalleypools.ca/wp-content/uploads/logo.png',
        'address' => array(
            '@type' => 'PostalAddress',
            'streetAddress' => '52 Dundas St',
            'addressLocality' => 'Dundas',
            'addressRegion' => 'ON',
            'postalCode' => 'L9H 2W8',
            'addressCountry' => 'CA'
        ),
        'geo' => array(
            '@type' => 'GeoCoordinates',
            'latitude' => '43.2626',
            'longitude' => '-79.9564'
        ),
        'url' => 'https://dundasvalleypools.ca',
        'telephone' => '+19052970000',
        'email' => 'info@dundasvalleypools.ca',
        'priceRange' => '$$$',
        'openingHoursSpecification' => array(
            array(
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'),
                'opens' => '08:00',
                'closes' => '18:00'
            ),
            array(
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => 'Saturday',
                'opens' => '09:00',
                'closes' => '16:00'
            )
        ),
        'serviceType' => array(
            'Pool Construction',
            'Pool Renovation',
            'Pool Opening',
            'Pool Closing',
            'Pool Maintenance',
            'Safety Cover Installation',
            'Liner Replacement',
            'Equipment Upgrades'
        ),
        'areaServed' => array(
            '@type' => 'City',
            'name' => 'Dundas',
            'containedInPlace' => array(
                '@type' => 'State',
                'name' => 'Ontario'
            )
        ),
        'hasOfferCatalog' => array(
            '@type' => 'OfferCatalog',
            'name' => 'Pool Services',
            'itemListElement' => array(
                array(
                    '@type' => 'Offer',
                    'itemOffered' => array(
                        '@type' => 'Service',
                        'name' => 'Pool Construction'
                    )
                ),
                array(
                    '@type' => 'Offer',
                    'itemOffered' => array(
                        '@type' => 'Service',
                        'name' => 'Pool Renovation'
                    )
                ),
                array(
                    '@type' => 'Offer',
                    'itemOffered' => array(
                        '@type' => 'Service',
                        'name' => 'Pool Opening & Closing'
                    )
                )
            )
        )
    );
    
    echo '<script type="application/ld+json">' . json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
});

/**
 * Add meta descriptions dynamically
 */

add_action('wp_head', function() {
    if (is_front_page() || is_home()) {
        echo '<meta name="description" content="Dundas Valley Pools - Professional pool construction, renovation, and maintenance services in Dundas, Hamilton, Ancaster & Burlington. 15+ years experience. Get a free quote today!">' . "\n";
    } elseif (is_page('about-us')) {
        echo '<meta name="description" content="Learn about Dundas Valley Pools - your trusted pool experts serving Hamilton & Halton areas for over 15 years. Licensed, insured, and committed to quality.">' . "\n";
    } elseif (is_page('services')) {
        echo '<meta name="description" content="Complete pool services in Dundas & Hamilton: construction, renovations, openings/closings, liner replacements, safety covers & equipment upgrades.">' . "\n";
    } elseif (is_page('pool-construction-services')) {
        echo '<meta name="description" content="Custom pool construction in Dundas, Hamilton & Burlington. Gunite, vinyl & fiberglass pools. Free design consultation. 15+ years experience.">' . "\n";
    } elseif (is_page('pool-openings-closings')) {
        echo '<meta name="description" content="Professional pool opening and closing services in Dundas & Hamilton. Winterization, spring startup, chemical balancing & equipment checks.">' . "\n";
    } elseif (is_page('liner-replacements')) {
        echo '<meta name="description" content="Pool liner replacement services in Dundas & Hamilton. Vinyl liner installation, pattern selection & professional fitting. Extend your pool life.">' . "\n";
    } elseif (is_page('safety-cover-installations')) {
        echo '<meta name="description" content="Safety cover installation in Dundas & Hamilton. Protect your family with custom-fit pool safety covers. Winter covers & automatic covers available.">' . "\n";
    } elseif (is_page('equipment-upgrades')) {
        echo '<meta name="description" content="Pool equipment upgrades in Dundas & Hamilton. Energy-efficient pumps, heaters, salt systems & automation. Save money & improve performance.">' . "\n";
    } elseif (is_page('above-ground-pools')) {
        echo '<meta name="description" content="Above ground pool installation in Dundas & Hamilton. Affordable, quick installation with professional setup & decking options.">' . "\n";
    } elseif (is_page('contact-us')) {
        echo '<meta name="description" content="Contact Dundas Valley Pools for a free consultation. Serving Dundas, Hamilton, Ancaster & Burlington. Call or email us today!">' . "\n";
    } elseif (is_page('gallery')) {
        echo '<meta name="description" content="View our portfolio of completed pool projects in Dundas, Hamilton & surrounding areas. Custom pools, renovations & outdoor living spaces.">' . "\n";
    }
}, 1);

/**
 * Add Open Graph tags for social sharing
 */

add_action('wp_head', function() {
    $title = wp_get_document_title();
    $description = 'Professional pool construction, renovation, and maintenance services in Dundas, Hamilton, Ancaster & Burlington. 15+ years experience.';
    $url = get_permalink();
    $image = 'https://dundasvalleypools.ca/wp-content/uploads/og-image.jpg';
    
    echo '<meta property="og:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($description) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url($url) . '">' . "\n";
    echo '<meta property="og:type" content="business.business">' . "\n";
    echo '<meta property="og:image" content="' . esc_url($image) . '">' . "\n";
    echo '<meta property="business:contact_data:locality" content="Dundas">' . "\n";
    echo '<meta property="business:contact_data:region" content="Ontario">' . "\n";
    echo '<meta property="business:contact_data:country_name" content="Canada">' . "\n";
    
    // Twitter Card
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr($description) . '">' . "\n";
    echo '<meta name="twitter:image" content="' . esc_url($image) . '">' . "\n";
});

/**
 * Optimize title tag format
 */
add_filter('document_title_parts', function($title) {
    if (is_front_page()) {
        $title['title'] = 'Dundas Valley Pools | Pool Construction & Renovation | Hamilton & Dundas';
    } elseif (is_page()) {
        $page_title = get_the_title();
        $title['title'] = $page_title . ' | Dundas Valley Pools | Hamilton & Dundas';
    }
    return $title;
});

/**
 * Add canonical URLs
 */
add_action('wp_head', function() {
    if (!is_front_page()) {
        $canonical = get_permalink();
        echo '<link rel="canonical" href="' . esc_url($canonical) . '">' . "\n";
    }
});

/**
 * Add breadcrumb schema
 */
add_action('wp_footer', function() {
    if (!is_front_page()) {
        $breadcrumbs = array(
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => array(
                array(
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'Home',
                    'item' => 'https://dundasvalleypools.ca'
                )
            )
        );
        
        if (is_page()) {
            $breadcrumbs['itemListElement'][] = array(
                '@type' => 'ListItem',
                'position' => 2,
                'name' => get_the_title(),
                'item' => get_permalink()
            );
        }
        
        echo '<script type="application/ld+json">' . json_encode($breadcrumbs, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
    }
});

/**
 * Add FAQ Schema for FAQ pages
 */

add_action('wp_head', function() {
    if (is_page('faq') || is_page('frequently-asked-questions')) {
        $faq_schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => array(
                array(
                    '@type' => 'Question',
                    'name' => 'When should I open my pool in Hamilton?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'In the Hamilton and Dundas area, we recommend opening your pool in late April to early May when temperatures consistently stay above freezing. This prevents algae growth and makes the opening process easier.'
                    )
                ),
                array(
                    '@type' => 'Question',
                    'name' => 'How much does pool construction cost in Ontario?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'Pool construction costs in Ontario typically range from $50,000 to $150,000+ depending on size, materials (gunite, vinyl, or fiberglass), features, and site conditions. We provide free detailed estimates for your specific project.'
                    )
                ),
                array(
                    '@type' => 'Question',
                    'name' => 'Do you offer pool maintenance services?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'Yes, Dundas Valley Pools offers comprehensive pool maintenance services including regular cleaning, chemical balancing, equipment checks, and seasonal openings/closings throughout the Hamilton and Halton regions.'
                    )
                ),
                array(
                    '@type' => 'Question',
                    'name' => 'What areas do you service?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'We service Dundas, Ancaster, Hamilton, Burlington, Oakville, Stoney Creek, Grimsby, and surrounding areas in the Golden Horseshoe region of Ontario.'
                    )
                )
            )
        );
        
        echo '<script type="application/ld+json">' . json_encode($faq_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
    }
});

/**
 * Add Service schema for service pages
 */

add_action('wp_head', function() {
    if (is_page('services') || is_page('pool-construction-services')) {
        $service_schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'serviceType' => 'Pool Construction',
            'provider' => array(
                '@type' => 'LocalBusiness',
                'name' => 'Dundas Valley Pools',
                'address' => array(
                    '@type' => 'PostalAddress',
                    'addressLocality' => 'Dundas',
                    'addressRegion' => 'ON',
                    'addressCountry' => 'CA'
                )
            ),
            'areaServed' => array(
                '@type' => 'GeoCircle',
                'geoMidpoint' => array(
                    '@type' => 'GeoCoordinates',
                    'latitude' => '43.2626',
                    'longitude' => '-79.9564'
                ),
                'geoRadius' => '50000'
            ),
            'hasOfferCatalog' => array(
                '@type' => 'OfferCatalog',
                'name' => 'Pool Services',
                'itemListElement' => array(
                    array(
                        '@type' => 'Offer',
                        'itemOffered' => array(
                            '@type' => 'Service',
                            'name' => 'Custom Pool Design'
                        )
                    ),
                    array(
                        '@type' => 'Offer',
                        'itemOffered' => array(
                            '@type' => 'Service',
                            'name' => 'Pool Construction'
                        )
                    ),
                    array(
                        '@type' => 'Offer',
                        'itemOffered' => array(
                            '@type' => 'Service',
                            'name' => 'Pool Renovation'
                        )
                    )
                )
            )
        );
        
        echo '<script type="application/ld+json">' . json_encode($service_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
    }
});

/**
 * Remove WordPress version from head (security)
 */
remove_action('wp_head', 'wp_generator');

/**
 * Add preconnect for external resources (performance)
 */
add_action('wp_head', function() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}, 1);

/**
 * Add robots meta tag for specific pages
 */
add_action('wp_head', function() {
    if (is_page('thank-you') || is_page('privacy-policy') || is_404()) {
        echo '<meta name="robots" content="noindex, follow">' . "\n";
    }
});

/**
 * Custom excerpt length for better SEO snippets
 */
add_filter('excerpt_length', function($length) {
    return 30;
});

/**
 * Add custom excerpt more
 */
add_filter('excerpt_more', function($more) {
    return '...';
});


