@php
    $pageTitle = 'Laminated Trays - COPAR';
    $metaDescription = 'COPAR laminated trays for food packaging programs that need sealability, presentation, and tray performance.';
    $activePage = 'technology';
    $layoutVariant = 'barrier';
    $hero = [
        'eyebrow' => 'Laminated Trays',
        'title' => 'Laminated trays <em>for stronger pack performance.</em>',
        'copy' => 'COPAR tray programs can be specified with laminated surfaces for applications that need improved sealing, handling, and finished-pack presentation.',
        'image' => '/images/copar/meal-tray-2c-transparent.png',
        'imageAlt' => 'Full laminated COPAR tray',
        'pills' => ['Seal-ready', 'Retail presentation', 'Custom tray formats'],
    ];
    $featureTitle = 'Tray performance';
    $featureHeading = 'A tray structure made for <em>finished-pack reliability.</em>';
    $featureCopy = 'Laminated tray options support food brands and processors that need a fibre tray with surface performance matched to the packing line.';
    $benefits = [
        'Supports sealing and lidding conversations.',
        'Designed for chilled, fresh, and prepared food formats.',
        'Improves pack presentation for retail and food service.',
        'Can be matched to shape, depth, portion size, and line requirements.',
    ];
    $applications = [
        ['label' => 'Prepared food', 'title' => 'Laminated RTE tray options', 'copy' => 'Tray surfaces planned around ready-to-eat and ready-to-heat use cases.'],
        ['label' => 'Fresh food', 'title' => 'Retail tray presentation', 'copy' => 'Fibre tray formats with a cleaner finished-pack look for chilled display.'],
        ['label' => 'Custom programs', 'title' => 'Format-led development', 'copy' => 'Tray geometry, lid fit, and surface needs can be reviewed before production.'],
    ];
    $productDetails = [
        [
            'label' => 'Laminated tray',
            'title' => 'Fibre tray with laminated surface options',
            'copy' => 'A laminated tray gives packaging teams a tray-first format with added surface functionality for sealing, presentation, and product handling.',
            'image' => '/images/copar/meal-tray-2c-transparent.png',
            'imageAlt' => 'Full laminated meal tray',
            'features' => [
                'Suitable for RTE, meat, fresh produce, and special tray applications.',
                'Supports custom lidding and sealing requirements.',
                'Built around tray dimensions, product fit, and buyer presentation.',
            ],
        ],
        [
            'label' => 'Custom laminate planning',
            'title' => 'Tray development around packing-line needs',
            'copy' => 'COPAR can review tray depth, rim design, surface requirements, and handling expectations so the finished format works in production.',
            'image' => '/images/copar/ppt-image2.png',
            'imageAlt' => 'COPAR tray render',
            'features' => [
                'Format review for sample and production planning.',
                'Options for single and divided tray structures.',
                'Designed for practical performance discussions with QA and operations teams.',
            ],
        ],
    ];
@endphp

@include('cirkla.includes.product-page')
