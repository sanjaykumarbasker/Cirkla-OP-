@php
    $pageTitle = 'HyperBarrier Paper - COPAR';
    $metaDescription = 'COPAR HyperBarrier Paper combines recyclable paper packaging with oxygen and moisture barrier performance.';
    $activePage = 'technology';
    $hero = [
        'eyebrow' => 'HyperBarrier Paper',
        'title' => 'Recyclable mono-barrier paper <em>with shelf-life protection.</em>',
        'copy' => 'Most barrier papers compromise either recyclability or performance. HyperBarrier changes that with recyclable paper formats engineered for oxygen and moisture barrier performance.',
        'image' => '/images/copar/pouch.png',
        'imageAlt' => 'HyperBarrier Paper pouch',
        'pills' => ['Recyclable paper streams', 'MAP-ready', 'Converter-friendly'],
    ];
    $featureTitle = 'Why it matters';
    $featureHeading = 'Barrier performance, <em>without plastic traps.</em>';
    $featureCopy = 'HyperBarrier combines recyclable fibre content with barrier performance in the range of EVOH, without relying on EVOH.';
    $benefits = [
        'Recyclable in paper streams.',
        'Replaces plastic layers like EVOH.',
        'Supports MAP applications for meat, dairy, produce, and ready meals.',
        'Designed for converters across extrusion, lamination, and thermoforming.',
    ];
    $applications = [
        ['label' => 'Fresh food', 'title' => 'MAP-compliant formats', 'copy' => 'Barrier paper options for fresh meat, seafood, produce, dairy, and convenience foods that need shelf-life protection.'],
        ['label' => 'Retail', 'title' => 'Recyclable flowwrap', 'copy' => 'Paper-based pack structures for retail shelves where recyclability and presentation both matter.'],
        ['label' => 'Converters', 'title' => 'Flexible production paths', 'copy' => 'Designed for teams that need extrusion, lamination, thermoforming, or coating-ready material options.'],
    ];
    $productDetails = [
        [
            'label' => 'HyperBarrier Paper',
            'title' => 'Recyclable mono-barrier paper packaging',
            'copy' => 'HyperBarrier is designed for food brands and converters that need shelf-life protection without trapping the pack in multilayer plastic structures.',
            'image' => '/images/copar/pouch.png',
            'imageAlt' => 'Full HyperBarrier paper pouch',
            'features' => [
                'FSC minimum fibre content pathway for recyclable paper streams.',
                'Oxygen and moisture barrier performance in the range of EVOH without using EVOH.',
                'Suitable for meat, dairy, produce, ready meals, flowwrap and pouch formats.',
            ],
        ],
        [
            'label' => 'Converter-ready',
            'title' => 'Built for extrusion, lamination and thermoforming teams',
            'copy' => 'The material pathway is intended for practical conversion workflows, helping packaging teams move from proof of concept to commercial format decisions.',
            'image' => '/images/copar/open-pouch.png',
            'imageAlt' => 'Open COPAR paper pouch',
            'features' => [
                'Supports custom coatings and barrier structures.',
                'Helps replace plastic layers in flexible and formed applications.',
                'Designed around compliance, cost and pack-performance targets.',
            ],
        ],
    ];
@endphp

@include('cirkla.includes.product-page')
