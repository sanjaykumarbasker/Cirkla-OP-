@php
    $pageTitle = 'Custom Packaging Solutions - COPAR';
    $metaDescription = 'COPAR designs custom sustainable packaging using HyperBarrier, agri-fibre, and paper material options.';
    $activePage = 'custom';
    $hero = [
        'eyebrow' => 'Custom Packaging Solutions',
        'title' => 'Not a one-size approach. <em>A custom-made solution.</em>',
        'copy' => 'COPAR is problem-led. Whether it is shelf life for fresh meat, a recyclable tray for produce, or custom coatings for export packaging, we design with your sector needs in mind.',
        'image' => '/images/copar/open-pouch.png',
        'imageAlt' => 'Custom COPAR packaging',
        'pills' => ['Bespoke builds', 'Prototype to production', 'Material-led'],
    ];
    $featureTitle = 'Why it matters';
    $featureHeading = 'Sustainable, durable packaging <em>tailored to your needs.</em>';
    $featureCopy = 'A custom COPAR project starts with the application and works backward into the right material, format, and performance pathway.';
    $benefits = [
        'Bespoke builds for industry sectors.',
        'Combine HyperBarrier, agri-fibre, and bioplastic options.',
        'Designed to meet compliance and cost goals.',
        'Streamlined path from prototype to production.',
    ];
    $applications = [
        ['label' => 'Step 01', 'title' => 'Packaging assessment', 'copy' => 'Understand the existing packaging, application, and performance requirements.'],
        ['label' => 'Step 02', 'title' => 'Material-led solution', 'copy' => 'Choose fibre or paper formats tested for performance and recyclable norms.'],
        ['label' => 'Step 03', 'title' => 'Prototyping and validation', 'copy' => 'Test fit, strength, and functional performance before production.'],
        ['label' => 'Step 04', 'title' => 'Transition to production', 'copy' => 'Move from sample to production while keeping the supply chain transparent.'],
    ];
    $productDetails = [
        [
            'label' => 'Custom build',
            'title' => 'Material-led packaging designed around your product',
            'copy' => 'A custom COPAR project starts with the pack challenge, then selects the right pathway across HyperBarrier paper, agri-fibre and related material options.',
            'image' => '/images/copar/open-pouch.png',
            'imageAlt' => 'Open custom COPAR pouch',
            'features' => [
                'Bespoke builds for meat, produce, dairy, pet care and food service.',
                'Designed around compliance, cost and performance goals.',
                'Moves from assessment to prototype and production planning.',
            ],
        ],
        [
            'label' => 'Format mix',
            'title' => 'Pouches, trays and paper serviceware in one program',
            'copy' => 'COPAR can combine the right shape and material for the use case, rather than forcing a standard SKU into a custom requirement.',
            'image' => '/images/copar/pouch-half.png',
            'imageAlt' => 'COPAR pouch format',
            'features' => [
                'HyperBarrier packaging for shelf-life protection.',
                'Agri-fibre packaging for circular rigid formats.',
                'ServeSmart paper cutlery for complete food service programs.',
            ],
        ],
    ];
@endphp

@include('cirkla.includes.product-page')
