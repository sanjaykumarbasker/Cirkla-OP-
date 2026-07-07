@php
    $pageTitle = 'Dairy & Pet Care Packaging - COPAR';
    $metaDescription = 'COPAR develops circular packaging options for dairy, pet care, and specialty food applications.';
    $activePage = 'overwrap';
    $hero = [
        'eyebrow' => 'Dairy & Pet Care',
        'title' => 'Specialty food packaging <em>customised by category.</em>',
        'copy' => 'From dairy applications to pet food trays and lids, COPAR develops circular packaging around product fit, shelf requirements, and compliance goals.',
        'image' => '/images/copar/solutions/petfood.png',
        'imageAlt' => 'Pet care packaging',
        'pills' => ['Pet food trays', 'Lids', 'Dairy applications'],
    ];
    $featureTitle = 'Category-led design';
    $featureHeading = 'Packaging matched to the product, <em>not forced from a standard SKU.</em>';
    $featureCopy = 'Dairy and pet care formats often need bespoke dimensions, seal systems, and material decisions. COPAR can prototype and validate those needs before scale-up.';
    $benefits = [
        'Customised tray and lid formats for pet food applications.',
        'Material options for dairy, retail, and specialty food categories.',
        'Designed around compliance, cost, and end-of-life requirements.',
        'Can combine fibre, barrier paper, and custom material pathways.',
    ];
    $applications = [
        ['label' => 'Pet Care', 'title' => 'Pet food trays', 'copy' => '500 ml and 1000 ml tray resources are available from the supplied product files.'],
        ['label' => 'Pet Care', 'title' => 'Lid systems', 'copy' => 'Review lid documentation for pack compatibility and buyer presentation.'],
        ['label' => 'Dairy', 'title' => 'Custom dairy formats', 'copy' => 'Material-led projects for dairy packs, tubs, inserts, and specialty retail applications.'],
    ];
    $documents = [
        ['title' => 'Pet Food Tray 500ML', 'href' => '/documents/copar/pet-food-tray-500ml-copar.pdf'],
        ['title' => 'Pet Food Tray 1000ML', 'href' => '/documents/copar/pet-food-tray-1000ml-copar.pdf'],
        ['title' => 'Pet Food Lid', 'href' => '/documents/copar/pet-food-lid-copar-83.pdf'],
        ['title' => 'Pet Food Lid Copy', 'href' => '/documents/copar/pet-food-lid-copar-83-1.pdf'],
    ];
@endphp

@include('cirkla.includes.product-page')
