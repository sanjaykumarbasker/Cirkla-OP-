@php
    $pageTitle = 'Seafood & MAP Packaging - COPAR';
    $metaDescription = 'COPAR creates seafood, MAP, and chilled food packaging options using circular fibre and barrier materials.';
    $activePage = 'map-vsp';
    $hero = [
        'eyebrow' => 'Seafood',
        'title' => 'Chilled seafood packaging <em>with barrier intent.</em>',
        'copy' => 'Seafood applications need freshness, moisture control, and clean retail presentation. COPAR combines barrier papers and fibre formats around those performance needs.',
        'image' => '/images/copar/meal-tray-2c-transparent.png',
        'imageAlt' => 'Full COPAR tray for seafood and MAP applications',
        'pills' => ['Seafood', 'MAP applications', 'Moisture control'],
    ];
    $featureTitle = 'Freshness-led design';
    $featureHeading = 'Built around chilled supply chains <em>and shelf appeal.</em>';
    $featureCopy = 'COPAR packaging can be specified for seafood and other chilled food categories where strength, barrier performance, and compliance must work together.';
    $benefits = [
        'Supports MAP-compliant applications where barrier performance is required.',
        'Designed for chilled retail display and distribution.',
        'Material options can combine paper barrier and fibre tray strategies.',
        'Customised for product fit, lidding, and processor requirements.',
    ];
    $applications = [
        ['label' => 'Seafood', 'title' => 'Chilled seafood trays', 'copy' => 'Formats for seafood portions, counter service, and retail seafood packs.'],
        ['label' => 'MAP', 'title' => 'Modified-atmosphere packs', 'copy' => 'Barrier material pathways for applications that need shelf-life protection.'],
        ['label' => 'VSP', 'title' => 'Vacuum skin pack planning', 'copy' => 'Custom projects can assess fit, strength, and barrier needs before production tooling.'],
    ];
    $productDetails = [
        [
            'label' => 'Seafood trays',
            'title' => 'Fresh seafood and chilled food tray pathways',
            'copy' => 'Seafood packaging needs moisture control, chilled shelf appeal and a clean material story. COPAR can pair fibre tray formats with barrier paper strategies where required.',
            'image' => '/images/copar/meal-tray-2c-transparent.png',
            'imageAlt' => 'Full COPAR tray for seafood',
            'features' => [
                'Supports chilled seafood portions and retail display.',
                'Designed around freshness, fit and lidding requirements.',
                'Can be evaluated for MAP-compliant applications.',
            ],
        ],
        [
            'label' => 'Drylock tray',
            'title' => 'Moisture-aware tray structure',
            'copy' => 'The Drylock tray product file informs packaging for products where absorption, moisture management and pack stability are part of the decision.',
            'image' => '/images/copar/tray-hero.png',
            'imageAlt' => 'Full fibre tray for moisture-aware packs',
            'features' => [
                'Useful for seafood and fresh chilled food trials.',
                'Supports product protection through handling.',
                'Can be customised by fit, volume and buyer requirements.',
            ],
        ],
    ];
@endphp

@include('cirkla.includes.product-page')
