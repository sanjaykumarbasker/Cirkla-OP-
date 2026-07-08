@php
    $pageTitle = 'Unlaminated Trays - QRCOPAR';
    $metaDescription = 'QRCOPAR unlaminated trays for tray-first fibre packaging programs and custom food applications.';
    $activePage = 'overwrap';
    $layoutVariant = 'specialty';
    $hero = [
        'eyebrow' => 'Unlaminated Trays',
        'title' => 'Unlaminated trays <em>for straightforward fibre packaging.</em>',
        'copy' => 'QRCOPAR unlaminated trays support tray-first applications where a clean molded fibre format, rigidity, and product fit are the priority.',
        'image' => '/images/copar/tray-hero.png',
        'imageAlt' => 'Full QRCOPAR unlaminated tray',
        'pills' => ['Moulded fibre', 'Retail trays', 'Custom dimensions'],
    ];
    $featureTitle = 'Tray-first material';
    $featureHeading = 'Simple fibre trays, <em>matched to the product.</em>';
    $featureCopy = 'Unlaminated tray formats can be reviewed for products that need a rigid tray base without added laminated surface requirements.';
    $benefits = [
        'Clean moulded fibre tray structure.',
        'Useful for fresh produce, dry goods, and selected prepared food applications.',
        'Designed around compliance, cost, and end-of-life requirements.',
        'Can be customised by tray size, shape, and depth.',
    ];
    $applications = [
        ['label' => 'Retail trays', 'title' => 'Shelf-ready fibre bases', 'copy' => 'Unlaminated tray pathways for products that need simple presentation and practical handling.'],
        ['label' => 'Produce trays', 'title' => 'Fresh and dry product formats', 'copy' => 'Tray structures for produce and goods where a moulded fibre base is the right fit.'],
        ['label' => 'Custom trays', 'title' => 'Dimension-led development', 'copy' => 'Review fit, stacking, and rigidity before moving into sample and production planning.'],
    ];
    $productDetails = [
        [
            'label' => 'Unlaminated tray',
            'title' => 'Moulded fibre tray without laminated surface',
            'copy' => 'Unlaminated trays give packaging teams a simple tray format for products where fibre structure, shape, and presentation are the key requirements.',
            'image' => '/images/copar/tray-hero.png',
            'imageAlt' => 'Full unlaminated tray format',
            'features' => [
                'Suitable for selected fresh, dry, and retail tray applications.',
                'Can be reviewed with stacking and product-fit needs.',
                'Useful for buyer and production trial planning.',
            ],
        ],
        [
            'label' => 'Tray fit planning',
            'title' => 'Custom sizing for product compatibility',
            'copy' => 'Tray dimensions, rim design, and depth can be developed around the product rather than forcing a standard format.',
            'image' => '/images/copar/tray.png',
            'imageAlt' => 'QRCOPAR unlaminated tray top view',
            'features' => [
                'Designed around product fit and display requirements.',
                'Supports finished-pack presentation.',
                'Can be customised alongside customer tray dimensions.',
            ],
        ],
    ];
@endphp

@include('cirkla.includes.product-page')
