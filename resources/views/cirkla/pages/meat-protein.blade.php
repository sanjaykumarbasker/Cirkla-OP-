<!DOCTYPE html>
<html lang="en">
@php
$pageTitle = 'Meat &amp; Protein - Cirkla';
$metaDescription = 'Drop-in fiber tray replacements for fresh beef, pork, poultry and seafood - MAP, VSP, and overwrap formats.';
$pageScript = '/_astro/hoisted.CCIidRwJ.js';
$activePage = '';
@endphp
@include('cirkla.includes.head')

<body> @include('cirkla.includes.nav') <main>
        <section class="pt-nav bg-green-deep">
            <div class="max-w-site mx-auto px-6 md:px-12 py-20 md:py-28 grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <p class="inline-flex px-4 py-1.5 bg-butter text-green-deep rounded-pill font-mono text-[13px] tracking-[0.08em] uppercase font-medium mb-8">Fresh Protein Packaging</p>
                    <h1 class="font-serif font-normal text-[clamp(44px,5vw,64px)] leading-[1.08] tracking-[-1.5px] text-paper max-w-3xl mb-6">
                        Fiber trays built for <em class="italic font-light">fresh protein.</em> </h1>
                    <p class="font-sans text-[19px] text-paper/70 leading-[1.6] max-w-2xl mb-10">Two product lines covering every fresh meat packaging operation - from high-barrier MAP and VSP to everyday overwrap. Drop-in replacements for PP, EPS, and PET. No additional capital investment.</p> <a href="/contact" class="font-sans font-medium text-[15px] no-underline inline-flex items-center gap-2 transition-all duration-200 bg-cream text-green px-7 py-3.5 rounded-pill border border-ink-15 hover:bg-butter "> Request a Sample <svg width="14" height="14" viewbox="0 0 14 14" fill="none">
                            <path d="M2 7h10m0 0L7 2m5 5L7 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg> </a>
                </div>
                <div class="hidden md:flex items-center justify-center"> <img src="/images/meat-protein/hero-meat-protein-wire.png" alt="Meat & Protein tray wireframe" class="max-w-full max-h-[480px] object-contain"> </div>
            </div>
        </section>
        <section class="bg-white py-20 md:py-[120px]">
            <div class="max-w-site mx-auto px-6 md:px-12">
                <header class="mb-14 reveal">
                    <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-green-mid mb-4">Product Lines</p>
                    <h2 class="font-serif font-normal text-[clamp(32px,4vw,48px)] leading-[1.1] tracking-[-0.5px] text-ink mb-5">
                        Two formats, <em class="italic text-green font-light">every operation covered.</em> </h2>
                </header>
                <div class="grid md:grid-cols-2 gap-6 reveal"> <!-- MAP & VSP -->
                    <div class="bg-white border border-rule rounded-card overflow-hidden flex flex-col">
                        <div class="h-56 overflow-hidden"> <img src="/images/meat-protein/map_vsp.jpg" alt="MAP & VSP Trays" class="w-full h-full object-contain pt-6"> </div>
                        <div class="p-8 flex flex-col flex-1">
                            <h3 class="font-serif font-normal text-[26px] leading-[1.2] text-ink mb-4">MAP &amp; VSP</h3>
                            <p class="font-sans text-[15px] text-ink-70 leading-[1.55] mb-6 flex-1">The world's first fiber tray commercially validated for modified atmosphere packaging. 21-day shelf life across beef, pork, poultry, and seafood. Validated on Ross, MULTIVAC, OSSID, and Harpak-ULMA.</p>
                            <div><a href="/solutions/map-vsp" class="font-sans font-medium text-[15px] no-underline inline-flex items-center gap-2 transition-all duration-200 bg-cream text-green px-7 py-3.5 rounded-pill border border-ink-15 hover:bg-butter "> Explore MAP &amp; VSP → </a></div>
                        </div>
                    </div> <!-- Overwrap -->
                    <div class="bg-white border border-rule rounded-card overflow-hidden flex flex-col">
                        <div class="h-56 overflow-hidden"> <img src="/images/meat-protein/overwrap.jpg" alt="Overwrap Trays" class="w-full h-full object-contain pt-6"> </div>
                        <div class="p-8 flex flex-col flex-1">
                            <h3 class="font-serif font-normal text-[26px] leading-[1.2] text-ink mb-4">Overwrap</h3>
                            <p class="font-sans text-[15px] text-ink-70 leading-[1.55] mb-6 flex-1">High-performance fiber replacement for EPS and PET overwrap trays. Strong, rigid, freezer-safe, and curbside recyclable. Built for processors and retailers alike.</p>
                            <div><a href="/solutions/overwrap" class="font-sans font-medium text-[15px] no-underline inline-flex items-center gap-2 transition-all duration-200 bg-cream text-green px-7 py-3.5 rounded-pill border border-ink-15 hover:bg-butter "> Explore Overwrap Trays → </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-cream py-20 md:py-[120px]">
            <div class="max-w-site mx-auto px-6 md:px-12">
                <header class="mb-14 reveal">
                    <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-green-mid mb-4">Easy-Peel Disposal</p>
                    <h2 class="font-serif font-normal text-[clamp(32px,4vw,48px)] leading-[1.1] tracking-[-0.5px] text-ink mb-5">
                        Patented* <em class="italic text-green font-light">easy-peel disposal.</em> </h2>
                    <p class="font-sans text-[17px] text-ink-70 leading-[1.6] max-w-2xl">Separate the liner from the fiber tray in seconds — then dispose of each in its correct stream.</p>
                </header>
                <div class="grid md:grid-cols-2 gap-10 items-stretch reveal"> <!-- Steps -->
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex flex-col">
                            <p class="font-mono text-[10px] tracking-[0.1em] uppercase text-green-mid mb-2">Step 01</p>
                            <div class="w-full h-28 overflow-hidden rounded-[8px] mb-2"> <img src="/images/meat-protein/easy-peel-step-01.png" alt="Peel off the liner" class="w-full h-full object-left object-contain"> </div>
                            <p class="font-sans text-[13px] font-medium text-ink mb-1">Peel off the liner</p>
                            <p class="font-sans text-[12px] text-ink-50 leading-[1.5]">Patented easy-peel design separates liner from tray in seconds</p>
                        </div>
                        <div class="flex flex-col">
                            <p class="font-mono text-[10px] tracking-[0.1em] uppercase text-green-mid mb-2">Step 02</p>
                            <div class="w-full h-28 overflow-hidden rounded-[8px] mb-2"> <img src="/images/meat-protein/easy-peel-step-02.png" alt="Tray is curbside recyclable" class="w-full h-full object-left object-contain"> </div>
                            <p class="font-sans text-[13px] font-medium text-ink mb-1">Tray is curbside recyclable</p>
                            <p class="font-sans text-[12px] text-ink-50 leading-[1.5]">Fiber tray goes straight into the paper recycling bin</p>
                        </div>
                        <div class="flex flex-col">
                            <p class="font-mono text-[10px] tracking-[0.1em] uppercase text-green-mid mb-2">Step 03</p>
                            <div class="w-full h-28 overflow-hidden rounded-[8px] mb-2"> <img src="/images/meat-protein/easy-peel-step-03.png" alt="Dispose tray in paper bin" class="w-full h-full object-left object-contain"> </div>
                            <p class="font-sans text-[13px] font-medium text-ink mb-1">Dispose tray in paper bin</p>
                            <p class="font-sans text-[12px] text-ink-50 leading-[1.5]">Accepted in the curbside paper stream</p>
                        </div>
                        <div class="flex flex-col">
                            <p class="font-mono text-[10px] tracking-[0.1em] uppercase text-green-mid mb-2">Step 04</p>
                            <div class="w-full h-28 overflow-hidden rounded-[8px] mb-2"> <img src="/images/meat-protein/easy-peel-step-04.png" alt="Dispose liner in plastic bin" class="w-full h-full object-left object-contain"> </div>
                            <p class="font-sans text-[13px] font-medium text-ink mb-1">Dispose liner in plastic bin</p>
                            <p class="font-sans text-[12px] text-ink-50 leading-[1.5]">Thin plastic liner goes into the standard plastic stream</p>
                        </div>
                    </div> <!-- Video -->
                    <div class="rounded-card overflow-hidden bg-ink h-full"> <video src="/videos/CirklaRecycle.mp4" autoplay="" loop="" muted="" playsinline="" class="w-full h-full object-cover"></video> </div>
                </div>
            </div>
        </section>
        <section class="bg-white py-20 md:py-[120px]">
            <div class="max-w-site mx-auto px-6 md:px-12">
                <div class="bg-green-deep rounded-card p-8 md:p-10 flex flex-col md:flex-row items-start md:items-center justify-between gap-8 reveal">
                    <div class="flex-1">
                        <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-green-soft mb-3">The Economics</p>
                        <h3 class="font-serif font-normal text-[clamp(24px,3vw,32px)] leading-[1.15] text-paper mb-3">
                            In EPR states, fiber is <em class="italic text-butter font-light">cheaper</em> than plastic.
                        </h3>
                        <p class="font-sans text-[14px] text-paper/70 leading-[1.6] mb-4 max-w-lg">Extended Producer Responsibility fees are live in Oregon and Colorado. California, Maine, Maryland, and Minnesota follow. Plastic trays carry a fee roughly 3× higher than Cirkla's - and that gap widens as more states go live.</p> <a href="/epr" class="font-sans font-medium text-[13px] text-butter hover:text-paper no-underline transition-colors">Check out our EPR calculator →</a>
                    </div>
                    <div class="bg-paper/[0.06] rounded-[8px] p-7 text-center flex-shrink-0">
                        <p class="font-serif text-[52px] text-butter leading-none mb-2">3×</p>
                        <p class="font-sans text-[12px] text-paper/55 max-w-[120px] mx-auto leading-[1.5]">higher EPR fee for plastic vs. Cirkla</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-green py-20 md:py-[120px]">
            <div class="max-w-site mx-auto px-6 md:px-12 text-center reveal">
                <h2 class="font-serif font-normal text-[clamp(36px,4vw,52px)] leading-[1.05] tracking-[-1px] text-paper mb-5">
                    Ready to make the switch?
                </h2>
                <p class="font-sans text-[17px] text-paper/70 leading-[1.55] max-w-xl mx-auto mb-10">We'll send you trays, work with your QA team, and support you through shelf-life testing on your lines. No commitment. No pressure.</p>
                <div class="flex justify-center mb-5"> <a href="/contact" class="font-sans font-medium text-[15px] no-underline inline-flex items-center gap-2 transition-all duration-200 bg-cream text-green px-7 py-3.5 rounded-pill border border-ink-15 hover:bg-butter "> Request a Sample <svg width="14" height="14" viewbox="0 0 14 14" fill="none">
                            <path d="M2 7h10m0 0L7 2m5 5L7 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg> </a> </div>
                <p class="font-sans text-[14px] text-paper/50">Or talk to our team - we'll confirm your request within one business day.</p>
            </div>
        </section>
    </main>
</body>

</html>