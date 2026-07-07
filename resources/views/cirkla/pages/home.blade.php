<!DOCTYPE html>
<html lang="en">
@php
$pageTitle = 'COPAR - Custom Sustainable Tray Packaging';
$metaDescription = 'COPAR builds custom sustainable tray packaging for meat, RTE meals, fresh produce, special, laminated, and unlaminated tray programs.';
$pageScript = '/_astro/hoisted.CCIidRwJ.js';
$activePage = 'home';
@endphp
@include('cirkla.includes.head')

<body>
@include('cirkla.includes.nav')
<main>
    <section class="min-h-screen flex flex-col justify-center pt-nav relative bg-paper overflow-hidden">
        <div class="absolute inset-0 bg-cream/40"></div>
        <div class="relative z-10 max-w-site mx-auto px-6 md:px-12 py-16 md:py-24 w-full copar-home-hero-grid">
            <div class="reveal">
                <div class="inline-flex items-center gap-2.5 px-4 py-2 bg-white border border-ink-15 rounded-pill text-[13px] text-ink-70 mb-10">
                    <span class="w-1.5 h-1.5 rounded-full bg-green-mid flex-shrink-0"></span>
                    Customise your tray packaging
                </div>
                <h1 class="font-serif font-normal text-[clamp(44px,5.5vw,72px)] leading-[1.02] tracking-[-2px] text-ink mb-6">
                    Trays that are <em class="italic text-green font-light">custom made.</em><br>
                    sustainable. practical.
                </h1>
                <p class="font-sans text-[19px] text-ink-70 leading-[1.55] max-w-2xl mb-10">
                    Tray-only packaging programs designed around your food category, product fit, and production requirements.
                </p>
                <div class="flex flex-wrap gap-3">
                    <a href="/contact" class="font-sans font-medium text-[15px] no-underline inline-flex items-center gap-2 transition-all duration-200 bg-green text-paper px-7 py-3.5 rounded-pill hover:bg-green-mid">
                        Get started
                        <svg width="14" height="14" viewbox="0 0 14 14" fill="none"><path d="M2 7h10m0 0L7 2m5 5L7 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </a>
                    <a href="/solutions/meat-trays" class="font-sans font-medium text-[15px] no-underline inline-flex items-center gap-2 transition-all duration-200 bg-white text-green px-7 py-3.5 rounded-pill border border-ink-15 hover:bg-butter">
                        Explore trays
                    </a>
                </div>
            </div>
            <div class="hidden md:flex items-center justify-center reveal">
                <div class="bg-white rounded-card border border-rule p-8 shadow-lg copar-home-visual overflow-hidden">
                    <img src="/images/copar/tray-hero.png" alt="COPAR moulded fibre tray" class="copar-visual-tray-top">
                    <img src="/images/copar/meal-tray-2c-transparent.png" alt="COPAR two-compartment tray" class="copar-visual-tray">
                    <img src="/images/copar/ppt-image2.png" alt="COPAR tray render" class="copar-visual-tray-small">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-20 md:py-[120px] border-t border-rule">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <header class="mb-14 reveal">
                <p class="font-mono text-[14px] tracking-[0.12em] uppercase font-medium text-green-mid mb-4">Tray programs</p>
                <h2 class="font-serif font-normal text-[clamp(36px,4vw,48px)] leading-[1.1] tracking-[-0.5px] text-ink mb-5">
                    Tray structures, <em class="italic text-green font-light">matched to the product.</em>
                </h2>
                <p class="font-sans text-[19px] text-ink-70 leading-[1.55] max-w-2xl">
                    COPAR focuses on trays: laminated, unlaminated, special, RTE, meat, and fresh produce formats for real packing requirements.
                </p>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 reveal">
                <article class="bg-white border border-rule rounded-card overflow-hidden hover:border-green transition-colors duration-200">
                    <div class="h-64 bg-cream flex items-center justify-center p-6 overflow-hidden">
                        <img src="/images/copar/meal-tray-2c-transparent.png" alt="Laminated tray" class="max-h-full max-w-full object-contain">
                    </div>
                    <div class="p-8">
                        <h3 class="font-serif text-[26px] font-medium leading-[1.2] text-ink mb-3">Laminated Trays</h3>
                        <p class="font-sans text-[15px] text-ink-70 leading-[1.5]">Tray formats with laminated surface options for sealing, presentation, and handling needs.</p>
                    </div>
                </article>

                <article class="bg-white border border-rule rounded-card overflow-hidden hover:border-green transition-colors duration-200">
                    <div class="h-64 bg-cream flex items-center justify-center p-6 overflow-hidden">
                        <img src="/images/copar/tray-hero.png" alt="Unlaminated tray" class="max-h-full max-w-full object-contain">
                    </div>
                    <div class="p-8">
                        <h3 class="font-serif text-[26px] font-medium leading-[1.2] text-ink mb-3">Unlaminated Trays</h3>
                        <p class="font-sans text-[15px] text-ink-70 leading-[1.5]">Simple moulded fibre tray structures for products where rigidity and fit are the priority.</p>
                    </div>
                </article>

                <article class="bg-white border border-rule rounded-card overflow-hidden hover:border-green transition-colors duration-200">
                    <div class="h-64 bg-cream flex items-center justify-center p-6 overflow-hidden">
                        <img src="/images/copar/ppt-image2.png" alt="Special tray" class="max-h-full max-w-full object-contain">
                    </div>
                    <div class="p-8">
                        <h3 class="font-serif text-[26px] font-medium leading-[1.2] text-ink mb-3">Special Trays</h3>
                        <p class="font-sans text-[15px] text-ink-70 leading-[1.5]">Custom tray dimensions, compartments, depths, and material paths for non-standard requirements.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="bg-cream py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <header class="mb-14 reveal">
                <p class="font-mono text-[14px] tracking-[0.12em] uppercase font-medium text-green-mid mb-4">Tray categories</p>
                <h2 class="font-serif font-normal text-[clamp(36px,4vw,48px)] leading-[1.1] tracking-[-0.5px] text-ink">
                    Six tray pathways for food and retail programs.
                </h2>
            </header>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 reveal">
                <a href="/solutions/meat-trays" class="relative rounded-card overflow-hidden bg-green-deep no-underline copar-sector-card">
                    <img src="/images/copar/solutions/meat.png" alt="Meat tray packaging" class="opacity-80">
                    <span class="absolute left-0 right-0 bottom-0 p-6 font-serif text-[26px] text-paper bg-green-deep/70">Meat Trays</span>
                </a>
                <a href="/solutions/rte-trays" class="relative rounded-card overflow-hidden bg-green-deep no-underline copar-sector-card">
                    <img src="/images/copar/solutions/ready-meal.png" alt="RTE tray packaging" class="opacity-80">
                    <span class="absolute left-0 right-0 bottom-0 p-6 font-serif text-[26px] text-paper bg-green-deep/70">RTE Trays</span>
                </a>
                <a href="/solutions/fresh-produce" class="relative rounded-card overflow-hidden bg-green-deep no-underline copar-sector-card">
                    <img src="/images/copar/solutions/fresh-products.png" alt="Fresh produce tray packaging" class="opacity-80">
                    <span class="absolute left-0 right-0 bottom-0 p-6 font-serif text-[26px] text-paper bg-green-deep/70">Fresh Produce</span>
                </a>
                <a href="/solutions/special-trays" class="relative rounded-card overflow-hidden bg-green-deep no-underline copar-sector-card">
                    <img src="/images/copar/tray.png" alt="Special tray packaging" class="opacity-80">
                    <span class="absolute left-0 right-0 bottom-0 p-6 font-serif text-[26px] text-paper bg-green-deep/70">Special Trays</span>
                </a>
                <a href="/solutions/laminated-trays" class="relative rounded-card overflow-hidden bg-green-deep no-underline copar-sector-card">
                    <img src="/images/copar/meal-tray-2c-transparent.png" alt="Laminated tray packaging" class="opacity-80">
                    <span class="absolute left-0 right-0 bottom-0 p-6 font-serif text-[26px] text-paper bg-green-deep/70">Laminated Trays</span>
                </a>
                <a href="/solutions/unlaminated-trays" class="relative rounded-card overflow-hidden bg-green-deep no-underline copar-sector-card">
                    <img src="/images/copar/tray-hero.png" alt="Unlaminated tray packaging" class="opacity-80">
                    <span class="absolute left-0 right-0 bottom-0 p-6 font-serif text-[26px] text-paper bg-green-deep/70">Unlaminated Trays</span>
                </a>
            </div>
        </div>
    </section>

    <section class="bg-green py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <header class="mb-14 reveal">
                <p class="font-mono text-[14px] tracking-[0.12em] uppercase font-medium text-butter/60 mb-4">Custom Tray Development</p>
                <h2 class="font-serif font-normal text-[clamp(36px,4vw,52px)] leading-[1.05] tracking-[-1px] text-cream mb-5">
                    Not a one-size tray. <em class="italic text-butter font-light">A custom-made format.</em>
                </h2>
                <p class="font-sans text-[17px] text-cream/70 leading-[1.6] max-w-2xl">
                    COPAR is tray-led and problem-led. Whether it is shelf presentation for meat, a recyclable tray for produce, or a special format for RTE meals, the solution is designed around the product.
                </p>
            </header>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 reveal">
                <div class="bg-paper/[0.08] border border-cream/[0.08] rounded-card p-6"><p class="font-mono text-[13px] text-butter mb-4">01</p><h3 class="font-serif text-[20px] text-cream mb-3">Tray assessment</h3><p class="font-sans text-[14px] text-cream/70 leading-[1.5]">Understand product fit, current tray format, and performance requirements.</p></div>
                <div class="bg-paper/[0.08] border border-cream/[0.08] rounded-card p-6"><p class="font-mono text-[13px] text-butter mb-4">02</p><h3 class="font-serif text-[20px] text-cream mb-3">Format direction</h3><p class="font-sans text-[14px] text-cream/70 leading-[1.5]">Choose laminated, unlaminated, or special tray pathways.</p></div>
                <div class="bg-paper/[0.08] border border-cream/[0.08] rounded-card p-6"><p class="font-mono text-[13px] text-butter mb-4">03</p><h3 class="font-serif text-[20px] text-cream mb-3">Prototype validation</h3><p class="font-sans text-[14px] text-cream/70 leading-[1.5]">Test fit, strength, lidding, and handling before production.</p></div>
                <div class="bg-paper/[0.08] border border-cream/[0.08] rounded-card p-6"><p class="font-mono text-[13px] text-butter mb-4">04</p><h3 class="font-serif text-[20px] text-cream mb-3">Production transition</h3><p class="font-sans text-[14px] text-cream/70 leading-[1.5]">Move from sample to production with a transparent supply chain.</p></div>
            </div>
        </div>
    </section>

    <section class="bg-paper py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12 text-center reveal">
            <h2 class="font-serif font-normal text-[clamp(40px,5vw,64px)] leading-[1.05] tracking-[-1.5px] text-ink mb-5">
                Let's make your trays <em class="italic text-green font-light">work for you.</em>
            </h2>
            <p class="font-sans text-[19px] text-ink-70 leading-[1.55] max-w-xl mx-auto mb-10">
                Share your sector, tray type, dimensions, and performance goals. COPAR can help assess the tray path and next prototype.
            </p>
            <a href="/contact" class="font-sans font-medium text-[15px] no-underline inline-flex items-center gap-2 transition-all duration-200 bg-green text-paper px-7 py-3.5 rounded-pill hover:bg-green-mid">Customise trays</a>
        </div>
    </section>
</main>
@include('cirkla.includes.footer')
</body>
</html>
