@php
    $pageTitle = 'Special Trays - COPAR';
    $metaDescription = 'COPAR special trays for custom tray requirements, product fit, and production planning.';
    $activePage = 'custom';
    $layoutVariant = 'custom';
    $hero = [
        'eyebrow' => 'Special Trays',
        'title' => 'Special trays <em>made around your product.</em>',
        'copy' => 'COPAR develops special tray formats for products that need non-standard dimensions, compartment layouts, moisture handling, or presentation requirements.',
        'image' => '/images/copar/tray-hero.png',
        'imageAlt' => 'Special COPAR tray',
        'pills' => ['Custom dimensions', 'Prototype to production', 'Tray-first development'],
    ];
    $featureTitle = 'Why it matters';
    $featureHeading = 'Tray formats tailored to <em>specific product needs.</em>';
    $featureCopy = 'A special tray project starts with product fit, handling, and display expectations, then works toward the right tray structure and sample path.';
    $benefits = [
        'Bespoke tray builds for food sectors.',
        'Custom depth, shape, compartments, and rim planning.',
        'Designed to meet compliance, cost, and performance goals.',
        'Streamlined path from prototype to production.',
    ];
    $applications = [
        ['label' => 'Step 01', 'title' => 'Tray assessment', 'copy' => 'Understand the product, current pack, application, and performance requirements.'],
        ['label' => 'Step 02', 'title' => 'Tray format proposal', 'copy' => 'Select a tray structure, size, material pathway, and production direction.'],
        ['label' => 'Step 03', 'title' => 'Prototyping and validation', 'copy' => 'Test fit, strength, lidding, and handling before production.'],
        ['label' => 'Step 04', 'title' => 'Production transition', 'copy' => 'Move from sample to production while keeping the supply chain transparent.'],
    ];
    $productDetails = [
        [
            'label' => 'Special build',
            'title' => 'Custom tray design around product geometry',
            'copy' => 'Special tray projects support product lines that do not fit a standard tray, including unusual fill weights, divided spaces, or retail presentation goals.',
            'image' => '/images/copar/tray.png',
            'imageAlt' => 'COPAR special tray top view',
            'features' => [
                'Bespoke builds for meat, produce, RTE, pet care, and specialty food.',
                'Designed around compliance, cost, and performance goals.',
                'Moves from assessment to prototype and production planning.',
            ],
        ],
        [
            'label' => 'Format mix',
            'title' => 'Single, divided, deep, and shallow tray options',
            'copy' => 'COPAR can combine tray shape, depth, rim design, and surface requirements to suit the product instead of forcing a standard SKU.',
            'image' => '/images/copar/ppt-image2.png',
            'imageAlt' => 'COPAR special tray render',
            'features' => [
                'Single and divided tray structures.',
                'Custom handling, stacking, and display requirements.',
                'Sample-led pathway for buyer and production review.',
            ],
        ],
    ];
@endphp

@include('cirkla.includes.product-page')
