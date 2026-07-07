<!DOCTYPE html>
<html lang="en">
@php
$pageTitle = 'Recognition & Resources - COPAR';
$metaDescription = 'COPAR recognition, product resources, and technical documents for sustainable packaging solutions.';
$pageScript = '/_astro/hoisted.CCIidRwJ.js';
$activePage = 'news';
@endphp
@include('cirkla.includes.head')

<body>
@include('cirkla.includes.nav')
<main>
    <section class="pt-nav bg-green-deep">
        <div class="max-w-site mx-auto px-6 md:px-12 py-20 md:py-28 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <p class="inline-flex px-4 py-1.5 bg-butter text-green-deep rounded-pill font-mono text-[13px] tracking-[0.08em] uppercase font-medium mb-8">Recognition & Resources</p>
                <h1 class="font-serif font-normal text-[clamp(44px,5vw,64px)] leading-[1.08] tracking-[-1.5px] text-paper max-w-3xl mb-6">
                    Material innovation <em class="italic font-light">made visible.</em>
                </h1>
                <p class="font-sans text-[19px] text-paper/70 leading-[1.6] max-w-2xl">
                    COPAR's fibre and paper packaging innovations support recyclable and compostable formats while maintaining functional performance.
                </p>
            </div>
            <div class="hidden md:flex items-center justify-center">
                <img src="/images/copar/footer-image.png" alt="COPAR sustainable packaging" class="max-w-full max-h-[480px] object-contain">
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
                <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-green-mid mb-4">Product Resources</p>
                <h2 class="font-serif font-normal text-[clamp(32px,4vw,48px)] leading-[1.1] tracking-[-0.5px] text-ink mb-5">Supplied COPAR files for client review.</h2>
                <p class="font-sans text-[16px] text-ink-70 leading-[1.6] max-w-2xl">The product list, technical sheets, and sample video are published from the local folder supplied for this project.</p>
            </header>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4 reveal">
                <a href="/documents/copar/copar-product-list.pdf" target="_blank" rel="noopener" class="bg-paper border border-rule rounded-card p-5 no-underline hover:bg-cream hover:border-green transition-colors duration-200">
                    <p class="font-serif text-[18px] text-ink leading-[1.3] mb-4">COPAR Product List</p>
                    <span class="font-mono text-[10px] tracking-[0.12em] uppercase text-green-mid">Open PDF</span>
                </a>
                <a href="/documents/copar/tds-2c.pdf" target="_blank" rel="noopener" class="bg-paper border border-rule rounded-card p-5 no-underline hover:bg-cream hover:border-green transition-colors duration-200">
                    <p class="font-serif text-[18px] text-ink leading-[1.3] mb-4">TDS - 2C Meal Tray</p>
                    <span class="font-mono text-[10px] tracking-[0.12em] uppercase text-green-mid">Open PDF</span>
                </a>
                <a href="/videos/copar/meal-tray-2c.mp4" target="_blank" rel="noopener" class="bg-paper border border-rule rounded-card p-5 no-underline hover:bg-cream hover:border-green transition-colors duration-200">
                    <p class="font-serif text-[18px] text-ink leading-[1.3] mb-4">Product Video - 2C Meal Tray</p>
                    <span class="font-mono text-[10px] tracking-[0.12em] uppercase text-green-mid">Watch MP4</span>
                </a>
            </div>
        </div>
    </section>
</main>
@include('cirkla.includes.footer')
</body>
</html>
