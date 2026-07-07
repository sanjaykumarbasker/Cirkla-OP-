@php
    $pageTitle = 'Ready Meals & ServeSmart Paper Cutlery - COPAR';
    $metaDescription = 'COPAR supports ready meal and food service packaging with fibre meal trays and ServeSmart paper cutlery.';
    $activePage = 'ready-meals';
    $hero = [
        'eyebrow' => 'Ready meals & convenience',
        'title' => 'Meal formats and paper cutlery <em>made for better service.</em>',
        'copy' => 'COPAR supports convenience food programs with fibre meal trays, paper cutlery, and material choices designed around performance, compliance, and end of life.',
        'image' => '/images/copar/meal-tray-2c-transparent.png',
        'imageAlt' => 'Two-compartment COPAR meal tray',
        'pills' => ['Meal trays', 'Paper cutlery', 'Food service'],
    ];
    $featureTitle = 'ServeSmart Paper Cutlery';
    $featureHeading = 'Premium paper cutlery <em>without splinters or aftertaste.</em>';
    $featureCopy = 'ServeSmart uses 9-ply FSC paper construction for the strength and durability food service teams need in a biodegradable format.';
    $benefits = [
        '9-ply FSC certified paper construction.',
        'No splinters or aftertaste.',
        'Fully biodegradable cutlery options.',
        'Compatible with food service and ready meal applications.',
    ];
    $applications = [
        ['label' => 'Prepared meals', 'title' => 'Single and divided trays', 'copy' => 'Fibre tray options for chilled, ready-to-heat, and takeaway meal programs.'],
        ['label' => 'Convenience', 'title' => 'Integrated service packs', 'copy' => 'Combine tray, lidding, pouch, and cutlery strategies around the customer eating occasion.'],
        ['label' => 'Food service', 'title' => 'Durable paper utensils', 'copy' => 'Paper cutlery designed for strength, clean taste, and a better end-of-life story.'],
    ];
    $video = '/videos/copar/meal-tray-2c.mp4';
    $productDetails = [
        [
            'label' => '2C meal tray',
            'title' => 'Two-compartment meal tray for ready meals',
            'copy' => 'The supplied 2C meal tray material supports portion separation, meal presentation and a clear path for ready-to-serve convenience programs.',
            'image' => '/images/copar/meal-tray-2c-transparent.png',
            'imageAlt' => 'Full two-compartment COPAR meal tray',
            'features' => [
                'Two-compartment layout for separated meal components.',
                'Fibre tray structure for convenience food programs.',
                'Designed for buyer review, QA checks and production conversations.',
            ],
        ],
        [
            'label' => 'SG tray range',
            'title' => 'SG1C, SG2C 6040 and SG 2C 7030 formats',
            'copy' => 'The SG tray range is presented as a practical product family for single and divided meal formats.',
            'image' => '/images/copar/ppt-image2.png',
            'imageAlt' => 'COPAR meal tray render',
            'features' => [
                'Single and divided tray pathways.',
                'Format options for chilled, ready-to-heat and takeaway meals.',
                'Supports discussions around dimensions, lidding and serving use.',
            ],
        ],
        [
            'label' => 'ServeSmart cutlery',
            'title' => '9-ply FSC paper cutlery for food service',
            'copy' => 'ServeSmart paper cutlery brings strength, clean taste and a biodegradable end-of-life story into the same convenience food program.',
            'image' => '/images/copar/spoons.png',
            'imageAlt' => 'Full ServeSmart paper cutlery set',
            'features' => [
                'No splinters or aftertaste.',
                'Strong multi-ply paper construction.',
                'Complements tray, pouch and food service packaging programs.',
            ],
        ],
    ];
@endphp

@include('cirkla.includes.product-page')
