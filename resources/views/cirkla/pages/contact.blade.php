<!DOCTYPE html>
<html lang="en">
@php
    $pageTitle = 'Contact COPAR';
    $metaDescription = 'Contact QRCOPAR AGROFIBER PRIVATE LIMITED for sustainable packaging projects and custom material requirements.';
    $activePage = 'contact';
@endphp
@include('cirkla.includes.head')

<body>
<div class="copar-shell">
    @include('cirkla.includes.nav')

    <main>
        <section class="copar-product-hero">
            <div class="copar-container">
                <div class="copar-product-grid">
                    <div>
                        <p class="copar-eyebrow">Contact</p>
                        <h1 class="copar-title">Let's make your packaging work for you.</h1>
                        <p class="copar-lead">
                            Send your packaging requirement, sector, and product interest. The team can help assess materials, product files, and custom production options.
                        </p>
                    </div>
                    <div class="copar-product-media">
                        <img src="/images/copar/footer-image.png" alt="COPAR packaging">
                    </div>
                </div>
            </div>
        </section>

        @include('cirkla.includes.contact-panel')
    </main>
</div>
</body>
</html>
