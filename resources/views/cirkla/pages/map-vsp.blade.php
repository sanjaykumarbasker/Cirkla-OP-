@php
    $pageTitle = 'Special Trays - QRCOPAR';
    $metaDescription = 'QRCOPAR special trays for moisture-aware, divided, and custom food packaging applications.';
    $activePage = 'map-vsp';
    $layoutVariant = 'special-support';
    $hero = [
        'eyebrow' => 'Special Trays',
        'title' => 'Special tray formats <em>for non-standard applications.</em>',
        'copy' => 'QRCOPAR develops special tray options for products that need custom fit, divided layouts, moisture-aware handling, or buyer-specific presentation.',
        'image' => '/images/copar/meal-tray-2c-transparent.png',
        'imageAlt' => 'Full QRCOPAR special tray',
        'pills' => ['Drylock trays', 'MSO trays', 'Custom tray formats'],
    ];
    $featureTitle = 'Application-led design';
    $featureHeading = 'Built around handling, fit, <em>and shelf appeal.</em>';
    $featureCopy = 'Special tray projects can be specified for products where strength, moisture handling, and pack compatibility must work together.';
    $benefits = [
        'Supports moisture-aware tray applications.',
        'Designed for chilled retail display and distribution.',
        'Material and structure options can be combined by tray requirement.',
        'Customised for product fit, lidding, and processor needs.',
    ];
    $applications = [
        ['label' => 'Drylock', 'title' => 'Moisture-aware trays', 'copy' => 'Formats for products where absorption, moisture handling, and stability matter.'],
        ['label' => 'MSO', 'title' => 'Special tray structures', 'copy' => 'Tray options for products that need specific shape, depth, and pack handling.'],
        ['label' => 'Custom', 'title' => 'Special project planning', 'copy' => 'Custom projects can assess fit, strength, and surface needs before production tooling.'],
    ];
    $productDetails = [
        [
            'label' => 'Special tray',
            'title' => 'Custom tray pathways for non-standard packs',
            'copy' => 'Special trays support projects where the product, pack line, or retail display requires a tray outside a standard format.',
            'image' => '/images/copar/meal-tray-2c-transparent.png',
            'imageAlt' => 'Full QRCOPAR special tray',
            'features' => [
                'Supports divided, deep, shallow, and moisture-aware tray needs.',
                'Designed around fit, lidding and presentation requirements.',
                'Can be evaluated for buyer and production trials.',
            ],
        ],
        [
            'label' => 'Drylock tray',
            'title' => 'Moisture-aware tray structure',
            'copy' => 'The Drylock tray product file informs packaging for products where absorption, moisture management and pack stability are part of the decision.',
            'image' => '/images/copar/tray-hero.png',
            'imageAlt' => 'Full fibre tray for moisture-aware packs',
            'features' => [
                'Useful for fresh chilled food trials.',
                'Supports product protection through handling.',
                'Can be customised by fit, volume and buyer requirements.',
            ],
        ],
    ];
@endphp

@include('cirkla.includes.product-page')
