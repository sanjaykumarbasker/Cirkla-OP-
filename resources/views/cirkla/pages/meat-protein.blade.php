@php
    $pageTitle = 'Meat & Poultry Packaging - COPAR';
    $metaDescription = 'COPAR develops barrier and fibre packaging options for meat and poultry applications.';
    $activePage = 'meat-protein';
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
    $documents = [
        ['title' => 'Meat Tray TDS', 'href' => '/documents/copar/meat-tray-tds.pdf'],
        ['title' => 'Pork Tray Product', 'href' => '/documents/copar/pork-tray-product-copar.pdf'],
        ['title' => 'Sausage Tray Product', 'href' => '/documents/copar/sausage-tray-product-copar.pdf'],
        ['title' => 'Drylock Tray Product', 'href' => '/documents/copar/drylock-tray-product-copar.pdf'],
        ['title' => 'MSO Tray Product Type 3', 'href' => '/documents/copar/mso-tray-product-type-3-copar.pdf'],
        ['title' => 'COPAR Product List', 'href' => '/documents/copar/copar-product-list.pdf'],
    ];
@endphp

@include('cirkla.includes.product-page')
