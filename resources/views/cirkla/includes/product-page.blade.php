@php
    $pageScript = $pageScript ?? '/_astro/hoisted.CCIidRwJ.js';
    $hero = $hero ?? [];
    $benefits = $benefits ?? [];
    $applications = $applications ?? [];
    $documents = $documents ?? [];
    $featureTitle = $featureTitle ?? 'Why it matters';
    $featureHeading = $featureHeading ?? 'Built for performance, <em class="italic text-green font-light">not compromise.</em>';
    $featureCopy = $featureCopy ?? null;
    $video = $video ?? null;
@endphp
<!DOCTYPE html>
<html lang="en">
@include('cirkla.includes.head')

<body>
@include('cirkla.includes.nav')
<main>
    <section class="pt-nav bg-green-deep">
        <div class="max-w-site mx-auto px-6 md:px-12 py-20 md:py-28 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <p class="inline-flex px-4 py-1.5 bg-butter text-green-deep rounded-pill font-mono text-[13px] tracking-[0.08em] uppercase font-medium mb-8">{{ $hero['eyebrow'] ?? 'COPAR solution' }}</p>
                <h1 class="font-serif font-normal text-[clamp(44px,5vw,64px)] leading-[1.08] tracking-[-1.5px] text-paper max-w-3xl mb-6">{!! $hero['title'] ?? 'Sustainable packaging, <em class="italic font-light">customised.</em>' !!}</h1>
                <p class="font-sans text-[19px] text-paper/70 leading-[1.6] max-w-2xl mb-10">{{ $hero['copy'] ?? 'Made from circular materials and designed around the performance needs of food and retail packaging.' }}</p>
                <div class="flex flex-wrap gap-3">
                    <a href="/contact" class="font-sans font-medium text-[15px] no-underline inline-flex items-center gap-2 transition-all duration-200 bg-cream text-green px-7 py-3.5 rounded-pill border border-ink-15 hover:bg-butter">
                        Customise packaging
                        <svg width="14" height="14" viewbox="0 0 14 14" fill="none"><path d="M2 7h10m0 0L7 2m5 5L7 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </a>
                    @if(!empty($documents))
                        <a href="#downloads" class="font-sans font-medium text-[15px] no-underline inline-flex items-center gap-2 transition-all duration-200 bg-transparent text-cream px-7 py-3.5 rounded-pill border border-cream/[0.08] hover:text-butter">View resources</a>
                    @endif
                </div>
            </div>
            <div class="hidden md:flex items-center justify-center">
                <img src="{{ $hero['image'] ?? '/images/copar/tray-hero.png' }}" alt="{{ $hero['imageAlt'] ?? 'COPAR packaging' }}" class="max-w-full max-h-[480px] object-contain">
            </div>
        </div>
    </section>

    <section class="bg-white py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <div class="grid lg:grid-cols-[280px_1fr] gap-16 reveal">
                <div>
                    <p class="font-mono text-[14px] tracking-[0.12em] uppercase font-medium text-green-mid mb-4">{{ $featureTitle }}</p>
                    <h2 class="font-serif font-normal text-[clamp(32px,3.5vw,44px)] leading-[1.1] tracking-[-0.5px] text-ink">{!! $featureHeading !!}</h2>
                    @if($featureCopy)
                        <p class="font-sans text-[16px] text-ink-70 leading-[1.6] mt-5">{{ $featureCopy }}</p>
                    @endif
                </div>
                <div class="grid sm:grid-cols-2 gap-px bg-rule rounded-card overflow-hidden border border-rule">
                    @foreach($benefits as $benefit)
                        <div class="bg-white p-[22px_24px] flex gap-3 items-start">
                            <span class="w-2.5 h-2.5 rounded-full bg-green-mid flex-shrink-0 mt-2"></span>
                            <p class="font-sans text-[14px] text-ink-70 leading-[1.6]">{{ $benefit }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    @if(!empty($applications))
        <section class="bg-cream py-20 md:py-[120px]">
            <div class="max-w-site mx-auto px-6 md:px-12">
                <header class="mb-14 reveal">
                    <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-green-mid mb-4">Applications</p>
                    <h2 class="font-serif font-normal text-[clamp(32px,4vw,48px)] leading-[1.1] tracking-[-0.5px] text-ink">Formats for <em class="italic text-green font-light">real workflows.</em></h2>
                </header>
                <div class="grid md:grid-cols-3 gap-5 reveal">
                    @foreach($applications as $application)
                        <article class="bg-white border border-rule rounded-card p-7 hover:border-green transition-colors duration-200">
                            <p class="font-mono text-[10px] tracking-[0.12em] uppercase text-green-mid mb-4">{{ $application['label'] ?? 'Application' }}</p>
                            <h3 class="font-serif text-[22px] font-medium leading-[1.2] text-ink mb-3">{{ $application['title'] }}</h3>
                            <p class="font-sans text-[14px] text-ink-70 leading-[1.6]">{{ $application['copy'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if($video)
        <section class="bg-white py-20 md:py-[120px]">
            <div class="max-w-site mx-auto px-6 md:px-12">
                <div class="grid md:grid-cols-2 gap-10 items-center reveal">
                    <div>
                        <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-green-mid mb-4">Product Video</p>
                        <h2 class="font-serif font-normal text-[clamp(32px,4vw,48px)] leading-[1.1] tracking-[-0.5px] text-ink mb-5">See the format <em class="italic text-green font-light">in motion.</em></h2>
                        <p class="font-sans text-[16px] text-ink-70 leading-[1.6]">Use the supplied product video for reviews with buyers, QA teams, and production leads.</p>
                    </div>
                    <div class="rounded-card overflow-hidden bg-ink border border-rule">
                        <video src="{{ $video }}" controls playsinline preload="metadata" class="w-full h-auto"></video>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(!empty($documents))
        <section class="bg-paper py-20 md:py-[120px]" id="downloads">
            <div class="max-w-site mx-auto px-6 md:px-12">
                <header class="mb-12 reveal">
                    <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-green-mid mb-4">Technical Resources</p>
                    <h2 class="font-serif font-normal text-[clamp(32px,4vw,48px)] leading-[1.1] tracking-[-0.5px] text-ink">Product files ready for <em class="italic text-green font-light">client review.</em></h2>
                </header>
                <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4 reveal">
                    @foreach($documents as $document)
                        <a href="{{ $document['href'] }}" target="_blank" rel="noopener" class="bg-white border border-rule rounded-card p-5 no-underline hover:border-green hover:bg-cream transition-colors duration-200">
                            <p class="font-serif text-[18px] text-ink leading-[1.3] mb-4">{{ $document['title'] }}</p>
                            <span class="font-mono text-[10px] tracking-[0.12em] uppercase text-green-mid">{{ $document['label'] ?? 'Open PDF' }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section class="bg-green py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12 text-center reveal">
            <h2 class="font-serif font-normal text-[clamp(40px,5vw,64px)] leading-[1.05] tracking-[-1.5px] text-cream mb-5">Let's make your packaging <em class="italic text-butter font-light">work for you.</em></h2>
            <p class="font-sans text-[19px] text-cream/70 leading-[1.55] max-w-xl mx-auto mb-10">Tell us your sector, product, and performance requirements. COPAR can help move from assessment to prototype and production.</p>
            <a href="/contact" class="font-sans font-medium text-[15px] bg-butter text-green px-7 py-3.5 rounded-pill no-underline inline-flex items-center gap-2 hover:bg-cream transition-colors duration-200">Start a project</a>
        </div>
    </section>
</main>
@include('cirkla.includes.footer')
</body>
</html>
