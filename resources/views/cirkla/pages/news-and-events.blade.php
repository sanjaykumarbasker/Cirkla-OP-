<!DOCTYPE html>
<html lang="en">
@php
    $pageTitle = 'Recognition & Resources - COPAR';
    $metaDescription = 'COPAR recognition, product resources, and technical documents for sustainable packaging solutions.';
    $activePage = 'news';
@endphp
@include('cirkla.includes.head')

<body>
<div class="copar-shell">
    @include('cirkla.includes.nav')

    <main>
        <section class="copar-product-hero">
            <div class="copar-container">
                <div class="copar-product-grid">
                    <div>
                        <p class="copar-eyebrow">Recognition & resources</p>
                        <h1 class="copar-title">Material innovation <em>made visible.</em></h1>
                        <p class="copar-lead">
                            COPAR's fibre and paper packaging innovations support recyclable and compostable formats while maintaining functional performance.
                        </p>
                    </div>
                    <div class="copar-product-media">
                        <img src="/images/copar/footer-image.png" alt="COPAR sustainable packaging">
                    </div>
                </div>
            </div>
        </section>

        <section class="copar-section copar-section--cream">
            <div class="copar-container">
                <header class="copar-section-header">
                    <p class="copar-eyebrow">Awards</p>
                    <h2 class="copar-section-title">Recognised for performance and sustainability.</h2>
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

        <section class="copar-section">
            <div class="copar-container">
                <header class="copar-section-header">
                    <p class="copar-eyebrow">Product resources</p>
                    <h2 class="copar-section-title">Supplied COPAR files for client review.</h2>
                    <p class="copar-section-copy">
                        The product list, technical sheets, and sample video are published from the local folder supplied for this project.
                    </p>
                </header>

                <div>
                    <a class="copar-resource-row" href="/documents/copar/copar-product-list.pdf" target="_blank" rel="noopener">
                        <span>
                            <strong>COPAR Product List</strong>
                            <span>Overview document for available product resources.</span>
                        </span>
                        <span class="copar-pill">Open PDF</span>
                    </a>
                    <a class="copar-resource-row" href="/documents/copar/tds-2c.pdf" target="_blank" rel="noopener">
                        <span>
                            <strong>TDS - 2C Meal Tray</strong>
                            <span>Technical data sheet for the two-compartment meal tray.</span>
                        </span>
                        <span class="copar-pill">Open PDF</span>
                    </a>
                    <a class="copar-resource-row" href="/videos/copar/meal-tray-2c.mp4" target="_blank" rel="noopener">
                        <span>
                            <strong>Product Video - 2C Meal Tray</strong>
                            <span>Short product video supplied with the COPAR files.</span>
                        </span>
                        <span class="copar-pill">Watch MP4</span>
                    </a>
                </div>
            </div>
        </section>

        @include('cirkla.includes.contact-panel')
    </main>
</div>
</body>
</html>
