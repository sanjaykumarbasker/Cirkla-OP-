@php
    $pageTitle = 'Dairy & Pet Care Packaging - COPAR';
    $metaDescription = 'COPAR develops circular packaging options for dairy, pet care, and specialty food applications.';
    $activePage = 'overwrap';
    $hero = [
        'eyebrow' => 'Dairy & Pet Care',
        'title' => 'Specialty food packaging <em>customised by category.</em>',
        'copy' => 'From dairy applications to pet food trays and lids, COPAR develops circular packaging around product fit, shelf requirements, and compliance goals.',
        'image' => '/images/copar/meal-tray-2c-transparent.png',
        'imageAlt' => 'Full COPAR pet care tray',
        'pills' => ['Pet food trays', 'Lids', 'Dairy applications'],
    ];
    $featureTitle = 'Category-led design';
    $featureHeading = 'Packaging matched to the product, <em>not forced from a standard SKU.</em>';
    $featureCopy = 'Dairy and pet care formats often need bespoke dimensions, seal systems, and material decisions. COPAR can prototype and validate those needs before scale-up.';
    $benefits = [
        'Customised tray and lid formats for pet food applications.',
        'Material options for dairy, retail, and specialty food categories.',
        'Designed around compliance, cost, and end-of-life requirements.',
        'Can combine fibre, barrier paper, and custom material pathways.',
    ];
    $applications = [
        ['label' => 'Pet Care', 'title' => 'Pet food trays', 'copy' => '500 ml and 1000 ml tray resources are available from the supplied product files.'],
        ['label' => 'Pet Care', 'title' => 'Lid systems', 'copy' => 'Review lid documentation for pack compatibility and buyer presentation.'],
        ['label' => 'Dairy', 'title' => 'Custom dairy formats', 'copy' => 'Material-led projects for dairy packs, tubs, inserts, and specialty retail applications.'],
    ];
    $productDetails = [
        [
            'label' => 'Pet food tray 500ML',
            'title' => 'Compact tray format for pet food portions',
            'copy' => 'The 500ML pet food tray document informs a smaller portion format where strength, seal planning and shelf presentation need to work together.',
            'image' => '/images/copar/meal-tray-2c-transparent.png',
            'imageAlt' => 'Full pet food tray format',
            'features' => [
                'Compact size for single-serve and portioned pet food.',
                'Designed for lid compatibility and retail presentation.',
                'Supports a fibre-led packaging pathway.',
            ],
        ],
        [
            'label' => 'Pet food tray 1000ML',
            'title' => 'Larger tray format for higher volume packs',
            'copy' => 'The 1000ML pet food tray resource supports larger pack conversations where capacity, rigidity and distribution performance matter.',
            'image' => '/images/copar/ppt-image2.png',
            'imageAlt' => 'Full COPAR tray render',
            'features' => [
                'Higher-capacity tray option for pet care packs.',
                'Can be reviewed with lid, sealing and stacking needs.',
                'Useful for buyer and production trial planning.',
            ],
        ],
        [
            'label' => 'Pet food lid',
            'title' => 'Lid system planning for tray compatibility',
            'copy' => 'The pet food lid files are represented as part of the complete pack system, supporting fit, seal and presentation discussions.',
            'image' => '/images/copar/tray.png',
            'imageAlt' => 'COPAR tray top view for lid planning',
            'features' => [
                'Designed around tray fit and sealing requirements.',
                'Supports finished-pack presentation.',
                'Can be customised alongside tray dimensions.',
            ],
        ],
    ];
@endphp

@include('cirkla.includes.product-page')
