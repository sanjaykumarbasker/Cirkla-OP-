<!DOCTYPE html>
<html lang="en">
@php
$pageTitle = 'QRCOPAR - Advanced Molded Fibre Packaging';
$metaDescription = 'QRCOPAR manufactures premium laminated and unlaminated molded fibre trays for food packaging applications.';
$pageScript = '/_astro/hoisted.CCIidRwJ.js';
$activePage = 'home';
$industries = [
    'Fresh Produce',
    'Fresh Meat',
    'Poultry',
    'Seafood',
    'Ready Meals',
    'Frozen Foods',
    'Pet Food',
    'Bakery',
    'Food Service',
    'Retail Packaging',
    'Manufacturing',
];
$manufacturingCapabilities = [
    'Pulp Preparation',
    'Precision Thermoforming',
    'High-Speed Trimming',
    'Advanced Lamination',
    'Quality Assurance',
    'Packaging & Logistics',
];
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
$products = [
    [
        'title' => 'Fresh Produce Trays',
        'copy' => 'Sustainable trays designed for fruits, vegetables, mushrooms, and fresh produce.',
        'image' => '/images/pdf-extracted/embedded/confectionery/mince-pie-six-cavity-tray.png',
        'href' => '/solutions/fresh-produce',
    ],
    [
        'title' => 'Meat & Poultry Trays',
        'copy' => 'Barrier-coated trays for fresh meat, poultry, seafood, and protein applications.',
        'image' => '/images/pdf-extracted/embedded/meat-tray-tds/meat-tray-tds-p01-img02-619x363.png',
        'href' => '/solutions/meat-trays',
    ],
    [
        'title' => 'Ready Meal Trays',
        'copy' => 'Ovenable and microwave-compatible solutions for chilled and frozen meals.',
        'image' => '/images/pdf-extracted/embedded/sg2c-6040/sg2c-6040-p01-img01-824x584.png',
        'href' => '/solutions/rte-trays',
    ],
    [
        'title' => 'Food Service Packaging',
        'copy' => 'Engineered fibre packaging for retail and food service.',
        'image' => '/images/pdf-extracted/embedded/pet-food-tray-1000ml-copar/pet-food-tray-1000ml-copar-p01-img01-636x586.png',
        'href' => '/solutions/confectionery-trays',
    ],
    [
        'title' => 'Custom Molded Fibre Packaging',
        'copy' => 'Tailored solutions developed for specific customer requirements.',
        'image' => '/images/pdf-extracted/embedded/confectionery/mince-pie-six-cavity-tray.png',
        'href' => '/solutions/custom',
    ],
];
$whyItems = [
    ['title' => 'Drop-in Replacement for Plastic', 'copy' => 'Designed to integrate with existing sealing and packaging equipment without major line modifications.'],
    ['title' => 'Commercially Validated', 'copy' => 'Proven through industrial production and commercial food packaging applications.'],
    ['title' => 'High-Performance Packaging', 'copy' => 'Engineered to deliver the strength, rigidity, and barrier performance demanded by today\'s food industry.'],
    ['title' => 'Sustainable by Design', 'copy' => 'Manufactured using renewable and recycled fibres to support a circular packaging economy.'],
    ['title' => 'Advanced Barrier Technologies', 'copy' => 'Multiple lamination options tailored to specific food applications.'],
    ['title' => 'Custom Engineered Solutions', 'copy' => 'From concept development to full-scale production.'],
];
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
                    A True Drop-in Replacement for Plastic.
                </div>
                <h1 class="font-serif font-normal text-[clamp(44px,5.5vw,72px)] leading-[1.02] tracking-[-2px] text-ink mb-6">
                    Advanced Molded Fibre Packaging.<br>
                    <em class="italic text-green font-light">Engineered for Performance.</em><br>
                    Designed for Sustainability.
                </h1>
                <p class="font-sans text-[19px] text-ink-70 leading-[1.55] max-w-2xl mb-10">
                    <!-- Premium laminated and unlaminated molded fibre trays for meat, poultry, seafood, fresh produce, ready meals, and food service applications. Designed to seamlessly integrate into existing packaging lines while delivering superior performance and a lower environmental impact. -->
                </p>
                <div class="flex flex-wrap gap-3">
                    <a href="#products" class="font-sans font-medium text-[15px] no-underline inline-flex items-center gap-2 transition-all duration-200 bg-green text-paper px-7 py-3.5 rounded-pill hover:bg-green-mid">
                        Explore Products
                        <svg width="14" height="14" viewbox="0 0 14 14" fill="none"><path d="M2 7h10m0 0L7 2m5 5L7 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </a>
                    <a href="/contact" class="font-sans font-medium text-[15px] no-underline inline-flex items-center gap-2 transition-all duration-200 bg-white text-green px-7 py-3.5 rounded-pill border border-ink-15 hover:bg-butter">
                        Request Samples
                    </a>
                </div>
            </div>
            <div class="flex items-center justify-center reveal copar-home-hero-media">
                <figure class="copar-home-hero-banner">
                    <img src="/images/home-hero-sustainable-packaging.png" alt="Sustainable molded fibre tray packaging collection">
                </figure>
            </div>
        </div>
    </section>

    <section id="products" class="bg-white py-20 md:py-[120px] border-t border-rule">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <header class="mb-14 reveal">
                <p class="font-mono text-[14px] tracking-[0.12em] uppercase font-medium text-green-mid mb-4">Products</p>
                <h2 class="font-serif font-normal text-[clamp(36px,4vw,48px)] leading-[1.1] tracking-[-0.5px] text-ink mb-5">
                    Advanced molded fibre packaging solutions.
                </h2>
                <p class="font-sans text-[19px] text-ink-70 leading-[1.55] max-w-3xl">
                    <!-- Engineered for performance. Designed for sustainability. QRCOPAR develops laminated, unlaminated, and custom molded fibre trays for demanding food packaging environments. -->
                </p>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 reveal">
                @foreach($products as $product)
                    <article class="bg-white border border-rule rounded-card overflow-hidden hover:border-green transition-colors duration-200">
                        <div class="h-64 bg-cream flex items-center justify-center p-6 overflow-hidden">
                            <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}" class="max-h-full max-w-full object-contain">
                        </div>
                        <div class="p-8">
                            <h3 class="font-serif text-[26px] font-medium leading-[1.2] text-ink mb-3">{{ $product['title'] }}</h3>
                            <p class="font-sans text-[15px] text-ink-70 leading-[1.5] mb-6">{{ $product['copy'] }}</p>
                            <a href="{{ $product['href'] }}" class="font-sans font-medium text-[15px] no-underline inline-flex items-center gap-2 transition-all duration-200 bg-cream text-green px-5 py-3 rounded-pill border border-ink-15 hover:bg-butter">Explore</a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-cream py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <header class="mb-14 reveal">
                <p class="font-mono text-[14px] tracking-[0.12em] uppercase font-medium text-green-mid mb-4">Industries We Serve</p>
                <h2 class="font-serif font-normal text-[clamp(36px,4vw,48px)] leading-[1.1] tracking-[-0.5px] text-ink mb-5">
                    Packaging solutions for every food category.
                </h2>
            </header>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 reveal">
                @foreach($industries as $industry)
                    <div class="bg-white border border-rule rounded-card p-6 hover:border-green transition-colors duration-200">
                        <p class="font-serif text-[22px] font-medium leading-[1.2] text-ink">{{ $industry }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-green py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <header class="mb-14 reveal">
                <p class="font-mono text-[14px] tracking-[0.12em] uppercase font-medium text-butter/60 mb-4">Why QRCOPAR</p>
                <h2 class="font-serif font-normal text-[clamp(36px,4vw,52px)] leading-[1.05] tracking-[-1px] text-cream mb-5">
                    Why leading brands choose <em class="italic text-butter font-light">QRCOPAR.</em>
                </h2>
                <p class="font-sans text-[17px] text-cream/70 leading-[1.6] max-w-3xl">
                </p>
            </header>
            <div class="grid md:grid-cols-3 gap-4 reveal">
                @foreach($whyItems as $index => $item)
                    <div class="bg-paper/[0.08] border border-cream/[0.08] rounded-card p-6">
                        <p class="font-mono text-[13px] text-butter mb-4">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</p>
                        <h3 class="font-serif text-[22px] text-cream mb-3">{{ $item['title'] }}</h3>
                        <p class="font-sans text-[14px] text-cream/70 leading-[1.5]">{{ $item['copy'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-paper py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12 text-center reveal">
            <h2 class="font-serif font-normal text-[clamp(40px,5vw,64px)] leading-[1.05] tracking-[-1.5px] text-ink mb-5">
                Request samples for your <em class="italic text-green font-light">next tray program.</em>
            </h2>
            <p class="font-sans text-[19px] text-ink-70 leading-[1.55] max-w-2xl mx-auto mb-10">
                Share your application, current plastic tray format, barrier requirements, and line conditions. QRCOPAR can help review the right molded fibre pathway.
            </p>
            <a href="/contact" class="font-sans font-medium text-[15px] no-underline inline-flex items-center gap-2 transition-all duration-200 bg-green text-paper px-7 py-3.5 rounded-pill hover:bg-green-mid">Request Samples</a>
        </div>
    </section>
</main>
@include('cirkla.includes.footer')
</body>
</html>
