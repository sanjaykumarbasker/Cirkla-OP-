@php
    $pageTitle = 'RTE Trays - COPAR';
    $metaDescription = 'COPAR RTE trays for ready-to-eat, ready-to-heat, and convenience food packaging programs.';
    $activePage = 'ready-meals';
    $layoutVariant = 'service';
    $hero = [
        'eyebrow' => 'RTE Trays',
        'title' => 'RTE trays <em>for prepared meal programs.</em>',
        'copy' => 'COPAR supports convenience food programs with fibre tray formats designed around portion separation, presentation, and production requirements.',
        'image' => '/images/copar/meal-tray-2c-transparent.png',
        'imageAlt' => 'Two-compartment COPAR RTE tray',
        'pills' => ['Ready-to-eat', 'Ready-to-heat', 'Single and divided trays'],
    ];
    $featureTitle = 'RTE formats';
    $featureHeading = 'Meal trays built for <em>serving, packing, and display.</em>';
    $featureCopy = 'RTE tray options help brands plan around portion control, tray rigidity, fill weight, and finished-pack appearance.';
    $benefits = [
        'Single and divided tray pathways.',
        'Two-compartment layouts for separated meal components.',
        'Designed for chilled, takeaway, and convenience food programs.',
        'Supports buyer review, QA checks, and production conversations.',
    ];
    $applications = [
        ['label' => 'RTE meals', 'title' => 'Single-compartment trays', 'copy' => 'Simple tray formats for prepared foods, snacks, and convenience lines.'],
        ['label' => 'Divided meals', 'title' => 'Two-compartment trays', 'copy' => 'Separated tray layouts for meals with sides, sauces, or multiple portions.'],
        ['label' => 'Food service', 'title' => 'Convenience tray programs', 'copy' => 'Tray formats for takeaway, counter service, and prepared food distribution.'],
    ];
    $video = '/videos/copar/meal-tray-2c.mp4';
    $productDetails = [
        [
            'label' => '2C RTE tray',
            'title' => 'Two-compartment tray for RTE programs',
            'copy' => 'The supplied 2C tray format supports portion separation, presentation, and a practical path for ready-to-serve food programs.',
            'image' => '/images/copar/meal-tray-2c-transparent.png',
            'imageAlt' => 'Full two-compartment COPAR RTE tray',
            'features' => [
                'Two-compartment layout for separated meal components.',
                'Fibre tray structure for convenience food programs.',
                'Useful for sample trials and buyer review.',
            ],
        ],
        [
            'label' => 'SG tray range',
            'title' => 'SG1C, SG2C 6040 and SG 2C 7030 formats',
            'copy' => 'The SG tray range is presented as a practical product family for single and divided meal formats.',
            'image' => '/images/copar/ppt-image2.png',
            'imageAlt' => 'COPAR RTE tray render',
            'features' => [
                'Single and divided tray pathways.',
                'Format options for chilled, ready-to-heat and takeaway meals.',
                'Supports discussions around dimensions, lidding and serving use.',
            ],
        ],
    ];
@endphp

@include('cirkla.includes.product-page')
