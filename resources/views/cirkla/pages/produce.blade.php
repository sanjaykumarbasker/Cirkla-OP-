<!DOCTYPE html>
<html lang="en">
@php
$pageTitle = 'Produce - Cirkla';
$metaDescription = '100% plastic-free, compostable, curbside recyclable fiber produce trays. Drop-in replacement for plastic produce trays.';
$pageScript = '/_astro/hoisted.CCIidRwJ.js';
$activePage = '';
@endphp
@include('cirkla.includes.head')

<body> @include('cirkla.includes.nav') <main>
        <section class="pt-nav bg-green-deep">
            <div class="max-w-site mx-auto px-6 md:px-12 py-20 md:py-28 grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <p class="inline-flex px-4 py-1.5 bg-butter text-green-deep rounded-pill font-mono text-[13px] tracking-[0.08em] uppercase font-medium mb-8">High-Performance Fiber Produce Trays</p>
                    <h1 class="font-serif font-normal text-[clamp(44px,5vw,64px)] leading-[1.08] tracking-[-1.5px] text-paper max-w-3xl mb-6">100% plastic-free produce trays. <em class="italic font-light">No trade-offs.</em></h1>
                    <p class="font-sans text-[19px] text-paper/70 leading-[1.6] max-w-2xl mb-10">Fully compostable, curbside recyclable, and durable enough for the full supply chain. Drop-in replacement for plastic produce trays on your existing wrapping equipment - no additional capital investment.</p> <a href="/contact" class="font-sans font-medium text-[15px] no-underline inline-flex items-center gap-2 transition-all duration-200 bg-cream text-green px-7 py-3.5 rounded-pill border border-ink-15 hover:bg-butter "> Request a Sample <svg width="14" height="14" viewbox="0 0 14 14" fill="none">
                            <path d="M2 7h10m0 0L7 2m5 5L7 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg> </a>
                </div>
                <div class="hidden md:flex items-center justify-center"> <img src="/images/produce/hero-produce-wire.png" alt="Produce tray hero image" class="max-w-full max-h-[480px] object-contain"> </div>
            </div>
        </section>
        <section class="bg-white py-20 md:py-[120px]">
            <div class="max-w-site mx-auto px-6 md:px-12 reveal">
                <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-green-mid mb-3">Why Cirkla</p>
                <h2 class="font-serif font-normal text-[clamp(32px,4vw,48px)] leading-[1.08] tracking-[-1px] text-ink mb-12">The only produce tray with <em class="italic font-light">no compromises.</em></h2> <!-- Hero feature cell -->
                <div class="bg-green-deep rounded-t-card p-8 md:p-10 flex items-start gap-6 border border-green-deep">
                    <div>
                        <h3 class="font-serif text-[26px] font-normal text-paper mb-2">100% Plastic-free</h3>
                        <p class="font-sans text-[15px] text-paper/70 leading-[1.6]">The only produce tray made entirely from fiber and paper materials - no liner, no plastic, no compromise.</p>
                    </div>
                </div> <!-- Sub-features grid -->
                <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-px bg-rule rounded-b-card overflow-hidden border border-rule border-t-0 -mt-px">
                    <div class="bg-white p-[22px_24px] flex gap-3 items-start"> <img src="/images/produce/icon-compostable.svg" alt="" class="w-9 h-9 object-contain flex-shrink-0 mt-0.5" style="filter: brightness(0) saturate(100%) invert(35%) sepia(50%) saturate(600%) hue-rotate(75deg) brightness(90%)">
                        <div> <span class="font-sans text-[13px] font-medium text-ink block mb-1">Compostable</span> <span class="font-sans text-[12px] text-ink-50 leading-[1.5]">Certified for both home and industrial composting</span> </div>
                    </div>
                    <div class="bg-white p-[22px_24px] flex gap-3 items-start"> <img src="/images/produce/icon-durable.svg" alt="" class="w-9 h-9 object-contain flex-shrink-0 mt-0.5" style="filter: brightness(0) saturate(100%) invert(35%) sepia(50%) saturate(600%) hue-rotate(75deg) brightness(90%)">
                        <div> <span class="font-sans text-[13px] font-medium text-ink block mb-1">Durable</span> <span class="font-sans text-[12px] text-ink-50 leading-[1.5]">Maintains strength after extensive shelf-life testing</span> </div>
                    </div>
                    <div class="bg-white p-[22px_24px] flex gap-3 items-start"> <img src="/images/produce/icon-fda.svg" alt="" class="w-9 h-9 object-contain flex-shrink-0 mt-0.5" style="filter: brightness(0) saturate(100%) invert(35%) sepia(50%) saturate(600%) hue-rotate(75deg) brightness(90%)">
                        <div> <span class="font-sans text-[13px] font-medium text-ink block mb-1">FDA-approved</span> <span class="font-sans text-[12px] text-ink-50 leading-[1.5]">Safe for direct food contact</span> </div>
                    </div>
                    <div class="bg-white p-[22px_24px] flex gap-3 items-start"> <img src="/images/shared/icon-plug-play.svg" alt="" class="w-9 h-9 object-contain flex-shrink-0 mt-0.5" style="filter: brightness(0) saturate(100%) invert(35%) sepia(50%) saturate(600%) hue-rotate(75deg) brightness(90%)">
                        <div> <span class="font-sans text-[13px] font-medium text-ink block mb-1">Plug-&amp;-play with zero capex</span> <span class="font-sans text-[12px] text-ink-50 leading-[1.5]">Runs on all existing wrapping equipment with no speed loss</span> </div>
                    </div>
                    <div class="bg-white p-[22px_24px] flex gap-3 items-start"> <img src="/images/shared/icon-recyclable.svg" alt="" class="w-9 h-9 object-contain flex-shrink-0 mt-0.5" style="filter: brightness(0) saturate(100%) invert(35%) sepia(50%) saturate(600%) hue-rotate(75deg) brightness(90%)">
                        <div> <span class="font-sans text-[13px] font-medium text-ink block mb-1">Recyclable</span> <span class="font-sans text-[12px] text-ink-50 leading-[1.5]">Fully compatible with the paper recycling stream</span> </div>
                    </div>
                    <div class="bg-white p-[22px_24px] flex gap-3 items-start"> <img src="/images/produce/icon-moisture-resistant.svg" alt="" class="w-9 h-9 object-contain flex-shrink-0 mt-0.5" style="filter: brightness(0) saturate(100%) invert(35%) sepia(50%) saturate(600%) hue-rotate(75deg) brightness(90%)">
                        <div> <span class="font-sans text-[13px] font-medium text-ink block mb-1">Moisture-resistant</span> <span class="font-sans text-[12px] text-ink-50 leading-[1.5]">Resists softening even in high humidity</span> </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-cream py-20 md:py-[120px]">
            <div class="max-w-site mx-auto px-6 md:px-12 reveal">
                <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-green-mid mb-3">Applications</p>
                <h2 class="font-serif font-normal text-[clamp(32px,4vw,48px)] leading-[1.08] tracking-[-1px] text-ink mb-12">Fresh produce, <em class="italic font-light">fully protected.</em></h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-5">
                    <div class="bg-white border border-rule rounded-card overflow-hidden">
                        <div class="h-40 overflow-hidden bg-white"> <img src="/images/produce/produce-corn.jpg" alt="Corn" class="w-full h-full object-contain"> </div>
                        <div class="p-4">
                            <h3 class="font-serif text-[16px] font-normal text-ink">Corn</h3>
                        </div>
                    </div>
                    <div class="bg-white border border-rule rounded-card overflow-hidden">
                        <div class="h-40 overflow-hidden bg-white"> <img src="/images/produce/produce-zucchini.jpg" alt="Zucchini" class="w-full h-full object-contain"> </div>
                        <div class="p-4">
                            <h3 class="font-serif text-[16px] font-normal text-ink">Zucchini</h3>
                        </div>
                    </div>
                    <div class="bg-white border border-rule rounded-card overflow-hidden">
                        <div class="h-40 overflow-hidden bg-white"> <img src="/images/produce/produce-bell-peppers.jpg" alt="Bell Pepper" class="w-full h-full object-contain"> </div>
                        <div class="p-4">
                            <h3 class="font-serif text-[16px] font-normal text-ink">Bell Pepper</h3>
                        </div>
                    </div>
                    <div class="bg-white border border-rule rounded-card overflow-hidden">
                        <div class="h-40 overflow-hidden bg-white"> <img src="/images/produce/produce-mushroom.jpg" alt="Mushroom" class="w-full h-full object-contain"> </div>
                        <div class="p-4">
                            <h3 class="font-serif text-[16px] font-normal text-ink">Mushroom</h3>
                        </div>
                    </div>
                    <div class="bg-white border border-rule rounded-card overflow-hidden">
                        <div class="h-40 overflow-hidden bg-white"> <img src="/images/produce/produce-cucumber.png" alt="Cucumber" class="w-full h-full object-contain"> </div>
                        <div class="p-4">
                            <h3 class="font-serif text-[16px] font-normal text-ink">Cucumber</h3>
                        </div>
                    </div>
                    <div class="bg-white border border-rule rounded-card overflow-hidden">
                        <div class="h-40 overflow-hidden bg-white"> <img src="/images/produce/produce-tomato.png" alt="Tomato" class="w-full h-full object-contain"> </div>
                        <div class="p-4">
                            <h3 class="font-serif text-[16px] font-normal text-ink">Tomato</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white py-20 md:py-[120px]">
            <div class="max-w-site mx-auto px-6 md:px-12 reveal">
                <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-green-mid mb-3">Product Range</p>
                <h2 class="font-serif font-normal text-[clamp(32px,4vw,48px)] leading-[1.08] tracking-[-1px] text-ink mb-12">20+ SKUs across all major <em class="italic font-light">produce formats.</em></h2>
                <div class="border border-rule rounded-card overflow-hidden">
                    <div class="bg-green px-4 py-3 grid grid-cols-3 gap-4"> <span class="font-mono text-[13px] uppercase tracking-[0.06em] text-paper/80 font-medium">Format</span> <span class="font-mono text-[13px] uppercase tracking-[0.06em] text-paper/80 font-medium">Dimensions</span> <span class="font-mono text-[13px] uppercase tracking-[0.06em] text-paper/80 font-medium">Case Pack</span> </div>
                    <div class="px-4 py-3 grid grid-cols-3 gap-4 border-t border-rule bg-white"> <span class="inline-flex items-center"><span class="font-mono text-[13px] bg-[#EAF3DE] text-[#3B6D11] px-2 py-0.5 rounded-[4px]">2S/3D/3P</span></span> <span class="font-sans text-[13px] text-ink">8.26–8.50 × 5.74–6.57&quot;</span> <span class="font-sans text-[13px] text-ink-70">200–600</span> </div>
                    <div class="px-4 py-3 grid grid-cols-3 gap-4 border-t border-rule bg-paper/50"> <span class="inline-flex items-center"><span class="font-mono text-[13px] bg-[#EAF3DE] text-[#3B6D11] px-2 py-0.5 rounded-[4px]">4P/4L/6M</span></span> <span class="font-sans text-[13px] text-ink">9.25–9.68 × 7.24–7.48&quot;</span> <span class="font-sans text-[13px] text-ink-70">200–600</span> </div>
                    <div class="px-4 py-3 grid grid-cols-3 gap-4 border-t border-rule bg-white"> <span class="inline-flex items-center"><span class="font-mono text-[13px] bg-[#EAF3DE] text-[#3B6D11] px-2 py-0.5 rounded-[4px]">7S/8P/8H/8DD</span></span> <span class="font-sans text-[13px] text-ink">10.51–14.8 × 5.74–8.50&quot;</span> <span class="font-sans text-[13px] text-ink-70">200–400</span> </div>
                    <div class="px-4 py-3 grid grid-cols-3 gap-4 border-t border-rule bg-paper/50"> <span class="inline-flex items-center"><span class="font-mono text-[13px] bg-[#EAF3DE] text-[#3B6D11] px-2 py-0.5 rounded-[4px]">9P/9H/9L</span></span> <span class="font-sans text-[13px] text-ink">11.75 × 9.75&quot;</span> <span class="font-sans text-[13px] text-ink-70">150–600</span> </div>
                    <div class="px-4 py-3 grid grid-cols-3 gap-4 border-t border-rule bg-white"> <span class="inline-flex items-center"><span class="font-mono text-[13px] bg-[#EAF3DE] text-[#3B6D11] px-2 py-0.5 rounded-[4px]">10P/15D/20S/25P/148D</span></span> <span class="font-sans text-[13px] text-ink">10.75–14.84 × 5.75–7.99&quot;</span> <span class="font-sans text-[13px] text-ink-70">100–600</span> </div>
                </div>
            </div>
        </section>
        <section class="bg-green py-20 md:py-[120px]">
            <div class="max-w-site mx-auto px-6 md:px-12 text-center reveal">
                <h2 class="font-serif font-normal text-[clamp(36px,4vw,52px)] leading-[1.05] tracking-[-1px] text-paper mb-5">Run the trays through <em class="italic text-butter font-light">your line.</em></h2>
                <p class="font-sans text-[17px] text-paper/70 leading-[1.55] max-w-xl mx-auto mb-10">We'll send you trays, work with your QA team, and support you through shelf-life testing. No commitment. No pressure.</p>
                <div class="flex justify-center mb-5"> <a href="/contact" class="font-sans font-medium text-[15px] no-underline inline-flex items-center gap-2 transition-all duration-200 bg-cream text-green px-7 py-3.5 rounded-pill border border-ink-15 hover:bg-butter "> Request a Sample <svg width="14" height="14" viewbox="0 0 14 14" fill="none">
                            <path d="M2 7h10m0 0L7 2m5 5L7 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg> </a> </div>
                <p class="font-sans text-[14px] text-paper/50">Or talk to our team - we'll confirm your request within one business day.</p>
            </div>
        </section>
    </main>
</body>

</html>