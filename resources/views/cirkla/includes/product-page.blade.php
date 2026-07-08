@php
    $pageScript = $pageScript ?? '/_astro/hoisted.CCIidRwJ.js';
    $hero = $hero ?? [];
    $benefits = $benefits ?? [];
    $applications = $applications ?? [];
    $productDetails = $productDetails ?? [];
    $gallery = $gallery ?? [];
    $layoutVariant = $layoutVariant ?? 'laminated';
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
<main class="copar-product-page copar-product-page--{{ $layoutVariant }}">
    <section class="copar-solution-hero pt-nav">
        <div class="max-w-site mx-auto px-6 md:px-12 py-20 md:py-28 copar-solution-hero__grid">
            <div class="copar-solution-hero__copy">
                <p class="copar-kicker">{{ $hero['eyebrow'] ?? 'QRCOPAR solution' }}</p>
                <h1 class="copar-solution-hero__title">{!! $hero['title'] ?? 'Advanced trays, <em>engineered.</em>' !!}</h1>
                <p class="copar-solution-hero__text">{{ $hero['copy'] ?? 'Made from renewable and recycled fibres, engineered around the performance needs of food packaging programs.' }}</p>
                @if(!empty($hero['pills']))
                    <div class="copar-solution-hero__pills">
                        @foreach($hero['pills'] as $pill)
                            <span>{{ $pill }}</span>
                        @endforeach
                    </div>
                @endif
                <a href="/contact" class="copar-primary-link">
                    Request Samples
                    <svg width="14" height="14" viewbox="0 0 14 14" fill="none"><path d="M2 7h10m0 0L7 2m5 5L7 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                </a>
            </div>
            <div class="copar-solution-hero__media">
                <img src="{{ $hero['image'] ?? '/images/pdf-extracted/embedded/sg1c/sg1c-p01-img01-824x584.png' }}" alt="{{ $hero['imageAlt'] ?? 'QRCOPAR tray' }}" class="copar-product-hero-image">
            </div>
        </div>
    </section>

    <section class="copar-benefits-section py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <div class="copar-benefits-layout reveal">
                <div class="copar-section-intro">
                    <p class="copar-section-label">{{ $featureTitle }}</p>
                    <h2>{!! $featureHeading !!}</h2>
                    @if($featureCopy)
                        <p>{{ $featureCopy }}</p>
                    @endif
                </div>
                <div class="copar-benefits-grid">
                    @foreach($benefits as $benefit)
                        <div class="copar-benefit-item">
                            <span></span>
                            <p>{{ $benefit }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    @if(!empty($applications))
        <section class="copar-applications-section py-20 md:py-[120px]">
            <div class="max-w-site mx-auto px-6 md:px-12">
                <header class="copar-section-heading reveal">
                    <p class="copar-section-label">Applications</p>
                    <h2>Formats for <em>real workflows.</em></h2>
                </header>
                <div class="copar-applications-grid reveal">
                    @foreach($applications as $application)
                        <article class="copar-application-card">
                            <p>{{ $application['label'] ?? 'Application' }}</p>
                            <h3>{{ $application['title'] }}</h3>
                            <span>{{ $application['copy'] }}</span>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if(!empty($productDetails))
        <section class="copar-details-section py-20 md:py-[120px]">
            <div class="max-w-site mx-auto px-6 md:px-12">
                <header class="copar-section-heading reveal">
                    <p class="copar-section-label">Product Details</p>
                    <h2>Product formats and <em>features.</em></h2>
                </header>
                <div class="copar-detail-list reveal">
                    @foreach($productDetails as $detail)
                        <article class="copar-product-showcase">
                            <div class="copar-product-showcase__media">
                                <img src="{{ $detail['image'] ?? '/images/pdf-extracted/embedded/copar-product-list/copar-product-list-p01-img01-871x590.png' }}" alt="{{ $detail['imageAlt'] ?? $detail['title'] }}">
                            </div>
                            <div class="copar-product-showcase__body">
                                <p class="copar-section-label">{{ $detail['label'] ?? 'QRCOPAR product' }}</p>
                                <h3>{{ $detail['title'] }}</h3>
                                <p>{{ $detail['copy'] }}</p>
                                @if(!empty($detail['features']))
                                    <ul>
                                        @foreach($detail['features'] as $feature)
                                            <li>{{ $feature }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if($video)
        <section class="copar-video-section py-20 md:py-[120px]">
            <div class="max-w-site mx-auto px-6 md:px-12">
                <div class="copar-video-layout reveal">
                    <div>
                        <p class="copar-section-label">Product Video</p>
                        <h2>See the format <em>in motion.</em></h2>
                        <p>Use the supplied product video for reviews with buyers, QA teams, and production leads.</p>
                    </div>
                    <div class="copar-video-frame">
                        <video src="{{ $video }}" controls playsinline preload="metadata"></video>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(!empty($gallery))
        <section class="copar-gallery-section py-20 md:py-[120px]">
            <div class="max-w-site mx-auto px-6 md:px-12">
                <header class="copar-section-heading reveal">
                    <p class="copar-section-label">Product Views</p>
                    <h2>Full-size imagery, <em>not cropped previews.</em></h2>
                </header>
                <div class="copar-product-gallery reveal">
                    @foreach($gallery as $item)
                        <figure>
                            <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}">
                            <figcaption><strong>{{ $item['title'] }}</strong><br>{{ $item['copy'] }}</figcaption>
                        </figure>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section class="copar-product-cta py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12 text-center reveal">
            <h2>Request samples for your <em>next tray program.</em></h2>
            <p>Tell us your product category, tray type, dimensions, barrier requirements, and production-line needs. QRCOPAR can help move from assessment to prototype and commercial scale manufacturing.</p>
            <a href="/contact">Request Samples</a>
        </div>
    </section>
</main>
@include('cirkla.includes.footer')
</body>
</html>
