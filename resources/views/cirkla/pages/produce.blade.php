@php
    $pageTitle = 'Fresh Produce Trays - QRCOPAR';
    $metaDescription = 'QRCOPAR sustainable molded fibre trays for fruits, vegetables, mushrooms, and fresh produce packaging.';
    $activePage = 'produce';
    $layoutVariant = 'fibre';
    $hero = [
        'eyebrow' => 'Fresh Produce Trays',
        'title' => 'Sustainable trays for <em>fresh produce.</em>',
        'copy' => 'Sustainable molded fibre trays designed for fruits, vegetables, mushrooms, and fresh produce applications where presentation, strength, and reduced plastic dependency matter.',
        'image' => '/images/copar/tray-hero.png',
        'imageAlt' => 'QRCOPAR fresh produce tray',
        'pills' => ['Fruits', 'Vegetables', 'Mushrooms', 'Retail produce'],
    ];
    $featureTitle = 'Sustainable fibre solutions';
    $featureHeading = 'Natural fibres. <em>Engineered performance.</em>';
    $featureCopy = 'Carefully selected fibre blends ensure optimal strength, consistency, and sustainability for produce packaging programs.';
    $benefits = [
        'Designed for fruits, vegetables, mushrooms, and fresh produce.',
        'Supports renewable raw materials and responsible fibre sourcing.',
        'Rigid molded fibre bases help protect product appearance through handling and display.',
        'Built around recyclable packaging solutions and continuous product innovation.',
    ];
    $applications = [
        ['label' => 'Fresh produce', 'title' => 'Fruit and vegetable trays', 'copy' => 'Tray formats for retail produce categories requiring reliable presentation and handling.'],
        ['label' => 'Mushrooms', 'title' => 'Molded fibre produce bases', 'copy' => 'Durable fibre trays for mushroom packs and other delicate fresh produce applications.'],
        ['label' => 'Retail packaging', 'title' => 'Shelf-ready produce formats', 'copy' => 'Sustainable tray formats developed for modern produce merchandising.'],
    ];
    $productDetails = [
        [
            'label' => 'Produce tray',
            'title' => 'Sustainable trays for fresh produce programs',
            'copy' => 'QRCOPAR fresh produce trays are designed for products that need clean merchandising, consistent shape, and a lower-plastic packaging pathway.',
            'image' => '/images/copar/tray-hero.png',
            'imageAlt' => 'Full QRCOPAR fresh produce tray',
            'features' => [
                'Fruits, vegetables, mushrooms, and fresh produce applications.',
                'Renewable and recycled fibre pathways.',
                'Resource-efficient manufacturing and recyclable packaging solutions.',
            ],
        ],
        [
            'label' => 'Fibre blend',
            'title' => 'Selected materials for strength and consistency',
            'copy' => 'Primary fibres such as bagasse, bamboo, hardwood, and softwood can be supported by premium recycled paper fibres for practical performance and sustainability.',
            'image' => '/images/copar/tray.png',
            'imageAlt' => 'QRCOPAR molded fibre produce tray top view',
            'features' => [
                'Carefully selected fibre blends.',
                'Designed for strength, consistency, and sustainability.',
                'Supports product validation before commercial scale manufacturing.',
            ],
        ],
    ];
@endphp

@include('cirkla.includes.product-page')
