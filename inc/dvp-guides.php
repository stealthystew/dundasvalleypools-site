<?php
/**
 * DVP search-resource layer.
 *
 * Creates a small, separate guide library that supports the commercial service
 * pages without crowding the main navigation or turning sales pages into long
 * SEO documents.
 */

if (!defined('ABSPATH')) {
    exit;
}

function dvp_get_pool_guides() {
    return array(
        'pool-safety-cover-planning-guide' => array(
            'title' => 'Pool Safety Cover Planning Guide',
            'eyebrow' => 'Pool Guide',
            'intro' => 'A practical guide to custom safety-cover planning for vinyl pools in Ontario, including measurements, cover types, anchor conditions, steps, raised walls, waterfalls and replacement-cover decisions.',
            'meta_title' => 'Pool Safety Cover Planning Guide | Ontario | Dundas Valley Pools',
            'meta_description' => 'Plan a custom pool safety cover in Ontario. Compare mesh options, anchor layouts, interlock and lawn anchors, steps, raised walls, waterfalls and replacement covers.',
            'service_slug' => 'safety-cover-installations',
            'service_label' => 'Safety Cover Installations',
            'hero_image' => dvp_upload_image_url('2024/08/img-5264.jpg'),
            'sections' => array(
                array(
                    'title' => 'Why safety-cover planning starts with the pool, not the catalogue',
                    'paragraphs' => array(
                        'A safety cover is manufactured around the actual geometry of the pool and the conditions around it. Two pools that are both described as “16 × 32 rectangles” can require very different covers once stairs, ladders, raised walls, waterfalls, attached spas, narrow deck sections or landscaping are considered.',
                        'The useful first step is to document the pool accurately. Wide photos, approximate dimensions and clear photos of unusual features help determine whether the job is straightforward or needs a custom layout before a final measurement visit.'
                    ),
                    'bullets' => array(
                        'Pool shape and true maximum length and width',
                        'Stairs, benches, spas, waterfalls and other projections',
                        'Deck material and usable anchoring area around the pool',
                        'Raised walls, coping changes, planters and narrow walkways',
                        'Existing anchors if a replacement cover is being considered'
                    )
                ),
                array(
                    'title' => 'Mesh, deluxe mesh and solid-style covers',
                    'paragraphs' => array(
                        'Mesh covers are popular because rain and snowmelt can drain through the fabric instead of collecting on top. Lighter mesh can be easier to handle, while denser premium mesh reduces the amount of sunlight and fine debris entering the pool. Solid-style covers can block more light and debris but usually need a drainage strategy.',
                        'The right choice depends on the backyard, the amount of tree debris, how the homeowner wants to handle spring opening, and how much weight they place on easier handling versus maximum light and debris reduction.'
                    )
                ),
                array(
                    'title' => 'What the grid size changes',
                    'paragraphs' => array(
                        'Safety covers are commonly built with different strap-grid spacing. A denser grid uses more straps and springs and generally distributes the cover load through more connection points. It can also give the installer more flexibility around irregular geometry and complex deck conditions.',
                        'A wider grid can be perfectly suitable for many simple rectangles. A tighter grid becomes more attractive as the pool shape, obstructions or surrounding hardscape become more complicated. The decision should follow the pool layout rather than be treated as a cosmetic upgrade.'
                    )
                ),
                array(
                    'title' => 'Anchors: concrete, interlock, porcelain and lawn conditions',
                    'paragraphs' => array(
                        'The cover only works as well as the points supporting it. Standard brass anchors are typically installed into stable concrete. Interlock and other modular deck surfaces often require a longer support system so the load transfers below the individual paver instead of relying on a stone that can move.',
                        'Porcelain, stone and narrow coping zones need extra care because drilling and load transfer are different from a conventional poured-concrete deck. Areas without hardscape may require lawn tubes or another manufacturer-approved anchoring approach.'
                    ),
                    'bullets' => array(
                        'Identify the deck material around every side of the pool',
                        'Flag cracked, loose or recently installed hardscape before drilling',
                        'Plan for lawn anchors where usable deck does not exist',
                        'Avoid treating decorative stone as if it were structural concrete'
                    )
                ),
                array(
                    'title' => 'Raised walls, waterfalls and other obstructions',
                    'paragraphs' => array(
                        'Raised features are where custom measurement matters most. A cover may need wall anchors, cable systems, custom cutouts or a layout that changes the strap direction around the feature. The objective is to maintain proper cover tension without creating a poor fit or an awkward installation.',
                        'For these pools, photographs from several angles are useful before the measurement appointment. A manufacturer CAD drawing is then used to confirm the final shape and attachment logic before production.'
                    )
                ),
                array(
                    'title' => 'Replacing an existing safety cover',
                    'paragraphs' => array(
                        'A replacement cover can sometimes be manufactured to match an existing anchor pattern. That can reduce drilling and preserve finished hardscape, but the old cover and anchor layout need to be documented accurately. A worn cover should not automatically be copied if the original fit was poor.',
                        'When anchor matching is possible, the goal is to preserve what works while correcting tension, cutouts or fit issues that caused trouble with the old cover.'
                    )
                ),
                array(
                    'title' => 'What to send when requesting a safety-cover quote',
                    'paragraphs' => array(
                        'A useful quote request does not need to be a survey. It should simply give enough information to identify the likely cover category and any custom conditions that will affect measurement, hardware or installation.'
                    ),
                    'bullets' => array(
                        'One wide photo showing the whole pool',
                        'Approximate maximum length and width',
                        'Pool shape and stair location',
                        'Close photos of raised walls, waterfalls or attached features',
                        'Deck material: concrete, interlock, porcelain, wood or lawn',
                        'Photos of the old cover and anchors if this is a replacement'
                    )
                )
            ),
            'faqs' => array(
                array('q' => 'Can a safety cover be installed over interlock?', 'a' => 'Yes. Interlock installations commonly use longer anchor systems designed to transfer load below the individual paver. The exact hardware depends on the deck construction and manufacturer requirements.'),
                array('q' => 'Can a safety cover work with a raised wall or waterfall?', 'a' => 'Usually, yes, but the cover may need custom wall anchors, cable details or a different strap layout. These pools should be measured as custom installations.'),
                array('q' => 'Can a new cover use my existing anchors?', 'a' => 'Often it can, provided the existing layout is sound and can be measured accurately. Anchor matching is especially useful when homeowners want to avoid drilling additional holes in finished hardscape.'),
                array('q' => 'When should I order a safety cover in Ontario?', 'a' => 'Ordering before the fall closing rush gives more flexibility for measurement, CAD approval, manufacturing and installation. Complex custom covers should be started earlier than simple rectangles.')
            )
        ),
        'vinyl-pool-liner-replacement-guide' => array(
            'title' => 'Vinyl Pool Liner Replacement Guide',
            'eyebrow' => 'Pool Guide',
            'intro' => 'How to tell when a vinyl liner needs replacement, what should be inspected before ordering, how measurements affect fit, and which renovation items are smartest to coordinate while the pool is empty.',
            'meta_title' => 'Vinyl Pool Liner Replacement Guide | Ontario | Dundas Valley Pools',
            'meta_description' => 'Vinyl pool liner replacement guide for Ontario homeowners: warning signs, measurements, wall and floor prep, steps, fittings, coping and renovation sequencing.',
            'service_slug' => 'liner-replacements',
            'service_label' => 'Liner Replacements',
            'hero_image' => dvp_upload_image_url('2024/08/img-4557053.jpg'),
            'sections' => array(
                array(
                    'title' => 'The liner is a finish, but it also tells you what is happening underneath',
                    'paragraphs' => array(
                        'Fading alone does not mean a liner has failed. The more useful signs are loss of elasticity, repeated leaks, brittle material around fittings, seams beginning to separate, liner movement, wrinkles that keep returning or visible deterioration around the waterline.',
                        'Before ordering a new liner, the pool should be treated as a system. The walls, floor, coping, skimmer, returns, stairs and any known leak history should be reviewed so the new liner is not installed over a problem that should have been repaired while the pool was empty.'
                    )
                ),
                array(
                    'title' => 'Why custom measurements matter',
                    'paragraphs' => array(
                        'A vinyl liner is manufactured from a measurement set, not simply from the nominal pool size. Wall height, corner geometry, hopper dimensions, slopes, steps and other shape changes determine how the material sits once the pool is filled.',
                        'Good measurements help the liner stretch into the intended position without excessive tension, loose material or distorted seams. Unusual pools and older renovations deserve extra attention because the current shape may differ from the original construction drawing.'
                    )
                ),
                array(
                    'title' => 'What should be inspected after the old liner comes out',
                    'paragraphs' => array(
                        'Removing the old liner is one of the few times the full pool interior becomes accessible. It is the right moment to check wall condition, floor smoothness, rust, washed-out areas, damaged foam, track condition and the sealing surfaces around fittings.',
                        'Small preparation items are cheaper and easier to correct before the new liner is installed than after the pool is full again.'
                    ),
                    'bullets' => array(
                        'Steel-wall corrosion or damaged wall foam',
                        'Floor divots, washouts and rough patches',
                        'Liner track and coping condition',
                        'Skimmer and return-face condition',
                        'Main drains, lights and gaskets where applicable',
                        'Evidence of previous leaks or ground-water problems'
                    )
                ),
                array(
                    'title' => 'Repairs and upgrades that pair well with a liner replacement',
                    'paragraphs' => array(
                        'A liner replacement can be a standalone project, but it is also a natural coordination point for other work that needs an empty pool or access behind fittings. Combining the right items can avoid draining the pool twice or disturbing a brand-new liner later.',
                        'Common examples include skimmer or return replacement, stair resurfacing, light work, wall repair, coping changes and larger deck-renovation scopes.'
                    )
                ),
                array(
                    'title' => 'Vinyl-over steps and benches',
                    'paragraphs' => array(
                        'Pools with vinyl-covered steps or benches require additional measurement and fabrication detail. The transitions have to be documented so seams and material tension land in predictable places. When designed properly, vinyl-over features can create a continuous finish through the pool instead of introducing a separate white stair unit.'
                    )
                ),
                array(
                    'title' => 'Choosing a pattern without making the pool look dated',
                    'paragraphs' => array(
                        'Pattern choice changes how water colour reads more than most homeowners expect. Darker or more saturated designs can create a deeper blue appearance, while lighter finishes tend to read brighter and more reflective. Borderless designs usually create a cleaner contemporary look, especially when the coping and deck are also being updated.',
                        'The useful decision is not “which sample looks best in your hand?” It is which finish works with the coping, deck, house, landscaping and amount of shade around the pool.'
                    )
                ),
                array(
                    'title' => 'A practical liner-replacement sequence',
                    'bullets' => array(
                        'Inspect the pool and document any known leak or structural concerns',
                        'Measure the complete pool geometry and select the liner pattern',
                        'Order the liner and coordinate any repair materials or fittings',
                        'Drain the pool and remove the existing liner',
                        'Prepare walls, floor, track and fittings',
                        'Install and position the new liner under vacuum',
                        'Begin filling while completing fittings at the correct water level',
                        'Restart and balance the pool once filling is complete'
                    )
                )
            ),
            'faqs' => array(
                array('q' => 'How do I know if my vinyl pool liner needs replacement?', 'a' => 'Recurring leaks, brittleness, seam failure, material pulling away from fittings, persistent wrinkles and significant loss of elasticity are stronger replacement signals than fading alone.'),
                array('q' => 'Can pool repairs be done at the same time as a liner?', 'a' => 'Yes. Skimmer, return, wall, floor, stair, light and some coping repairs are often easier to coordinate while the pool is drained and the old liner is removed.'),
                array('q' => 'Can you replace a liner in an older custom-shaped pool?', 'a' => 'Yes. Older and irregular pools are measured from the actual pool geometry so a new liner can be fabricated for the existing structure.'),
                array('q' => 'Should the deck be replaced before or after the liner?', 'a' => 'That depends on the scope. If coping, wall structure or major deck demolition could affect the pool edge, those items should be sequenced before the final liner installation.')
            )
        ),
        'ontario-pool-closing-winterization-guide' => array(
            'title' => 'Ontario Pool Closing & Winterization Guide',
            'eyebrow' => 'Seasonal Guide',
            'intro' => 'A homeowner-focused explanation of what a proper pool closing is trying to accomplish in Ontario: protect plumbing and equipment from freeze damage, manage water and debris, and leave the pool in a condition that is easier to reopen.',
            'meta_title' => 'Ontario Pool Closing & Winterization Guide | Dundas Valley Pools',
            'meta_description' => 'Ontario pool winterization guide: closing timing, water level, plumbing blowout, plugs, equipment, covers and spring-opening preparation for vinyl pools.',
            'service_slug' => 'pool-openings-closings',
            'service_label' => 'Pool Openings & Closings',
            'hero_image' => dvp_upload_image_url('2024/07/img-35705-min.jpg'),
            'sections' => array(
                array(
                    'title' => 'What winterization is actually protecting',
                    'paragraphs' => array(
                        'The core job of a pool closing is to keep freezing water from being trapped where expansion can damage plumbing or equipment. The cover, chemicals and cleanup all matter, but the plumbing system is the part that can become expensive when winterization is incomplete.',
                        'A professional closing should follow the actual equipment and plumbing layout rather than a generic checklist copied from another pool.'
                    )
                ),
                array(
                    'title' => 'When to close an outdoor pool in Southern Ontario',
                    'paragraphs' => array(
                        'Closing too early can leave warm water sitting under a cover for weeks, which can make spring cleanup harder. Waiting too long increases scheduling pressure and the chance of dealing with freezing overnight temperatures before the system is protected.',
                        'The practical window is based on water temperature, tree debris, forecast conditions and how the property is used. Homeowners who want a specific fall date should book before the seasonal rush rather than waiting for the first frost warning.'
                    )
                ),
                array(
                    'title' => 'The main closing sequence',
                    'bullets' => array(
                        'Clean the pool and remove debris that should not sit all winter',
                        'Balance and treat the water for the off-season',
                        'Lower the water only as required for the pool and cover setup',
                        'Remove or prepare accessories such as ladders and removable fittings',
                        'Blow out and protect suction and return plumbing',
                        'Install winter plugs and protect vulnerable lines',
                        'Drain or winterize equipment according to the equipment type',
                        'Install and tension the winter cover correctly',
                        'Leave a record of anything that should be repaired before opening'
                    )
                ),
                array(
                    'title' => 'Why “just add antifreeze” is not a winterization plan',
                    'paragraphs' => array(
                        'Pool antifreeze can be useful in certain plumbing configurations, but it is not a substitute for removing water from lines that must be protected. The important variables are the pipe layout, equipment elevation, valves, returns, skimmers and any water features connected to the circulation system.',
                        'Complex pools with waterfalls, spas, in-floor systems or unusual plumbing deserve a documented closing process so the same lines are not rediscovered every fall.'
                    )
                ),
                array(
                    'title' => 'Tarp-and-water-bag covers versus safety covers',
                    'paragraphs' => array(
                        'Traditional tarp covers can work well but usually require more water and debris management through the winter and spring. Safety covers are tensioned above the pool and are easier to keep visually tidy, but they depend on correct anchor placement, spring tension and cover geometry.',
                        'The closing procedure changes with the cover. Water level, hardware and spring setup should match the actual cover system rather than being treated as interchangeable.'
                    )
                ),
                array(
                    'title' => 'What homeowners can do before the crew arrives',
                    'bullets' => array(
                        'Clear furniture and storage bins away from the pool edge',
                        'Make sure the equipment area is accessible',
                        'Locate winter plugs, cover hardware and specialty fittings if they are stored separately',
                        'Tell the technician about repairs, leaks or equipment changes made during the season',
                        'Remove excessive leaves before closing day when possible',
                        'Confirm whether the cover is a tarp, lock-in cover or anchored safety cover'
                    )
                ),
                array(
                    'title' => 'Use the closing as an annual condition check',
                    'paragraphs' => array(
                        'Closing day is a useful time to flag failing cover hardware, brittle fittings, leaking valves, noisy pumps, damaged liners and other items that can be planned during the off-season. A short repair list in October is more useful than discovering the same issues on the first warm weekend in May.'
                    )
                )
            ),
            'faqs' => array(
                array('q' => 'Do all pools need the same winter water level?', 'a' => 'No. The correct level depends on the pool structure, skimmer arrangement and cover type. Water should not be lowered using a one-size-fits-all rule.'),
                array('q' => 'Should I close my pool before the leaves fall?', 'a' => 'There is a trade-off. Closing before heavy leaf drop can reduce fall maintenance, but closing very early while the water is still warm can make spring cleanup harder. Timing should consider temperature, debris and forecast conditions.'),
                array('q' => 'Does a safety cover change the closing process?', 'a' => 'Yes. Safety covers use anchors and springs and often have different water-level and deck-access considerations than tarp-and-water-bag systems.'),
                array('q' => 'What information should I give a pool-closing company?', 'a' => 'Pool size, cover type, equipment details, unusual water features, recent repairs and any known leaks are the most useful details for planning the closing correctly.')
            )
        ),
        'pool-renovation-planning-guide' => array(
            'title' => 'Pool Renovation Planning Guide',
            'eyebrow' => 'Renovation Guide',
            'intro' => 'A sequencing guide for older vinyl pools: how to coordinate liner replacement, coping, concrete or interlock decks, skimmers and returns, drainage, equipment and structural repairs without doing the same work twice.',
            'meta_title' => 'Pool Renovation Planning Guide | Vinyl Pools Ontario | Dundas Valley Pools',
            'meta_description' => 'Plan a vinyl pool renovation in Ontario. Learn how to sequence liners, coping, deck demolition, interlock, skimmers, returns, drainage, equipment and structural repairs.',
            'service_slug' => 'pool-renovations-repairs',
            'service_label' => 'Pool Renovations & Repairs',
            'hero_image' => dvp_upload_image_url('2024/07/8-8-min-scaled.jpg'),
            'sections' => array(
                array(
                    'title' => 'Treat the renovation as one system',
                    'paragraphs' => array(
                        'Older pools rarely have only one aging component. A faded liner may sit beside cracked coping, a settled concrete deck, corroded wall panels, dated equipment and drainage that sends water back toward the pool. Fixing one visible item can make sense, but large renovations are usually cheaper and cleaner when the work is sequenced as one system.',
                        'The planning question is simple: which parts of the project will disturb other finished work? Anything involving the pool edge, excavation, deck demolition or wall repair should be decided before the final finishes are installed.'
                    )
                ),
                array(
                    'title' => 'A sensible order of operations',
                    'bullets' => array(
                        'Document the pool structure, known leaks, drainage and equipment condition',
                        'Define demolition: deck, coping, old fittings and any failed base material',
                        'Complete wall, plumbing, skimmer, return and structural repairs',
                        'Install or rebuild the coping support and pool-edge details',
                        'Correct drainage, base and grading before new hardscape',
                        'Install the new deck or interlock system',
                        'Complete liner preparation and install the new liner at the right stage',
                        'Commission equipment and finish landscape transitions'
                    )
                ),
                array(
                    'title' => 'Concrete deck removal is often where the hidden scope appears',
                    'paragraphs' => array(
                        'Once an old concrete deck is removed, the condition of the collar, base material, drainage and pool-edge structure becomes visible. This is where a renovation can either become better organized or drift into change orders.',
                        'Before demolition, the plan should identify access for equipment, disposal, expected deck thickness, the replacement surface and how grades will move water away from the pool and house.'
                    )
                ),
                array(
                    'title' => 'Coping and liner decisions are connected',
                    'paragraphs' => array(
                        'On many steel-wall vinyl pools, coping, liner track and the concrete collar are physically related. Changing coping can affect how the liner edge is retained and how the new deck meets the pool. That work should be resolved before ordering or installing the final liner if the edge condition is changing.'
                    )
                ),
                array(
                    'title' => 'Use the renovation to fix water movement around the pool',
                    'paragraphs' => array(
                        'A beautiful new deck can still fail if the base and drainage are wrong. Settlement, frost movement and water trapped beside the pool can damage hardscape and make winter conditions worse. Renovation is the chance to correct grades, base depth, drainage paths and transitions to the house or retaining features.'
                    )
                ),
                array(
                    'title' => 'Equipment upgrades: only replace what earns its place',
                    'paragraphs' => array(
                        'A renovation does not automatically require a new equipment pad. Pumps, filters, heaters, salt systems and automation should be judged by condition, efficiency, serviceability and whether they fit the way the renovated pool will be used.',
                        'The highest-value upgrade is often better layout and service access. A neat equipment pad with sensible valves and room to work can save more frustration than adding another layer of automation.'
                    )
                ),
                array(
                    'title' => 'What to document before requesting a renovation quote',
                    'bullets' => array(
                        'Wide photos of the whole pool and backyard',
                        'Pool dimensions and approximate deck square footage',
                        'Close photos of coping, cracks, settlement and fittings',
                        'Equipment-pad photos with model labels where possible',
                        'Known leak history or past repair locations',
                        'Access width from the street to the backyard',
                        'Your must-keep features and the items you already expect to replace'
                    )
                )
            ),
            'faqs' => array(
                array('q' => 'Should I replace the liner before the pool deck?', 'a' => 'If deck or coping work can disturb the pool edge, it is usually better to resolve that work before the final liner installation. The exact sequence depends on the coping and liner-track system.'),
                array('q' => 'Can an old concrete pool deck be replaced with interlock?', 'a' => 'Yes. The old concrete can be demolished and removed, then the base, grades and drainage can be rebuilt for an interlock system designed for the pool environment.'),
                array('q' => 'Is a pool renovation a good time to replace skimmers and returns?', 'a' => 'It can be. When the liner is out and deck or coping work is already planned, access to fittings may be substantially easier than during a standalone repair later.'),
                array('q' => 'What causes pool decks to settle?', 'a' => 'Common contributors include inadequate base preparation, water movement, freeze-thaw cycles, disturbed soil and poor drainage. A renovation should address the cause before installing the new surface.')
            )
        ),
        'ontario-pool-permit-fence-guide' => array(
            'title' => 'Pool Permit & Fence Rules: Hamilton and Halton Area Guide',
            'eyebrow' => '2026 Local Planning Guide',
            'intro' => 'A municipality-by-municipality starting point for homeowners planning a backyard pool in Hamilton, Burlington, Oakville, Milton or Halton Hills, with direct links to the official permit and enclosure resources.',
            'meta_title' => 'Pool Permit & Fence Rules: Hamilton & Halton 2026 | Dundas Valley Pools',
            'meta_description' => 'Compare 2026 pool permit and enclosure requirements in Hamilton, Burlington, Oakville, Milton and Halton Hills, with links to official municipal sources.',
            'service_slug' => 'pool-construction-services',
            'service_label' => 'Pool Construction',
            'hero_image' => dvp_upload_image_url('2024/08/img-45825166.jpg'),
            'sections' => array(
                array(
                    'title' => 'Start with the municipality before you finalize the backyard layout',
                    'paragraphs' => array(
                        'Pool rules are local. Setbacks, enclosure permits, grading, tree protection, access routes and deck permits can change from one municipality to the next, even within the same broader Hamilton-Halton service area.',
                        'That means the permit check belongs near the beginning of design, not after the pool shape and patio are already locked in. This page is a planning shortcut, not a substitute for municipal approval. Confirm the current requirements for the exact property before excavation or construction.'
                    )
                ),
                array(
                    'title' => 'Hamilton: the enclosure permit is the key approval',
                    'paragraphs' => array(
                        'The City of Hamilton states that a building permit is not required to install the swimming pool itself, but a building permit is required for the pool enclosure, and a separate permit can be required for a deck beside the pool. The City also says excavation must not begin until the enclosure permit is obtained and the pool must not be filled until the enclosure is in place and final approval is received.',
                        'Hamilton is especially important to check by former municipality because the City publishes different pool and equipment setbacks for Hamilton, Dundas, Ancaster, Stoney Creek, Flamborough and Glanbrook zoning areas.'
                    ),
                    'bullets' => array(
                        'Pool enclosure permit required',
                        'Deck work may trigger a separate building permit',
                        'Site alteration approval may also apply depending on the property',
                        'Published enclosure requirements include a 1.5 m minimum fence height and a 1.0 m separation from the nearest inside pool wall',
                        'Gates must be self-closing and self-latching in accordance with the City by-law'
                    )
                ),
                array(
                    'title' => 'Burlington: one residential pool application combines several reviews',
                    'paragraphs' => array(
                        'The City of Burlington requires a pool permit before installing a swimming pool, swim spa or hot tub. Its residential swimming-pool application combines zoning clearance, forestry review and the pool-enclosure permit into one process.',
                        'Burlington advises applicants that review times can reach several weeks during busy periods, so permit preparation should be part of the construction schedule rather than treated as an administrative task at the end.'
                    ),
                    'bullets' => array(
                        'Residential pool permit required before installation',
                        'Combined application includes zoning clearance, forestry approval and pool enclosure review',
                        'Tree protection can matter where excavation or access affects protected trees',
                        'Pool fencing and gates must comply with Burlington\'s Pool Bylaw'
                    )
                ),
                array(
                    'title' => 'Oakville: pool enclosure and development-engineering approvals can overlap',
                    'paragraphs' => array(
                        'Oakville states that all pools require an enclosure and that its Pool Enclosure By-law controls permit requirements, minimum heights, distance from the water\'s edge and locking-gate requirements.',
                        'For a new or replacement pool enclosure, Oakville directs homeowners to its Development Engineering Permit process. Extra approvals can also become relevant when construction access crosses Town parkland or when excavation affects protected trees.'
                    )
                ),
                array(
                    'title' => 'Milton: the site plan carries a lot of the permit work',
                    'paragraphs' => array(
                        'Milton requires a pool permit and a detailed site plan. The Town asks for property lines, existing buildings, pool and equipment setbacks, enclosure details, gates, easements, catch basins, retaining walls, swales, landscaping and existing hardscape.',
                        'Milton also notes that pools and related equipment must satisfy zoning setbacks. In an unassumed subdivision, a developer clearance letter may be required before the pool proceeds.'
                    )
                ),
                array(
                    'title' => 'Halton Hills: obtain the pool-enclosure permit before installation',
                    'paragraphs' => array(
                        'Halton Hills requires a Pool Enclosure Permit for outdoor swimming pools and related enclosure work before installation or construction begins. The Town says applications typically include a site plan plus fence, gate and locking details.',
                        'Depending on the property, the project may also trigger grading, site-alteration or access requirements. The Town requires an enclosure inspection before the pool is filled or used.'
                    )
                ),
                array(
                    'title' => 'The permit package is easier when the design drawings answer the obvious questions',
                    'paragraphs' => array(
                        'Across the municipalities above, the same planning information appears repeatedly: property lines, pool location, equipment location, setbacks, enclosure type, gate locations, grading and access. A clean site plan that answers those questions early reduces redesign later.'
                    ),
                    'bullets' => array(
                        'Property survey or reliable lot dimensions',
                        'Proposed pool outline with distances to property lines and buildings',
                        'Pump, filter and heater location',
                        'Fence and gate locations and construction type',
                        'Existing decks, patios, retaining walls, easements and drainage features',
                        'Tree locations where municipal tree rules may apply',
                        'Construction access route for excavation equipment and materials'
                    )
                ),
                array(
                    'title' => 'Why this matters before pricing the pool',
                    'paragraphs' => array(
                        'The permit rules can change the usable pool footprint, equipment location, fence scope, access method and amount of hardscape. Those are cost items. A pool price built around a layout that later fails zoning or access review is not a useful price.',
                        'For a new build, the strongest sequence is site assessment, concept layout, municipal constraint check, scope and budget alignment, then final permit drawings and construction planning.'
                    )
                )
            ),
            'faqs' => array(
                array('q' => 'Do I need a pool permit in Hamilton?', 'a' => 'Hamilton says the swimming pool itself does not require a building permit, but the pool enclosure does. Deck, site-alteration or other approvals may also apply to the project.'),
                array('q' => 'Does Burlington require a pool permit?', 'a' => 'Yes. Burlington requires a residential swimming-pool application before installation and combines zoning, forestry and pool-enclosure reviews in that process.'),
                array('q' => 'Can pool setbacks differ inside Hamilton?', 'a' => 'Yes. Hamilton publishes different setback tables for former municipalities such as Dundas, Ancaster, Stoney Creek, Flamborough, Glanbrook and Hamilton. Confirm the zoning that applies to the property.'),
                array('q' => 'Should I design the patio before checking pool rules?', 'a' => 'You can develop a concept, but final pool, fence, equipment and deck locations should be checked against zoning, enclosure and access requirements before the layout is treated as final.')
            ),
            'sources' => array(
                array('label' => 'City of Hamilton — Swimming Pools', 'url' => 'https://www.hamilton.ca/build-invest-grow/construction-renovation/residential-building-renovation/swimming-pools'),
                array('label' => 'City of Burlington — Pool Permits', 'url' => 'https://www.burlington.ca/en/building-and-renovating/pool-permits.aspx'),
                array('label' => 'Town of Oakville — Fences & Gates / Pool Enclosures', 'url' => 'https://www.oakville.ca/home-environment/building-renovations/building-permits-inspections/construction-projects/fences-gates/'),
                array('label' => 'Town of Milton — Pool Permits', 'url' => 'https://www.milton.ca/en/business-and-development/pool-permits.aspx'),
                array('label' => 'Town of Halton Hills — Pool Enclosure Permit', 'url' => 'https://www.haltonhills.ca/PoolEnclosurePermitInfo')
            )
        )
    );
}

function dvp_get_pool_guide($slug = null) {
    if ($slug === null) {
        $slug = get_post_field('post_name', get_queried_object_id());
    }

    $guides = dvp_get_pool_guides();
    return isset($guides[$slug]) ? $guides[$slug] : null;
}

function dvp_get_related_guide_for_service($service_slug) {
    foreach (dvp_get_pool_guides() as $slug => $guide) {
        if ($guide['service_slug'] === $service_slug) {
            $guide['slug'] = $slug;
            return $guide;
        }
    }

    return null;
}

/**
 * Create the resource hub and guide pages once. Pages remain ordinary WordPress
 * pages afterwards, so they appear in the native XML sitemap automatically.
 */
function dvp_sync_pool_guide_pages() {
    $version = '2026-09-29-2';
    if (get_option('dvp_pool_guide_pages_version') === $version) {
        return;
    }

    $hub = get_page_by_path('pool-guides');
    if (!$hub) {
        $hub_id = wp_insert_post(array(
            'post_title' => 'Pool Guides & Resources',
            'post_name' => 'pool-guides',
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_excerpt' => 'Practical pool planning, renovation and seasonal-care guides from Dundas Valley Pools.'
        ));
    } else {
        $hub_id = $hub->ID;
    }

    if (!is_wp_error($hub_id)) {
        update_post_meta($hub_id, '_wp_page_template', 'template-pool-guides.php');
    }

    foreach (dvp_get_pool_guides() as $slug => $guide) {
        $page = get_page_by_path($slug);
        if (!$page) {
            $page_id = wp_insert_post(array(
                'post_title' => $guide['title'],
                'post_name' => $slug,
                'post_status' => 'publish',
                'post_type' => 'page',
                'post_parent' => is_wp_error($hub_id) ? 0 : (int) $hub_id,
                'post_excerpt' => $guide['intro']
            ));
        } else {
            $page_id = $page->ID;
        }

        if (!is_wp_error($page_id)) {
            update_post_meta($page_id, '_wp_page_template', 'template-pool-guide.php');
        }
    }

    update_option('dvp_pool_guide_pages_version', $version, false);
    flush_rewrite_rules(false);
}
add_action('init', 'dvp_sync_pool_guide_pages', 40);

function dvp_is_pool_guide_page() {
    if (!is_page()) {
        return false;
    }

    $slug = get_post_field('post_name', get_queried_object_id());
    return $slug === 'pool-guides' || isset(dvp_get_pool_guides()[$slug]);
}

add_filter('pre_get_document_title', function($title) {
    if (!is_page()) {
        return $title;
    }

    $guide = dvp_get_pool_guide();
    if ($guide) {
        return $guide['meta_title'];
    }

    if (is_page('pool-guides')) {
        return 'Pool Guides & Resources | Dundas Valley Pools';
    }

    return $title;
}, 30);

add_action('wp_head', function() {
    if (!is_page()) {
        return;
    }

    $guide = dvp_get_pool_guide();
    if ($guide) {
        echo '<meta name="description" content="' . esc_attr($guide['meta_description']) . '">' . "\n";

        $schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'TechArticle',
            'headline' => $guide['title'],
            'description' => $guide['meta_description'],
            'mainEntityOfPage' => get_permalink(),
            'image' => $guide['hero_image'],
            'datePublished' => get_the_date('c'),
            'dateModified' => get_the_modified_date('c'),
            'author' => array(
                '@type' => 'Organization',
                'name' => 'Dundas Valley Pools',
                'url' => home_url('/')
            ),
            'publisher' => array(
                '@type' => 'Organization',
                'name' => 'Dundas Valley Pools',
                'url' => home_url('/')
            )
        );
        echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
        return;
    }

    if (is_page('pool-guides')) {
        echo '<meta name="description" content="Practical pool guides for Ontario homeowners covering safety covers, vinyl liners, winterization and pool renovation planning.">' . "\n";
    }
}, 3);

/**
 * The renovation page currently uses the standard page-content path rather
 * than the dedicated service templates above. Append one restrained resource
 * card there so the commercial page gains a contextual link without being
 * rewritten or lengthened substantially.
 */
add_filter('the_content', function($content) {
    if (is_admin() || !is_main_query() || !in_the_loop() || !is_page('pool-renovations-repairs')) {
        return $content;
    }

    $guide = dvp_get_related_guide_for_service('pool-renovations-repairs');
    if (!$guide) {
        return $content;
    }

    $card = '<section class="dvp-service-resource-section"><article class="dvp-service-resource-card">';
    $card .= '<div><span class="dvp-guide-eyebrow">Renovation resource</span><h2>' . esc_html($guide['title']) . '</h2><p>' . esc_html($guide['intro']) . '</p></div>';
    $card .= '<a class="dvp-guide-text-link" href="' . esc_url(home_url('/pool-guides/' . $guide['slug'] . '/')) . '">Read the guide &rarr;</a>';
    $card .= '</article></section>';

    return $content . $card;
}, 30);
