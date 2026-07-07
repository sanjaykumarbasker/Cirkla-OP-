<!DOCTYPE html>
<html lang="en">
@php
$pageTitle = 'Certifications - Cirkla';
$metaDescription = 'Every food safety, manufacturing, and sustainability certification that matters to your QA team.';
$pageScript = '/_astro/hoisted.CCIidRwJ.js';
$activePage = '';
@endphp
@include('cirkla.includes.head')

<body> @include('cirkla.includes.nav') <main>
        <section class="pt-nav bg-green-deep">
            <div class="max-w-site mx-auto px-6 md:px-12 py-20 md:py-28">
                <p class="inline-flex px-4 py-1.5 bg-butter text-green-deep rounded-pill font-mono text-[13px] tracking-[0.08em] uppercase font-medium mb-8">Global Certifications</p>
                <h1 class="font-serif font-normal text-[clamp(44px,5vw,64px)] leading-[1.08] tracking-[-1.5px] text-paper max-w-3xl mb-6">Every certification that matters to <em class="italic font-light">your QA team.</em></h1>
                <p class="font-sans text-[19px] text-paper/70 leading-[1.6] max-w-2xl">Cirkla's trays are tested and certified across food safety, manufacturing quality, and sustainability - by the bodies your buyers and retailers already recognize.</p>
            </div>
        </section>
        <section class="bg-white py-20 md:py-[120px]">
            <div class="max-w-site mx-auto px-6 md:px-12 reveal">
                <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-green-mid mb-3">Food Safety</p>
                <h2 class="font-serif font-normal text-[clamp(32px,4vw,48px)] leading-[1.08] tracking-[-1px] text-ink mb-12">Certified for direct <em class="italic font-light">food contact.</em></h2>
                <div class="grid md:grid-cols-2 gap-5">
                    <div class="bg-white border border-rule rounded-card p-6 flex flex-col gap-3">
                        <div class="h-14 flex items-center"> <img src="/images/certifications/fds.png" alt="FDA" class="max-h-10 w-auto object-contain"> </div>
                        <div>
                            <p class="font-sans text-[14px] font-medium text-ink">FDA</p>
                            <p class="font-sans text-[11px] text-ink-50 mt-0.5">Food Contact Compliance</p>
                        </div>
                        <p class="font-sans text-[13px] text-ink-70 leading-[1.6]">Compliance with FDA food contact standards. Safe for direct food contact across all protein and produce applications.</p>
                    </div>
                    <div class="bg-white border border-rule rounded-card p-6 flex flex-col gap-3">
                        <div class="h-14 flex items-center"> <img src="/images/certifications/sgs.png" alt="SGS" class="max-h-10 w-auto object-contain"> </div>
                        <div>
                            <p class="font-sans text-[14px] font-medium text-ink">SGS</p>
                            <p class="font-sans text-[11px] text-ink-50 mt-0.5">International Quality Certification</p>
                        </div>
                        <p class="font-sans text-[13px] text-ink-70 leading-[1.6]">Products tested and certified to meet international quality, safety, and environmental standards.</p>
                    </div>
                    <div class="bg-white border border-rule rounded-card p-6 flex flex-col gap-3">
                        <div class="h-14 flex items-center"> <img src="/images/certifications/pfas.jpg" alt="PFAS-Free" class="max-h-10 w-auto object-contain"> </div>
                        <div>
                            <p class="font-sans text-[14px] font-medium text-ink">PFAS-Free</p>
                            <p class="font-sans text-[11px] text-ink-50 mt-0.5">No Per- and Polyfluoroalkyl Substances</p>
                        </div>
                        <p class="font-sans text-[13px] text-ink-70 leading-[1.6]">100% free from PFAS chemicals across the entire product range. Safe for food contact and the environment.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-cream py-20 md:py-[120px]">
            <div class="max-w-site mx-auto px-6 md:px-12 reveal">
                <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-green-mid mb-3">Manufacturing</p>
                <h2 class="font-serif font-normal text-[clamp(32px,4vw,48px)] leading-[1.08] tracking-[-1px] text-ink mb-12">Built to global <em class="italic font-light">manufacturing standards.</em></h2> <!-- Row 1: 3 certs -->
                <div class="grid md:grid-cols-3 gap-5">
                    <div class="bg-white border border-rule rounded-card p-6 flex flex-col gap-3">
                        <div class="h-14 flex items-center"> <img src="/images/certifications/brc.png" alt="BRC" class="max-h-10 w-auto object-contain"> </div>
                        <div>
                            <p class="font-sans text-[14px] font-medium text-ink">BRC</p>
                            <p class="font-sans text-[11px] text-ink-50 mt-0.5">Business &amp; Quality Management</p>
                        </div>
                        <p class="font-sans text-[13px] text-ink-70 leading-[1.6]">Business compliance and quality management systems, enhancing operational efficiency.</p>
                    </div>
                    <div class="bg-white border border-rule rounded-card p-6 flex flex-col gap-3">
                        <div class="h-14 flex items-center"> <img src="/images/certifications/bsci.png" alt="BSCI" class="max-h-10 w-auto object-contain"> </div>
                        <div>
                            <p class="font-sans text-[14px] font-medium text-ink">BSCI</p>
                            <p class="font-sans text-[11px] text-ink-50 mt-0.5">Ethical Manufacturing</p>
                        </div>
                        <p class="font-sans text-[13px] text-ink-70 leading-[1.6]">Compliance with international labor standards, promoting ethical manufacturing and fair working conditions.</p>
                    </div>
                    <div class="bg-white border border-rule rounded-card p-6 flex flex-col gap-3">
                        <div class="h-14 flex items-center"> <img src="/images/certifications/smeta.png" alt="SMETA" class="max-h-10 w-auto object-contain"> </div>
                        <div>
                            <p class="font-sans text-[14px] font-medium text-ink">SMETA</p>
                            <p class="font-sans text-[11px] text-ink-50 mt-0.5">Ethical Trade Audit</p>
                        </div>
                        <p class="font-sans text-[13px] text-ink-70 leading-[1.6]">Verifies ethical practices in labor, health and safety, the environment, and business ethics.</p>
                    </div>
                </div> <!-- Row 2: 2 certs centered -->
                <div class="grid md:grid-cols-2 gap-5 mt-5 max-w-2xl mx-auto">
                    <div class="bg-white border border-rule rounded-card p-6 flex flex-col gap-3">
                        <div class="h-14 flex items-center"> <img src="/images/certifications/iso14001.png" alt="ISO 14001" class="max-h-10 w-auto object-contain"> </div>
                        <div>
                            <p class="font-sans text-[14px] font-medium text-ink">ISO 14001</p>
                            <p class="font-sans text-[11px] text-ink-50 mt-0.5">Environmental Management</p>
                        </div>
                        <p class="font-sans text-[13px] text-ink-70 leading-[1.6]">Environmental management system certification - compliance with international standards for effective environmental management.</p>
                    </div>
                    <div class="bg-white border border-rule rounded-card p-6 flex flex-col gap-3">
                        <div class="h-14 flex items-center"> <img src="/images/certifications/iso45001.png" alt="ISO 45001" class="max-h-10 w-auto object-contain"> </div>
                        <div>
                            <p class="font-sans text-[14px] font-medium text-ink">ISO 45001</p>
                            <p class="font-sans text-[11px] text-ink-50 mt-0.5">Occupational Health &amp; Safety</p>
                        </div>
                        <p class="font-sans text-[13px] text-ink-70 leading-[1.6]">Demonstrates commitment to occupational health and safety, ensuring a safe and healthy work environment.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white py-20 md:py-[120px]">
            <div class="max-w-site mx-auto px-6 md:px-12 reveal">
                <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-green-mid mb-3">Sustainability</p>
                <h2 class="font-serif font-normal text-[clamp(32px,4vw,48px)] leading-[1.08] tracking-[-1px] text-ink mb-12">The certifications your <em class="italic font-light">customers ask about.</em></h2>
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
                    <div class="bg-white border border-rule rounded-card p-6 flex flex-col gap-3">
                        <div class="h-14 flex items-center"> <img src="/images/certifications/how2recycle.png" alt="How2Recycle" class="max-h-10 w-auto object-contain"> </div>
                        <div>
                            <p class="font-sans text-[14px] font-medium text-ink">How2Recycle</p>
                            <p class="font-sans text-[11px] text-ink-50 mt-0.5">Consumer Recycling Guidance</p>
                        </div>
                        <p class="font-sans text-[13px] text-ink-70 leading-[1.6]">Clear, standardized recycling instructions on packaging - helping consumers make environmentally responsible choices.</p>
                    </div>
                    <div class="bg-white border border-rule rounded-card p-6 flex flex-col gap-3">
                        <div class="h-14 flex items-center"> <img src="/images/certifications/tuv.png" alt="TÜV Austria OK Compost Home" class="max-h-10 w-auto object-contain"> </div>
                        <div>
                            <p class="font-sans text-[14px] font-medium text-ink">TÜV Austria OK Compost Home</p>
                            <p class="font-sans text-[11px] text-ink-50 mt-0.5">Home Composting</p>
                        </div>
                        <p class="font-sans text-[13px] text-ink-70 leading-[1.6]">Certified to break down in home composting, promoting environmentally friendly disposal.</p>
                    </div>
                    <div class="bg-white border border-rule rounded-card p-6 flex flex-col gap-3">
                        <div class="h-14 flex items-center"> <img src="/images/certifications/cepi.png" alt="CEPI" class="max-h-10 w-auto object-contain"> </div>
                        <div>
                            <p class="font-sans text-[14px] font-medium text-ink">CEPI</p>
                            <p class="font-sans text-[11px] text-ink-50 mt-0.5">European Paper Standards</p>
                        </div>
                        <p class="font-sans text-[13px] text-ink-70 leading-[1.6]">Compliance with the European paper and board industry&#39;s environmental and sustainability standards.</p>
                    </div>
                    <div class="bg-white border border-rule rounded-card p-6 flex flex-col gap-3">
                        <div class="h-14 flex items-center"> <img src="/images/certifications/bpi.png" alt="BPI Compostable" class="max-h-10 w-auto object-contain"> </div>
                        <div>
                            <p class="font-sans text-[14px] font-medium text-ink">BPI Compostable</p>
                            <p class="font-sans text-[11px] text-ink-50 mt-0.5">Commercial Composting</p>
                        </div>
                        <p class="font-sans text-[13px] text-ink-70 leading-[1.6]">Tested to break down in commercial composting facilities, meeting strict environmental composting standards.</p>
                    </div>
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