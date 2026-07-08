<!DOCTYPE html>
<html lang="en">
@php
$pageTitle = 'Technology - QRCOPAR';
$metaDescription = 'QRCOPAR technology combines sustainable fibre materials, barrier lamination, precision thermoforming, and quality-controlled molded fibre packaging production.';
$pageScript = '/_astro/hoisted.CCIidRwJ.js';
$activePage = 'technology';
$primaryFibres = ['Bagasse', 'Bamboo', 'Hardwood', 'Softwood'];
$secondaryFibres = ['Premium recycled paper fibres'];
$barriers = [
    ['title' => 'PE', 'copy' => 'Reliable moisture barrier for fresh food packaging.'],
    ['title' => 'EVOH', 'copy' => 'Excellent oxygen barrier for extended shelf life.'],
    ['title' => 'PP', 'copy' => 'High-performance barrier with excellent durability.'],
    ['title' => 'CPET', 'copy' => 'Designed for ovenable and ready meal applications requiring high heat resistance.'],
];
$capabilities = [
    'Pulp Preparation',
    'Precision Thermoforming',
    'High-Speed Trimming',
    'Advanced Lamination',
    'Quality Assurance',
    'Packaging & Logistics',
];
$manufacturingCapabilities = $capabilities;
$rdServices = [
    'Packaging Design',
    '3D Product Development',
    'Mold Design',
    'Rapid Prototyping',
    'Industrial Trials',
    'Product Validation',
    'Commercial Scale Manufacturing',
];
$sustainabilityFocus = [
    'Renewable Raw Materials',
    'Responsible Fibre Sourcing',
    'Reduced Plastic Dependency',
    'Resource-Efficient Manufacturing',
    'Recyclable Packaging Solutions',
    'Continuous Product Innovation',
];
$qualityFocus = [
    'Dimensional Accuracy',
    'Weight Consistency',
    'Barrier Performance',
    'Seal Integrity',
    'Mechanical Strength',
    'Product Appearance',
    'Food Contact Compliance',
];
$taglines = [
    'Where Fibre Meets Innovation.',
    'Building the Future of Food Packaging.',
    'Sustainable Packaging Without Compromise.',
    'Natural Fibres. Engineered Performance.',
    'From Renewable Resources to Global Packaging Solutions.',
    'Precision Engineered. Sustainably Manufactured.',
    'Innovation Molded Into Every Tray.',
    'The Future of Food Packaging Starts Here.',
];
@endphp
@include('cirkla.includes.head')

<body>
@include('cirkla.includes.nav')
<main class="copar-standalone copar-standalone--process">
    <section class="pt-nav bg-green-deep copar-standalone-hero">
        <div class="max-w-site mx-auto px-6 md:px-12 py-20 md:py-28 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <p class="inline-flex px-4 py-1.5 bg-butter text-green-deep rounded-pill font-mono text-[13px] tracking-[0.08em] uppercase font-medium mb-8">Technology</p>
                <h1 class="font-serif font-normal text-[clamp(44px,5vw,64px)] leading-[1.08] tracking-[-1.5px] text-paper max-w-3xl mb-6">
                    Where fibre meets <em class="italic text-butter font-light">innovation.</em>
                </h1>
                <p class="font-sans text-[19px] text-paper/70 leading-[1.6] max-w-2xl">
                    QRCOPAR combines sustainable fibre materials, barrier technologies, precision thermoforming, lamination, and automated finishing to build molded fibre packaging without performance compromise.
                </p>
            </div>
            <div class="hidden md:flex items-center justify-center">
                <img src="/images/pdf-extracted/embedded/sg-2c-7030/sg-2c-7030-p01-img01-824x584.png" alt="QRCOPAR molded fibre technology tray" class="max-w-full max-h-[480px] object-contain">
            </div>
        </div>
    </section>

    <section class="bg-paper py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <div class="grid md:grid-cols-2 gap-12 items-start reveal">
                <header>
                    <p class="font-mono text-[13px] tracking-[0.12em] uppercase font-medium text-green-mid mb-4">Materials</p>
                    <h2 class="font-serif font-normal text-[clamp(36px,4vw,48px)] leading-[1.1] tracking-[-0.5px] text-ink mb-5">
                        Sustainable fibre solutions.
                    </h2>
                    <p class="font-sans text-[17px] text-ink-70 leading-[1.6]">
                        Carefully selected fibre blends ensure optimal strength, consistency, and sustainability.
                    </p>
                </header>
                <div class="grid md:grid-cols-2 gap-5">
                    <article class="bg-white border border-rule rounded-card p-8">
                        <h3 class="font-serif text-[28px] text-ink leading-[1.2] mb-6">Primary Fibres</h3>
                        <ul class="font-sans text-[16px] text-ink-70 leading-[1.9]">
                            @foreach($primaryFibres as $fibre)
                                <li>{{ $fibre }}</li>
                            @endforeach
                        </ul>
                    </article>
                    <article class="bg-white border border-rule rounded-card p-8">
                        <h3 class="font-serif text-[28px] text-ink leading-[1.2] mb-6">Secondary Fibres</h3>
                        <ul class="font-sans text-[16px] text-ink-70 leading-[1.9]">
                            @foreach($secondaryFibres as $fibre)
                                <li>{{ $fibre }}</li>
                            @endforeach
                        </ul>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-green py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <header class="mb-14 reveal">
                <p class="font-mono text-[13px] tracking-[0.12em] uppercase font-medium text-butter/60 mb-4">Barrier Technologies</p>
                <h2 class="font-serif font-normal text-[clamp(36px,4vw,52px)] leading-[1.05] tracking-[-1px] text-cream mb-5">
                    Lamination solutions for <em class="italic text-butter font-light">real food packaging.</em>
                </h2>
                <p class="font-sans text-[17px] text-cream/70 leading-[1.6] max-w-2xl">
                    Multiple barrier pathways allow molded fibre trays to meet moisture, oxygen, durability, and heat-resistance requirements.
                </p>
            </header>
            <div class="grid md:grid-cols-2 gap-5 reveal">
                @foreach($barriers as $barrier)
                    <article class="bg-paper/[0.08] border border-cream/[0.08] rounded-card p-8">
                        <h3 class="font-serif text-[32px] text-cream leading-[1.1] mb-5">{{ $barrier['title'] }}</h3>
                        <p class="font-sans text-[17px] text-cream/70 leading-[1.6]">{{ $barrier['copy'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-cream py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <div class="grid md:grid-cols-2 gap-12 items-start">
                <header class="reveal">
                    <p class="font-mono text-[13px] tracking-[0.12em] uppercase font-medium text-green-mid mb-4">Manufacturing</p>
                    <h2 class="font-serif font-normal text-[clamp(36px,4vw,48px)] leading-[1.1] tracking-[-0.5px] text-ink mb-5">
                        Advanced manufacturing excellence.
                    </h2>
                    <p class="font-sans text-[17px] text-ink-70 leading-[1.6]">
                        Advanced thermoforming, precision tooling, lamination, and automated finishing processes produce consistent, high-quality molded fibre packaging.
                    </p>
                </header>
                <div class="grid sm:grid-cols-2 gap-4 reveal">
                    @foreach($capabilities as $capability)
                        <div class="bg-white border border-rule rounded-card p-6">
                            <p class="font-mono text-[11px] tracking-[0.12em] uppercase text-green-mid mb-3">Capability</p>
                            <h3 class="font-serif text-[24px] text-ink leading-[1.2]">{{ $capability }}</h3>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <div class="grid md:grid-cols-2 gap-5 reveal">
                <article class="bg-white border border-rule rounded-card p-8">
                    <p class="font-mono text-[13px] tracking-[0.12em] uppercase font-medium text-green-mid mb-4">Research & Development</p>
                    <h2 class="font-serif font-normal text-[32px] leading-[1.1] text-ink mb-4">Innovation through engineering.</h2>
                    <p class="font-sans text-[15px] text-ink-70 leading-[1.6] mb-6">Our in-house engineering team develops packaging solutions that balance sustainability, functionality, manufacturability, and commercial performance.</p>
                    <ul class="font-sans text-[14px] text-ink-70 leading-[1.8]">
                        @foreach($rdServices as $service)
                            <li>{{ $service }}</li>
                        @endforeach
                    </ul>
                </article>
                <article class="bg-white border border-rule rounded-card p-8">
                    <p class="font-mono text-[13px] tracking-[0.12em] uppercase font-medium text-green-mid mb-4">Quality</p>
                    <h2 class="font-serif font-normal text-[32px] leading-[1.1] text-ink mb-4">Quality you can trust.</h2>
                    <p class="font-sans text-[15px] text-ink-70 leading-[1.6] mb-6">Every product is manufactured under stringent quality controls to ensure consistent performance and reliability.</p>
                    <ul class="font-sans text-[14px] text-ink-70 leading-[1.8]">
                        @foreach($qualityFocus as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <section class="bg-paper py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <div class="grid md:grid-cols-2 gap-12 items-start">
                <header class="reveal">
                    <p class="font-mono text-[14px] tracking-[0.12em] uppercase font-medium text-green-mid mb-4">Manufacturing</p>
                    <h2 class="font-serif font-normal text-[clamp(36px,4vw,48px)] leading-[1.1] tracking-[-0.5px] text-ink mb-5">
                        Advanced manufacturing excellence.
                    </h2>
                    <p class="font-sans text-[17px] text-ink-70 leading-[1.6]">
                        QRCOPAR combines advanced thermoforming, precision tooling, lamination, and automated finishing processes to produce consistent, high-quality molded fibre packaging.
                    </p>
                </header>
                <div class="grid sm:grid-cols-2 gap-4 reveal">
                    @foreach($manufacturingCapabilities as $capability)
                        <div class="bg-white border border-rule rounded-card p-6 hover:border-green transition-colors duration-200">
                            <p class="font-mono text-[11px] tracking-[0.12em] uppercase text-green-mid mb-3">Capability</p>
                            <h3 class="font-serif text-[24px] text-ink leading-[1.2]">{{ $capability }}</h3>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <div class="grid md:grid-cols-3 gap-5 reveal">
                <article class="bg-white border border-rule rounded-card p-8 hover:border-green transition-colors duration-200">
                    <p class="font-mono text-[13px] tracking-[0.12em] uppercase text-green-mid mb-4">Research & Development</p>
                    <h2 class="font-serif font-normal text-[32px] leading-[1.1] text-ink mb-4">Innovation through engineering.</h2>
                    <p class="font-sans text-[15px] text-ink-70 leading-[1.6] mb-6">Our in-house engineering team develops packaging solutions that balance sustainability, functionality, manufacturability, and commercial performance.</p>
                    <ul class="font-sans text-[14px] text-ink-70 leading-[1.8]">
                        @foreach($rdServices as $service)
                            <li>{{ $service }}</li>
                        @endforeach
                    </ul>
                </article>
                <article class="bg-white border border-rule rounded-card p-8 hover:border-green transition-colors duration-200">
                    <p class="font-mono text-[13px] tracking-[0.12em] uppercase text-green-mid mb-4">Sustainability</p>
                    <h2 class="font-serif font-normal text-[32px] leading-[1.1] text-ink mb-4">Building a circular future.</h2>
                    <p class="font-sans text-[15px] text-ink-70 leading-[1.6] mb-6">At QRCOPAR, sustainability extends beyond replacing plastic. We develop fibre-based packaging solutions that reduce environmental impact while maintaining food packaging performance.</p>
                    <ul class="font-sans text-[14px] text-ink-70 leading-[1.8]">
                        @foreach($sustainabilityFocus as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </article>
                <article class="bg-white border border-rule rounded-card p-8 hover:border-green transition-colors duration-200">
                    <p class="font-mono text-[13px] tracking-[0.12em] uppercase text-green-mid mb-4">Quality</p>
                    <h2 class="font-serif font-normal text-[32px] leading-[1.1] text-ink mb-4">Quality you can trust.</h2>
                    <p class="font-sans text-[15px] text-ink-70 leading-[1.6] mb-6">Every product is manufactured under stringent quality controls to ensure consistent performance and reliability.</p>
                    <ul class="font-sans text-[14px] text-ink-70 leading-[1.8]">
                        @foreach($qualityFocus as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <section class="bg-cream py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12 text-center reveal">
            <p class="font-mono text-[14px] tracking-[0.12em] uppercase font-medium text-green-mid mb-4">QRCOPAR taglines</p>
            <h2 class="font-serif font-normal text-[clamp(36px,4vw,52px)] leading-[1.05] tracking-[-1px] text-ink mb-10">
                Advanced molded fibre packaging solutions.
            </h2>
            <div class="flex flex-wrap justify-center gap-3">
                @foreach($taglines as $tagline)
                    <span class="bg-white border border-rule rounded-pill px-5 py-3 font-sans text-[14px] font-medium text-ink-70">{{ $tagline }}</span>
                @endforeach
            </div>
        </div>
    </section>

</main>
@include('cirkla.includes.footer')
</body>
</html>
