<!DOCTYPE html>
<html lang="en">
@php
$pageTitle = 'Circular Packaging Process - COPAR';
$metaDescription = 'COPAR creates custom sustainable packaging through assessment, material-led design, prototyping, validation, and production.';
$pageScript = '/_astro/hoisted.CCIidRwJ.js';
$activePage = 'epr';
@endphp
@include('cirkla.includes.head')

<body>
@include('cirkla.includes.nav')
<main>
    <section class="pt-nav bg-green-deep">
        <div class="max-w-site mx-auto px-6 md:px-12 py-20 md:py-28 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <p class="inline-flex px-4 py-1.5 bg-butter text-green-deep rounded-pill font-mono text-[13px] tracking-[0.08em] uppercase font-medium mb-8">Circular Packaging Process</p>
                <h1 class="font-serif font-normal text-[clamp(44px,5vw,64px)] leading-[1.08] tracking-[-1.5px] text-paper max-w-3xl mb-6">
                    Custom sustainable packaging <em class="italic font-light">made for you.</em>
                </h1>
                <p class="font-sans text-[19px] text-paper/70 leading-[1.6] max-w-2xl mb-10">
                    COPAR moves from assessment to material selection, prototype validation, and production planning so each solution fits the product and sector.
                </p>
                <a href="/contact" class="font-sans font-medium text-[15px] no-underline inline-flex items-center gap-2 transition-all duration-200 bg-cream text-green px-7 py-3.5 rounded-pill border border-ink-15 hover:bg-butter">Start a project</a>
            </div>
            <div class="hidden md:flex items-center justify-center">
                <img src="/images/copar/process/sustainable.svg" alt="Circular packaging process" class="max-w-full max-h-[480px] object-contain invert sepia">
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
                <div class="bg-paper/[0.08] border border-cream/[0.08] rounded-card p-6"><p class="font-mono text-[13px] text-butter mb-4">01</p><h3 class="font-serif text-[20px] text-cream mb-3">Packaging assessment</h3><p class="font-sans text-[14px] text-cream/70 leading-[1.5]">Understand the existing packaging, application, and performance requirements.</p></div>
                <div class="bg-paper/[0.08] border border-cream/[0.08] rounded-card p-6"><p class="font-mono text-[13px] text-butter mb-4">02</p><h3 class="font-serif text-[20px] text-cream mb-3">Material-led solution</h3><p class="font-sans text-[14px] text-cream/70 leading-[1.5]">Provide fibre or paper formats tested for performance and recyclable norms.</p></div>
                <div class="bg-paper/[0.08] border border-cream/[0.08] rounded-card p-6"><p class="font-mono text-[13px] text-butter mb-4">03</p><h3 class="font-serif text-[20px] text-cream mb-3">Prototyping and validation</h3><p class="font-sans text-[14px] text-cream/70 leading-[1.5]">Test fit, strength, and functional performance before production.</p></div>
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
                    <div class="bg-white p-[22px_24px]"><h3 class="font-serif text-[20px] text-ink mb-2">HyperBarrier Paper</h3><p class="font-sans text-[14px] text-ink-70 leading-[1.6]">Recyclable paper options for barrier performance.</p></div>
                    <div class="bg-white p-[22px_24px]"><h3 class="font-serif text-[20px] text-ink mb-2">Agri-Fibre Packaging</h3><p class="font-sans text-[14px] text-ink-70 leading-[1.6]">Compostable and recyclable fibre packaging formats.</p></div>
                    <div class="bg-white p-[22px_24px]"><h3 class="font-serif text-[20px] text-ink mb-2">ServeSmart Cutlery</h3><p class="font-sans text-[14px] text-ink-70 leading-[1.6]">Biodegradable paper cutlery for food service applications.</p></div>
                    <div class="bg-white p-[22px_24px]"><h3 class="font-serif text-[20px] text-ink mb-2">Custom Projects</h3><p class="font-sans text-[14px] text-ink-70 leading-[1.6]">Material pathways matched to sector needs.</p></div>
                </div>
            </div>
        </div>
    </section>
</main>
@include('cirkla.includes.footer')
</body>
</html>
