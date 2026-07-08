@php
    $pageTitle = 'Meat & Poultry Trays - QRCOPAR';
    $metaDescription = 'QRCOPAR barrier-coated molded fibre trays for fresh meat, poultry, seafood, and protein packaging applications.';
    $activePage = 'meat-protein';
    $layoutVariant = 'protein';
    $hero = [
        'eyebrow' => 'Meat & Poultry Trays',
        'title' => 'Barrier-coated trays for <em>fresh protein applications.</em>',
        'copy' => 'Molded fibre trays engineered for fresh meat, poultry, seafood, and protein applications that demand strength, rigidity, barrier performance, and existing-line compatibility.',
        'image' => '/images/copar/meal-tray-2c-transparent.png',
        'imageAlt' => 'QRCOPAR meat and poultry tray',
        'pills' => ['Fresh meat', 'Poultry', 'Seafood', 'Protein applications'],
    ];
    $featureTitle = 'Drop-in performance';
    $featureHeading = 'A true replacement for <em>plastic protein trays.</em>';
    $featureCopy = 'Designed to integrate with existing sealing and packaging equipment without major line modifications.';
    $benefits = [
        'Barrier-coated tray options for fresh meat, poultry, seafood, and protein applications.',
        'Engineered for the strength, rigidity, and barrier performance demanded by food processors.',
        'Supports shelf presentation, seal integrity, moisture management, and pack stability.',
        'Built around existing production lines, industrial trials, and commercial food packaging applications.',
    ];
    $applications = [
        ['label' => 'Fresh meat', 'title' => 'Retail and processor trays', 'copy' => 'Tray formats for chilled retail packs, butcher cases, and processor-led fresh meat programs.'],
        ['label' => 'Poultry', 'title' => 'High-strength molded fibre bases', 'copy' => 'Rigid tray structures for poultry applications requiring pack stability and product appearance.'],
        ['label' => 'Seafood', 'title' => 'Barrier-aware tray options', 'copy' => 'Laminated tray pathways for seafood applications where moisture and shelf-life performance matter.'],
    ];
    $video = '/videos/copar/meal-tray-2c.mp4';
    $productDetails = [
        [
            'label' => 'Fresh protein',
            'title' => 'Meat and poultry trays for commercial food packaging',
            'copy' => 'QRCOPAR trays are designed for fresh protein categories that require consistent dimensions, dependable strength, barrier performance, and retail-ready presentation.',
            'image' => '/images/copar/meal-tray-2c-transparent.png',
            'imageAlt' => 'Full QRCOPAR meat tray',
            'features' => [
                'Fresh meat, poultry, seafood, and protein applications.',
                'Drop-in tray direction for existing sealing and packaging lines.',
                'Commercially validated performance pathway from trials to production.',
            ],
        ],
        [
            'label' => 'Barrier options',
            'title' => 'Lamination tailored to protein applications',
            'copy' => 'Multiple lamination options support the moisture, oxygen, and durability requirements of modern protein packaging.',
            'image' => '/images/copar/tray-hero.png',
            'imageAlt' => 'Molded fibre tray for protein packaging',
            'features' => [
                'PE for reliable moisture barrier needs.',
                'EVOH for oxygen barrier and shelf-life conversations.',
                'PP for durable high-performance barrier applications.',
            ],
        ],
    ];
@endphp

@include('cirkla.includes.product-page')
