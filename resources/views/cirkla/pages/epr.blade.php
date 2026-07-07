<!DOCTYPE html>
<html lang="en">
@php
$pageTitle = 'Tray Development Process - COPAR';
$metaDescription = 'COPAR creates custom tray packaging through assessment, tray format design, prototyping, validation, and production.';
$pageScript = '/_astro/hoisted.CCIidRwJ.js';
$activePage = 'epr';
@endphp
@include('cirkla.includes.head')

<body>
@include('cirkla.includes.nav')
<main class="copar-standalone copar-standalone--process">
    <section class="pt-nav bg-green-deep copar-standalone-hero">
        <div class="max-w-site mx-auto px-6 md:px-12 py-20 md:py-28 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <p class="inline-flex px-4 py-1.5 bg-butter text-green-deep rounded-pill font-mono text-[13px] tracking-[0.08em] uppercase font-medium mb-8">Tray Development Process</p>
                <h1 class="font-serif font-normal text-[clamp(44px,5vw,64px)] leading-[1.08] tracking-[-1.5px] text-paper max-w-3xl mb-6">
                    Custom sustainable trays <em class="italic font-light">made for you.</em>
                </h1>
                <p class="font-sans text-[19px] text-paper/70 leading-[1.6] max-w-2xl mb-10">
                    COPAR moves from tray assessment to format selection, prototype validation, and production planning so each tray fits the product and line.
                </p>
                <a href="/contact" class="font-sans font-medium text-[15px] no-underline inline-flex items-center gap-2 transition-all duration-200 bg-cream text-green px-7 py-3.5 rounded-pill border border-ink-15 hover:bg-butter">Start a project</a>
            </div>
            <div class="hidden md:flex items-center justify-center">
                <img src="/images/copar/process/sustainable.svg" alt="Circular tray development process" class="max-w-full max-h-[480px] object-contain invert sepia">
            </div>
        </div>
    </section>

    <section class="bg-green py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <header class="mb-14 reveal">
                <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-butter/60 mb-4">Workflow</p>
                <h2 class="font-serif font-normal text-[clamp(36px,4vw,52px)] leading-[1.05] tracking-[-1px] text-cream">A streamlined path from prototype to production.</h2>
            </header>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 reveal">
                <div class="bg-paper/[0.08] border border-cream/[0.08] rounded-card p-6"><p class="font-mono text-[13px] text-butter mb-4">01</p><h3 class="font-serif text-[20px] text-cream mb-3">Tray assessment</h3><p class="font-sans text-[14px] text-cream/70 leading-[1.5]">Understand the product, current tray, dimensions, and performance requirements.</p></div>
                <div class="bg-paper/[0.08] border border-cream/[0.08] rounded-card p-6"><p class="font-mono text-[13px] text-butter mb-4">02</p><h3 class="font-serif text-[20px] text-cream mb-3">Tray format direction</h3><p class="font-sans text-[14px] text-cream/70 leading-[1.5]">Select laminated, unlaminated, special, meat, RTE, or produce tray pathways.</p></div>
                <div class="bg-paper/[0.08] border border-cream/[0.08] rounded-card p-6"><p class="font-mono text-[13px] text-butter mb-4">03</p><h3 class="font-serif text-[20px] text-cream mb-3">Prototyping and validation</h3><p class="font-sans text-[14px] text-cream/70 leading-[1.5]">Test fit, strength, lidding, stacking, and handling before production.</p></div>
                <div class="bg-paper/[0.08] border border-cream/[0.08] rounded-card p-6"><p class="font-mono text-[13px] text-butter mb-4">04</p><h3 class="font-serif text-[20px] text-cream mb-3">Large-scale production</h3><p class="font-sans text-[14px] text-cream/70 leading-[1.5]">Move from sample to production with a transparent supply chain.</p></div>
            </div>
        </div>
    </section>

    <section class="bg-white py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <div class="grid lg:grid-cols-[280px_1fr] gap-16 reveal">
                <div>
                    <p class="font-mono text-[14px] tracking-[0.12em] uppercase font-medium text-green-mid mb-4">What happens after</p>
                    <h2 class="font-serif font-normal text-[clamp(32px,3.5vw,44px)] leading-[1.1] tracking-[-0.5px] text-ink">Performance, compliance, <em class="italic text-green font-light">and end of life.</em></h2>
                </div>
                <div class="grid sm:grid-cols-2 gap-px bg-rule rounded-card overflow-hidden border border-rule">
                    <div class="bg-white p-[22px_24px]"><h3 class="font-serif text-[20px] text-ink mb-2">Laminated Trays</h3><p class="font-sans text-[14px] text-ink-70 leading-[1.6]">Tray surface options for sealing and presentation requirements.</p></div>
                    <div class="bg-white p-[22px_24px]"><h3 class="font-serif text-[20px] text-ink mb-2">Unlaminated Trays</h3><p class="font-sans text-[14px] text-ink-70 leading-[1.6]">Simple moulded fibre tray formats for tray-first applications.</p></div>
                    <div class="bg-white p-[22px_24px]"><h3 class="font-serif text-[20px] text-ink mb-2">RTE & Meat Trays</h3><p class="font-sans text-[14px] text-ink-70 leading-[1.6]">Tray programs for ready meals, fresh protein, and processor lines.</p></div>
                    <div class="bg-white p-[22px_24px]"><h3 class="font-serif text-[20px] text-ink mb-2">Special Trays</h3><p class="font-sans text-[14px] text-ink-70 leading-[1.6]">Custom tray pathways matched to product-specific needs.</p></div>
                </div>
            </div>
        </div>
    </section>
</main>
@include('cirkla.includes.footer')
</body>
</html>
