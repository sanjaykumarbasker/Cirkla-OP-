@php
    $pageTitle = 'Ready Meal Trays - QRCOPAR';
    $metaDescription = 'QRCOPAR ready meal trays for chilled, frozen, microwave-compatible, and ovenable meal packaging applications.';
    $activePage = 'ready-meals';
    $layoutVariant = 'service';
    $hero = [
        'eyebrow' => 'Ready Meal Trays',
        'title' => 'Ready meal trays for <em>chilled and frozen meals.</em>',
        'copy' => 'Ovenable and microwave-compatible molded fibre solutions for ready meal applications requiring barrier performance, seal integrity, and commercial production reliability.',
        'image' => '/images/pdf-extracted/embedded/sg2c-6040/sg2c-6040-p01-img01-824x584.png',
        'imageAlt' => 'QRCOPAR ready meal tray',
        'pills' => ['Ready meals', 'Frozen foods', 'Ovenable options', 'Microwave-compatible'],
    ];
    $featureTitle = 'Heat-ready performance';
    $featureHeading = 'Engineered for <em>ready meal applications.</em>';
    $featureCopy = 'CPET and other lamination pathways support ovenable and ready meal applications requiring high heat resistance.';
    $benefits = [
        'Ovenable and microwave-compatible solutions for chilled and frozen meals.',
        'Barrier options designed around meal format, shelf life, and sealing requirements.',
        'Single and divided tray pathways for commercial ready meal programs.',
        'Supports industrial trials, product validation, and commercial scale manufacturing.',
    ];
    $applications = [
        ['label' => 'Chilled meals', 'title' => 'Retail-ready meal trays', 'copy' => 'Molded fibre trays for chilled meal packs requiring consistent sealing and presentation.'],
        ['label' => 'Frozen foods', 'title' => 'Durable tray structures', 'copy' => 'Packaging formats for frozen foods that require rigidity and dependable handling.'],
        ['label' => 'Food service', 'title' => 'Prepared meal packaging', 'copy' => 'Tray options for takeaway, prepared meals, and food service workflows.'],
    ];
    $video = '/videos/copar/meal-tray-2c.mp4';
    $productDetails = [
        [
            'label' => 'Ready meal tray',
            'title' => 'Ovenable and microwave-compatible tray pathways',
            'copy' => 'QRCOPAR ready meal trays support chilled and frozen meals with tray structures planned around heat resistance, barrier needs, and production reliability.',
            'image' => '/images/pdf-extracted/embedded/copar-product-list/copar-product-list-p01-img01-871x590.png',
            'imageAlt' => 'Full QRCOPAR ready meal tray',
            'features' => [
                'Ovenable and microwave-compatible directions.',
                'Suitable for chilled and frozen meals.',
                'Single and divided tray formats for meal separation.',
            ],
        ],
        [
            'label' => 'CPET barrier option',
            'title' => 'High heat resistance for ready meals',
            'copy' => 'CPET lamination is designed for ovenable and ready meal applications requiring high heat resistance.',
            'image' => '/images/pdf-extracted/embedded/tds-2c/tds-2c-p01-img02-480x325.png',
            'imageAlt' => 'QRCOPAR ready meal tray render',
            'features' => [
                'Supports ready-to-heat meal programs.',
                'Built for sealing, product appearance, and mechanical strength.',
                'Developed for industrial trials and validation.',
            ],
        ],
    ];
@endphp

@include('cirkla.includes.product-page')
