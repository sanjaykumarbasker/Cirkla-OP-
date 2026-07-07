@php
    $hero = $hero ?? [];
    $benefits = $benefits ?? [];
    $applications = $applications ?? [];
    $documents = $documents ?? [];
    $featureTitle = $featureTitle ?? 'Why it matters';
    $featureCopy = $featureCopy ?? null;
    $video = $video ?? null;
@endphp
<!DOCTYPE html>
<html lang="en">
@include('cirkla.includes.head')

<body>
<div class="copar-shell">
    @include('cirkla.includes.nav')

    <main>
        <section class="copar-product-hero">
            <div class="copar-container">
                <div class="copar-product-grid">
                    <div>
                        <p class="copar-eyebrow">{{ $hero['eyebrow'] ?? 'COPAR solution' }}</p>
                        <h1 class="copar-title">{!! $hero['title'] ?? 'Sustainable packaging, <em>customised.</em>' !!}</h1>
                        <p class="copar-lead">{{ $hero['copy'] ?? 'Made from circular materials and designed around the performance needs of food and retail packaging.' }}</p>

                        @if(!empty($hero['pills']))
                            <div class="copar-pill-row">
                                @foreach($hero['pills'] as $pill)
                                    <span class="copar-pill">{{ $pill }}</span>
                                @endforeach
                            </div>
                        @endif

                        <div class="copar-actions">
                            <a class="copar-button" href="/contact">Customise packaging</a>
                            @if(!empty($documents))
                                <a class="copar-button copar-button--soft" href="#downloads">View data sheets</a>
                            @endif
                        </div>
                    </div>

                    <div class="copar-product-media">
                        <img src="{{ $hero['image'] ?? '/images/copar/tray-hero.png' }}" alt="{{ $hero['imageAlt'] ?? 'COPAR packaging' }}">
                    </div>
                </div>
            </div>
        </section>

        <section class="copar-section">
            <div class="copar-container">
                <div class="copar-split">
                    <div class="copar-section-header">
                        <p class="copar-eyebrow">{{ $featureTitle }}</p>
                        <h2 class="copar-section-title">{!! $featureHeading ?? 'Built for performance, <em>not compromise.</em>' !!}</h2>
                        @if($featureCopy)
                            <p class="copar-section-copy">{{ $featureCopy }}</p>
                        @endif
                    </div>

                    <div class="copar-feature-panel">
                        <ul class="copar-list">
                            @foreach($benefits as $benefit)
                                <li>{{ $benefit }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        @if(!empty($applications))
            <section class="copar-section copar-section--cream">
                <div class="copar-container">
                    <header class="copar-section-header">
                        <p class="copar-eyebrow">Applications</p>
                        <h2 class="copar-section-title">Formats for real production workflows.</h2>
                    </header>
                    <div class="copar-grid">
                        @foreach($applications as $application)
                            <article class="copar-card">
                                <div class="copar-card__body">
                                    <p class="copar-mini-label">{{ $application['label'] ?? 'Application' }}</p>
                                    <h3>{{ $application['title'] }}</h3>
                                    <p>{{ $application['copy'] }}</p>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        @if($video)
            <section class="copar-section">
                <div class="copar-container">
                    <div class="copar-split">
                        <div>
                            <p class="copar-eyebrow">Product video</p>
                            <h2 class="copar-section-title">See the format in motion.</h2>
                            <p class="copar-section-copy">Use the sample product video for quick reviews with buyers, QA teams, and production leads.</p>
                        </div>
                        <div class="copar-video">
                            <video src="{{ $video }}" controls playsinline preload="metadata"></video>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if(!empty($documents))
            <section class="copar-section copar-section--cream" id="downloads">
                <div class="copar-container">
                    <header class="copar-section-header">
                        <p class="copar-eyebrow">Technical resources</p>
                        <h2 class="copar-section-title">Local product files ready for review.</h2>
                        <p class="copar-section-copy">These resources come from the supplied COPAR folder and are linked for easy client access.</p>
                    </header>
                    <div class="copar-docs">
                        @foreach($documents as $document)
                            <a class="copar-doc" href="{{ $document['href'] }}" target="_blank" rel="noopener">
                                <strong>{{ $document['title'] }}</strong>
                                <span>{{ $document['label'] ?? 'Open PDF' }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        @include('cirkla.includes.contact-panel')
    </main>
</div>
</body>
</html>
