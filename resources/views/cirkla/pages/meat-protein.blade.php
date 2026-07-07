@php
    $pageTitle = 'Meat & Poultry Packaging - COPAR';
    $metaDescription = 'COPAR develops barrier and fibre packaging options for meat and poultry applications.';
    $activePage = 'meat-protein';
    $layoutVariant = 'protein';
    $hero = [
        'eyebrow' => 'Meat & poultry',
        'title' => 'Packaging designed for <em>fresh protein performance.</em>',
        'copy' => 'Build shelf-life, presentation, and circular material goals into trays and barrier formats for meat and poultry programs.',
        'image' => '/images/copar/meal-tray-2c-transparent.png',
        'imageAlt' => 'COPAR fibre tray',
        'pills' => ['Barrier-ready', 'Retail formats', 'Protein applications'],
    ];
    $featureTitle = 'Protein applications';
    $featureHeading = 'Performance where packaging decisions <em>matter most.</em>';
    $featureCopy = 'Fresh protein packaging needs strength, moisture control, barrier performance, and production consistency. COPAR builds material options around those requirements.';
    $benefits = [
        'Supports MAP and chilled retail applications.',
        'Designed for shelf-life protection and product presentation.',
        'Pairs HyperBarrier paper options with agri-fibre tray formats.',
        'Customisable for meat, poultry, pork, sausage, and processor-specific requirements.',
    ];
    $applications = [
        ['label' => 'Retail meat', 'title' => 'Fresh tray programs', 'copy' => 'Tray formats for butcher cases, chilled retail packs, and protein merchandising.'],
        ['label' => 'Processor lines', 'title' => 'Production-ready specs', 'copy' => 'Product files support review of size, forming, and performance requirements before trials.'],
        ['label' => 'Custom protein', 'title' => 'Bespoke builds', 'copy' => 'Custom formats for shelf life, pack fit, lidding, and distribution needs.'],
    ];
    $video = '/videos/copar/meal-tray-2c.mp4';
    $productDetails = [
        [
            'label' => 'Meat tray TDS',
            'title' => 'Fresh protein tray formats for chilled retail',
            'copy' => 'The meat tray documentation is represented as a fibre tray pathway for fresh beef, pork, poultry and similar chilled retail packs.',
            'image' => '/images/copar/meal-tray-2c-transparent.png',
            'imageAlt' => 'Full COPAR fibre tray',
            'features' => [
                'Designed for strength, presentation and product fit.',
                'Supports chilled display and processor line conversations.',
                'Can pair with HyperBarrier paper where barrier performance is required.',
            ],
        ],
        [
            'label' => 'Pork and sausage trays',
            'title' => 'Protein-specific pack options',
            'copy' => 'The pork and sausage product files inform a flexible protein packaging story for different cuts, shapes and merchandising requirements.',
            'image' => '/images/copar/tray-hero.png',
            'imageAlt' => 'Full agri-fibre tray for protein packs',
            'features' => [
                'Customisable for cut size, fill weight and shelf presentation.',
                'Suitable for butcher case and retail protein programs.',
                'Supports lower-plastic packaging goals.',
            ],
        ],
        [
            'label' => 'Drylock and MSO trays',
            'title' => 'Moisture-aware tray formats for fresh food',
            'copy' => 'Drylock and MSO tray resources point to formats where strength, moisture handling and pack stability matter in the supply chain.',
            'image' => '/images/copar/ppt-image2.png',
            'imageAlt' => 'COPAR tray render for fresh food',
            'features' => [
                'Built for product protection during distribution.',
                'Supports moisture-sensitive fresh food applications.',
                'Useful for trial planning with QA and operations teams.',
            ],
        ],
    ];
@endphp

@include('cirkla.includes.product-page')
