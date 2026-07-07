<!DOCTYPE html>
<html lang="en">
@php
$pageTitle = 'Contact COPAR';
$metaDescription = 'Contact QRCOPAR AGROFIBER PRIVATE LIMITED for tray packaging projects and custom tray requirements.';
$pageScript = '/_astro/hoisted.CcJimr40.js';
$activePage = 'contact';
@endphp
@include('cirkla.includes.head')

<body>
@include('cirkla.includes.nav')
<main class="copar-standalone copar-standalone--contact">
    <section class="pt-nav bg-green-deep copar-standalone-hero">
        <div class="max-w-site mx-auto px-6 md:px-12 py-16 md:py-20">
            <h1 class="font-serif font-normal text-[clamp(44px,5vw,64px)] leading-[1.08] tracking-[-1.5px] text-paper max-w-3xl mb-4">Let's make your trays work for you.</h1>
            <p class="font-sans text-[19px] text-paper/70 leading-[1.6] max-w-2xl">Send your tray requirement, product category, and tray interest. The team can help assess dimensions, product files, and custom production options.</p>
        </div>
    </section>

    <section class="bg-white py-20 md:py-[120px]">
        <div class="max-w-site mx-auto px-6 md:px-12">
            <div class="grid md:grid-cols-2 gap-12 items-start">
                <form class="space-y-5 reveal">
                    <div class="mb-8">
                        <p class="font-sans font-medium text-[15px] text-ink mb-4">What would you like to do?</p>
                        <div class="flex flex-col gap-3">
                            <label class="flex items-start gap-3 border-[1.5px] border-rule rounded-[8px] p-4 cursor-pointer hover:border-green transition-colors has-[:checked]:border-green has-[:checked]:bg-[#F4FAF0]"><input type="radio" name="intent" value="custom" class="mt-0.5 accent-green" checked=""><div><p class="font-sans font-medium text-[14px] text-ink">Customise trays</p><p class="font-sans text-[12px] text-ink-50 mt-0.5">Tell us your product and tray requirements.</p></div></label>
                            <label class="flex items-start gap-3 border-[1.5px] border-rule rounded-[8px] p-4 cursor-pointer hover:border-green transition-colors has-[:checked]:border-green has-[:checked]:bg-[#F4FAF0]"><input type="radio" name="intent" value="samples" class="mt-0.5 accent-green"><div><p class="font-sans font-medium text-[14px] text-ink">Request product files or samples</p><p class="font-sans text-[12px] text-ink-50 mt-0.5">Ask for trays, specifications, or technical information.</p></div></label>
                            <label class="flex items-start gap-3 border-[1.5px] border-rule rounded-[8px] p-4 cursor-pointer hover:border-green transition-colors has-[:checked]:border-green has-[:checked]:bg-[#F4FAF0]"><input type="radio" name="intent" value="team" class="mt-0.5 accent-green"><div><p class="font-sans font-medium text-[14px] text-ink">Talk to our team</p><p class="font-sans text-[12px] text-ink-50 mt-0.5">A direct conversation about materials and applications.</p></div></label>
                        </div>
                    </div>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div><label class="block font-sans text-[13px] font-medium text-ink mb-1.5">Full name</label><input type="text" name="name" class="w-full bg-white border border-ink-15 rounded-[6px] px-3.5 py-2.5 font-sans text-[14px] text-ink focus:outline-none focus:border-green transition-colors" placeholder="Your name"></div>
                        <div><label class="block font-sans text-[13px] font-medium text-ink mb-1.5">Work email</label><input type="email" name="email" class="w-full bg-white border border-ink-15 rounded-[6px] px-3.5 py-2.5 font-sans text-[14px] text-ink focus:outline-none focus:border-green transition-colors" placeholder="you@company.com"></div>
                    </div>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div><label class="block font-sans text-[13px] font-medium text-ink mb-1.5">Company</label><input type="text" name="company" class="w-full bg-white border border-ink-15 rounded-[6px] px-3.5 py-2.5 font-sans text-[14px] text-ink focus:outline-none focus:border-green transition-colors" placeholder="Company name"></div>
                        <div><label class="block font-sans text-[13px] font-medium text-ink mb-1.5">Phone</label><input type="tel" name="phone" class="w-full bg-white border border-ink-15 rounded-[6px] px-3.5 py-2.5 font-sans text-[14px] text-ink focus:outline-none focus:border-green transition-colors" placeholder="+91"></div>
                    </div>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div><label class="block font-sans text-[13px] font-medium text-ink mb-1.5">Product category</label><select name="sector" class="w-full bg-white border border-ink-15 rounded-[6px] px-3.5 py-2.5 font-sans text-[14px] text-ink focus:outline-none focus:border-green transition-colors appearance-none"><option>Meat trays</option><option>RTE trays</option><option>Fresh produce trays</option><option>Special trays</option><option>Laminated trays</option><option>Unlaminated trays</option></select></div>
                        <div><label class="block font-sans text-[13px] font-medium text-ink mb-1.5">Tray interest</label><select name="product" class="w-full bg-white border border-ink-15 rounded-[6px] px-3.5 py-2.5 font-sans text-[14px] text-ink focus:outline-none focus:border-green transition-colors appearance-none"><option>Meat Trays</option><option>RTE Trays</option><option>Fresh Produce Trays</option><option>Special Trays</option><option>Laminated Trays</option><option>Unlaminated Trays</option></select></div>
                    </div>
                    <div><label class="block font-sans text-[13px] font-medium text-ink mb-1.5">Requirement</label><textarea name="notes" rows="4" class="w-full bg-white border border-ink-15 rounded-[6px] px-3.5 py-2.5 font-sans text-[14px] text-ink focus:outline-none focus:border-green transition-colors resize-none" placeholder="Share tray dimensions, product fit, laminated or unlaminated preference, timeline..."></textarea></div>
                    <button type="submit" id="submit-btn" class="w-full bg-butter text-green font-sans font-medium text-[14px] py-3.5 rounded-[4px] hover:bg-butter/80 transition-colors mt-2">Send It Our Way</button>
                    <p id="form-status" class="font-sans text-[13px] text-center mt-3 hidden"></p>
                </form>

                <div class="bg-cream border border-rule rounded-card p-8 reveal">
                    <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-green-mid mb-4">Location</p>
                    <h2 class="font-serif text-[28px] font-normal text-ink leading-[1.2] mb-5">QRCOPAR AGROFIBER PRIVATE LIMITED</h2>
                    <address class="font-sans text-[15px] text-ink-70 leading-[1.7] not-italic mb-8">
                        SF.NO.317/1A, D.NO.2/854<br>
                        Kodangi Palayam, Palladam(TK)<br>
                        Kodangipalayam<br>
                        District: Tiruppur<br>
                        State: Tamil Nadu<br>
                        PIN Code: 641662
                    </address>
                    <div class="rounded-card overflow-hidden bg-white p-6 flex items-center justify-center">
                        <img src="/images/copar/footer-image.png" alt="COPAR tray packaging" class="max-h-[480px] object-contain">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@include('cirkla.includes.footer')
</body>
</html>
