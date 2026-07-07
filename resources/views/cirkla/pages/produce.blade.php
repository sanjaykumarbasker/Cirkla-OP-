@php
    $pageTitle = 'Agri-Fibre Packaging - COPAR';
    $metaDescription = 'COPAR Agri-Fibre Packaging turns agricultural waste materials into compostable and recyclable food packaging formats.';
    $activePage = 'produce';
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
    $documents = [
        ['title' => 'COPAR Product List', 'href' => '/documents/copar/copar-product-list.pdf'],
    ];
@endphp

@include('cirkla.includes.product-page')
