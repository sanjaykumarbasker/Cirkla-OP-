@php
    $pageTitle = 'Fresh Produce Trays - COPAR';
    $metaDescription = 'COPAR fresh produce trays for vegetables, fruits, mushrooms, and prepared produce packaging.';
    $activePage = 'produce';
    $layoutVariant = 'fibre';
    $hero = [
        'eyebrow' => 'Fresh Produce Trays',
        'title' => 'Fresh produce trays <em>with clean shelf presentation.</em>',
        'copy' => 'COPAR develops fibre tray formats for produce programs that need product protection, retail presentation, and a lower-plastic packaging path.',
        'image' => '/images/copar/tray-hero.png',
        'imageAlt' => 'Fresh produce COPAR tray',
        'pills' => ['Produce trays', 'Punnets', 'Retail-ready'],
    ];
    $featureTitle = 'Produce-ready design';
    $featureHeading = 'A produce tray that supports <em>strength and presentation.</em>';
    $featureCopy = 'Fresh produce trays are designed for food and retail teams that need responsible materials with practical strength, shaping, and shelf appeal.';
    $benefits = [
        'Suitable for vegetables, fruit, mushrooms, and fresh prepared produce.',
        'Rigid fibre bases help keep the pack looking premium.',
        'Supports retail display, handling, and wrapping requirements.',
        'Can be customised around product fit and pack dimensions.',
    ];
    $applications = [
        ['label' => 'Fresh produce', 'title' => 'Punnets and trays', 'copy' => 'Tray and punnet formats for vegetables, fruit, mushrooms, and fresh prepared produce.'],
        ['label' => 'Retail', 'title' => 'Shelf-ready presentation', 'copy' => 'Clean, moulded forms that support merchandising while reducing plastic dependence.'],
        ['label' => 'Food service', 'title' => 'Prepared produce bases', 'copy' => 'Durable tray formats for counters, takeaway, and prepared produce programs.'],
    ];
    $productDetails = [
        [
            'label' => 'Produce tray',
            'title' => 'Moulded fibre trays for fresh produce',
            'copy' => 'Fresh produce trays are made for products that need clean merchandising, strength through the supply chain, and a practical tray format.',
            'image' => '/images/copar/tray-hero.png',
            'imageAlt' => 'Full fresh produce fibre tray',
            'features' => [
                'Supports vegetables, mushrooms, fruits and prepared produce.',
                'Rigid fibre bases keep the pack looking premium.',
                'Can be customised around product fit and wrapping requirements.',
            ],
        ],
        [
            'label' => 'Produce formats',
            'title' => 'Tray and punnet options for retail programs',
            'copy' => 'The tray structure can be reviewed around pack size, fill weight, stacking, display, and transport needs.',
            'image' => '/images/copar/tray.png',
            'imageAlt' => 'COPAR fresh produce tray top view',
            'features' => [
                'Shallow and deeper tray pathways.',
                'Retail presentation with a tray-first material story.',
                'Sample options for buyer and operations review.',
            ],
        ],
    ];
@endphp

@include('cirkla.includes.product-page')
