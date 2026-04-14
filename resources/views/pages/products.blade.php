@extends('layouts.main')

@section('title', 'Vehicles & Parts')
@section('meta_description', "Browse EV Fixer's complete range of premium electric scooters, commercial E-rickshaws, OEM lithium battery packs, BLDC controllers, and genuine spare parts. Serving individual owners and businesses across India.")

@section('content')

{{-- ══════════════════════════════════════════════ --}}
{{-- HERO BANNER                                     --}}
{{-- ══════════════════════════════════════════════ --}}
<div class="relative overflow-hidden bg-[#0d0d0d] py-24 border-b border-gray-800">
    {{-- Decorative radial glow --}}
    <div class="absolute inset-0" style="background: radial-gradient(ellipse at 20% 50%, rgba(117,209,24,0.07) 0%, transparent 65%);"></div>
    <div class="absolute inset-0" style="background: radial-gradient(ellipse at 80% 50%, rgba(117,209,24,0.04) 0%, transparent 65%);"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <div class="inline-flex items-center space-x-2 text-primary font-bold text-xs tracking-widest uppercase px-4 py-1.5 bg-primary/10 rounded-full border border-primary/25 mb-6">
            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
            <span>Showroom & Catalog</span>
        </div>
        <h1 class="text-5xl md:text-7xl font-extrabold text-white tracking-tight mb-6">
            Vehicles <span class="text-primary">&</span> Parts
        </h1>
        <p class="text-lg md:text-xl text-gray-400 max-w-3xl mx-auto leading-relaxed">
            Bharat ke har kone mein electric mobility ko affordable banana hamare mission ka hissa hai. Yahan aapko milenge 
            <strong class="text-white">premium EV scooters</strong>, 
            <strong class="text-white">commercial E-rickshaws</strong>, aur 
            <strong class="text-white">genuine OEM spare parts</strong> — sab kuch ek hi jagah. 
            Quality guaranteed, price fair, aur delivery across India.
        </p>
        <div class="mt-10 flex flex-wrap gap-4 justify-center">
            <a href="{{ route('contact') }}" id="hero-contact-btn" class="px-8 py-4 bg-primary hover:bg-primary-dark text-black font-bold uppercase tracking-wide rounded-md shadow-[0_0_20px_rgba(117,209,24,0.4)] transition-all transform hover:-translate-y-1 text-sm">
                Get a Quote
            </a>
            <a href="#spare-parts" class="px-8 py-4 border border-gray-600 hover:border-primary text-white hover:text-primary font-bold uppercase tracking-wide rounded-md transition-all text-sm">
                View Spare Parts
            </a>
        </div>
    </div>

    {{-- Stats strip --}}
    <div class="max-w-4xl mx-auto px-4 mt-16 grid grid-cols-2 md:grid-cols-4 gap-6 text-center relative z-10">
        <div>
            <div class="text-3xl font-extrabold text-primary">500+</div>
            <div class="text-xs text-gray-500 uppercase tracking-widest mt-1">Vehicles Sold</div>
        </div>
        <div>
            <div class="text-3xl font-extrabold text-primary">OEM</div>
            <div class="text-xs text-gray-500 uppercase tracking-widest mt-1">Certified Parts</div>
        </div>
        <div>
            <div class="text-3xl font-extrabold text-primary">Pan India</div>
            <div class="text-xs text-gray-500 uppercase tracking-widest mt-1">Delivery</div>
        </div>
        <div>
            <div class="text-3xl font-extrabold text-primary">1 Year</div>
            <div class="text-xs text-gray-500 uppercase tracking-widest mt-1">Warranty</div>
        </div>
    </div>
</div>

{{-- ══════════════════════════════════════════════ --}}
{{-- ELECTRIC SCOOTERS                              --}}
{{-- ══════════════════════════════════════════════ --}}
<div class="py-24 bg-[#121212]" id="scooters">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section header --}}
        <div class="flex flex-col md:flex-row justify-between md:items-end mb-12 gap-4">
            <div>
                <div class="inline-flex items-center space-x-2 text-primary font-bold text-xs tracking-widest uppercase px-3 py-1 bg-primary/10 rounded-full border border-primary/20 mb-4">
                    <span>EV Scooters</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-white">Premium Electric Scooters</h2>
                <p class="text-gray-500 mt-2 max-w-xl">Stylish, powerful, aur reliable — hamare scooters Indian roads ke liye specially chosen hain.</p>
            </div>
            <a href="{{ route('contact') }}" class="flex-shrink-0 inline-flex items-center space-x-2 text-primary hover:text-white transition-colors text-sm font-bold uppercase tracking-widest">
                <span>Contact Sales</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-4">

            {{-- Scooter Card 1 --}}
            <div class="bg-[#1c1c1c] rounded-2xl overflow-hidden border border-gray-800 hover:border-primary/50 transition-all duration-300 group flex flex-col shadow-lg hover:shadow-primary/10 hover:shadow-xl">
                <div class="relative h-60 overflow-hidden bg-gray-900">
                    <img
                        src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&q=80&fit=crop"
                        alt="Premium Electric Scooter"
                        class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-700 opacity-90 group-hover:opacity-100"
                        loading="lazy"
                        onerror="this.onerror=null; this.src='https://images.pexels.com/photos/1119796/pexels-photo-1119796.jpeg?auto=compress&cs=tinysrgb&w=600';"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1c1c1c] via-transparent to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-primary text-black text-xs font-extrabold uppercase tracking-widest px-3 py-1 rounded-full">High Speed</span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-white mb-2">Apex Pro 3.5kWh</h3>
                    <p class="text-gray-400 text-sm mb-4 leading-relaxed">The ultimate city commuter — 3.5kWh lithium pack, 110km range, fast charge in 4 hours. Perfect for daily office commute.</p>
                    <ul class="flex flex-wrap gap-2 mb-5">
                        <li class="text-xs bg-gray-900 text-gray-400 px-2.5 py-1 rounded-full border border-gray-800">110 km Range</li>
                        <li class="text-xs bg-gray-900 text-gray-400 px-2.5 py-1 rounded-full border border-gray-800">3.5 kWh Battery</li>
                        <li class="text-xs bg-gray-900 text-gray-400 px-2.5 py-1 rounded-full border border-gray-800">4-hr Charge</li>
                    </ul>
                    <div class="mt-auto pt-4 border-t border-gray-800 flex justify-between items-center">
                        <span class="text-white font-extrabold text-xl">₹1,15,000</span>
                        <a href="{{ route('contact') }}" class="text-sm border border-gray-700 hover:border-primary hover:bg-primary hover:text-black text-gray-300 px-5 py-2 rounded-md transition-all font-bold uppercase tracking-wide">Inquire</a>
                    </div>
                </div>
            </div>

            {{-- Scooter Card 2 --}}
            <div class="bg-[#1c1c1c] rounded-2xl overflow-hidden border border-gray-800 hover:border-primary/50 transition-all duration-300 group flex flex-col shadow-lg hover:shadow-primary/10 hover:shadow-xl">
                <div class="relative h-60 overflow-hidden bg-gray-900">
                    <img
                        src="https://images.unsplash.com/photo-1593764592116-bfb2a97c642a?w=600&q=80&fit=crop"
                        alt="City Electric Scooter India"
                        class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-700 opacity-90 group-hover:opacity-100"
                        loading="lazy"
                        onerror="this.onerror=null; this.src='https://images.pexels.com/photos/3800517/pexels-photo-3800517.jpeg?auto=compress&cs=tinysrgb&w=600';"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1c1c1c] via-transparent to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-gray-700 text-gray-200 text-xs font-extrabold uppercase tracking-widest px-3 py-1 rounded-full">City Commute</span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-white mb-2">Corsa Urban 2kWh</h3>
                    <p class="text-gray-400 text-sm mb-4 leading-relaxed">Lightweight urban scooter built for short city trips. Compact, stylish, aur fuel-free. 65km range on single charge.</p>
                    <ul class="flex flex-wrap gap-2 mb-5">
                        <li class="text-xs bg-gray-900 text-gray-400 px-2.5 py-1 rounded-full border border-gray-800">65 km Range</li>
                        <li class="text-xs bg-gray-900 text-gray-400 px-2.5 py-1 rounded-full border border-gray-800">2 kWh Pack</li>
                        <li class="text-xs bg-gray-900 text-gray-400 px-2.5 py-1 rounded-full border border-gray-800">Lightweight</li>
                    </ul>
                    <div class="mt-auto pt-4 border-t border-gray-800 flex justify-between items-center">
                        <span class="text-white font-extrabold text-xl">₹85,000</span>
                        <a href="{{ route('contact') }}" class="text-sm border border-gray-700 hover:border-primary hover:bg-primary hover:text-black text-gray-300 px-5 py-2 rounded-md transition-all font-bold uppercase tracking-wide">Inquire</a>
                    </div>
                </div>
            </div>

            {{-- E-Rickshaw Card --}}
            <div class="bg-[#1c1c1c] rounded-2xl overflow-hidden border border-gray-800 hover:border-primary/50 transition-all duration-300 group flex flex-col shadow-lg hover:shadow-primary/10 hover:shadow-xl">
                <div class="relative h-60 overflow-hidden bg-gray-900">
                    <img
                        src="https://images.unsplash.com/photo-1597392582469-a697322d906a?w=600&q=80&fit=crop"
                        alt="Commercial E-Rickshaw India"
                        class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-700 opacity-90 group-hover:opacity-100"
                        loading="lazy"
                        onerror="this.onerror=null; this.src='https://images.pexels.com/photos/6177618/pexels-photo-6177618.jpeg?auto=compress&cs=tinysrgb&w=600';"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1c1c1c] via-transparent to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-blue-600 text-white text-xs font-extrabold uppercase tracking-widest px-3 py-1 rounded-full">Commercial</span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-white mb-2">Freight E-Rickshaw</h3>
                    <p class="text-gray-400 text-sm mb-4 leading-relaxed">Heavy-duty passenger & logistics E-rickshaw for last-mile delivery and commercial passenger transport. High payload capacity.</p>
                    <ul class="flex flex-wrap gap-2 mb-5">
                        <li class="text-xs bg-gray-900 text-gray-400 px-2.5 py-1 rounded-full border border-gray-800">High Payload</li>
                        <li class="text-xs bg-gray-900 text-gray-400 px-2.5 py-1 rounded-full border border-gray-800">80 km Range</li>
                        <li class="text-xs bg-gray-900 text-gray-400 px-2.5 py-1 rounded-full border border-gray-800">Commercial Grade</li>
                    </ul>
                    <div class="mt-auto pt-4 border-t border-gray-800 flex justify-between items-center">
                        <span class="text-white font-extrabold text-xl">Ask Price</span>
                        <a href="{{ route('contact') }}" class="text-sm border border-gray-700 hover:border-primary hover:bg-primary hover:text-black text-gray-300 px-5 py-2 rounded-md transition-all font-bold uppercase tracking-wide">Inquire</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ══════════════════════════════════════════════ --}}
{{-- VISUAL IMAGE GALLERY STRIP                     --}}
{{-- ══════════════════════════════════════════════ --}}
<div class="bg-[#0d0d0d] py-20 border-t border-b border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12">
            <div class="inline-flex items-center space-x-2 text-primary font-bold text-xs tracking-widest uppercase px-4 py-1.5 bg-primary/10 rounded-full border border-primary/25 mb-5">
                <span>Our Products in Action</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-extrabold text-white">A Closer Look</h2>
            <p class="text-gray-500 mt-3 max-w-xl mx-auto">Real images of the EVs and parts we sell and service — no stock photos, no gimmicks.</p>
        </div>

        {{-- Masonry-style 6-image grid --}}
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">

            {{-- Image 1 – EV Scooter Side --}}
            <div class="relative group rounded-xl overflow-hidden aspect-[4/3] cursor-pointer">
                <img
                    src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=700&q=80&fit=crop"
                    alt="Electric scooter side view"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                    loading="lazy"
                    onerror="this.onerror=null; this.src='https://placehold.co/700x525/1c1c1c/75d118?text=EV+Scooter';"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="absolute bottom-0 left-0 right-0 p-4 translate-y-2 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                    <span class="text-white font-bold text-sm">Premium EV Scooter</span>
                    <p class="text-gray-300 text-xs mt-0.5">City & Highway Ready</p>
                </div>
                <div class="absolute top-3 left-3">
                    <span class="bg-black/60 backdrop-blur-sm text-primary text-xs font-bold px-2.5 py-1 rounded-full border border-primary/30">EV Scooter</span>
                </div>
            </div>

            {{-- Image 2 – Charging Station / EV --}}
            <div class="relative group rounded-xl overflow-hidden aspect-[4/3] cursor-pointer">
                <img
                    src="https://images.unsplash.com/photo-1593764592116-bfb2a97c642a?w=700&q=80&fit=crop"
                    alt="Electric scooter being charged"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                    loading="lazy"
                    onerror="this.onerror=null; this.src='https://placehold.co/700x525/1c1c1c/75d118?text=EV+Charging';"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="absolute bottom-0 left-0 right-0 p-4 translate-y-2 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                    <span class="text-white font-bold text-sm">Smart Charging</span>
                    <p class="text-gray-300 text-xs mt-0.5">Fast & Safe Charging System</p>
                </div>
                <div class="absolute top-3 left-3">
                    <span class="bg-black/60 backdrop-blur-sm text-primary text-xs font-bold px-2.5 py-1 rounded-full border border-primary/30">EV Charging</span>
                </div>
            </div>

            {{-- Image 3 – Lithium Battery Pack --}}
            <div class="relative group rounded-xl overflow-hidden aspect-[4/3] cursor-pointer">
                <img
                    src="https://images.unsplash.com/photo-1611365892117-00ac5ef43c90?w=700&q=80&fit=crop"
                    alt="Lithium ion EV battery pack"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                    loading="lazy"
                    onerror="this.onerror=null; this.src='https://placehold.co/700x525/1c1c1c/75d118?text=Battery+Pack';"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="absolute bottom-0 left-0 right-0 p-4 translate-y-2 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                    <span class="text-white font-bold text-sm">Lithium Battery Pack</span>
                    <p class="text-gray-300 text-xs mt-0.5">OEM Grade Cells, BMS Protected</p>
                </div>
                <div class="absolute top-3 left-3">
                    <span class="bg-black/60 backdrop-blur-sm text-primary text-xs font-bold px-2.5 py-1 rounded-full border border-primary/30">Battery Pack</span>
                </div>
            </div>

            {{-- Image 4 – E-Rickshaw --}}
            <div class="relative group rounded-xl overflow-hidden aspect-[4/3] cursor-pointer">
                <img
                    src="https://images.unsplash.com/photo-1597392582469-a697322d906a?w=700&q=80&fit=crop"
                    alt="Commercial E-Rickshaw India"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                    loading="lazy"
                    onerror="this.onerror=null; this.src='https://placehold.co/700x525/1c1c1c/75d118?text=E-Rickshaw';"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="absolute bottom-0 left-0 right-0 p-4 translate-y-2 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                    <span class="text-white font-bold text-sm">Commercial E-Rickshaw</span>
                    <p class="text-gray-300 text-xs mt-0.5">Passenger & Freight Variants</p>
                </div>
                <div class="absolute top-3 left-3">
                    <span class="bg-black/60 backdrop-blur-sm text-blue-400 text-xs font-bold px-2.5 py-1 rounded-full border border-blue-400/30">E-Rickshaw</span>
                </div>
            </div>

            {{-- Image 5 – Motor Controller / EV Parts --}}
            <div class="relative group rounded-xl overflow-hidden aspect-[4/3] cursor-pointer">
                <img
                    src="https://images.unsplash.com/photo-1581092334651-ddf26d9a09d0?w=700&q=80&fit=crop"
                    alt="EV motor controller spare parts"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                    loading="lazy"
                    onerror="this.onerror=null; this.src='https://placehold.co/700x525/1c1c1c/75d118?text=EV+Controller';"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="absolute bottom-0 left-0 right-0 p-4 translate-y-2 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                    <span class="text-white font-bold text-sm">BLDC Motor Controller</span>
                    <p class="text-gray-300 text-xs mt-0.5">30A–60A Smart Controllers</p>
                </div>
                <div class="absolute top-3 left-3">
                    <span class="bg-black/60 backdrop-blur-sm text-yellow-400 text-xs font-bold px-2.5 py-1 rounded-full border border-yellow-400/30">Controller</span>
                </div>
            </div>

            {{-- Image 6 – EV Charger --}}
            <div class="relative group rounded-xl overflow-hidden aspect-[4/3] cursor-pointer">
                <img
                    src="https://images.unsplash.com/photo-1647166545149-e0af9edf8a58?w=700&q=80&fit=crop"
                    alt="EV charger unit"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                    loading="lazy"
                    onerror="this.onerror=null; this.src='https://placehold.co/700x525/1c1c1c/75d118?text=EV+Charger';"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="absolute bottom-0 left-0 right-0 p-4 translate-y-2 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                    <span class="text-white font-bold text-sm">Smart EV Charger</span>
                    <p class="text-gray-300 text-xs mt-0.5">Home & Commercial Units</p>
                </div>
                <div class="absolute top-3 left-3">
                    <span class="bg-black/60 backdrop-blur-sm text-green-400 text-xs font-bold px-2.5 py-1 rounded-full border border-green-400/30">Charger</span>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- ══════════════════════════════════════════════ --}}
{{-- GENUINE SPARE PARTS                            --}}
{{-- ══════════════════════════════════════════════ --}}
<div class="py-24 bg-[#121212]" id="spare-parts">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex flex-col md:flex-row justify-between md:items-end mb-14 gap-4">
            <div>
                <div class="inline-flex items-center space-x-2 text-primary font-bold text-xs tracking-widest uppercase px-3 py-1 bg-primary/10 rounded-full border border-primary/20 mb-4">
                    <span>Spare Parts</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-white">Genuine OEM Spare Parts</h2>
                <p class="text-gray-500 mt-2 max-w-xl">Certified replacement parts with full compatibility guarantee. Locally available — no long import waits.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">

            {{-- Part Card 1 – Battery Cells --}}
            <div class="bg-[#1a1a1a] rounded-2xl overflow-hidden border border-gray-800 hover:border-primary/40 transition-all duration-300 group flex flex-col">
                <div class="relative h-44 overflow-hidden bg-gray-900">
                    <img
                        src="https://images.unsplash.com/photo-1611365892117-00ac5ef43c90?w=500&q=75&fit=crop"
                        alt="Lithium battery cells"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 opacity-80 group-hover:opacity-100"
                        loading="lazy"
                        onerror="this.onerror=null; this.src='https://placehold.co/500x350/1a1a1a/75d118?text=Battery+Cells';"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1a1a1a] to-transparent"></div>
                </div>
                <div class="p-5 flex flex-col flex-grow">
                    <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center text-primary mb-3 border border-primary/20">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-1">OEM Battery Cells</h4>
                    <p class="text-sm text-gray-500 mb-4 leading-relaxed">Grade A lithium-ion cells for all major scooter brands. Long cycle life guaranteed.</p>
                    <a href="{{ route('contact') }}" class="mt-auto inline-flex items-center space-x-1 text-primary text-sm font-bold uppercase tracking-wide hover:text-white transition-colors">
                        <span>Get Quote</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>

            {{-- Part Card 2 – Smart Controller --}}
            <div class="bg-[#1a1a1a] rounded-2xl overflow-hidden border border-gray-800 hover:border-primary/40 transition-all duration-300 group flex flex-col">
                <div class="relative h-44 overflow-hidden bg-gray-900">
                    <img
                        src="https://images.unsplash.com/photo-1581092334651-ddf26d9a09d0?w=500&q=75&fit=crop"
                        alt="BLDC motor controller"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 opacity-80 group-hover:opacity-100"
                        loading="lazy"
                        onerror="this.onerror=null; this.src='https://placehold.co/500x350/1a1a1a/75d118?text=Controller';"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1a1a1a] to-transparent"></div>
                </div>
                <div class="p-5 flex flex-col flex-grow">
                    <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center text-primary mb-3 border border-primary/20">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/></svg>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-1">Smart BLDC Controllers</h4>
                    <p class="text-sm text-gray-500 mb-4 leading-relaxed">30A–60A controllers with cruise control & regenerative braking support for scooters.</p>
                    <a href="{{ route('contact') }}" class="mt-auto inline-flex items-center space-x-1 text-primary text-sm font-bold uppercase tracking-wide hover:text-white transition-colors">
                        <span>Get Quote</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>

            {{-- Part Card 3 – Hub Motor --}}
            <div class="bg-[#1a1a1a] rounded-2xl overflow-hidden border border-gray-800 hover:border-primary/40 transition-all duration-300 group flex flex-col">
                <div class="relative h-44 overflow-hidden bg-gray-900">
                    <img
                        src="https://images.unsplash.com/photo-1565043589221-1a6fd9ae45c7?w=500&q=75&fit=crop"
                        alt="BLDC hub motor for electric scooter"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 opacity-80 group-hover:opacity-100"
                        loading="lazy"
                        onerror="this.onerror=null; this.src='https://placehold.co/500x350/1a1a1a/75d118?text=Hub+Motor';"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1a1a1a] to-transparent"></div>
                </div>
                <div class="p-5 flex flex-col flex-grow">
                    <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center text-primary mb-3 border border-primary/20">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-1">BLDC Hub Motors</h4>
                    <p class="text-sm text-gray-500 mb-4 leading-relaxed">High-torque rear hub motors — available in 10" and 12" for scooters and E-rickshaws.</p>
                    <a href="{{ route('contact') }}" class="mt-auto inline-flex items-center space-x-1 text-primary text-sm font-bold uppercase tracking-wide hover:text-white transition-colors">
                        <span>Get Quote</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>

            {{-- Part Card 4 – EV Charger --}}
            <div class="bg-[#1a1a1a] rounded-2xl overflow-hidden border border-gray-800 hover:border-primary/40 transition-all duration-300 group flex flex-col">
                <div class="relative h-44 overflow-hidden bg-gray-900">
                    <img
                        src="https://images.unsplash.com/photo-1647166545149-e0af9edf8a58?w=500&q=75&fit=crop"
                        alt="Electric vehicle charger unit"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 opacity-80 group-hover:opacity-100"
                        loading="lazy"
                        onerror="this.onerror=null; this.src='https://placehold.co/500x350/1a1a1a/75d118?text=EV+Charger';"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1a1a1a] to-transparent"></div>
                </div>
                <div class="p-5 flex flex-col flex-grow">
                    <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center text-primary mb-3 border border-primary/20">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-1">Smart EV Chargers</h4>
                    <p class="text-sm text-gray-500 mb-4 leading-relaxed">Home & commercial charger units — 48V, 60V, 72V compatible. Safe, certified, durable.</p>
                    <a href="{{ route('contact') }}" class="mt-auto inline-flex items-center space-x-1 text-primary text-sm font-bold uppercase tracking-wide hover:text-white transition-colors">
                        <span>Get Quote</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>

        </div>

        {{-- ── CTA Banner ── --}}
        <div class="relative rounded-2xl overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-primary/80 to-[#3fa800]/80"></div>
            <div class="absolute inset-0" style="background-image: url('https://images.unsplash.com/photo-1590362891991-f776e747a588?w=1200&q=60&fit=crop'); background-size: cover; background-position: center; mix-blend-mode: overlay; opacity: 0.15;"></div>
            <div class="relative z-10 px-8 py-12 md:py-16 flex flex-col md:flex-row items-center justify-between gap-6 text-center md:text-left">
                <div>
                    <h3 class="text-2xl md:text-3xl font-extrabold text-black">Kuch aur chahiye?</h3>
                    <p class="text-black/70 mt-2 text-lg font-medium">Contact humari team — wholesale pricing, bulk orders, aur custom requirements ke liye.</p>
                </div>
                <div class="flex flex-wrap gap-4 justify-center md:justify-end flex-shrink-0">
                    <a href="{{ route('contact') }}" id="products-contact-cta" class="inline-flex items-center space-x-2 px-8 py-4 bg-black hover:bg-gray-900 text-white font-bold uppercase tracking-wide rounded-md transition-all text-sm shadow-md">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                        <span>Contact Now</span>
                    </a>
                    <a href="{{ route('book') }}" id="products-explore-cta" class="inline-flex items-center space-x-2 px-8 py-4 bg-white/20 hover:bg-white/30 border-2 border-black text-black font-bold uppercase tracking-wide rounded-md transition-all text-sm">
                        <span>Explore Products</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
