<nav class="fixed top-0 left-0 right-0 z-50 bg-paper/90 backdrop-blur-nav border-b border-rule">
    <div class="max-w-site mx-auto px-6 md:px-12 h-nav flex items-center justify-between copar-site-nav__inner">
        <a href="/" class="flex items-center no-underline flex-shrink-0 copar-brand-link">
            <img src="/images/logo.svg" alt="COPAR" class="copar-brand-logo copar-brand-logo--nav">
        </a>

        <ul class="hidden md:flex items-center gap-9 list-none m-0 p-0 copar-main-nav">
            <li class="relative group">
                <button class="font-mono text-[12px] tracking-[0.08em] uppercase font-medium leading-none text-ink-50 hover:text-ink transition-colors duration-200 flex items-center gap-1.5 bg-transparent border-none cursor-pointer p-0 copar-main-nav__item">
                    Tray Products
                    <svg width="8" height="5" viewbox="0 0 8 5" fill="currentColor" class="opacity-60">
                        <path d="M0 0.5L4 4.5L8 0.5H0Z"></path>
                    </svg>
                </button>
                <div class="absolute top-full left-0 pt-2 hidden group-hover:block">
                    <ul class="bg-white border border-rule rounded-card shadow-lg list-none m-0 p-1.5 min-w-[220px] copar-nav-dropdown">
                        <li><a href="/solutions/meat-trays" class="block px-3 py-2.5 font-sans text-[14px] font-medium rounded-[8px] text-ink-70 hover:text-green hover:bg-cream no-underline transition-colors duration-150 copar-nav-dropdown__link">Meat Trays</a></li>
                        <li><a href="/solutions/rte-trays" class="block px-3 py-2.5 font-sans text-[14px] font-medium rounded-[8px] text-ink-70 hover:text-green hover:bg-cream no-underline transition-colors duration-150 copar-nav-dropdown__link">RTE Trays</a></li>
                        <li><a href="/solutions/fresh-produce" class="block px-3 py-2.5 font-sans text-[14px] font-medium rounded-[8px] text-ink-70 hover:text-green hover:bg-cream no-underline transition-colors duration-150 copar-nav-dropdown__link">Fresh Produce Trays</a></li>
                        <li><a href="/solutions/special-trays" class="block px-3 py-2.5 font-sans text-[14px] font-medium rounded-[8px] text-ink-70 hover:text-green hover:bg-cream no-underline transition-colors duration-150 copar-nav-dropdown__link">Special Trays</a></li>
                        <li><a href="/solutions/laminated-trays" class="block px-3 py-2.5 font-sans text-[14px] font-medium rounded-[8px] text-ink-70 hover:text-green hover:bg-cream no-underline transition-colors duration-150 copar-nav-dropdown__link">Laminated Trays</a></li>
                        <li><a href="/solutions/unlaminated-trays" class="block px-3 py-2.5 font-sans text-[14px] font-medium rounded-[8px] text-ink-70 hover:text-green hover:bg-cream no-underline transition-colors duration-150 copar-nav-dropdown__link">Unlaminated Trays</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="/certifications" class="font-mono text-[12px] tracking-[0.08em] uppercase font-medium leading-none flex items-center no-underline transition-colors duration-200 copar-main-nav__item {{ ($activePage ?? null) === 'standards' ? 'text-ink' : 'text-ink-50 hover:text-ink' }}">Standards</a></li>
            <li><a href="/epr" class="font-mono text-[12px] tracking-[0.08em] uppercase font-medium leading-none flex items-center no-underline transition-colors duration-200 copar-main-nav__item {{ ($activePage ?? null) === 'epr' ? 'text-ink' : 'text-ink-50 hover:text-ink' }}">Process</a></li>
            <li>
                <a href="/contact" class="font-sans font-medium text-[15px] bg-green text-paper px-5 py-2.5 rounded-pill no-underline transition-colors duration-200 hover:bg-green-mid inline-flex items-center gap-2 copar-nav-cta">
                    Customise trays
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
            <p class="font-mono text-[12px] tracking-[0.08em] uppercase font-medium text-ink-50 py-3 border-b border-rule">Tray Products</p>
            <div class="pl-4 flex flex-col gap-0">
                <a href="/solutions/meat-trays" class="font-sans text-[14px] font-medium text-ink-70 py-2.5 border-b border-rule/50 no-underline hover:text-green transition-colors duration-150">Meat Trays</a>
                <a href="/solutions/rte-trays" class="font-sans text-[14px] font-medium text-ink-70 py-2.5 border-b border-rule/50 no-underline hover:text-green transition-colors duration-150">RTE Trays</a>
                <a href="/solutions/fresh-produce" class="font-sans text-[14px] font-medium text-ink-70 py-2.5 border-b border-rule/50 no-underline hover:text-green transition-colors duration-150">Fresh Produce Trays</a>
                <a href="/solutions/special-trays" class="font-sans text-[14px] font-medium text-ink-70 py-2.5 border-b border-rule/50 no-underline hover:text-green transition-colors duration-150">Special Trays</a>
                <a href="/solutions/laminated-trays" class="font-sans text-[14px] font-medium text-ink-70 py-2.5 border-b border-rule/50 no-underline hover:text-green transition-colors duration-150">Laminated Trays</a>
                <a href="/solutions/unlaminated-trays" class="font-sans text-[14px] font-medium text-ink-70 py-2.5 border-b border-rule/50 no-underline hover:text-green transition-colors duration-150">Unlaminated Trays</a>
            </div>
            <a href="/certifications" class="font-mono text-[12px] tracking-[0.08em] uppercase font-medium text-ink-70 py-3 border-b border-rule no-underline hover:text-green transition-colors duration-150">Standards</a>
            <a href="/epr" class="font-mono text-[12px] tracking-[0.08em] uppercase font-medium text-ink-70 py-3 border-b border-rule no-underline hover:text-green transition-colors duration-150">Process</a>
            <a href="/contact" class="mt-4 font-sans font-medium text-[15px] bg-green text-paper px-5 py-3.5 rounded-pill no-underline text-center hover:bg-green-mid transition-colors duration-200 flex items-center justify-center gap-2">Customise trays</a>
        </div>
    </div>
</nav>
