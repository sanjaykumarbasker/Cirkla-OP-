<!DOCTYPE html>
<html lang="en">
@php
$pageTitle = 'Recognition & Resources - QRCOPAR';
$metaDescription = 'QRCOPAR recognition, tray product highlights, and technical capabilities for sustainable tray packaging solutions.';
$pageScript = '/_astro/hoisted.CCIidRwJ.js';
$activePage = 'news';
@endphp
@include('cirkla.includes.head')

<body>
@include('cirkla.includes.nav')
<main class="copar-standalone copar-standalone--recognition">
    <section class="pt-nav bg-green-deep copar-standalone-hero">
        <div class="max-w-site mx-auto px-6 md:px-12 py-20 md:py-28 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <p class="inline-flex px-4 py-1.5 bg-butter text-green-deep rounded-pill font-mono text-[13px] tracking-[0.08em] uppercase font-medium mb-8">Recognition & Resources</p>
                <h1 class="font-serif font-normal text-[clamp(44px,5vw,64px)] leading-[1.08] tracking-[-1.5px] text-paper max-w-3xl mb-6">
                    Material innovation <em class="italic font-light">made visible.</em>
                </h1>
                <p class="font-sans text-[19px] text-paper/70 leading-[1.6] max-w-2xl">
                    QRCOPAR's tray innovations support recyclable and compostable tray formats while maintaining functional performance.
                </p>
            </div>
            <div class="hidden md:flex items-center justify-center">
                <img src="/images/pdf-extracted/embedded/copar-product-list/copar-product-list-p03-img01-997x1280.png" alt="QRCOPAR sustainable tray packaging" class="max-w-full max-h-[480px] object-contain">
            </div>
        </div>
    </section>

    <section class="bg-cream py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <header class="mb-14 reveal">
                <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-green-mid mb-4">Awards</p>
                <h2 class="font-serif font-normal text-[clamp(32px,4vw,48px)] leading-[1.1] tracking-[-0.5px] text-ink">Recognised for performance and sustainability.</h2>
            </header>
            <div class="grid md:grid-cols-3 gap-5 reveal">
                <article class="bg-white border border-rule rounded-card p-7"><img src="/images/copar/award/award-1.png" alt="Award badge" class="w-20 h-20 object-contain mb-6"><h3 class="font-serif text-[22px] text-ink leading-[1.25]">PACK EXPO Technology Excellence Awards Finalist 2025</h3></article>
                <article class="bg-white border border-rule rounded-card p-7"><img src="/images/copar/award/award-2.jpg" alt="Award badge" class="w-20 h-20 object-contain mb-6"><h3 class="font-serif text-[22px] text-ink leading-[1.25]">Packaging Europe Sustainability Awards Finalist 2025</h3></article>
                <article class="bg-white border border-rule rounded-card p-7"><img src="/images/copar/award/award-3.png" alt="Award badge" class="w-20 h-20 object-contain mb-6"><h3 class="font-serif text-[22px] text-ink leading-[1.25]">Winner: Australian Owned Emerging Business of Year 2025</h3></article>
            </div>
        </div>
    </section>

    <section class="bg-white py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <header class="mb-12 reveal">
                <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-green-mid mb-4">Product Families</p>
                <h2 class="font-serif font-normal text-[clamp(32px,4vw,48px)] leading-[1.1] tracking-[-0.5px] text-ink mb-5">Product information from supplied QRCOPAR files.</h2>
                <p class="font-sans text-[16px] text-ink-70 leading-[1.6] max-w-2xl">The supplied product list, TDS files, tray sheets and video are represented here as product families with full, uncropped imagery.</p>
            </header>
            <div class="copar-product-gallery reveal">
                <figure>
                    <img src="/images/pdf-extracted/embedded/sg2c-6040/sg2c-6040-p01-img01-824x584.png" alt="2C meal tray full product view">
                    <figcaption><strong>RTE Tray</strong><br>Two-compartment fibre tray format for RTE foods, sample trials and buyer review.</figcaption>
                </figure>
                <figure>
                    <img src="/images/pdf-extracted/embedded/sg1c/sg1c-p01-img01-824x584.png" alt="Agri-fibre tray full product view">
                    <figcaption><strong>Fresh Produce Trays</strong><br>Tray pathways for produce, retail display and food service formats.</figcaption>
                </figure>
                <figure>
                    <img src="/images/pdf-extracted/embedded/mso-tray-product-type-3-copar/mso-tray-product-type-3-copar-p01-img01-848x619.png" alt="Special QRCOPAR tray full product view">
                    <figcaption><strong>Special Trays</strong><br>Custom tray structures for laminated, unlaminated, divided and moisture-aware formats.</figcaption>
                </figure>
            </div>
        </div>
    </section>
</main>
@include('cirkla.includes.footer')
</body>
</html>
