<!DOCTYPE html>
<html lang="en">
@php
    $pageTitle = 'COPAR - Custom Sustainable Packaging';
    $metaDescription = 'COPAR builds custom sustainable packaging from circular materials, including HyperBarrier Paper, agri-fibre packaging, and paper cutlery.';
    $activePage = 'home';
@endphp
@include('cirkla.includes.head')

<body>
<div class="copar-shell">
    @include('cirkla.includes.nav')

    <main>
        <section class="copar-hero">
            <div class="copar-container">
                <div class="copar-hero__grid">
                    <div>
                        <p class="copar-eyebrow">Customise your packaging</p>
                        <h1 class="copar-title">Packaging that is <em>custom made.</em> sustainable. circular.</h1>
                        <p class="copar-lead">
                            Made from circular materials, designed and customised to your packaging requirements.
                        </p>
                        <div class="copar-actions">
                            <a class="copar-button" href="/contact">Get started</a>
                            <a class="copar-button copar-button--soft" href="/technology">Explore HyperBarrier</a>
                        </div>
                    </div>

                    <div class="copar-hero__visual" aria-hidden="true">
                        <div class="copar-visual-card"></div>
                        <img class="copar-cutout copar-cutout--pouch" src="/images/copar/pouch.png" alt="">
                        <img class="copar-cutout copar-cutout--tray" src="/images/copar/meal-tray-2c-transparent.png" alt="">
                        <img class="copar-cutout copar-cutout--spoons" src="/images/copar/spoons-hero.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <div class="copar-stat-row">
            <div class="copar-stat">
                <strong>Barrier</strong>
                <span>High-performance paper formats for recyclable mono-barrier packaging.</span>
            </div>
            <div class="copar-stat">
                <strong>Fibre</strong>
                <span>Agri-fibre trays made with circular materials such as bagasse, bamboo, and wheat straw.</span>
            </div>
            <div class="copar-stat">
                <strong>Cutlery</strong>
                <span>Paper cutlery engineered for strength, clean taste, and biodegradable end of life.</span>
            </div>
        </div>

        <section class="copar-section">
            <div class="copar-container">
                <header class="copar-section-header">
                    <p class="copar-eyebrow">One solution at a time</p>
                    <h2 class="copar-section-title">The next generation of packaging, <em>built around your product.</em></h2>
                    <p class="copar-section-copy">
                        From agri-fibre to HyperBarrier coatings, COPAR engineers circular solutions that work across food service, retail, and export packaging.
                    </p>
                </header>

                <div class="copar-grid">
                    <article class="copar-card">
                        <div class="copar-card__media">
                            <img src="/images/copar/pouch.png" alt="HyperBarrier Paper pouch">
                        </div>
                        <div class="copar-card__body">
                            <h3>HyperBarrier Paper</h3>
                            <p>The world's most advanced high-barrier paper packaging, designed to protect shelf life without multilayer plastic traps.</p>
                            <ul>
                                <li>Recyclable in paper streams</li>
                                <li>Oxygen and moisture barrier performance</li>
                                <li>Designed for converters and MAP applications</li>
                            </ul>
                        </div>
                    </article>

                    <article class="copar-card">
                        <div class="copar-card__media">
                            <img src="/images/copar/tray-hero.png" alt="Agri-Fibre Packaging tray">
                        </div>
                        <div class="copar-card__body">
                            <h3>Agri-Fibre Packaging</h3>
                            <p>Premium packaging made from agricultural waste materials for compostable and recyclable retail formats.</p>
                            <ul>
                                <li>Wheat straw, bagasse, and bamboo inputs</li>
                                <li>Suitable for food service and retail</li>
                                <li>Designed to reduce environmental footprint</li>
                            </ul>
                        </div>
                    </article>

                    <article class="copar-card">
                        <div class="copar-card__media">
                            <img src="/images/copar/spoons.png" alt="ServeSmart Paper Cutlery">
                        </div>
                        <div class="copar-card__body">
                            <h3>ServeSmart Paper Cutlery</h3>
                            <p>9-ply FSC paper cutlery made for durability, clean eating, and a fully biodegradable format.</p>
                            <ul>
                                <li>No splinters or aftertaste</li>
                                <li>Strong paper construction</li>
                                <li>Ideal for food service applications</li>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="copar-section copar-section--cream">
            <div class="copar-container">
                <header class="copar-section-header">
                    <p class="copar-eyebrow">Business requirements</p>
                    <h2 class="copar-section-title">Solutions developed for food and retail sectors.</h2>
                    <p class="copar-section-copy">
                        From compostable fresh produce punnets to recyclable HyperBarrier flowwrap packaging, COPAR customises formats by sector.
                    </p>
                </header>

                <div class="copar-grid">
                    <a class="copar-sector" href="/solutions/meat-protein">
                        <img src="/images/copar/solutions/meat.png" alt="Meat and poultry packaging">
                        <span>Meat &amp; poultry</span>
                    </a>
                    <a class="copar-sector" href="/solutions/ready-meals">
                        <img src="/images/copar/solutions/ready-meal.png" alt="Ready meals packaging">
                        <span>Ready meals &amp; convenience</span>
                    </a>
                    <a class="copar-sector" href="/solutions/produce">
                        <img src="/images/copar/solutions/fresh-products.png" alt="Fresh produce packaging">
                        <span>Fresh produce</span>
                    </a>
                    <a class="copar-sector" href="/solutions/map-vsp">
                        <img src="/images/copar/solutions/seafood.png" alt="Seafood packaging">
                        <span>Seafood</span>
                    </a>
                    <a class="copar-sector" href="/solutions/overwrap">
                        <img src="/images/copar/solutions/dairy.png" alt="Dairy packaging">
                        <span>Dairy</span>
                    </a>
                    <a class="copar-sector" href="/solutions/overwrap">
                        <img src="/images/copar/solutions/petfood.png" alt="Pet care packaging">
                        <span>Pet Care</span>
                    </a>
                </div>
            </div>
        </section>

        <section class="copar-section">
            <div class="copar-container">
                <div class="copar-split">
                    <div>
                        <p class="copar-eyebrow">Custom packaging solutions</p>
                        <h2 class="copar-section-title">Not a one-size approach. <em>A custom-made solution.</em></h2>
                        <p class="copar-section-copy">
                            COPAR is problem-led. Whether the goal is shelf life for fresh meat, a recyclable tray for produce, or custom coatings for export packaging, the solution is designed around your sector's needs.
                        </p>
                        <div class="copar-actions">
                            <a class="copar-button" href="/solutions/custom">Customise with us</a>
                        </div>
                    </div>

                    <div class="copar-feature-panel">
                        <ul class="copar-list">
                            <li>Bespoke builds for industry sectors</li>
                            <li>Combine HyperBarrier, agri-fibre, and bioplastic options</li>
                            <li>Designed to meet compliance and cost goals</li>
                            <li>Streamlined path from prototype to production</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="copar-section copar-section--green">
            <div class="copar-container">
                <header class="copar-section-header">
                    <p class="copar-eyebrow">Custom sustainable packaging made for you</p>
                    <h2 class="copar-section-title">From assessment to large-scale production.</h2>
                </header>
                <div class="copar-process">
                    <article class="copar-step">
                        <span>01</span>
                        <h3>Packaging assessment</h3>
                        <p>Understand the existing packaging, application, and performance requirements.</p>
                    </article>
                    <article class="copar-step">
                        <span>02</span>
                        <h3>Material-led solution</h3>
                        <p>Choose fibre or paper formats tested for performance and recyclable norms.</p>
                    </article>
                    <article class="copar-step">
                        <span>03</span>
                        <h3>Prototyping and validation</h3>
                        <p>Test fit, strength, and functional performance before production.</p>
                    </article>
                    <article class="copar-step">
                        <span>04</span>
                        <h3>Large-scale production</h3>
                        <p>Move from sample to production with a transparent supply chain.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="copar-section copar-section--cream">
            <div class="copar-container">
                <header class="copar-section-header">
                    <p class="copar-eyebrow">Recognition</p>
                    <h2 class="copar-section-title">Recognised for material innovation and performance.</h2>
                    <p class="copar-section-copy">
                        COPAR's material innovations in fibre and paper packaging are being recognised for supporting recyclable and compostable formats while maintaining functional performance.
                    </p>
                </header>
                <div class="copar-awards">
                    <article class="copar-award">
                        <img src="/images/copar/award/award-1.png" alt="Award badge">
                        <strong>PACK EXPO Technology Excellence Awards Finalist 2025</strong>
                    </article>
                    <article class="copar-award">
                        <img src="/images/copar/award/award-2.jpg" alt="Award badge">
                        <strong>Packaging Europe Sustainability Awards Finalist 2025</strong>
                    </article>
                    <article class="copar-award">
                        <img src="/images/copar/award/award-3.png" alt="Award badge">
                        <strong>Winner: Australian Owned Emerging Business of Year 2025</strong>
                    </article>
                </div>
            </div>
        </section>

        @include('cirkla.includes.contact-panel')
    </main>
</div>
</body>
</html>
