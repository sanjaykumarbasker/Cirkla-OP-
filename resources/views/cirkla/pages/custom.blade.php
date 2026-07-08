@php
    $pageTitle = 'Custom Molded Fibre Packaging - QRCOPAR';
    $metaDescription = 'QRCOPAR custom molded fibre packaging solutions developed for specific customer requirements and commercial manufacturing.';
    $activePage = 'custom';
    $layoutVariant = 'custom';
    $hero = [
        'eyebrow' => 'Custom Molded Fibre Packaging',
        'title' => 'Tailored solutions for <em>specific requirements.</em>',
        'copy' => 'Custom engineered molded fibre packaging developed from concept to full-scale production for food service, retail packaging, bakery, pet food, and specialized food applications.',
        'image' => '/images/copar/tray-hero.png',
        'imageAlt' => 'QRCOPAR custom molded fibre tray',
        'pills' => ['Packaging design', 'Mold design', 'Rapid prototyping', 'Industrial trials'],
    ];
    $featureTitle = 'Custom engineering';
    $featureHeading = 'Innovation molded into <em>every tray.</em>';
    $featureCopy = 'Our in-house engineering team develops packaging solutions that balance sustainability, functionality, manufacturability, and commercial performance.';
    $benefits = [
        'Packaging design, 3D product development, mold design, and rapid prototyping.',
        'Industrial trials, product validation, and commercial scale manufacturing.',
        'Custom engineered solutions from concept development to full-scale production.',
        'Tailored for food service packaging, retail packaging, bakery, pet food, and specialized applications.',
    ];
    $applications = [
        ['label' => 'Step 01', 'title' => 'Packaging design', 'copy' => 'Define the product, dimensions, use case, barrier needs, and manufacturing direction.'],
        ['label' => 'Step 02', 'title' => '3D development and mold design', 'copy' => 'Move from concept to engineered tray geometry and tooling strategy.'],
        ['label' => 'Step 03', 'title' => 'Rapid prototyping', 'copy' => 'Build samples for fit, appearance, handling, and line review.'],
        ['label' => 'Step 04', 'title' => 'Industrial trials and validation', 'copy' => 'Validate performance before moving into commercial scale manufacturing.'],
    ];
    $productDetails = [
        [
            'label' => 'Food service packaging',
            'title' => 'Engineered fibre packaging for retail and food service',
            'copy' => 'QRCOPAR supports food service and retail packaging programs with custom molded fibre formats designed around performance and manufacturability.',
            'image' => '/images/copar/tray.png',
            'imageAlt' => 'QRCOPAR custom food service tray',
            'features' => [
                'Food service, retail packaging, bakery, and pet food applications.',
                'Custom tray depth, rim, compartment, and presentation planning.',
                'Designed for production reliability and commercial performance.',
            ],
        ],
        [
            'label' => 'Custom format',
            'title' => 'Tailored molded fibre packaging solutions',
            'copy' => 'From renewable resources to global packaging solutions, QRCOPAR develops custom formats that keep sustainability and functionality working together.',
            'image' => '/images/copar/ppt-image2.png',
            'imageAlt' => 'QRCOPAR custom molded fibre tray render',
            'features' => [
                'Prototype-led development process.',
                'Performance validation before launch.',
                'Full-scale production planning for repeatable quality.',
            ],
        ],
    ];
@endphp

@include('cirkla.includes.product-page')
