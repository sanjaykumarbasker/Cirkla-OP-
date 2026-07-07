@php
    $pageTitle = 'Meat Trays - COPAR';
    $metaDescription = 'COPAR meat trays for fresh protein, pork, sausage, poultry, and chilled retail packaging programs.';
    $activePage = 'meat-protein';
    $layoutVariant = 'protein';
    $hero = [
        'eyebrow' => 'Meat Trays',
        'title' => 'Meat trays designed for <em>fresh protein performance.</em>',
        'copy' => 'COPAR meat trays support shelf presentation, moisture-aware handling, and circular material goals for meat, poultry, pork, and sausage programs.',
        'image' => '/images/copar/meal-tray-2c-transparent.png',
        'imageAlt' => 'COPAR meat tray',
        'pills' => ['Fresh protein', 'Retail formats', 'Processor-ready'],
    ];
    $featureTitle = 'Protein applications';
    $featureHeading = 'Performance where tray decisions <em>matter most.</em>';
    $featureCopy = 'Fresh protein trays need strength, moisture handling, product fit, and production consistency. COPAR builds tray options around those requirements.';
    $benefits = [
        'Supports chilled retail and processor tray applications.',
        'Designed for product presentation and pack stability.',
        'Customisable for meat, poultry, pork, sausage, and processor-specific requirements.',
        'Useful for butcher case, retail, and trial planning conversations.',
    ];
    $applications = [
        ['label' => 'Retail meat', 'title' => 'Fresh tray programs', 'copy' => 'Tray formats for butcher cases, chilled retail packs, and protein merchandising.'],
        ['label' => 'Processor lines', 'title' => 'Production-ready specs', 'copy' => 'Product files support review of size, forming, and performance requirements before trials.'],
        ['label' => 'Custom protein', 'title' => 'Bespoke builds', 'copy' => 'Custom formats for pack fit, lidding, distribution, and presentation needs.'],
    ];
    $video = '/videos/copar/meal-tray-2c.mp4';
    $productDetails = [
        [
            'label' => 'Meat tray TDS',
            'title' => 'Fresh protein tray formats for chilled retail',
            'copy' => 'The meat tray resources are represented as fibre tray pathways for fresh beef, pork, poultry and similar chilled retail packs.',
            'image' => '/images/copar/meal-tray-2c-transparent.png',
            'imageAlt' => 'Full COPAR meat tray',
            'features' => [
                'Designed for strength, presentation and product fit.',
                'Supports chilled display and processor line conversations.',
                'Can be reviewed around lidding, stacking, and fill weight.',
            ],
        ],
        [
            'label' => 'Pork and sausage trays',
            'title' => 'Protein-specific tray options',
            'copy' => 'The pork and sausage product files inform a flexible protein tray story for different cuts, shapes and merchandising requirements.',
            'image' => '/images/copar/tray-hero.png',
            'imageAlt' => 'Full fibre tray for protein packs',
            'features' => [
                'Customisable for cut size, fill weight and shelf presentation.',
                'Suitable for butcher case and retail protein programs.',
                'Supports lower-plastic packaging goals.',
            ],
        ],
        [
            'label' => 'Drylock and MSO trays',
            'title' => 'Moisture-aware tray formats for fresh food',
            'copy' => 'Drylock and MSO tray resources point to formats where strength, moisture handling and pack stability matter in the supply chain.',
            'image' => '/images/copar/ppt-image2.png',
            'imageAlt' => 'COPAR tray render for fresh food',
            'features' => [
                'Built for product protection during distribution.',
                'Supports moisture-sensitive fresh food applications.',
                'Useful for trial planning with QA and operations teams.',
            ],
        ],
    ];
@endphp

@include('cirkla.includes.product-page')
