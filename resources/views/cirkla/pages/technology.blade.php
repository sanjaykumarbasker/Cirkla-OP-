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
    $documents = [
        ['title' => 'COPAR Product List', 'href' => '/documents/copar/copar-product-list.pdf'],
        ['title' => 'TDS - COPAR Presentation', 'href' => '/documents/copar/tds-copar.pptx', 'label' => 'Open PPTX'],
    ];
@endphp

@include('cirkla.includes.product-page')
