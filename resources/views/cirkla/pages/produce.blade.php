@php
    $pageTitle = 'Agri-Fibre Packaging - COPAR';
    $metaDescription = 'COPAR Agri-Fibre Packaging turns agricultural waste materials into compostable and recyclable food packaging formats.';
    $activePage = 'produce';
    $layoutVariant = 'fibre';
    $hero = [
        'eyebrow' => 'Agri-Fibre Packaging',
        'title' => 'Circular fibre packaging <em>made from agricultural waste.</em>',
        'copy' => 'Transform wheat straw, bagasse, and bamboo into premium packaging solutions for fresh produce, food service, and retail applications.',
        'image' => '/images/copar/tray-hero.png',
        'imageAlt' => 'Agri-Fibre Packaging tray',
        'pills' => ['Compostable', 'Recyclable', 'Retail-ready'],
    ];
    $featureTitle = 'Why it matters';
    $featureHeading = 'A lower-footprint tray, <em>without losing presentation.</em>';
    $featureCopy = 'Agri-fibre packaging is designed for food and retail teams that need responsible materials with practical strength, shaping, and shelf appeal.';
    $benefits = [
        'Made from agricultural waste materials.',
        'Fully compostable and recyclable material options.',
        'Reduces environmental footprint compared with conventional plastic formats.',
        'Suitable for fresh produce, food service, and retail packaging applications.',
    ];
    $applications = [
        ['label' => 'Fresh produce', 'title' => 'Punnets and trays', 'copy' => 'Tray and punnet formats for vegetables, fruit, mushrooms, and fresh prepared produce.'],
        ['label' => 'Food service', 'title' => 'Rigid fibre bases', 'copy' => 'Durable fibre formats for counters, takeaway, and prepared food programs.'],
        ['label' => 'Retail', 'title' => 'Shelf-ready presentation', 'copy' => 'Clean, moulded forms that support premium merchandising while reducing plastic dependence.'],
    ];
    $productDetails = [
        [
            'label' => 'Agri-Fibre Packaging',
            'title' => 'Moulded fibre trays made from circular materials',
            'copy' => 'Agri-fibre packaging transforms wheat straw, bagasse and bamboo into durable food packaging that supports a lower-footprint retail format.',
            'image' => '/images/copar/tray-hero.png',
            'imageAlt' => 'Full agri-fibre tray',
            'features' => [
                'Made from agricultural waste materials.',
                'Compostable and recyclable material options.',
                'Suitable for fresh produce, food service and retail shelves.',
            ],
        ],
        [
            'label' => 'Produce formats',
            'title' => 'Tray and punnet options for fresh produce programs',
            'copy' => 'The product structure is designed for fresh goods that need clean merchandising, strength through the supply chain and a practical end-of-life story.',
            'image' => '/images/copar/tray.png',
            'imageAlt' => 'COPAR fibre tray top view',
            'features' => [
                'Supports vegetables, mushrooms, fruits and prepared produce.',
                'Rigid fibre bases keep the pack looking premium.',
                'Can be customised around product fit and wrapping requirements.',
            ],
        ],
    ];
@endphp

@include('cirkla.includes.product-page')
