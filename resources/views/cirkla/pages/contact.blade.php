<!DOCTYPE html>
<html lang="en">
@php
$pageTitle = 'Contact - Cirkla';
$metaDescription = 'Request samples, talk to our team, or discuss a custom format. We\'ll confirm within one business day.';
$pageScript = '/_astro/hoisted.CcJimr40.js';
$activePage = '';
@endphp
@include('cirkla.includes.head')

<body> @include('cirkla.includes.nav') <main>
        <section class="pt-nav bg-green-deep">
            <div class="max-w-site mx-auto px-6 md:px-12 py-16 md:py-20">
                <h1 class="font-serif font-normal text-[clamp(44px,5vw,64px)] leading-[1.08] tracking-[-1.5px] text-paper max-w-3xl mb-4">Let's get started.</h1>
                <p class="font-sans text-[19px] text-paper/70 leading-[1.6] max-w-2xl">Request samples, talk to our team, or discuss a custom format. We'll confirm within one business day.</p>
            </div>
        </section>
        <section class="bg-white py-20 md:py-[120px]">
            <div class="max-w-site mx-auto px-6 md:px-12">
                <div class="max-w-2xl"> <!-- Form -->
                    <form class="space-y-5"> <!-- Intent selector -->
                        <div class="mb-8">
                            <p class="font-sans font-medium text-[15px] text-ink mb-4">What would you like to do?</p>
                            <div class="flex flex-col gap-3"> <label class="flex items-start gap-3 border-[1.5px] border-rule rounded-[8px] p-4 cursor-pointer hover:border-green transition-colors has-[:checked]:border-green has-[:checked]:bg-[#F4FAF0]"> <input type="radio" name="intent" value="sample" class="mt-0.5 accent-green" checked="">
                                    <div>
                                        <p class="font-sans font-medium text-[14px] text-ink">Request samples</p>
                                        <p class="font-sans text-[12px] text-ink-50 mt-0.5">Tell us your product and we&#39;ll ship samples to you</p>
                                    </div>
                                </label><label class="flex items-start gap-3 border-[1.5px] border-rule rounded-[8px] p-4 cursor-pointer hover:border-green transition-colors has-[:checked]:border-green has-[:checked]:bg-[#F4FAF0]"> <input type="radio" name="intent" value="team" class="mt-0.5 accent-green">
                                    <div>
                                        <p class="font-sans font-medium text-[14px] text-ink">Talk to our team</p>
                                        <p class="font-sans text-[12px] text-ink-50 mt-0.5">A direct conversation with our sales team</p>
                                    </div>
                                </label><label class="flex items-start gap-3 border-[1.5px] border-rule rounded-[8px] p-4 cursor-pointer hover:border-green transition-colors has-[:checked]:border-green has-[:checked]:bg-[#F4FAF0]"> <input type="radio" name="intent" value="custom" class="mt-0.5 accent-green">
                                    <div>
                                        <p class="font-sans font-medium text-[14px] text-ink">Discuss custom packaging</p>
                                        <p class="font-sans text-[12px] text-ink-50 mt-0.5">Tell us what you&#39;re replacing - we&#39;ll engineer it</p>
                                    </div>
                                </label> </div>
                        </div> <!-- Row 1: Name + Work email -->
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div> <label class="block font-sans text-[13px] font-medium text-ink mb-1.5">Full name</label> <input type="text" name="name" required="" class="w-full bg-white border border-ink-15 rounded-[6px] px-3.5 py-2.5 font-sans text-[14px] text-ink focus:outline-none focus:border-green transition-colors" placeholder="Jane Smith"> </div>
                            <div> <label class="block font-sans text-[13px] font-medium text-ink mb-1.5">Work email</label> <input type="email" name="email" required="" class="w-full bg-white border border-ink-15 rounded-[6px] px-3.5 py-2.5 font-sans text-[14px] text-ink focus:outline-none focus:border-green transition-colors" placeholder="jane@company.com"> </div>
                        </div> <!-- Row 2: Company + Role -->
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div> <label class="block font-sans text-[13px] font-medium text-ink mb-1.5">Company</label> <input type="text" name="company" class="w-full bg-white border border-ink-15 rounded-[6px] px-3.5 py-2.5 font-sans text-[14px] text-ink focus:outline-none focus:border-green transition-colors" placeholder="Acme Foods"> </div>
                            <div> <label class="block font-sans text-[13px] font-medium text-ink mb-1.5">Role</label> <input type="text" name="role" class="w-full bg-white border border-ink-15 rounded-[6px] px-3.5 py-2.5 font-sans text-[14px] text-ink focus:outline-none focus:border-green transition-colors" placeholder="VP of Operations"> </div>
                        </div> <!-- Row 3: Phone + Product category -->
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div> <label class="block font-sans text-[13px] font-medium text-ink mb-1.5">Phone</label> <input type="tel" name="phone" class="w-full bg-white border border-ink-15 rounded-[6px] px-3.5 py-2.5 font-sans text-[14px] text-ink focus:outline-none focus:border-green transition-colors" placeholder="+1 (555) 000-0000"> </div>
                            <div> <label class="block font-sans text-[13px] font-medium text-ink mb-1.5">Product category</label> <select name="category" required="" class="w-full bg-white border border-ink-15 rounded-[6px] px-3.5 py-2.5 font-sans text-[14px] text-ink focus:outline-none focus:border-green transition-colors appearance-none">
                                    <option value="" disabled="" selected="">Select a category</option>
                                    <option value="map-vsp">MAP / VSP</option>
                                    <option value="overwrap">Overwrap</option>
                                    <option value="ready-meals">Ready Meals</option>
                                    <option value="produce">Produce</option>
                                    <option value="custom">Custom</option>
                                </select> </div>
                        </div> <!-- Row 4: Annual volume + Current packaging -->
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div> <label class="block font-sans text-[13px] font-medium text-ink mb-1.5">Annual volume (units)</label> <input type="text" name="volume" class="w-full bg-white border border-ink-15 rounded-[6px] px-3.5 py-2.5 font-sans text-[14px] text-ink focus:outline-none focus:border-green transition-colors" placeholder="e.g. 5 million / year"> </div>
                            <div> <label class="block font-sans text-[13px] font-medium text-ink mb-1.5">Current packaging</label> <input type="text" name="current-packaging" class="w-full bg-white border border-ink-15 rounded-[6px] px-3.5 py-2.5 font-sans text-[14px] text-ink focus:outline-none focus:border-green transition-colors" placeholder="e.g. CPET trays"> </div>
                        </div> <!-- Row 5: Equipment / line setup -->
                        <div> <label class="block font-sans text-[13px] font-medium text-ink mb-1.5">Equipment / line setup</label> <input type="text" name="equipment" class="w-full bg-white border border-ink-15 rounded-[6px] px-3.5 py-2.5 font-sans text-[14px] text-ink focus:outline-none focus:border-green transition-colors" placeholder="e.g. Ross Reiser R530, MULTIVAC T600"> </div> <!-- Row 6: Notes -->
                        <div> <label class="block font-sans text-[13px] font-medium text-ink mb-1.5">Notes</label> <textarea name="notes" rows="4" class="w-full bg-white border border-ink-15 rounded-[6px] px-3.5 py-2.5 font-sans text-[14px] text-ink focus:outline-none focus:border-green transition-colors resize-none" placeholder="Anything else you'd like us to know - tray dimensions, barrier requirements, timeline..."></textarea> </div> <!-- Submit --> <button type="submit" id="submit-btn" class="w-full bg-butter text-green font-sans font-medium text-[14px] py-3.5 rounded-[4px] hover:bg-butter/80 transition-colors mt-2">Submit Request</button>
                        <p id="form-status" class="font-sans text-[13px] text-center mt-3 hidden"></p>
                    </form>
                </div>
            </div>
        </section>
        <section class="bg-cream py-20 md:py-[120px]">
            <div class="max-w-site mx-auto px-6 md:px-12">
                <div class="reveal">
                    <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-green-mid mb-4">What Happens Next</p>
                    <h2 class="font-serif font-normal text-[clamp(36px,4vw,52px)] leading-[1.05] tracking-[-1px] text-ink mb-12">Here's what to expect.</h2>
                </div>
                <div class="grid md:grid-cols-3 gap-8 reveal"> <!-- Step 01 -->
                    <div>
                        <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-green-mid mb-3">Step 01</p>
                        <h3 class="font-serif text-[22px] text-ink mb-3 leading-[1.3]">We confirm within one business day.</h3>
                        <p class="font-sans text-[14px] text-ink-70 leading-[1.6]">Your request lands with our sales team directly. No queue, no chatbot.</p>
                    </div> <!-- Step 02 -->
                    <div>
                        <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-green-mid mb-3">Step 02</p>
                        <h3 class="font-serif text-[22px] text-ink mb-3 leading-[1.3]">We ship samples and the full technical data package.</h3>
                        <p class="font-sans text-[14px] text-ink-70 leading-[1.6]">Trays sized to your format, plus shelf-life data and line compatibility documentation.</p>
                    </div> <!-- Step 03 -->
                    <div>
                        <p class="font-mono text-[13px] tracking-[0.1em] uppercase font-medium text-green-mid mb-3">Step 03</p>
                        <h3 class="font-serif text-[22px] text-ink mb-3 leading-[1.3]">We support you through testing.</h3>
                        <p class="font-sans text-[14px] text-ink-70 leading-[1.6]">Our team works with your QA team through the full qualification process.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>