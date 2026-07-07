<!DOCTYPE html>
<html lang="en">
@php
$pageTitle = 'COPAR - Custom Sustainable Packaging';
$metaDescription = 'COPAR builds custom sustainable packaging from circular materials, including HyperBarrier Paper, agri-fibre packaging, and paper cutlery.';
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
                    Customise your packaging
                </div>
                <h1 class="font-serif font-normal text-[clamp(44px,5.5vw,72px)] leading-[1.02] tracking-[-2px] text-ink mb-6">
                    Packaging that is <em class="italic text-green font-light">custom made.</em><br>
                    sustainable. circular.
                </h1>
                <p class="font-sans text-[19px] text-ink-70 leading-[1.55] max-w-2xl mb-10">
                    Made from circular materials, designed and customised to your packaging requirements.
                </p>
                <div class="flex flex-wrap gap-3">
                    <a href="/contact" class="font-sans font-medium text-[15px] no-underline inline-flex items-center gap-2 transition-all duration-200 bg-green text-paper px-7 py-3.5 rounded-pill hover:bg-green-mid">
                        Get started
                        <svg width="14" height="14" viewbox="0 0 14 14" fill="none"><path d="M2 7h10m0 0L7 2m5 5L7 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </a>
                    <a href="/technology" class="font-sans font-medium text-[15px] no-underline inline-flex items-center gap-2 transition-all duration-200 bg-white text-green px-7 py-3.5 rounded-pill border border-ink-15 hover:bg-butter">
                        Explore solutions
                    </a>
                </div>
            </div>
            <div class="hidden md:flex items-center justify-center reveal">
                <div class="bg-white rounded-card border border-rule p-8 shadow-lg copar-home-visual overflow-hidden">
                    <img src="/images/copar/pouch.png" alt="HyperBarrier paper pouch" class="copar-visual-pouch">
                    <img src="/images/copar/meal-tray-2c-transparent.png" alt="COPAR fibre meal tray" class="copar-visual-tray">
                    <img src="/images/copar/spoons-hero.png" alt="ServeSmart paper cutlery" class="copar-visual-spoons">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-20 md:py-[120px] border-t border-rule">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <header class="mb-14 reveal">
                <p class="font-mono text-[14px] tracking-[0.12em] uppercase font-medium text-green-mid mb-4">One solution at a time</p>
                <h2 class="font-serif font-normal text-[clamp(36px,4vw,48px)] leading-[1.1] tracking-[-0.5px] text-ink mb-5">
                    The next generation of packaging, <em class="italic text-green font-light">built around your product.</em>
                </h2>
                <p class="font-sans text-[19px] text-ink-70 leading-[1.55] max-w-2xl">
                    From agri-fibre to HyperBarrier coatings, COPAR engineers circular solutions that work across food service, retail, and export packaging.
                </p>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 reveal">
                <article class="bg-white border border-rule rounded-card overflow-hidden hover:border-green transition-colors duration-200">
                    <div class="h-64 bg-cream flex items-center justify-center p-6 overflow-hidden">
                        <img src="/images/copar/pouch.png" alt="HyperBarrier Paper pouch" class="max-h-full max-w-full object-contain">
                    </div>
                    <div class="p-8">
                        <h3 class="font-serif text-[26px] font-medium leading-[1.2] text-ink mb-3">HyperBarrier Paper</h3>
                        <p class="font-sans text-[15px] text-ink-70 leading-[1.5]">Recyclable mono-barrier paper packaging with oxygen and moisture barrier performance.</p>
                    </div>
                </article>

                <article class="bg-white border border-rule rounded-card overflow-hidden hover:border-green transition-colors duration-200">
                    <div class="h-64 bg-cream flex items-center justify-center p-6 overflow-hidden">
                        <img src="/images/copar/tray-hero.png" alt="Agri-Fibre Packaging tray" class="max-h-full max-w-full object-contain">
                    </div>
                    <div class="p-8">
                        <h3 class="font-serif text-[26px] font-medium leading-[1.2] text-ink mb-3">Agri-Fibre Packaging</h3>
                        <p class="font-sans text-[15px] text-ink-70 leading-[1.5]">Compostable and recyclable formats made with agricultural waste materials.</p>
                    </div>
                </article>

                <article class="bg-white border border-rule rounded-card overflow-hidden hover:border-green transition-colors duration-200">
                    <div class="h-64 bg-cream flex items-center justify-center p-6 overflow-hidden">
                        <img src="/images/copar/spoons.png" alt="ServeSmart Paper Cutlery" class="max-h-full max-w-full object-contain">
                    </div>
                    <div class="p-8">
                        <h3 class="font-serif text-[26px] font-medium leading-[1.2] text-ink mb-3">ServeSmart Paper Cutlery</h3>
                        <p class="font-sans text-[15px] text-ink-70 leading-[1.5]">9-ply FSC paper cutlery with strength, clean taste, and biodegradable end of life.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="bg-cream py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <header class="mb-14 reveal">
                <p class="font-mono text-[14px] tracking-[0.12em] uppercase font-medium text-green-mid mb-4">Business requirements</p>
                <h2 class="font-serif font-normal text-[clamp(36px,4vw,48px)] leading-[1.1] tracking-[-0.5px] text-ink">
                    Solutions developed for food and retail sectors.
                </h2>
            </header>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 reveal">
                <a href="/solutions/meat-protein" class="relative rounded-card overflow-hidden bg-green-deep no-underline copar-sector-card">
                    <img src="/images/copar/solutions/meat.png" alt="Meat and poultry packaging" class="opacity-80">
                    <span class="absolute left-0 right-0 bottom-0 p-6 font-serif text-[26px] text-paper bg-green-deep/70">Meat &amp; poultry</span>
                </a>
                <a href="/solutions/ready-meals" class="relative rounded-card overflow-hidden bg-green-deep no-underline copar-sector-card">
                    <img src="/images/copar/solutions/ready-meal.png" alt="Ready meals packaging" class="opacity-80">
                    <span class="absolute left-0 right-0 bottom-0 p-6 font-serif text-[26px] text-paper bg-green-deep/70">Ready meals</span>
                </a>
                <a href="/solutions/produce" class="relative rounded-card overflow-hidden bg-green-deep no-underline copar-sector-card">
                    <img src="/images/copar/solutions/fresh-products.png" alt="Fresh produce packaging" class="opacity-80">
                    <span class="absolute left-0 right-0 bottom-0 p-6 font-serif text-[26px] text-paper bg-green-deep/70">Fresh produce</span>
                </a>
                <a href="/solutions/map-vsp" class="relative rounded-card overflow-hidden bg-green-deep no-underline copar-sector-card">
                    <img src="/images/copar/solutions/seafood.png" alt="Seafood packaging" class="opacity-80">
                    <span class="absolute left-0 right-0 bottom-0 p-6 font-serif text-[26px] text-paper bg-green-deep/70">Seafood</span>
                </a>
                <a href="/solutions/overwrap" class="relative rounded-card overflow-hidden bg-green-deep no-underline copar-sector-card">
                    <img src="/images/copar/solutions/dairy.png" alt="Dairy packaging" class="opacity-80">
                    <span class="absolute left-0 right-0 bottom-0 p-6 font-serif text-[26px] text-paper bg-green-deep/70">Dairy</span>
                </a>
                <a href="/solutions/overwrap" class="relative rounded-card overflow-hidden bg-green-deep no-underline copar-sector-card">
                    <img src="/images/copar/solutions/petfood.png" alt="Pet care packaging" class="opacity-80">
                    <span class="absolute left-0 right-0 bottom-0 p-6 font-serif text-[26px] text-paper bg-green-deep/70">Pet Care</span>
                </a>
            </div>
        </div>
    </section>

    <section class="bg-green py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <header class="mb-14 reveal">
                <p class="font-mono text-[14px] tracking-[0.12em] uppercase font-medium text-butter/60 mb-4">Custom Packaging Solutions</p>
                <h2 class="font-serif font-normal text-[clamp(36px,4vw,52px)] leading-[1.05] tracking-[-1px] text-cream mb-5">
                    Not a one-size approach. <em class="italic text-butter font-light">A custom-made solution.</em>
                </h2>
                <p class="font-sans text-[17px] text-cream/70 leading-[1.6] max-w-2xl">
                    COPAR is problem-led. Whether it is shelf life for fresh meat, a recyclable tray for produce, or custom coatings for export packaging, the solution is designed around your sector.
                </p>
            </header>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 reveal">
                <div class="bg-paper/[0.08] border border-cream/[0.08] rounded-card p-6"><p class="font-mono text-[13px] text-butter mb-4">01</p><h3 class="font-serif text-[20px] text-cream mb-3">Packaging assessment</h3><p class="font-sans text-[14px] text-cream/70 leading-[1.5]">Understand your existing packaging, application, and performance requirements.</p></div>
                <div class="bg-paper/[0.08] border border-cream/[0.08] rounded-card p-6"><p class="font-mono text-[13px] text-butter mb-4">02</p><h3 class="font-serif text-[20px] text-cream mb-3">Material-led solution</h3><p class="font-sans text-[14px] text-cream/70 leading-[1.5]">Choose fibre or paper formats tested for performance and recyclable norms.</p></div>
                <div class="bg-paper/[0.08] border border-cream/[0.08] rounded-card p-6"><p class="font-mono text-[13px] text-butter mb-4">03</p><h3 class="font-serif text-[20px] text-cream mb-3">Prototype validation</h3><p class="font-sans text-[14px] text-cream/70 leading-[1.5]">Test fit, strength, and functional performance before production.</p></div>
                <div class="bg-paper/[0.08] border border-cream/[0.08] rounded-card p-6"><p class="font-mono text-[13px] text-butter mb-4">04</p><h3 class="font-serif text-[20px] text-cream mb-3">Production transition</h3><p class="font-sans text-[14px] text-cream/70 leading-[1.5]">Move from sample to production with a transparent supply chain.</p></div>
            </div>
        </div>
    </section>

    <section class="bg-paper py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12 text-center reveal">
            <h2 class="font-serif font-normal text-[clamp(40px,5vw,64px)] leading-[1.05] tracking-[-1.5px] text-ink mb-5">
                Let's make your packaging <em class="italic text-green font-light">work for you.</em>
            </h2>
            <p class="font-sans text-[19px] text-ink-70 leading-[1.55] max-w-xl mx-auto mb-10">
                Share your sector, product, and performance goals. COPAR can help assess the material path and next prototype.
            </p>
            <a href="/contact" class="font-sans font-medium text-[15px] no-underline inline-flex items-center gap-2 transition-all duration-200 bg-green text-paper px-7 py-3.5 rounded-pill hover:bg-green-mid">Customise packaging</a>
        </div>
    </section>
</main>
@include('cirkla.includes.footer')
</body>
</html>
