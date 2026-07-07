<nav class="copar-nav">
    <div class="copar-nav__inner">
        <a class="copar-logo" href="/" aria-label="COPAR home">
            <img src="/images/copar/logo.svg" alt="COPAR">
        </a>

        <div class="copar-nav__links">
            <a class="{{ ($activePage ?? '') === 'home' ? 'is-active' : '' }}" href="/">Home</a>
            <details>
                <summary>Solutions</summary>
                <div class="copar-menu">
                    <a href="/technology">HyperBarrier Paper</a>
                    <a href="/solutions/produce">Agri-Fibre Packaging</a>
                    <a href="/solutions/ready-meals">ServeSmart Paper Cutlery</a>
                    <a href="/solutions/custom">Custom Packaging</a>
                </div>
            </details>
            <details>
                <summary>Industries</summary>
                <div class="copar-menu">
                    <a href="/solutions/meat-protein">Meat &amp; Poultry</a>
                    <a href="/solutions/ready-meals">Ready Meals</a>
                    <a href="/solutions/produce">Fresh Produce</a>
                    <a href="/solutions/map-vsp">Seafood</a>
                    <a href="/solutions/overwrap">Dairy &amp; Pet Care</a>
                </div>
            </details>
            <a class="{{ ($activePage ?? '') === 'standards' ? 'is-active' : '' }}" href="/certifications">Standards</a>
            <a class="{{ ($activePage ?? '') === 'contact' ? 'is-active' : '' }}" href="/contact">Contact</a>
        </div>

        <a class="copar-nav__cta" href="/contact">Customise packaging</a>

        <details class="copar-mobile">
            <summary>Menu</summary>
            <div class="copar-mobile__panel">
                <a href="/">Home</a>
                <a href="/technology">HyperBarrier Paper</a>
                <a href="/solutions/produce">Agri-Fibre Packaging</a>
                <a href="/solutions/ready-meals">ServeSmart Cutlery</a>
                <a href="/solutions/meat-protein">Meat &amp; Poultry</a>
                <a href="/solutions/map-vsp">Seafood</a>
                <a href="/certifications">Standards</a>
                <a href="/contact">Contact</a>
            </div>
        </details>
    </div>
</nav>
