@extends('layouts.main')

@section('title', 'Our Services')
@section('meta_description', "Explore comprehensive solutions for electric vehicles at EV Fixer. From lithium-ion battery diagnostics to controller and charger maintenance.")

@section('content')
<div class="relative overflow-hidden bg-[#121212] py-20 border-b border-gray-800">
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at center, #75d118 0%, transparent 50%);"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <div class="inline-flex items-center space-x-2 text-primary font-bold text-sm tracking-widest uppercase mb-4">
            <span class="w-8 h-[2px] bg-primary"></span>
            <span>What We Do</span>
        </div>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white">Our Services</h1>
        <p class="mt-6 text-xl text-gray-400 max-w-2xl mx-auto">Comprehensive solutions for your electric vehicles. From battery diagnostics to complete overhauls.</p>
    </div>
</div>

<div class="py-20 bg-[#121212]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Service Detailed 1 -->
            <div class="bg-[#1c1c1c] rounded-2xl p-8 border border-gray-800 hover:border-primary/50 transition-colors group">
                <div class="w-14 h-14 bg-gray-900 text-primary rounded-xl flex items-center justify-center mb-6 border border-gray-800 group-hover:bg-primary group-hover:text-black transition-colors">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h2 class="text-2xl font-bold text-white mb-4">Battery Repair & Diagnostics</h2>
                <p class="text-gray-400 mb-6 leading-relaxed">We specialize in Lithium-ion battery packs. Our advanced diagnostic tools identify weak cells, allowing us to repair rather than replace the entire unit. We balance packs, replace BMS, and enhance range.</p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-start text-gray-400"><svg class="w-5 h-5 text-primary mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Cell level balancing</li>
                    <li class="flex items-start text-gray-400"><svg class="w-5 h-5 text-primary mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> BMS replacement</li>
                    <li class="flex items-start text-gray-400"><svg class="w-5 h-5 text-primary mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Capacity testing</li>
                    <li class="flex items-start text-gray-400"><svg class="w-5 h-5 text-primary mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Custom battery pack building</li>
                </ul>
                <div class="mt-auto">
                    <a href="{{ route('book', ['service' => 'Battery Repair']) }}" class="inline-flex items-center text-white hover:text-primary transition-colors text-sm font-bold uppercase tracking-widest border-b-2 border-transparent hover:border-primary pb-1">
                        Book this service <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Service Detailed 2 -->
            <div class="bg-[#1c1c1c] rounded-2xl p-8 border border-gray-800 hover:border-primary/50 transition-colors group">
                <div class="w-14 h-14 bg-gray-900 text-primary rounded-xl flex items-center justify-center mb-6 border border-gray-800 group-hover:bg-primary group-hover:text-black transition-colors">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path></svg>
                </div>
                <h2 class="text-2xl font-bold text-white mb-4">Controller & Charger Repair</h2>
                <p class="text-gray-400 mb-6 leading-relaxed">The brain of your EV. We diagnose and repair motor controllers and intelligent chargers. From blown MOSFETs to firmware issues, we handle the complex circuitry.</p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-start text-gray-400"><svg class="w-5 h-5 text-primary mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> MOSFET replacement</li>
                    <li class="flex items-start text-gray-400"><svg class="w-5 h-5 text-primary mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Throttle sensor issues</li>
                    <li class="flex items-start text-gray-400"><svg class="w-5 h-5 text-primary mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Wiring harness repair</li>
                    <li class="flex items-start text-gray-400"><svg class="w-5 h-5 text-primary mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Charger fuse replacement</li>
                </ul>
                <div class="mt-auto">
                    <a href="{{ route('book', ['service' => 'Controller/Charger Repair']) }}" class="inline-flex items-center text-white hover:text-primary transition-colors text-sm font-bold uppercase tracking-widest border-b-2 border-transparent hover:border-primary pb-1">
                        Book this service <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Service Detailed 3 -->
            <div class="bg-[#1c1c1c] rounded-2xl p-8 border border-gray-800 hover:border-primary/50 transition-colors group">
                <div class="w-14 h-14 bg-gray-900 text-primary rounded-xl flex items-center justify-center mb-6 border border-gray-800 group-hover:bg-primary group-hover:text-black transition-colors">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h2 class="text-2xl font-bold text-white mb-4">Sales: Scooters & E-rickshaws</h2>
                <p class="text-gray-400 mb-6 leading-relaxed">We are an authorized dealer for premium EV brands. Explore our catalog of reliable e-scooters and high-capacity e-rickshaws designed for the modern commute.</p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-start text-gray-400"><svg class="w-5 h-5 text-primary mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> High-speed scooters</li>
                    <li class="flex items-start text-gray-400"><svg class="w-5 h-5 text-primary mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Commercial e-rickshaws</li>
                    <li class="flex items-start text-gray-400"><svg class="w-5 h-5 text-primary mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Test drives available</li>
                    <li class="flex items-start text-gray-400"><svg class="w-5 h-5 text-primary mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Competitive finance options</li>
                </ul>
                <div class="mt-auto">
                    <a href="{{ route('contact') }}" class="inline-flex items-center text-white hover:text-primary transition-colors text-sm font-bold uppercase tracking-widest border-b-2 border-transparent hover:border-primary pb-1">
                        Contact Sales <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Service Detailed 4 -->
            <div class="bg-[#1c1c1c] rounded-2xl p-8 border border-gray-800 hover:border-primary/50 transition-colors group">
                <div class="w-14 h-14 bg-gray-900 text-primary rounded-xl flex items-center justify-center mb-6 border border-gray-800 group-hover:bg-primary group-hover:text-black transition-colors">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path></svg>
                </div>
                <h2 class="text-2xl font-bold text-white mb-4">Spare Parts & Accessories</h2>
                <p class="text-gray-400 mb-6 leading-relaxed">Looking for quality replacements? We stock genuine motors, tires, body parts, and accessories for major EV brands.</p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-start text-gray-400"><svg class="w-5 h-5 text-primary mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> BLDC Motors</li>
                    <li class="flex items-start text-gray-400"><svg class="w-5 h-5 text-primary mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Throttles & levers</li>
                    <li class="flex items-start text-gray-400"><svg class="w-5 h-5 text-primary mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Tubeless tires</li>
                    <li class="flex items-start text-gray-400"><svg class="w-5 h-5 text-primary mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Custom lighting</li>
                </ul>
                <div class="mt-auto">
                    <a href="{{ route('contact') }}" class="inline-flex items-center text-white hover:text-primary transition-colors text-sm font-bold uppercase tracking-widest border-b-2 border-transparent hover:border-primary pb-1">
                        Inquire Parts <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-primary/10 py-16 text-center border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-white mb-6 tracking-tight">Need a custom service not listed here?</h2>
        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 text-base font-bold uppercase tracking-wider rounded-md text-black bg-primary hover:bg-primary-dark transition-colors shadow-[0_0_20px_rgba(117,209,24,0.3)]">
            Get in touch with us
        </a>
    </div>
</div>
@endsection
