@php
    $standardTrayMenu = [
        ['label' => '3D Tray', 'href' => '/standard-trays#tray-01'],
        ['label' => '3SC Tray', 'href' => '/standard-trays#tray-02'],
        ['label' => '3P Tray', 'href' => '/standard-trays#tray-03'],
        ['label' => '8P Tray', 'href' => '/standard-trays#tray-04'],
        ['label' => 'US-3 Tray', 'href' => '/standard-trays#tray-05'],
        ['label' => '11S Tray', 'href' => '/standard-trays#tray-06'],
        ['label' => '11DC Tray', 'href' => '/standard-trays#tray-07'],
        ['label' => '7P Tray', 'href' => '/standard-trays#tray-08'],
        ['label' => '1P Tray', 'href' => '/standard-trays#tray-09'],
        ['label' => '5P Tray', 'href' => '/standard-trays#tray-10'],
        ['label' => '25P T2 Tray', 'href' => '/standard-trays#tray-11'],
        ['label' => '2D Tray', 'href' => '/standard-trays#tray-12'],
        ['label' => 'V3 Tray', 'href' => '/standard-trays#tray-13'],
        ['label' => 'V4 Tray', 'href' => '/standard-trays#tray-14'],
        ['label' => '8 PB Tray', 'href' => '/standard-trays#tray-15'],
        ['label' => 'V5 Tray', 'href' => '/standard-trays#tray-16'],
        ['label' => 'V7 Tray', 'href' => '/standard-trays#tray-17'],
    ];
@endphp
<nav class="fixed top-0 left-0 right-0 z-50 bg-paper/90 backdrop-blur-nav border-b border-rule">
    <div class="max-w-site mx-auto px-6 md:px-12 h-nav flex items-center justify-between copar-site-nav__inner">
        <a href="/" class="flex items-center no-underline flex-shrink-0 copar-brand-link">
            <img src="/images/logo.svg" alt="QRCOPAR" class="copar-brand-logo copar-brand-logo--nav">
        </a>

        <ul class="hidden md:flex items-center gap-9 list-none m-0 p-0 copar-main-nav">
            <li class="relative group">
                <button class="font-mono text-[12px] tracking-[0.08em] uppercase font-medium leading-none text-ink-50 hover:text-ink transition-colors duration-200 flex items-center gap-1.5 bg-transparent border-none cursor-pointer p-0 copar-main-nav__item">
                    Solutions
                    <svg width="8" height="5" viewbox="0 0 8 5" fill="currentColor" class="opacity-60">
                        <path d="M0 0.5L4 4.5L8 0.5H0Z"></path>
                    </svg>
                </button>
                <div class="absolute top-full left-0 pt-2 hidden group-hover:block">
                    <ul class="bg-white border border-rule rounded-card shadow-lg list-none m-0 p-1.5 min-w-[220px] copar-nav-dropdown copar-solutions-dropdown">
                        <li class="copar-nav-dropdown__section-title">Tray Products</li>
                        <li><a href="/solutions/meat-trays" class="block px-3 py-2.5 font-sans text-[14px] font-medium rounded-[8px] text-ink-70 hover:text-green hover:bg-cream no-underline transition-colors duration-150 copar-nav-dropdown__link">Meat Trays</a></li>
                        <li><a href="/solutions/rte-trays" class="block px-3 py-2.5 font-sans text-[14px] font-medium rounded-[8px] text-ink-70 hover:text-green hover:bg-cream no-underline transition-colors duration-150 copar-nav-dropdown__link">RTE Trays</a></li>
                        <li><a href="/solutions/fresh-produce" class="block px-3 py-2.5 font-sans text-[14px] font-medium rounded-[8px] text-ink-70 hover:text-green hover:bg-cream no-underline transition-colors duration-150 copar-nav-dropdown__link">Fresh Produce Trays</a></li>
                        <li><a href="/solutions/confectionery-trays" class="block px-3 py-2.5 font-sans text-[14px] font-medium rounded-[8px] text-ink-70 hover:text-green hover:bg-cream no-underline transition-colors duration-150 copar-nav-dropdown__link">Confectionery Trays</a></li>
                        <li><a href="/solutions/laminated-trays" class="block px-3 py-2.5 font-sans text-[14px] font-medium rounded-[8px] text-ink-70 hover:text-green hover:bg-cream no-underline transition-colors duration-150 copar-nav-dropdown__link">Laminated Trays</a></li>
                        <li><a href="/solutions/unlaminated-trays" class="block px-3 py-2.5 font-sans text-[14px] font-medium rounded-[8px] text-ink-70 hover:text-green hover:bg-cream no-underline transition-colors duration-150 copar-nav-dropdown__link">Unlaminated Trays</a></li>
                        <li class="copar-nav-dropdown__section-title copar-nav-dropdown__section-title--standard">Standard Trays</li>
                        <li class="copar-solutions-dropdown__wide"><a href="/standard-trays" class="block px-3 py-2.5 font-sans text-[14px] font-medium rounded-[8px] text-ink-70 hover:text-green hover:bg-cream no-underline transition-colors duration-150 copar-nav-dropdown__link copar-standard-trays-dropdown__overview">All Standard Trays</a></li>
                        @foreach($standardTrayMenu as $trayMenuItem)
                            <li><a href="{{ $trayMenuItem['href'] }}" class="block px-3 py-2.5 font-sans text-[14px] font-medium rounded-[8px] text-ink-70 hover:text-green hover:bg-cream no-underline transition-colors duration-150 copar-nav-dropdown__link">{{ $trayMenuItem['label'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </li>
            <li><a href="/technology" class="font-mono text-[12px] tracking-[0.08em] uppercase font-medium leading-none flex items-center no-underline transition-colors duration-200 copar-main-nav__item {{ ($activePage ?? null) === 'technology' ? 'text-ink' : 'text-ink-50 hover:text-ink' }}">Technology</a></li>
            <li><a href="/epr" class="font-mono text-[12px] tracking-[0.08em] uppercase font-medium leading-none flex items-center no-underline transition-colors duration-200 copar-main-nav__item {{ ($activePage ?? null) === 'epr' ? 'text-ink' : 'text-ink-50 hover:text-ink' }}">EPR Calculator</a></li>
            <li>
                <a href="/contact" class="font-sans font-medium text-[15px] bg-green text-paper px-5 py-2.5 rounded-pill no-underline transition-colors duration-200 hover:bg-green-mid inline-flex items-center gap-2 copar-nav-cta">
                    Request Samples
                    <svg width="14" height="14" viewbox="0 0 14 14" fill="none">
                        <path d="M2 7h10m0 0L7 2m5 5L7 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </a>
            </li>
        </ul>

        <button id="nav-hamburger" class="md:hidden flex flex-col gap-[5px] p-2 -mr-2 bg-transparent border-none cursor-pointer" aria-label="Open menu">
            <span class="block w-5 h-px bg-ink transition-all duration-200" id="ham-1"></span>
            <span class="block w-5 h-px bg-ink transition-all duration-200" id="ham-2"></span>
            <span class="block w-5 h-px bg-ink transition-all duration-200" id="ham-3"></span>
        </button>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-paper border-t border-rule">
        <div class="px-6 py-6 flex flex-col gap-1">
            <p class="font-mono text-[12px] tracking-[0.08em] uppercase font-medium text-ink-50 py-3 border-b border-rule">Solutions</p>
            <div class="pl-4 flex flex-col gap-0">
                <a href="/solutions/meat-trays" class="font-sans text-[14px] font-medium text-ink-70 py-2.5 border-b border-rule/50 no-underline hover:text-green transition-colors duration-150">Meat Trays</a>
                <a href="/solutions/rte-trays" class="font-sans text-[14px] font-medium text-ink-70 py-2.5 border-b border-rule/50 no-underline hover:text-green transition-colors duration-150">RTE Trays</a>
                <a href="/solutions/fresh-produce" class="font-sans text-[14px] font-medium text-ink-70 py-2.5 border-b border-rule/50 no-underline hover:text-green transition-colors duration-150">Fresh Produce Trays</a>
                <a href="/solutions/confectionery-trays" class="font-sans text-[14px] font-medium text-ink-70 py-2.5 border-b border-rule/50 no-underline hover:text-green transition-colors duration-150">Confectionery Trays</a>
                <a href="/solutions/laminated-trays" class="font-sans text-[14px] font-medium text-ink-70 py-2.5 border-b border-rule/50 no-underline hover:text-green transition-colors duration-150">Laminated Trays</a>
                <a href="/solutions/unlaminated-trays" class="font-sans text-[14px] font-medium text-ink-70 py-2.5 border-b border-rule/50 no-underline hover:text-green transition-colors duration-150">Unlaminated Trays</a>
                <p class="font-mono text-[11px] tracking-[0.1em] uppercase font-medium text-ink-50 pt-5 pb-2 border-b border-rule">Standard Trays</p>
                <a href="/standard-trays" class="font-sans text-[14px] font-medium text-ink-70 py-2.5 border-b border-rule/50 no-underline hover:text-green transition-colors duration-150">All Standard Trays</a>
                <div class="grid grid-cols-2 gap-x-4">
                    @foreach($standardTrayMenu as $trayMenuItem)
                        <a href="{{ $trayMenuItem['href'] }}" class="font-sans text-[14px] font-medium text-ink-70 py-2.5 border-b border-rule/50 no-underline hover:text-green transition-colors duration-150">{{ $trayMenuItem['label'] }}</a>
                    @endforeach
                </div>
            </div>
            <a href="/technology" class="font-mono text-[12px] tracking-[0.08em] uppercase font-medium text-ink-70 py-3 border-b border-rule no-underline hover:text-green transition-colors duration-150">Technology</a>
            <a href="/epr" class="font-mono text-[12px] tracking-[0.08em] uppercase font-medium text-ink-70 py-3 border-b border-rule no-underline hover:text-green transition-colors duration-150">EPR Calculator</a>
            <a href="/contact" class="mt-4 font-sans font-medium text-[15px] bg-green text-paper px-5 py-3.5 rounded-pill no-underline text-center hover:bg-green-mid transition-colors duration-200 flex items-center justify-center gap-2">Request Samples</a>
        </div>
    </div>
</nav>
