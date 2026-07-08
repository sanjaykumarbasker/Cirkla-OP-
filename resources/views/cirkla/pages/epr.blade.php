<!DOCTYPE html>
<html lang="en">
@php
$pageTitle = 'EPR Savings Calculator - QRCOPAR';
$metaDescription = 'Estimate annual EPR fee savings when switching from EPS, PET, or PP plastic trays to QRCOPAR molded fibre tray packaging.';
$pageScript = '/_astro/hoisted.CCIidRwJ.js';
$activePage = 'epr';
@endphp
@include('cirkla.includes.head')

<body>
@include('cirkla.includes.nav')
<main class="copar-standalone copar-standalone--epr">
    <section class="pt-nav bg-green-deep copar-standalone-hero">
        <div class="max-w-site mx-auto px-6 md:px-12 py-20 md:py-28 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <p class="inline-flex px-4 py-1.5 bg-butter text-green-deep rounded-pill font-mono text-[13px] tracking-[0.08em] uppercase font-medium mb-8">Extended Producer Responsibility</p>
                <h1 class="font-serif font-normal text-[clamp(44px,5vw,64px)] leading-[1.08] tracking-[-1.5px] text-paper max-w-3xl mb-6">
                    See how much you save <em class="italic font-light">switching to fiber trays.</em>
                </h1>
                <p class="font-sans text-[19px] text-paper/70 leading-[1.6] max-w-2xl">
                    EPR fees are calculated by material weight. Fiber trays can carry lower fees than EPS, PET, or PP. Enter your tray details to compare the difference.
                </p>
            </div>
            <div class="hidden md:flex items-center justify-center">
                <img src="/images/pdf-extracted/embedded/pet-food-tray-500ml-copar/pet-food-tray-500ml-copar-p01-img01-636x496.png" alt="QRCOPAR molded fibre tray" class="max-w-full max-h-[480px] object-contain drop-shadow">
            </div>
        </div>
    </section>

    <section class="bg-white py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <div class="bg-cream rounded-card p-8 md:p-10 mb-10 reveal">
                <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-green-mid mb-6">Your Packaging Inputs</p>
                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <label class="block font-sans text-[13px] font-medium text-ink mb-2" for="refMaterial">Current Tray Material</label>
                        <select id="refMaterial" class="w-full bg-white border border-rule rounded-[8px] px-4 py-3 font-sans text-[15px] text-ink focus:outline-none focus:ring-2 focus:ring-green/30">
                            <option value="EPS">EPS (Expanded Polystyrene)</option>
                            <option value="PET" selected>PET (Clear Plastic)</option>
                            <option value="PP">PP (Polypropylene)</option>
                        </select>
                        <p class="font-sans text-[12px] text-ink-50 mt-1.5">The plastic tray you currently use.</p>
                    </div>
                    <div>
                        <label class="block font-sans text-[13px] font-medium text-ink mb-2" for="trayWeight">Tray Weight (grams)</label>
                        <input id="trayWeight" type="number" value="30" min="1" max="500" step="0.1" class="w-full bg-white border border-rule rounded-[8px] px-4 py-3 font-sans text-[15px] text-ink focus:outline-none focus:ring-2 focus:ring-green/30">
                        <p class="font-sans text-[12px] text-ink-50 mt-1.5">Weight of your current plastic tray.</p>
                    </div>
                    <div>
                        <label class="block font-sans text-[13px] font-medium text-ink mb-2" for="numTrays">Number of Trays / Year</label>
                        <input id="numTrays" type="text" inputmode="numeric" value="1,000,000" class="w-full bg-white border border-rule rounded-[8px] px-4 py-3 font-sans text-[15px] text-ink focus:outline-none focus:ring-2 focus:ring-green/30">
                        <p class="font-sans text-[12px] text-ink-50 mt-1.5">Annual tray volume.</p>
                    </div>
                </div>
            </div>

            <div class="reveal" id="resultsBlock">
                <header class="mb-8">
                    <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-green-mid mb-3">Annual EPR Fee</p>
                    <h2 class="font-serif font-normal text-[clamp(32px,4vw,48px)] leading-[1.1] tracking-[-0.5px] text-ink">Compare your current tray against <em class="italic text-green font-light">QRCOPAR molded fibre.</em></h2>
                </header>

                <div class="overflow-x-auto mb-4">
                    <table class="w-full border-collapse font-sans text-[14px]">
                        <thead>
                        <tr class="border-b border-rule">
                            <th class="text-left py-3 pl-4 pr-6 font-medium text-ink-50 font-mono text-[13px] tracking-[0.08em] uppercase w-40">Material</th>
                            <th class="text-right py-3 px-4 font-medium text-ink-50 font-mono text-[13px] tracking-[0.08em] uppercase w-36">Oregon</th>
                            <th class="text-right py-3 px-4 font-medium text-ink-50 font-mono text-[13px] tracking-[0.08em] uppercase w-36">Colorado</th>
                            <th class="text-right py-3 px-4 font-medium text-ink-50 font-mono text-[13px] tracking-[0.08em] uppercase w-36">California <span class="normal-case">(Low)</span></th>
                            <th class="text-right py-3 px-4 font-medium text-ink-50 font-mono text-[13px] tracking-[0.08em] uppercase w-36">California <span class="normal-case">(High)</span></th>
                        </tr>
                        </thead>
                        <tbody id="totalFeeBody"></tbody>
                    </table>
                </div>
                <p class="font-sans text-[12px] text-ink-50 mb-10">Total annual EPR fees in dollars. California fees include base rate, reuse investment fee, and PPMF weight/component fees.</p>

                <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-green-mid mb-4">Fee Per Tray (&cent;)</p>
                <div class="overflow-x-auto mb-4">
                    <table class="w-full border-collapse font-sans text-[14px]">
                        <thead>
                        <tr class="border-b border-rule">
                            <th class="text-left py-3 pl-4 pr-6 font-medium text-ink-50 font-mono text-[13px] tracking-[0.08em] uppercase w-40">Material</th>
                            <th class="text-right py-3 px-4 font-medium text-ink-50 font-mono text-[13px] tracking-[0.08em] uppercase w-36">Oregon</th>
                            <th class="text-right py-3 px-4 font-medium text-ink-50 font-mono text-[13px] tracking-[0.08em] uppercase w-36">Colorado</th>
                            <th class="text-right py-3 px-4 font-medium text-ink-50 font-mono text-[13px] tracking-[0.08em] uppercase w-36">California <span class="normal-case">(Low)</span></th>
                            <th class="text-right py-3 px-4 font-medium text-ink-50 font-mono text-[13px] tracking-[0.08em] uppercase w-36">California <span class="normal-case">(High)</span></th>
                        </tr>
                        </thead>
                        <tbody id="perTrayFeeBody"></tbody>
                    </table>
                </div>
                <p class="font-sans text-[12px] text-ink-50">Fee per tray in cents.</p>

                <div class="mt-10 bg-green rounded-card p-8 md:p-10" id="savingsCallout">
                    <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-butter mb-3">Your Estimated Savings with QRCOPAR</p>
                    <div class="grid md:grid-cols-3 gap-6">
                        <div>
                            <p class="font-sans text-[13px] text-paper/60 mb-1">vs. Oregon avg</p>
                            <p class="font-serif text-[36px] font-normal text-paper leading-none" id="savingsOR">-</p>
                        </div>
                        <div>
                            <p class="font-sans text-[13px] text-paper/60 mb-1">vs. Colorado avg</p>
                            <p class="font-serif text-[36px] font-normal text-paper leading-none" id="savingsCO">-</p>
                        </div>
                        <div>
                            <p class="font-sans text-[13px] text-paper/60 mb-1">vs. California avg</p>
                            <p class="font-serif text-[36px] font-normal text-paper leading-none" id="savingsCA">-</p>
                        </div>
                    </div>
                    <p class="font-sans text-[13px] text-paper/50 mt-6">Savings = your current material fee minus QRCOPAR molded fibre fee. California savings are shown as the midpoint of the low/high range.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-cream py-12">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <p class="font-sans text-[13px] text-ink-50 leading-[1.7] max-w-3xl">
                <strong class="text-ink font-medium">Disclaimer:</strong> Fee estimates use the same 2025-2027 EPR rate model published for Oregon, Colorado, and California. Actual fees depend on producer registration, material classification, and program administrator determinations. This calculator is for illustrative purposes only and does not constitute legal or regulatory advice.
            </p>
        </div>
    </section>
</main>
@include('cirkla.includes.footer')
<script type="module" src="/js/copar-epr-calculator.js"></script>
</body>
</html>
