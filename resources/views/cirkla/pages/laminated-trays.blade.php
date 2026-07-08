@php
    $pageTitle = 'Laminated Trays - QRCOPAR';
    $metaDescription = 'QRCOPAR laminated molded fibre trays for food packaging programs that need barrier protection, sealability, and retail-ready performance.';
    $activePage = 'laminated-trays';
    $layoutVariant = 'laminated';
    $hero = [
        'eyebrow' => 'Laminated Trays',
        'title' => 'Laminated trays <em>for barrier performance.</em>',
        'copy' => 'Premium laminated molded fibre trays designed for fresh food packaging applications that need moisture control, oxygen barrier options, seal integrity, and reliable line performance.',
        'image' => '/images/pdf-extracted/embedded/copar-product-list/copar-product-list-p02-img02-937x667.png',
        'imageAlt' => 'Full laminated QRCOPAR tray',
        'pills' => ['PE', 'EVOH', 'PP', 'CPET'],
    ];
    $featureTitle = 'Barrier technologies';
    $featureHeading = 'A true drop-in replacement <em>for plastic.</em>';
    $featureCopy = 'Engineered to deliver the same barrier protection and performance as plastic trays without modifying existing production lines or investing in new tooling.';
    $benefits = [
        'PE lamination provides a reliable moisture barrier for fresh food packaging.',
        'EVOH supports excellent oxygen barrier performance for extended shelf life.',
        'PP delivers high-performance barrier protection with excellent durability.',
        'CPET is designed for ovenable and ready meal applications requiring high heat resistance.',
    ];
    $applications = [
        ['label' => 'Fresh food', 'title' => 'Moisture barrier packs', 'copy' => 'Laminated tray surfaces planned around fresh meat, poultry, seafood, and produce applications.'],
        ['label' => 'Ready meals', 'title' => 'Heat and seal performance', 'copy' => 'Barrier options for chilled, frozen, microwave-compatible, and ovenable ready meal programs.'],
        ['label' => 'Retail packaging', 'title' => 'Drop-in conversion', 'copy' => 'Tray structures that support existing sealing and packaging equipment without major line modifications.'],
    ];
    $productDetails = [
        [
            'label' => 'PE lamination',
            'title' => 'Reliable moisture barrier for fresh food packaging',
            'copy' => 'PE laminated molded fibre trays support food categories where moisture protection, tray rigidity, and shelf presentation are key.',
            'image' => '/images/pdf-extracted/embedded/pet-food-tray-500ml-copar/pet-food-tray-500ml-copar-p01-img01-636x496.png',
            'imageAlt' => 'Laminated molded fibre meal tray',
            'features' => [
                'Supports fresh produce, meat, poultry, and seafood applications.',
                'Designed around existing packing-line requirements.',
                'Suitable for retail and food service tray programs.',
            ],
        ],
        [
            'label' => 'EVOH, PP and CPET',
            'title' => 'Advanced barrier options for demanding applications',
            'copy' => 'Multiple lamination pathways can be selected around oxygen barrier, durability, ovenability, and commercial performance requirements.',
            'image' => '/images/pdf-extracted/embedded/pet-food-tray-1000ml-copar/pet-food-tray-1000ml-copar-p01-img01-636x586.png',
            'imageAlt' => 'QRCOPAR laminated tray render',
            'features' => [
                'EVOH for extended shelf-life conversations.',
                'PP for durable barrier performance.',
                'CPET for ovenable and ready meal applications.',
            ],
        ],
    ];
@endphp

@include('cirkla.includes.product-page')
