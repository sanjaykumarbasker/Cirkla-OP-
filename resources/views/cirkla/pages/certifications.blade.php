<!DOCTYPE html>
<html lang="en">
@php
$pageTitle = 'Standards & Recognition - COPAR';
$metaDescription = 'COPAR develops packaging in line with recognised safety and regulatory standards, with industry recognition for material innovation.';
$pageScript = '/_astro/hoisted.CCIidRwJ.js';
$activePage = 'standards';
@endphp
@include('cirkla.includes.head')

<body>
@include('cirkla.includes.nav')
<main class="copar-standalone copar-standalone--standards">
    <section class="pt-nav bg-green-deep copar-standalone-hero">
        <div class="max-w-site mx-auto px-6 md:px-12 py-20 md:py-28 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <p class="inline-flex px-4 py-1.5 bg-butter text-green-deep rounded-pill font-mono text-[13px] tracking-[0.08em] uppercase font-medium mb-8">Standards</p>
                <h1 class="font-serif font-normal text-[clamp(44px,5vw,64px)] leading-[1.08] tracking-[-1.5px] text-paper max-w-3xl mb-6">
                    In line with <em class="italic font-light">industry standards.</em>
                </h1>
                <p class="font-sans text-[19px] text-paper/70 leading-[1.6] max-w-2xl">
                    COPAR solutions are developed in alignment with recognised safety and regulatory standards, with additional accreditations progressing as solutions scale across markets.
                </p>
            </div>
            <div class="hidden md:flex items-center justify-center">
                <img src="/images/copar/shield.svg" alt="Standards shield" class="max-w-full max-h-[480px] object-contain invert sepia">
            </div>
        </div>
    </section>

    <section class="bg-white py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <header class="mb-14 reveal">
                <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-green-mid mb-4">Compliance Pathway</p>
                <h2 class="font-serif font-normal text-[clamp(32px,4vw,48px)] leading-[1.1] tracking-[-0.5px] text-ink mb-5">
                    Designed around safety, performance, <em class="italic text-green font-light">and end of life.</em>
                </h2>
            </header>
            <div class="grid md:grid-cols-3 gap-5 reveal">
                <article class="bg-white border border-rule rounded-card p-8 hover:border-green transition-colors duration-200">
                    <p class="font-mono text-[10px] tracking-[0.12em] uppercase text-green-mid mb-4">Safety</p>
                    <h3 class="font-serif text-[24px] font-medium leading-[1.2] text-ink mb-3">Food-contact thinking</h3>
                    <p class="font-sans text-[14px] text-ink-70 leading-[1.6]">Material choices are assessed around food packaging performance, safety expectations, and each application.</p>
                </article>
                <article class="bg-white border border-rule rounded-card p-8 hover:border-green transition-colors duration-200">
                    <p class="font-mono text-[10px] tracking-[0.12em] uppercase text-green-mid mb-4">Regulatory</p>
                    <h3 class="font-serif text-[24px] font-medium leading-[1.2] text-ink mb-3">Recognised standards</h3>
                    <p class="font-sans text-[14px] text-ink-70 leading-[1.6]">Packaging projects are developed in line with recognised safety and regulatory standards for the markets they serve.</p>
                </article>
                <article class="bg-white border border-rule rounded-card p-8 hover:border-green transition-colors duration-200">
                    <p class="font-mono text-[10px] tracking-[0.12em] uppercase text-green-mid mb-4">Scale</p>
                    <h3 class="font-serif text-[24px] font-medium leading-[1.2] text-ink mb-3">Accreditation pathway</h3>
                    <p class="font-sans text-[14px] text-ink-70 leading-[1.6]">COPAR continues to progress toward additional accreditations as solutions scale across food, retail, and export packaging.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="bg-cream py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <header class="mb-14 reveal">
                <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-green-mid mb-4">Recognition</p>
                <h2 class="font-serif font-normal text-[clamp(32px,4vw,48px)] leading-[1.1] tracking-[-0.5px] text-ink mb-5">
                    Recognised for material innovation <em class="italic text-green font-light">and performance.</em>
                </h2>
                <p class="font-sans text-[16px] text-ink-70 leading-[1.6] max-w-2xl">
                    COPAR's tray innovations are being recognised for supporting recyclable and compostable tray formats while maintaining functional performance.
                </p>
            </header>
            <div class="grid md:grid-cols-3 gap-5 reveal">
                <article class="bg-white border border-rule rounded-card p-7">
                    <img src="/images/copar/award/award-1.png" alt="Award badge" class="w-20 h-20 object-contain mb-6">
                    <h3 class="font-serif text-[22px] text-ink leading-[1.25]">PACK EXPO Technology Excellence Awards Finalist 2025</h3>
                </article>
                <article class="bg-white border border-rule rounded-card p-7">
                    <img src="/images/copar/award/award-2.jpg" alt="Award badge" class="w-20 h-20 object-contain mb-6">
                    <h3 class="font-serif text-[22px] text-ink leading-[1.25]">Packaging Europe Sustainability Awards Finalist 2025</h3>
                </article>
                <article class="bg-white border border-rule rounded-card p-7">
                    <img src="/images/copar/award/award-3.png" alt="Award badge" class="w-20 h-20 object-contain mb-6">
                    <h3 class="font-serif text-[22px] text-ink leading-[1.25]">Winner: Australian Owned Emerging Business of Year 2025</h3>
                </article>
            </div>
        </div>
    </section>
</main>
@include('cirkla.includes.footer')
</body>
</html>
