<!DOCTYPE html>
<html lang="en">
@php
    $pageTitle = 'Circular Packaging Process - COPAR';
    $metaDescription = 'COPAR creates custom sustainable packaging through assessment, material-led design, prototyping, validation, and production.';
    $activePage = 'process';
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
                        <p class="copar-eyebrow">Circular packaging process</p>
                        <h1 class="copar-title">Custom sustainable packaging <em>made for you.</em></h1>
                        <p class="copar-lead">
                            COPAR moves from assessment to material selection, prototype validation, and production planning so each solution fits the product and sector.
                        </p>
                        <div class="copar-actions">
                            <a class="copar-button" href="/contact">Start a project</a>
                        </div>
                    </div>
                    <div class="copar-product-media">
                        <img src="/images/copar/process/sustainable.svg" alt="Circular packaging process">
                    </div>
                </div>
            </div>
        </section>

        <section class="copar-section copar-section--green">
            <div class="copar-container">
                <header class="copar-section-header">
                    <p class="copar-eyebrow">Workflow</p>
                    <h2 class="copar-section-title">A streamlined path from prototype to production.</h2>
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
                        <p>Provide fibre or paper formats tested for performance and recyclable norms.</p>
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

        <section class="copar-section">
            <div class="copar-container">
                <div class="copar-split">
                    <div>
                        <p class="copar-eyebrow">What happens after</p>
                        <h2 class="copar-section-title">Packaging is about performance, compliance, and end of life.</h2>
                    </div>
                    <div class="copar-feature-panel">
                        <ul class="copar-list">
                            <li>Recyclable HyperBarrier paper options for barrier performance.</li>
                            <li>Compostable and recyclable agri-fibre packaging formats.</li>
                            <li>Biodegradable ServeSmart paper cutlery for food service applications.</li>
                            <li>Custom projects that match material pathways to sector needs.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        @include('cirkla.includes.contact-panel')
    </main>
</div>
</body>
</html>
