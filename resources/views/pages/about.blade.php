@extends('layouts.main')

@section('title', 'About EV Fixer')

@section('content')
<div class="relative bg-[#121212] overflow-hidden py-24 border-b border-gray-800">
    <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at center, #75d118 0%, transparent 60%);"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight mb-6">Pioneering EV Repair <span class="text-primary">in India</span></h1>
        <p class="mt-4 text-xl text-gray-400 max-w-3xl mx-auto leading-relaxed">
            Founded with a vision to build a sustainable future, EV Fixer is India's leading aggregator for electric vehicle service, parts, and sales. We are dedicated to keeping your electric drive smooth, efficient, and reliable.
        </p>
    </div>
</div>

<div class="py-20 bg-[#121212]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
            <div>
                <img class="w-full rounded-2xl shadow-2xl border border-gray-800 transform hover:scale-[1.02] transition-transform duration-500" src="https://images.unsplash.com/photo-1593941707882-a5bba14938cb?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="EV charging station">
            </div>
            <div class="mt-12 lg:mt-0">
                <div class="inline-flex items-center space-x-2 text-primary font-bold text-sm tracking-widest uppercase mb-4 px-3 py-1 bg-primary/10 rounded-full border border-primary/20">
                    <span>Our Story</span>
                </div>
                <h2 class="text-3xl font-extrabold text-white tracking-tight mb-6 mt-2">The Engine Behind EV Fixer</h2>
                <div class="space-y-6 text-lg text-gray-400 leading-relaxed font-sans">
                    <p>
                        As the adoption of electric scooters and rickshaws surged, a massive gap emerged in the after-sales service market. Traditional mechanics lacked the electronics expertise, and OEM dealerships were often too slow or too expensive.
                    </p>
                    <p>
                        EV Fixer was born to bridge this gap. We partner with highly skilled, electronics-certified technicians capable of deep-level diagnostics. Whether it's a dead BMS, a blown controller MOSFET, or simply aging lithium cells, we isolate the problem and replace only what's necessary.
                    </p>
                    <p>
                        Today, we don't just repair; we supply OEM-grade spare parts and operate as an authorized dealership for premium new EV brands. Our mission is to accelerate the transition to sustainable transport by ensuring every EV stays on the road longer.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-[#1c1c1c] border-y border-gray-800">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
            <div class="p-6">
                <div class="w-16 h-16 mx-auto bg-gray-900 border border-gray-800 text-primary rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-primary/10">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Modern Workshops</h3>
                <p class="text-gray-500 font-sans">Our partner garages are equipped with the latest electronic diagnostic and cell balancing tools.</p>
            </div>
            <div class="p-6">
                <div class="w-16 h-16 mx-auto bg-gray-900 border border-gray-800 text-primary rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-primary/10">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Certified Techs</h3>
                <p class="text-gray-500 font-sans">Every technician passes rigorous training on high-voltage systems and lithium-ion protocols.</p>
            </div>
            <div class="p-6">
                <div class="w-16 h-16 mx-auto bg-gray-900 border border-gray-800 text-primary rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-primary/10">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Fast Turnaround</h3>
                <p class="text-gray-500 font-sans">We know downtime costs you money. Our efficient supply chain ensures parts are always ready.</p>
            </div>
        </div>
    </div>
</div>
@endsection
