<!DOCTYPE html>
<html lang="en">
@php
    $pageTitle = 'Standards & Recognition - COPAR';
    $metaDescription = 'COPAR develops packaging in line with recognised safety and regulatory standards, with industry recognition for material innovation.';
    $activePage = 'standards';
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
                        <p class="copar-eyebrow">Standards</p>
                        <h1 class="copar-title">In line with industry standards.</h1>
                        <p class="copar-lead">
                            COPAR solutions are developed in alignment with recognised safety and regulatory standards, with additional accreditations progressing as solutions scale across markets.
                        </p>
                        <div class="copar-actions">
                            <a class="copar-button" href="/contact">Discuss compliance needs</a>
                        </div>
                    </div>
                    <div class="copar-product-media">
                        <img src="/images/copar/shield.svg" alt="Standards shield icon">
                    </div>
                </div>
            </div>
        </section>

        <section class="copar-section">
            <div class="copar-container">
                <div class="copar-grid">
                    <article class="copar-card">
                        <div class="copar-card__body">
                            <p class="copar-mini-label">Safety</p>
                            <h3>Food-contact thinking</h3>
                            <p>Material choices are assessed around food packaging performance, safety expectations, and the requirements of each application.</p>
                        </div>
                    </article>
                    <article class="copar-card">
                        <div class="copar-card__body">
                            <p class="copar-mini-label">Regulatory</p>
                            <h3>Recognised standards</h3>
                            <p>Packaging projects are developed in line with recognised safety and regulatory standards for the markets and categories they serve.</p>
                        </div>
                    </article>
                    <article class="copar-card">
                        <div class="copar-card__body">
                            <p class="copar-mini-label">Scale</p>
                            <h3>Accreditation pathway</h3>
                            <p>COPAR continues to progress toward additional accreditations as solutions scale across food, retail, and export packaging markets.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="copar-section copar-section--cream">
            <div class="copar-container">
                <header class="copar-section-header">
                    <p class="copar-eyebrow">Recognition</p>
                    <h2 class="copar-section-title">Material innovation recognised by industry platforms.</h2>
                    <p class="copar-section-copy">
                        This recognition reflects COPAR's focus on practical alternatives to conventional plastic packaging that align with evolving recycling systems.
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
