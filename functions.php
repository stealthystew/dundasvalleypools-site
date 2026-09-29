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
 * Homepage cleanup to keep the hero as the single visible H1.
 */
add_filter(
    'astra_the_title_enabled',
    function($enabled) {
        if (is_front_page()) {
            return false;
        }

        return $enabled;
    }
);

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
            'streetAddress' => '108 Alma Street',
            'addressLocality' => 'Dundas',
            'addressRegion' => 'ON',
            'postalCode' => 'L9H 2E4',
            'addressCountry' => 'CA'
        ),
        'geo' => array(
            '@type' => 'GeoCoordinates',
            'latitude' => '43.2626',
            'longitude' => '-79.9564'
        ),
        'url' => 'https://dundasvalleypools.ca',
        'telephone' => '+19059778673',
        'email' => 'info@dundasvalleypools.ca',
        'foundingDate' => '2016',
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
        echo '<meta name="description" content="Dundas Valley Pools provides pool construction, renovation, openings, closings, and backyard upgrades in Dundas, Hamilton, Ancaster, and Burlington. Book a consultation today.">' . "\n";
    } elseif (is_page('about-us')) {
        echo '<meta name="description" content="Learn about Dundas Valley Pools - pool construction, renovation and service across Hamilton & Halton since 2016.">' . "\n";
    } elseif (is_page('services')) {
        echo '<meta name="description" content="Complete pool services in Dundas & Hamilton: construction, renovations, openings/closings, liner replacements, safety covers & equipment upgrades.">' . "\n";
    } elseif (is_page('pool-construction-services')) {
        echo '<meta name="description" content="Custom pool construction in Dundas, Hamilton & Burlington. Gunite, vinyl & fiberglass pools. Free design consultation. Operating since 2016.">' . "\n";
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
    $description = 'Professional pool construction, renovation, and maintenance services in Dundas, Hamilton, Ancaster & Burlington. Operating since 2016.';
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
        $title['title'] = 'Dundas Valley Pools';
    } elseif (is_page()) {
        $page_title = get_the_title();
        $title['title'] = $page_title . ' | Dundas Valley Pools | Hamilton & Dundas';
    }
    return $title;
});

/**
 * Force a clean front-page title even when themes/plugins append a tagline.
 */
add_filter(
    'pre_get_document_title',
    function($title) {
        if (is_front_page()) {
            return 'Dundas Valley Pools';
        }

        return $title;
    },
    20
);

/**
 * Replace Astra footer credit with a cleaner local-business footer line.
 */
add_action(
    'init',
    function() {
        remove_all_actions('astra_footer_copyright');
        add_action(
            'astra_footer_copyright',
            function() {
                echo wp_kses_post('Copyright &copy; ' . gmdate('Y') . ' Dundas Valley Pools. All Rights Reserved.');
            }
        );
    },
    20
);

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




/**
 * Remove spam/injected casino content from post content
  * This filters out any content containing gambling/casino spam
   */
   add_filter('the_content', 'dvp_remove_spam_content', 999);
   function dvp_remove_spam_content($content) {
       // Remove Betzoid casino spam block
           $spam_patterns = array(
                   '/Betzoid.*?(?=<\/section|<\/div|$)/si',
                           '/<!-- casino|gambling|free spin|slot machine -->.*?<!-- end -->/si',
                                   '/stau\.info/si',
                                       );
                                           foreach ($spam_patterns as $pattern) {
                                                   $content = preg_replace($pattern, '', $content);
                                                       }
                                                           // Remove the entire paragraph block containing casino/gambling content
                                                               $content = preg_replace('/<p[^>]*>.*?(?:casino|Betzoid|free.?spin|stau\.info|gambling|casin[oò]).*?<\/p>/si', '', $content);
                                                                   $content = preg_replace('/<h[1-6][^>]*>.*?(?:Betzoid|casino).*?<\/h[1-6]>/si', '', $content);
                                                                       return $content;
                                                                       }

                                                                       /**
                                                                        * Add phone number to header area (above navigation)
                                                                         */
                                                                         add_action('wp_body_open', 'dvp_add_header_phone_bar');
                                                                         function dvp_add_header_phone_bar() {
                                                                             echo '<div class="dvp-top-bar" style="background:#007cba; color:#fff; text-align:center; padding:8px 20px; font-size:14px; font-weight:600;">
                                                                                     <span>Serving Hamilton, Dundas, Ancaster, Burlington &amp; Surrounding Areas</span>
                                                                                             &nbsp;&nbsp;|&nbsp;&nbsp;
                                                                                                     <a href="tel:+19059778673" style="color:#fff; text-decoration:none; font-weight:700;">&#9990; (905) 977-8673</a>
                                                                                                             &nbsp;&nbsp;|&nbsp;&nbsp;
                                                                                                                     <a href="mailto:info@dundasvalleypools.ca" style="color:#fff; text-decoration:none;">&#9993; info@dundasvalleypools.ca</a>
                                                                                                                         </div>';
                                                                                                                         }

                                                                                                                         /**
                                                                                                                          * Add a proper footer widget area and footer content
                                                                                                                           */
                                                                                                                           add_action('wp_footer', 'dvp_add_custom_footer', 20);
                                                                                                                           function dvp_add_custom_footer() {
                                                                                                                               echo '<footer class="dvp-site-footer" style="background:#1a2a3a; color:#cdd8e3; padding:48px 0 0 0; margin-top:0; font-size:14px;">
                                                                                                                                       <div style="max-width:1200px; margin:0 auto; padding:0 24px; display:grid; grid-template-columns:repeat(auto-fit, minmax(220px,1fr)); gap:40px;">
                                                                                                                                                   
                                                                                                                                                               <!-- Company Info -->
                                                                                                                                                                           <div>
                                                                                                                                                                                           <h4 style="color:#fff; font-size:16px; margin-bottom:14px; border-bottom:2px solid #007cba; padding-bottom:8px;">Dundas Valley Pools</h4>
                                                                                                                                                                                                           <p style="margin:0 0 8px 0;">Pool construction, renovation &amp; service across Hamilton &amp; Halton &mdash; operating since 2016.</p>
                                                                                                                                                                                                                           <p style="margin:8px 0;"><a href="tel:+19059778673" style="color:#5bc8f5; text-decoration:none;">&#9990; (905) 977-8673</a></p>
                                                                                                                                                                                                                                           <p style="margin:8px 0;"><a href="mailto:info@dundasvalleypools.ca" style="color:#5bc8f5; text-decoration:none;">&#9993; info@dundasvalleypools.ca</a></p>
                                                                                                                                                                                                                                                           <p style="margin:8px 0;">&#128205; 108 Alma Street, Dundas, ON L9H 2E4</p>
                                                                                                                                                                                                                                                                       </div>
                                                                                                                                                                                                                                                                                   
                                                                                                                                                                                                                                                                                               <!-- Services -->
                                                                                                                                                                                                                                                                                                           <div>
                                                                                                                                                                                                                                                                                                                           <h4 style="color:#fff; font-size:16px; margin-bottom:14px; border-bottom:2px solid #007cba; padding-bottom:8px;">Our Services</h4>
                                                                                                                                                                                                                                                                                                                                           <ul style="list-style:none; padding:0; margin:0;">
                                                                                                                                                                                                                                                                                                                                                               <li style="margin-bottom:7px;"><a href="/pool-openings-closings/" style="color:#5bc8f5; text-decoration:none;">&#10003; Pool Openings &amp; Closings</a></li>
                                                                                                                                                                                                                                                                                                                                                                                   <li style="margin-bottom:7px;"><a href="/liner-replacements/" style="color:#5bc8f5; text-decoration:none;">&#10003; Liner Replacements</a></li>
                                                                                                                                                                                                                                                                                                                                                                                                       <li style="margin-bottom:7px;"><a href="/safety-cover-installations/" style="color:#5bc8f5; text-decoration:none;">&#10003; Safety Cover Installs</a></li>
                                                                                                                                                                                                                                                                                                                                                                                                                           <li style="margin-bottom:7px;"><a href="/pool-construction-services/" style="color:#5bc8f5; text-decoration:none;">&#10003; Pool Construction</a></li>
                                                                                                                                                                                                                                                                                                                                                                                                                                               <li style="margin-bottom:7px;"><a href="/services/" style="color:#5bc8f5; text-decoration:none;">&#10003; All Services</a></li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                               </ul>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                           </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   <!-- Service Areas -->
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               <div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               <h4 style="color:#fff; font-size:16px; margin-bottom:14px; border-bottom:2px solid #007cba; padding-bottom:8px;">Areas We Serve</h4>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               <ul style="list-style:none; padding:0; margin:0; columns:2;">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   <li style="margin-bottom:6px;">&#128205; Dundas</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       <li style="margin-bottom:6px;">&#128205; Hamilton</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           <li style="margin-bottom:6px;">&#128205; Ancaster</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               <li style="margin-bottom:6px;">&#128205; Burlington</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   <li style="margin-bottom:6px;">&#128205; Stoney Creek</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       <li style="margin-bottom:6px;">&#128205; Oakville</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           <li style="margin-bottom:6px;">&#128205; Waterdown</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               <li style="margin-bottom:6px;">&#128205; Flamborough</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               </ul>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   <!-- Quick Links & Social -->
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               <div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               <h4 style="color:#fff; font-size:16px; margin-bottom:14px; border-bottom:2px solid #007cba; padding-bottom:8px;">Quick Links</h4>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               <ul style="list-style:none; padding:0; margin:0 0 20px 0;">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   <li style="margin-bottom:7px;"><a href="/" style="color:#5bc8f5; text-decoration:none;">Home</a></li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       <li style="margin-bottom:7px;"><a href="/about-us/" style="color:#5bc8f5; text-decoration:none;">About Us</a></li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           <li style="margin-bottom:7px;"><a href="/gallery/" style="color:#5bc8f5; text-decoration:none;">Gallery / Portfolio</a></li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               <li style="margin-bottom:7px;"><a href="/contact-us/" style="color:#5bc8f5; text-decoration:none;">Contact Us</a></li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   <li style="margin-bottom:7px;"><a href="/contact-us/" style="color:#fff; background:#007cba; padding:6px 14px; border-radius:4px; text-decoration:none; display:inline-block; margin-top:6px;">Book Consultation</a></li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   </ul>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   <div style="margin-top:16px;">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       <span style="color:#fff; font-weight:600; display:block; margin-bottom:10px;">Follow Us:</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           <a href="https://www.facebook.com/dundasvalleypools" target="_blank" rel="noopener" style="color:#5bc8f5; text-decoration:none; margin-right:14px; font-size:16px;">Facebook</a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               <a href="https://www.instagram.com/dundasvalleypools" target="_blank" rel="noopener" style="color:#5bc8f5; text-decoration:none; font-size:16px;">Instagram</a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   <!-- Bottom bar -->
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           <div style="background:#111e2b; margin-top:36px; padding:16px 24px; text-align:center; font-size:13px; color:#8899aa;">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       <span>&copy; ' . date('Y') . ' Dundas Valley Pools &amp; Hardscapes. All Rights Reserved. | Serving Hamilton, Dundas, Ancaster, Burlington &amp; Area</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   </footer>';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   }

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   /**
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    * Add Google Map to Contact page via shortcode [dvp_google_map]
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     */
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     add_shortcode('dvp_google_map', 'dvp_render_google_map');
function dvp_render_google_map() {
    return '<div class="contact-map" style="width:100%; margin:24px 0; border-radius:10px; overflow:hidden; box-shadow:0 4px 16px rgba(0,0,0,0.12);">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 <iframe 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2900.8!2d-79.9587!3d43.2656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882c998c47836b4d%3A0x%21Dundas+Valley+Pools%2C+52+Dundas+St%2C+Dundas+ON!5e0!3m2!1sen!2sca!4v1"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         width="100%" 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     height="380" 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 style="border:0; display:block;" 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             allowfullscreen="" 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         loading="lazy" 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     referrerpolicy="no-referrer-when-downgrade"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 title="Dundas Valley Pools Location">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </iframe>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div>';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            }

/**
 * Fill in empty attachment alt text using the attachment title.
 */
add_filter(
    'wp_get_attachment_image_attributes',
    function($attr, $attachment) {
        if (!empty($attr['alt'])) {
            return $attr;
        }

        $fallback = trim((string) get_the_title($attachment));
        if ($fallback !== '') {
            $attr['alt'] = preg_replace('/\s+/', ' ', str_replace(array('-', '_'), ' ', $fallback));
        }

        return $attr;
    },
    10,
    2
);

/**
 * Upgrade legacy hard-coded media URLs on secure requests.
 */
add_action(
    'template_redirect',
    function() {
        if (is_admin() || wp_doing_ajax() || (defined('REST_REQUEST') && REST_REQUEST)) {
            return;
        }

        ob_start(
            function($html) {
                $html = strtr(
                    $html,
                    array(
                        'Book Free Consultation' => 'Book Consultation',
                        'Book Free COnsultation' => 'Book Consultation',
                    )
                );

                $html = preg_replace(
                    array(
                        '#(<a[^>]*href="[^"]*/services/[^"]*"[^>]*>\s*(?:<span[^>]*>)?\s*)LEARN MORE(\s*(?:</span>)?\s*<)#i',
                        '#(<a[^>]*href="[^"]*/pool-openings-closings/[^"]*"[^>]*>\s*)Learn More(\s*<)#i',
                        '#(<a[^>]*href="[^"]*/liner-replacements/[^"]*"[^>]*>\s*)Learn More(\s*<)#i',
                        '#(<a[^>]*href="[^"]*/safety-cover-installations/[^"]*"[^>]*>\s*)Learn More(\s*<)#i',
                        '#(<a[^>]*href="[^"]*/pool-construction-services/[^"]*"[^>]*>\s*)Learn More(\s*<)#i',
                    ),
                    array(
                        '$1View All Services$2',
                        '$1View Opening & Closing Services$2',
                        '$1View Liner Replacements$2',
                        '$1View Safety Cover Options$2',
                        '$1View Pool Construction$2',
                    ),
                    $html
                );

                if (!is_ssl()) {
                    return $html;
                }

                return strtr(
                    $html,
                    array(
                        'http://dundasvalleypools.ca/' => 'https://dundasvalleypools.ca/',
                        'http://www.dundasvalleypools.ca/' => 'https://www.dundasvalleypools.ca/',
                        'http://dundasvalleypools.local/' => 'https://dundasvalleypools.local/',
                        'http://www.dundasvalleypools.local/' => 'https://www.dundasvalleypools.local/',
                    )
                );
            }
        );
    },
    0
);

/**
 * Improve front-page CTA clarity and accessibility without hand-editing each widget.
 */
add_action(
    'wp_footer',
    function() {
        if (!is_front_page()) {
            return;
        }
        ?>
        <script>
        document.addEventListener('DOMContentLoaded', function () {
            const buttonLabelMap = {
                '/services/': 'View All Services',
                '/pool-openings-closings/': 'View Opening & Closing Services',
                '/liner-replacements/': 'View Liner Replacements',
                '/safety-cover-installations/': 'View Safety Cover Options',
                '/pool-construction-services/': 'View Pool Construction'
            };

            const setLinkText = function (link, nextText) {
                const buttonText = link.querySelector('.elementor-button-text');
                if (buttonText) {
                    buttonText.textContent = nextText;
                    return;
                }

                for (const node of link.childNodes) {
                    if (node.nodeType === Node.TEXT_NODE && node.nodeValue.trim() !== '') {
                        node.nodeValue = nextText + ' ';
                        return;
                    }
                }

                link.textContent = nextText;
            };

            document.querySelectorAll('.custom-logo-link').forEach(function (link) {
                link.setAttribute('aria-label', 'Dundas Valley Pools home');
            });

            document.querySelectorAll('.quform-element-required .quform-field').forEach(function (field) {
                if (field.type === 'hidden' || field.closest('.quform-sr-only') || field.tabIndex === -1) {
                    return;
                }

                field.setAttribute('required', 'required');
                field.setAttribute('aria-required', 'true');
            });

            document.querySelectorAll('a.elementor-button, a.bdt-ep-advanced-icon-box-readmore, .site-footer a').forEach(function (link) {
                const href = link.getAttribute('href') || '';
                const currentText = (link.textContent || '').replace(/\s+/g, ' ').trim();

                if (/book free consultation/i.test(currentText)) {
                    setLinkText(link, 'Book Consultation');
                    return;
                }

                if (!/learn more/i.test(currentText)) {
                    return;
                }

                for (const [path, label] of Object.entries(buttonLabelMap)) {
                    if (href.indexOf(path) !== -1) {
                        setLinkText(link, label);
                        break;
                    }
                }
            });

            document.querySelectorAll('.bdt-ep-advanced-image-gallery-item').forEach(function (item, index) {
                const link = item.querySelector('.bdt-ep-advanced-image-gallery-item-link');
                const image = item.querySelector('img');
                if (!link) {
                    return;
                }

                const alt = image ? (image.getAttribute('alt') || '').trim() : '';
                link.setAttribute('aria-label', alt ? 'Open gallery image: ' + alt : 'Open gallery image ' + (index + 1));
            });

            document.querySelectorAll('img[alt=""]').forEach(function (image) {
                const src = image.getAttribute('src') || '';
                const filename = src.split('/').pop();
                if (!filename) {
                    return;
                }

                const cleaned = filename
                    .replace(/\.[^.]+$/, '')
                    .replace(/[-_]+/g, ' ')
                    .replace(/\s+/g, ' ')
                    .trim();

                if (cleaned) {
                    image.setAttribute('alt', cleaned);
                }
            });
        });
        </script>
        <?php
    },
    100
);

/**
 * Build a full uploads URL for theme templates.
 */
function dvp_upload_image_url($relative_path) {
    $uploads = wp_get_upload_dir();

    return trailingslashit($uploads['baseurl']) . ltrim($relative_path, '/');
}

/**
 * Shared service-page content used by the child-theme templates.
 */
function dvp_get_service_page_data($slug = null) {
    $slug = $slug ?: get_post_field('post_name', get_the_ID());

    $services = array(
        'liner-replacements' => array(
            'eyebrow' => 'Liner Replacements',
            'hero_title' => 'Fresh liners that make an older pool look cared for again',
            'hero_copy' => 'We replace worn vinyl liners with clean, properly fitted installations that improve the look of the pool, protect the structure, and set you up for a stronger swim season.',
            'hero_image' => dvp_upload_image_url('2024/08/img-4557053.jpg'),
            'feature_image' => dvp_upload_image_url('2024/08/img-543644.jpg'),
            'gallery_images' => array(
                dvp_upload_image_url('2024/08/img-4557053.jpg'),
                dvp_upload_image_url('2024/08/img-5104.jpg'),
                dvp_upload_image_url('2024/08/Img-675.jpg'),
            ),
            'highlights' => array(
                'Custom measured liner sizing for a cleaner fit',
                'Pattern and colour guidance that suits the backyard',
                'Careful prep before the liner goes in',
                'Professional installation with detail-focused finishing',
            ),
            'process' => array(
                'Inspect the pool shell, fittings, coping, and current liner condition.',
                'Confirm measurements, liner pattern, and the scope of any prep work.',
                'Remove the old liner and prepare surfaces for a clean install.',
                'Install and seat the new liner, then review next steps for startup.',
            ),
            'cta_title' => 'Ready to refresh the look of your pool?',
            'cta_copy' => 'Tell us about the condition of your liner and we can help you plan the replacement properly.',
        ),
        'safety-cover-installations' => array(
            'eyebrow' => 'Safety Cover Installations',
            'hero_title' => 'Custom safety covers that protect the pool and simplify the off-season',
            'hero_copy' => 'We install custom-fit safety covers that help keep debris out, improve peace of mind, and make spring openings cleaner and easier to manage.',
            'hero_image' => dvp_upload_image_url('2024/08/img-5264.jpg'),
            'feature_image' => dvp_upload_image_url('2024/08/IMG_5782.jpg'),
            'gallery_images' => array(
                dvp_upload_image_url('2024/08/img-5264.jpg'),
                dvp_upload_image_url('2024/08/IMG_5505.jpg'),
                dvp_upload_image_url('2024/08/IMG_5508.jpg'),
            ),
            'highlights' => array(
                'Custom-fit cover sizing based on the actual pool layout',
                'Anchor layout planned around obstructions and surrounding hardscape',
                'Cover options that reduce debris and winter cleanup',
                'Installation guidance so you know how to use and maintain the system',
            ),
            'process' => array(
                'Review the pool shape, obstructions, and surrounding deck area.',
                'Measure precisely for a cover that fits the pool correctly.',
                'Set anchor points and complete the installation cleanly.',
                'Walk you through care, removal, and seasonal use.',
            ),
            'cta_title' => 'Looking for a safer, cleaner winter cover setup?',
            'cta_copy' => 'We can assess your pool and recommend the right cover approach for your yard and layout.',
        ),
        'equipment-upgrades' => array(
            'eyebrow' => 'Equipment Upgrades',
            'hero_title' => 'Replace tired equipment with cleaner, more efficient pool systems',
            'hero_copy' => 'From pumps and filters to heaters and salt systems, we help upgrade the equipment that keeps your pool running smoothly and more efficiently.',
            'hero_image' => dvp_upload_image_url('2024/07/8-8-min-scaled.jpg'),
            'feature_image' => dvp_upload_image_url('2024/07/img-65847.jpg'),
            'gallery_images' => array(
                dvp_upload_image_url('2024/07/8-8-min-scaled.jpg'),
                dvp_upload_image_url('2024/07/img-65847.jpg'),
                dvp_upload_image_url('2024/07/img-4415.jpg'),
            ),
            'highlights' => array(
                'Recommendations based on the actual problems your pool is having',
                'Upgrades for pumps, filtration, heaters, automation, and sanitation',
                'Cleaner equipment layouts with easier service access',
                'Installations that prioritize reliability over gimmicks',
            ),
            'process' => array(
                'Assess the current system and identify the weak points.',
                'Recommend replacement or upgrade options that fit the pool.',
                'Install and configure the new equipment properly.',
                'Review operation, maintenance, and what to watch for next.',
            ),
            'cta_title' => 'Need better-performing equipment this season?',
            'cta_copy' => 'We can review your setup and recommend upgrades that make sense for the way you use the pool.',
        ),
        'above-ground-pools' => array(
            'eyebrow' => 'Above Ground Pools',
            'hero_title' => 'Above ground pool projects with more planning and better finishing',
            'hero_copy' => 'We help homeowners plan above ground pool installs that feel intentional, work with the yard, and leave room for a better long-term setup around the pool.',
            'hero_image' => dvp_upload_image_url('2024/07/img-34715-min.jpg'),
            'feature_image' => dvp_upload_image_url('2024/07/img-47505.jpg'),
            'gallery_images' => array(
                dvp_upload_image_url('2024/07/img-34715-min.jpg'),
                dvp_upload_image_url('2024/07/img-47505.jpg'),
                dvp_upload_image_url('2024/07/img-4415.jpg'),
            ),
            'highlights' => array(
                'Site-aware planning for grading, access, and circulation',
                'Advice on placement, deck relationships, and backyard flow',
                'Installation support with an eye on durability and finish quality',
                'Upgrade planning for liner, equipment, and surrounding hardscape',
            ),
            'process' => array(
                'Review the yard and confirm the right placement for the pool.',
                'Plan around access, grading, and adjacent backyard features.',
                'Complete the installation with a cleaner, more intentional setup.',
                'Recommend follow-up upgrades that improve comfort and usability.',
            ),
            'cta_title' => 'Planning an above ground pool project?',
            'cta_copy' => 'Let us review the yard and help you make the install feel like part of the property, not an afterthought.',
        ),
    );

    return isset($services[$slug]) ? $services[$slug] : $services['liner-replacements'];
}

/**
 * Shared cards for the main services page.
 */
function dvp_get_service_cards() {
    return array(
        array(
            'title' => 'Pool Openings / Closings',
            'slug' => 'pool-openings-closings',
            'summary' => 'Seasonal openings and closings with practical service options, strong communication, and cleaner spring starts.',
            'image' => dvp_upload_image_url('2024/07/img-35705-min.jpg'),
        ),
        array(
            'title' => 'Liner Replacements',
            'slug' => 'liner-replacements',
            'summary' => 'Fresh liner installs that update the look of the pool and give the structure a better reset.',
            'image' => dvp_upload_image_url('2024/08/img-4557053.jpg'),
        ),
        array(
            'title' => 'Safety Cover Installations',
            'slug' => 'safety-cover-installations',
            'summary' => 'Custom-fit safety covers that protect the pool through the off-season and reduce spring cleanup.',
            'image' => dvp_upload_image_url('2024/08/img-5264.jpg'),
        ),
        array(
            'title' => 'Pool Construction',
            'slug' => 'pool-construction-services',
            'summary' => 'Custom steel wall vinyl liner pools, major renovations, and backyard transformations built around the property.',
            'image' => dvp_upload_image_url('2024/08/img-45825166.jpg'),
        ),
        array(
            'title' => 'Equipment Upgrades',
            'slug' => 'equipment-upgrades',
            'summary' => 'Pump, filter, heater, and system upgrades that improve reliability and make the pool easier to manage.',
            'image' => dvp_upload_image_url('2024/07/8-8-min-scaled.jpg'),
        ),
        array(
            'title' => 'Above Ground Pools',
            'slug' => 'above-ground-pools',
            'summary' => 'Above ground pool planning and installations with better placement, better flow, and better finishing.',
            'image' => dvp_upload_image_url('2024/07/img-34715-min.jpg'),
        ),
    );
}

/**
 * Supporting search-resource layer. Kept in its own file so long-form content
 * does not crowd the commercial service logic above.
 */
require_once get_stylesheet_directory() . '/inc/dvp-guides.php';

/**
 * Keep the header navigation labels cleaner without editing menus in wp-admin.
 */
add_action(
    'wp_footer',
    function() {
        ?>
        <script>
        document.addEventListener('DOMContentLoaded', function () {
            const homeUrl = <?php echo wp_json_encode(home_url('/')); ?>;

            document.querySelectorAll('#primary-site-navigation-desktop .menu-link, #ast-hf-mobile-menu .menu-link, .ast-builder-menu-mobile .menu-link').forEach(function (link) {
                const href = link.href || link.getAttribute('href') || '';
                const currentText = (link.textContent || '').replace(/\s+/g, ' ').trim();

                if (href === homeUrl && /dundas valley pools/i.test(currentText)) {
                    link.textContent = 'Home';
                }
            });

            document.querySelectorAll('#primary-site-navigation-desktop .menu-item-has-children, #ast-hf-mobile-menu .menu-item-has-children, .ast-builder-menu-mobile .menu-item-has-children').forEach(function (item) {
                const link = item.querySelector(':scope > .menu-link');
                const toggleButton = item.querySelector(':scope > .ast-menu-toggle');
                const inlineToggle = item.querySelector(':scope > .menu-link .dropdown-menu-toggle');

                if (!link || !toggleButton) {
                    return;
                }

                const toggleSubmenu = function () {
                    toggleButton.click();
                };

                if (inlineToggle) {
                    inlineToggle.setAttribute('aria-hidden', 'true');
                    inlineToggle.tabIndex = -1;
                }

                link.addEventListener('click', function (event) {
                    const isExpanded = item.classList.contains('ast-submenu-expanded') || toggleButton.getAttribute('aria-expanded') === 'true';

                    if (!isExpanded) {
                        event.preventDefault();
                        toggleSubmenu();
                        return;
                    }

                    if (window.innerWidth <= 921) {
                        event.preventDefault();
                        toggleSubmenu();
                    }
                });
            });
        });
        </script>
        <?php
    },
    30
);
