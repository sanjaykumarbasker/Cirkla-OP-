<!DOCTYPE html>
<html lang="en">
@php
$pageTitle = 'Standard Laminated Trays - COPAR';
$metaDescription = 'COPAR standard laminated pulp trays converted from plastic tray formats, with dimensions, weight, thickness, and volume comparisons.';
$pageScript = '/_astro/hoisted.CCIidRwJ.js';
$activePage = 'standard-trays';
$trayImages = [
    '/images/copar/meal-tray-2c-transparent.png',
    '/images/copar/tray-hero.png',
    '/images/copar/ppt-image2.png',
    '/images/copar/tray.png',
];
$standardTrays = [
    [
        'number' => '01',
        'name' => '3D Tray',
        'plastic' => ['dimensions' => '215 x 166 x 42 mm', 'weight' => '26 g', 'thickness' => '0.45 mm', 'volume' => '900 ml'],
        'pulp' => ['dimensions' => '215 x 166 x 42 mm', 'weight' => '18 g', 'thickness' => '0.6 mm', 'volume' => '900 ml'],
    ],
    [
        'number' => '02',
        'name' => '3SC Tray',
        'plastic' => ['dimensions' => '215 x 166 x 21 mm', 'weight' => '26 g', 'thickness' => '0.4 mm', 'volume' => '450 ml'],
        'pulp' => ['dimensions' => '215 x 166 x 21 mm', 'weight' => '15 g', 'thickness' => '0.6 mm', 'volume' => '450 ml'],
    ],
    [
        'number' => '03',
        'name' => '3P Tray',
        'plastic' => ['dimensions' => '215 x 166 x 32 mm', 'weight' => '26 g', 'thickness' => '0.35 mm', 'volume' => '650 ml'],
        'pulp' => ['dimensions' => '215 x 166 x 32 mm', 'weight' => '25.0 g', 'thickness' => '0.6 mm', 'volume' => '650 ml'],
    ],
    [
        'number' => '04',
        'name' => '8P Tray',
        'plastic' => ['dimensions' => '266 x 214 x 38 mm', 'weight' => '50 g', 'thickness' => '0.4 mm', 'volume' => '1400 ml'],
        'pulp' => ['dimensions' => '260 x 177 x 44 mm', 'weight' => '28 g', 'thickness' => '0.6 mm', 'volume' => '1400 ml'],
    ],
    [
        'number' => '05',
        'name' => 'US-3 Tray',
        'plastic' => ['dimensions' => '222 x 172 x 50 mm', 'weight' => '30 g', 'thickness' => '0.35 mm', 'volume' => '1000 ml'],
        'pulp' => ['dimensions' => '222 x 172 x 50 mm', 'weight' => '20.5 g', 'thickness' => '0.6 mm', 'volume' => '1000 ml'],
    ],
    [
        'number' => '06',
        'name' => '11S Tray',
        'plastic' => ['dimensions' => '293.2 x 183 x 25 mm', 'weight' => '67 g', 'thickness' => '0.6 mm', 'volume' => '800 ml'],
        'pulp' => ['dimensions' => '293.2 x 183 x 25 mm', 'weight' => '22 g', 'thickness' => '0.6 mm', 'volume' => '800 ml'],
    ],
    [
        'number' => '07',
        'name' => '11DC Tray',
        'plastic' => ['dimensions' => '293.2 x 180.5 x 38 mm', 'weight' => '45 g', 'thickness' => '0.5 mm', 'volume' => '1200 ml'],
        'pulp' => ['dimensions' => '293.2 x 180.5 x 38 mm', 'weight' => '24 g', 'thickness' => '0.6 mm', 'volume' => '1200 ml'],
    ],
    [
        'number' => '08',
        'name' => '7P Tray',
        'plastic' => ['dimensions' => '376 x 145.5 x 21 mm', 'weight' => '45 g', 'thickness' => '0.45 mm', 'volume' => '600 ml'],
        'pulp' => ['dimensions' => '376 x 145.5 x 21 mm', 'weight' => '22.5 g', 'thickness' => '0.6 mm', 'volume' => '600 ml'],
    ],
    [
        'number' => '09',
        'name' => '1P Tray',
        'plastic' => ['dimensions' => '214 x 152.5 x 25 mm', 'weight' => '19 g', 'thickness' => '0.45 mm', 'volume' => '400 ml'],
        'pulp' => ['dimensions' => '214 x 152.5 x 25 mm', 'weight' => '15 g', 'thickness' => '0.6 mm', 'volume' => '400 ml'],
    ],
    [
        'number' => '10',
        'name' => '5P Tray',
        'plastic' => ['dimensions' => '234 x 183 x 37 mm', 'weight' => '35 g', 'thickness' => '0.45 mm', 'volume' => '850 ml'],
        'pulp' => ['dimensions' => '234 x 183 x 37 mm', 'weight' => '18 g', 'thickness' => '0.6 mm', 'volume' => '850 ml'],
    ],
    [
        'number' => '11',
        'name' => '25P T2 Tray',
        'plastic' => ['dimensions' => '375 x 207 x 40.5 mm', 'weight' => '40.5 g', 'thickness' => '0.5 mm', 'volume' => '1400 ml'],
        'pulp' => ['dimensions' => '375 x 207 x 40.5 mm', 'weight' => '35.5 g', 'thickness' => '0.6 mm', 'volume' => '1400 ml'],
    ],
    [
        'number' => '12',
        'name' => '2D Tray',
        'plastic' => ['dimensions' => '246.5 x 174 x 28 mm', 'weight' => '25 g', 'thickness' => '0.3 mm', 'volume' => '550 ml'],
        'pulp' => ['dimensions' => '257 x 184.5 x 28 mm', 'weight' => '24 g', 'thickness' => '0.6 mm', 'volume' => '740 ml'],
    ],
    [
        'number' => '13',
        'name' => 'V3 Tray',
        'plastic' => ['dimensions' => '219.5 x 167 x 32 mm', 'weight' => '27 g', 'thickness' => '0.5 mm', 'volume' => '600 ml'],
        'pulp' => ['dimensions' => '219.5 x 167 x 32 mm', 'weight' => '17 g', 'thickness' => '0.6 mm', 'volume' => '600 ml'],
    ],
    [
        'number' => '14',
        'name' => 'V4 Tray',
        'plastic' => ['dimensions' => '219 x 167.5 x 31.5 mm', 'weight' => '27 g', 'thickness' => '0.5 mm', 'volume' => '580 ml'],
        'pulp' => ['dimensions' => '219 x 167.5 x 31.5 mm', 'weight' => '16.5 g', 'thickness' => '0.6 mm', 'volume' => '580 ml'],
    ],
    [
        'number' => '15',
        'name' => '8 PB Tray',
        'plastic' => ['dimensions' => '274 x 219 x 35 mm', 'weight' => '50 g', 'thickness' => '0.45 mm', 'volume' => '1450 ml'],
        'pulp' => ['dimensions' => '274 x 219 x 35 mm', 'weight' => '27.5 g', 'thickness' => '0.6 mm', 'volume' => '1450 ml'],
    ],
    [
        'number' => '16',
        'name' => 'V5 Tray',
        'plastic' => ['dimensions' => '223 x 172 x 30.5 mm', 'weight' => '30.5 g', 'thickness' => '0.4 mm', 'volume' => '600 ml'],
        'pulp' => ['dimensions' => '223 x 172 x 30.5 mm', 'weight' => '17.5 g', 'thickness' => '0.6 mm', 'volume' => '600 ml'],
    ],
    [
        'number' => '17',
        'name' => 'V7 Tray',
        'plastic' => ['dimensions' => '223 x 172 x 33.6 mm', 'weight' => '23 g', 'thickness' => '0.5 mm', 'volume' => '650 ml'],
        'pulp' => ['dimensions' => '223 x 172 x 33.6 mm', 'weight' => '18 g', 'thickness' => '0.6 mm', 'volume' => '650 ml'],
    ],
];
@endphp
@include('cirkla.includes.head')

<body>
@include('cirkla.includes.nav')
<main class="copar-standard-trays">
    <section class="pt-nav copar-standard-hero">
        <div class="max-w-site mx-auto px-6 md:px-12 py-20 md:py-28 copar-standard-hero__grid">
            <div class="reveal">
                <p class="copar-kicker">Standard Trays</p>
                <h1 class="copar-standard-hero__title">
                    Plastic trays converted into <em>laminated pulp trays.</em>
                </h1>
                <p class="copar-standard-hero__text">
                    The standard range below uses the Plastic to Pulp comparison rows from page 2 onward of the supplied document. Each format keeps the tray application clear while moving from a plastic tray reference to a laminated pulp tray option.
                </p>
                <div class="copar-standard-hero__stats">
                    <span><strong>17</strong> standard tray rows</span>
                    <span><strong>0.6 mm</strong> pulp tray thickness target</span>
                    <span><strong>Page 2-3</strong> document source</span>
                </div>
            </div>
            <div class="copar-standard-hero__media reveal">
                <img src="/images/copar/meal-tray-2c-transparent.png" alt="COPAR laminated pulp tray">
                <div class="copar-standard-hero__badge">
                    <span>Plastic tray</span>
                    <strong>to</strong>
                    <span>Laminated pulp tray</span>
                </div>
            </div>
        </div>
    </section>

    <section id="standard-tray-range" class="bg-white py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <header class="copar-section-heading reveal">
                <p class="copar-section-label">Laminated tray range</p>
                <h2>Standard formats, <em>ready for comparison.</em></h2>
                <p class="font-sans text-[16px] text-ink-70 leading-[1.6] mt-5 max-w-3xl">
                    Select a standard tray below to review the plastic tray reference beside the laminated pulp tray specification.
                </p>
            </header>

            <nav class="copar-standard-index reveal" aria-label="Standard tray index">
                @foreach($standardTrays as $tray)
                    <a href="#tray-{{ $tray['number'] }}">{{ $tray['number'] }} {{ $tray['name'] }}</a>
                @endforeach
            </nav>

            <div class="copar-standard-grid reveal">
                @foreach($standardTrays as $tray)
                    <article id="tray-{{ $tray['number'] }}" class="copar-standard-card">
                        <div class="copar-standard-card__media">
                            <span>{{ $tray['number'] }}</span>
                            <img src="{{ $trayImages[$loop->index % count($trayImages)] }}" alt="{{ $tray['name'] }} laminated pulp tray">
                        </div>
                        <div class="copar-standard-card__body">
                            <p class="copar-section-label">Standard tray {{ $tray['number'] }}</p>
                            <h3>{{ $tray['name'] }}</h3>
                            <p>Plastic tray reference converted into a laminated pulp tray format for the same standard packaging pathway.</p>
                            <div class="copar-standard-card__comparison">
                                <div>
                                    <h4>Plastic tray</h4>
                                    <dl>
                                        <div><dt>Dimensions</dt><dd>{{ $tray['plastic']['dimensions'] }}</dd></div>
                                        <div><dt>Weight</dt><dd>{{ $tray['plastic']['weight'] }}</dd></div>
                                        <div><dt>Thickness</dt><dd>{{ $tray['plastic']['thickness'] }}</dd></div>
                                        <div><dt>Volume</dt><dd>{{ $tray['plastic']['volume'] }}</dd></div>
                                    </dl>
                                </div>
                                <div>
                                    <h4>Laminated pulp tray</h4>
                                    <dl>
                                        <div><dt>Dimensions</dt><dd>{{ $tray['pulp']['dimensions'] }}</dd></div>
                                        <div><dt>Weight</dt><dd>{{ $tray['pulp']['weight'] }}</dd></div>
                                        <div><dt>Thickness</dt><dd>{{ $tray['pulp']['thickness'] }}</dd></div>
                                        <div><dt>Volume</dt><dd>{{ $tray['pulp']['volume'] }}</dd></div>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="copar-standard-concept py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <div class="copar-standard-concept__layout reveal">
                <div>
                    <p class="copar-section-label">Conversion concept</p>
                    <h2>From plastic reference to <em>pulp production direction.</em></h2>
                    <p>
                        These rows are presented as a practical development bridge: start with the known plastic tray size, weight, and volume, then review the matching laminated pulp tray specification for sampling, fit checks, and production discussion.
                    </p>
                </div>
                <div class="copar-standard-concept__steps">
                    <article><span>01</span><strong>Match the tray role</strong><p>Keep the application and capacity visible before changing material.</p></article>
                    <article><span>02</span><strong>Review pulp dimensions</strong><p>Check width, depth, and volume against the supplied pulp tray row.</p></article>
                    <article><span>03</span><strong>Move to sampling</strong><p>Use the standard laminated tray as the base for buyer or line trials.</p></article>
                </div>
            </div>
        </div>
    </section>

    <section class="copar-product-cta py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12 text-center reveal">
            <h2>Need one of these trays <em>sampled?</em></h2>
            <p>Share the tray number, food category, and packing requirement. COPAR can use the standard laminated tray row as the starting point.</p>
            <a href="/contact">Start a tray project</a>
        </div>
    </section>
</main>
@include('cirkla.includes.footer')
</body>
</html>
