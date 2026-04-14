@extends('layouts.main')

@section('title', 'Electric Vehicle Services & Sales')
@section('meta_description', "Welcome to EV Fixer, India’s top electric vehicle repair platform. We connect you with certified experts for lithium battery fixes, controllers, and premium EV sales.")

@section('content')

<!-- Rajdhani font for hero heading only -->
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&display=swap" rel="stylesheet">
<style>
    #hero-heading, #hero-heading span {
        font-family: 'Rajdhani', sans-serif !important;
        letter-spacing: 0.01em;
    }
</style>

<!-- Hero Section -->
<div class="relative overflow-hidden min-h-screen flex flex-col justify-center border-b border-gray-800 bg-[#121212] bg-cover bg-no-repeat bg-[center_right]" style="background-image: url('{{ asset('images/hero-scooters.png') }}');">
    
    <!-- Gradient overlay to ensure text is readable on smaller screens where the scooters might slide left -->
    <div class="absolute inset-0 bg-gradient-to-r from-[#121212] via-[#121212]/90 to-transparent z-0"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full pt-20 pb-32">
        <div class="w-full lg:w-3/5">
            
            <!-- Hero Text Left -->
            <div>
                <div class="inline-flex items-center space-x-2 text-primary font-bold text-sm tracking-widest uppercase mb-6">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    <span>Premium Care For Your EV</span>
                </div>
                <h1 id="hero-heading" class="text-4xl sm:text-4xl md:text-6xl font-extrabold text-white tracking-tight leading-tight">
                    Expert EV Services. <br/>
                    <span class="text-gray-300">Fast & Reliable.</span>
                </h1>   
                <p class="mt-6 text-lg text-gray-400 max-w-xl">
                    EV Fixer is your trusted aggregator for electric vehicle maintenance. From dead batteries to controller failures, we bring your ride back to life. Sales, repair, and spare parts all in one place.
                </p>
                <div class="mt-10 flex flex-wrap gap-4 items-center">
                    <a href="{{ route('book') }}" class="px-8 py-4 bg-primary hover:bg-primary-dark text-black font-bold uppercase tracking-wide rounded-md shadow-[0_0_20px_rgba(117,209,24,0.4)] transition-all transform hover:-translate-y-1">
                        Book Service Now
                    </a>
                    <a href="tel:+916388780536" class="flex items-center space-x-3 px-6 py-4 text-white hover:text-primary transition-colors">
                        <div class="w-12 h-12 rounded-full border border-gray-600 flex items-center justify-center bg-gray-900/50 hover:border-primary transition-colors">
                            <svg class="w-4 h-4 ml-0.5 text-primary" fill="currentColor" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                        </div>
                        <span class="font-medium tracking-wide uppercase text-sm">Call Now</span>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <!-- Stats Grid Overlay (Services Overview) -->
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-24 z-20 pb-20">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="bg-[#1c1c1c] border border-gray-800 rounded-lg p-8 hover:border-primary/50 transition-colors group">
                <div class="w-12 h-12 bg-gray-900 rounded-md flex items-center justify-center mb-6 text-primary group-hover:bg-primary group-hover:text-black transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Battery Repair</h3>
                <p class="text-gray-500 text-sm">Lithium cell replacement, BMS repair, and range optimization.</p>
            </div>

            <div class="bg-[#1c1c1c] border border-gray-800 rounded-lg p-8 hover:border-primary/50 transition-colors group">
                <div class="w-12 h-12 bg-gray-900 rounded-md flex items-center justify-center mb-6 text-primary group-hover:bg-primary group-hover:text-black transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Controller Fixes</h3>
                <p class="text-gray-500 text-sm">Advanced diagnostics for motor controllers, sensors, and wiring.</p>
            </div>

            <div class="bg-[#1c1c1c] border border-gray-800 rounded-lg p-8 hover:border-primary/50 transition-colors group">
                <div class="w-12 h-12 bg-gray-900 rounded-md flex items-center justify-center mb-6 text-primary group-hover:bg-primary group-hover:text-black transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">EV Sales</h3>
                <p class="text-gray-500 text-sm">Brand new premium electric scooters and E-rickshaws available.</p>
            </div>

            <div class="bg-[#1c1c1c] border border-gray-800 rounded-lg p-8 hover:border-primary/50 transition-colors group">
                <div class="w-12 h-12 bg-gray-900 rounded-md flex items-center justify-center mb-6 text-primary group-hover:bg-primary group-hover:text-black transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Spare Parts</h3>
                <p class="text-gray-500 text-sm">OEM certified replacement parts shipped directly to you.</p>
            </div>
            
        </div>
    </div>
</div>

<!-- For a Cleaner Future Section -> Why Choose Us -->
<div class="bg-white py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="relative">
                <div class="aspect-w-4 aspect-h-3 rounded-2xl overflow-hidden shadow-2xl relative bg-gray-200">
                    <!-- Generic gray placeholder / MAP for location -->
                    <div class="w-full h-96 bg-gray-200 flex flex-col justify-center items-center">
                        <svg class="w-16 h-16 text-gray-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        <span class="text-gray-500 font-medium">State of the Art Workshop</span>
                    </div>
                </div>
                <div class="absolute -bottom-8 -left-8 bg-primary p-8 rounded-lg shadow-xl border-4 border-white">
                    <div class="text-4xl font-extrabold text-white">24/7</div>
                    <div class="text-sm font-bold text-green-900 uppercase tracking-wide mt-1">Booking Support</div>
                </div>
            </div>
            <div>
                <div class="inline-flex items-center space-x-2 text-primary font-bold text-sm tracking-widest uppercase mb-4">
                    <span class="w-8 h-[2px] bg-primary"></span>
                    <span>Why Choose EV Fixer</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight mb-6">
                    Trusted Experts For <br/>Your Electric Drive
                </h2>
                
                <div class="space-y-8 mt-10">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-green-50 text-primary">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                        </div>
                        <div class="ml-4 text-gray-800">
                            <h4 class="text-lg font-bold text-gray-900">Cost Savings</h4>
                            <p class="mt-2 text-gray-500">We prioritize repairing individual cells and components rather than replacing the entire unit, saving you thousands.</p>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-green-50 text-primary">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                        </div>
                        <div class="ml-4 text-gray-800">
                            <h4 class="text-lg font-bold text-gray-900">Fast Turnaround</h4>
                        <p class="mt-2 text-gray-500">Time is money. Our technicians diagnose and deliver fixes faster than standard dealerships, getting you back on the road safely.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Power & Precision -> Service Benefits section -->
<div class="bg-[#121212] py-24 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-end mb-12">
            <div>
                <div class="inline-flex items-center space-x-2 text-primary font-bold text-xs tracking-widest uppercase mb-4 px-3 py-1 bg-primary/10 rounded-full border border-primary/20">
                    <span>Performance</span>
                </div>
                <h2 class="text-4xl font-extrabold text-white tracking-tight">
                    The EV Fixer Advantage
                </h2>
            </div>
            <a href="{{ route('services') }}" class="hidden md:inline-flex items-center text-white hover:text-primary transition-colors text-sm font-bold uppercase tracking-widest">
                All Services 
                <svg class="w-4 h-4 ml-2 text-primary" fill="currentColor" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="bg-[#1a1a1a] rounded-xl overflow-hidden border border-gray-800 hover:border-primary/50 transition-colors">
                <div class="p-8 text-center pt-10">
                    <div class="w-16 h-16 mx-auto mb-4 text-primary bg-[#121212] rounded-full flex items-center justify-center border border-gray-800">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h4 class="text-lg font-bold text-white">Fast Service</h4>
                    <p class="mt-2 text-xs text-gray-500 leading-relaxed mb-4">Same day diagnostics and quick parts replacement.</p>
                </div>
                <div class="h-1 bg-primary w-full"></div>
            </div>

            <div class="bg-[#1a1a1a] rounded-xl overflow-hidden border border-gray-800 hover:border-primary/50 transition-colors">
                <div class="p-8 text-center pt-10">
                    <div class="w-16 h-16 mx-auto mb-4 text-primary bg-[#121212] rounded-full flex items-center justify-center border border-gray-800">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h4 class="text-lg font-bold text-white">Trusted Technicians</h4>
                    <p class="mt-2 text-xs text-gray-500 leading-relaxed mb-4">Certified mechanics with deep EV electronics expertise.</p>
                </div>
                <div class="h-1 bg-primary w-full"></div>
            </div>

            <div class="bg-[#1a1a1a] rounded-xl overflow-hidden border border-gray-800 hover:border-primary/50 transition-colors">
                <div class="p-8 text-center pt-10">
                    <div class="w-16 h-16 mx-auto mb-4 text-primary bg-[#121212] rounded-full flex items-center justify-center border border-gray-800">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </div>
                    <h4 class="text-lg font-bold text-white">Doorstep Support</h4>
                    <p class="mt-2 text-xs text-gray-500 leading-relaxed mb-4">We offer pickup and drop-off services for battery packs.</p>
                </div>
                <div class="h-1 bg-primary w-full"></div>
            </div>

            <div class="bg-[#1a1a1a] rounded-xl overflow-hidden border border-gray-800 hover:border-primary/50 transition-colors">
                <div class="p-8 text-center pt-10">
                    <div class="w-16 h-16 mx-auto mb-4 text-primary bg-[#121212] rounded-full flex items-center justify-center border border-gray-800">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h4 class="text-lg font-bold text-white">OEM Quality</h4>
                    <p class="mt-2 text-xs text-gray-500 leading-relaxed mb-4">We guarantee genuine spare parts for peak reliability.</p>
                </div>
                <div class="h-1 bg-primary w-full"></div>
            </div>

        </div>
    </div>
</div>

<!-- Testimonials -->
<div class="py-24 bg-white overflow-hidden text-gray-900 border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-end mb-12">
            <div>
                <div class="inline-flex items-center space-x-2 text-gray-500 font-bold text-xs tracking-widest uppercase mb-4 px-3 py-1 bg-gray-100 rounded-full border border-gray-200">
                    <span>Testimonials</span>
                </div>
                <h2 class="text-4xl font-extrabold text-gray-900 tracking-tight">
                    Service Feedback
                </h2>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-8 border border-gray-100 rounded-xl shadow-sm bg-gray-50 relative">
                <div class="flex text-yellow-400 mb-6">★★★★★</div>
                <div class="flex items-center mb-6">
                    <div class="h-12 w-12 rounded-full bg-gray-300"></div>
                    <div class="ml-4">
                        <div class="font-bold text-gray-900">Rahul S.</div>
                        <div class="text-xs text-gray-500">Scooter Owner</div>
                    </div>
                </div>
                <p class="text-sm text-gray-600 leading-relaxed">
                    "My scooter's battery range doubled after EV Fixer repaired the cells. Highly professional service and saved me the cost of a new battery!"
                </p>
            </div>
            
            <div class="p-8 border border-gray-100 rounded-xl shadow-sm bg-gray-50 relative">
                <div class="flex text-yellow-400 mb-6">★★★★★</div>
                <div class="flex items-center mb-6">
                    <div class="h-12 w-12 rounded-full bg-gray-300"></div>
                    <div class="ml-4">
                        <div class="font-bold text-gray-900">Amit K.</div>
                        <div class="text-xs text-gray-500">Commercial Driver</div>
                    </div>
                </div>
                <p class="text-sm text-gray-600 leading-relaxed">
                    "Bought my new E-rickshaw here and use their parts whenever needed. The team is extremely helpful and the turnaround time on controller repair was incredible."
                </p>
            </div>

            <div class="p-8 border border-gray-100 rounded-xl shadow-sm bg-gray-50 relative">
                <div class="flex text-yellow-400 mb-6">★★★★★</div>
                <div class="flex items-center mb-6">
                    <div class="h-12 w-12 rounded-full bg-gray-300"></div>
                    <div class="ml-4">
                        <div class="font-bold text-gray-900">Vikram P.</div>
                        <div class="text-xs text-gray-500">Fleet Manager</div>
                    </div>
                </div>
                <p class="text-sm text-gray-600 leading-relaxed">
                    "Fastest controller repair in town. Dropped it off in the morning and it was fixed by evening. Great job EV Fixer."
                </p>
            </div>
        </div>
    </div>
</div>

<!-- ============================================================ -->
<!-- FOUNDER TESTIMONIAL SECTION                                   -->
<!-- ============================================================ -->
<div class="bg-[#0f0f0f] py-24 border-t border-gray-800 overflow-hidden" id="founder-message">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Label -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center space-x-2 text-primary font-bold text-xs tracking-widest uppercase px-4 py-1.5 bg-primary/10 rounded-full border border-primary/25 mb-5">
                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z"/></svg>
                <span>Founder's Message</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight">
                A Word from Our <span class="text-primary">Founder</span>
            </h2>
        </div>

        <!-- Two-column layout: photo + message -->
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 items-center">

            <!-- Left: Photo + Identity Card -->
            <div class="lg:col-span-2 flex flex-col items-center lg:items-start" data-aos="fade-right">
                <div class="relative">
                    <!-- Glow ring around photo -->
                    <div class="absolute -inset-1.5 rounded-full bg-gradient-to-br from-primary/60 to-primary/10 blur-md"></div>
                    <div class="relative w-52 h-52 rounded-full overflow-hidden border-4 border-primary/40 shadow-2xl shadow-primary/20 mx-auto lg:mx-0">
                        <img src="{{ asset('images/founder-ranjeet.png') }}"
                             alt="Ranjeet Maurya — Founder, EV Fixer"
                             class="w-full h-full object-cover object-top">
                    </div>
                </div>

                <!-- Name badge -->
                <div class="mt-8 text-center lg:text-left">
                    <div class="text-2xl font-extrabold text-white">Ranjeet Maurya</div>
                    <div class="text-primary font-semibold text-sm uppercase tracking-widest mt-1">Founder & CEO — EV Fixer</div>
                    <div class="flex items-center mt-4 space-x-3 justify-center lg:justify-start">
                        <div class="flex text-yellow-400 text-lg">★★★★★</div>
                        <span class="text-gray-500 text-sm">Trusted by 2,500+ customers</span>
                    </div>

                    <!-- Signature-style detail -->
                    <div class="mt-6 flex items-center justify-center lg:justify-start space-x-3 bg-[#1a1a1a] border border-gray-800 rounded-xl px-5 py-3">
                        <svg class="w-5 h-5 text-primary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        <span class="text-gray-300 text-sm font-medium">10+ Years EV Industry Experience</span>
                    </div>
                </div>
            </div>

            <!-- Right: Message Card -->
            <div class="lg:col-span-3">
                <div class="relative bg-[#1a1a1a] border border-gray-800 rounded-2xl p-8 md:p-10 shadow-xl">
                    <!-- Quote mark decoration -->
                    <div class="absolute -top-5 -left-3 text-primary/15 text-[8rem] font-serif leading-none select-none pointer-events-none">"</div>

                    <p class="relative text-gray-200 text-lg leading-relaxed mb-5">
                        Namaskar! 🙏 Main Ranjeet Maurya — EV Fixer ka founder.
                    </p>
                    <p class="relative text-gray-300 text-base leading-relaxed mb-5">
                        Maine khud dekha hai ki jab kisi ki EV battery kharab hoti hai, toh usse ya toh naya battery khareedna padta hai jo bahut mehanga hota hai, ya months tak wait karna padta hai repair ke liye. Yeh problem solve karna tha.
                    </p>
                    <p class="relative text-gray-300 text-base leading-relaxed mb-5">
                        <strong class="text-white">EV Fixer</strong> ki shuruat isi mission ke saath hui — ki har EV owner ko <strong class="text-primary">affordable, fast, and reliable battery repair</strong> mile. Naya battery lene se <strong class="text-primary">40% tak ki bachat</strong> hoti hai humari repair service se.
                    </p>
                    <p class="relative text-gray-300 text-base leading-relaxed mb-8">
                        Humara vision simple hai: <em class="text-white">Ek bhi customer stranded na rahe sirf isliye ki repair mehanga tha.</em> Doorstep service, transparent pricing, aur certified technicians — yahi hai humara vaada.
                    </p>

                    <!-- Highlight chips -->
                    <div class="flex flex-wrap gap-3 mb-8">
                        <span class="inline-flex items-center space-x-1.5 px-3 py-1.5 rounded-full bg-primary/10 border border-primary/25 text-primary text-xs font-semibold">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>40% Cost Savings</span>
                        </span>
                        <span class="inline-flex items-center space-x-1.5 px-3 py-1.5 rounded-full bg-primary/10 border border-primary/25 text-primary text-xs font-semibold">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                            <span>Doorstep Service</span>
                        </span>
                        <span class="inline-flex items-center space-x-1.5 px-3 py-1.5 rounded-full bg-primary/10 border border-primary/25 text-primary text-xs font-semibold">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            <span>Certified Technicians</span>
                        </span>
                        <span class="inline-flex items-center space-x-1.5 px-3 py-1.5 rounded-full bg-primary/10 border border-primary/25 text-primary text-xs font-semibold">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            <span>Fast Turnaround</span>
                        </span>
                    </div>

                    <a href="{{ route('book') }}"
                       id="founder-cta-book"
                       class="inline-flex items-center space-x-2 px-7 py-3.5 bg-primary hover:bg-primary-dark text-black font-bold uppercase tracking-wide rounded-md shadow-[0_0_20px_rgba(117,209,24,0.35)] transition-all transform hover:-translate-y-1 text-sm">
                        <span>Book Service Now</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ============================================================ -->
<!-- B2B & B2C BUSINESS SECTION                                    -->
<!-- ============================================================ -->
<div class="bg-white py-24 border-t border-gray-100" id="our-services">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center space-x-2 text-primary font-bold text-xs tracking-widest uppercase px-4 py-1.5 bg-green-50 rounded-full border border-primary/25 mb-5">
                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                <span>Who We Serve</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight">
                Solutions for <span class="text-primary">Everyone</span>
            </h2>
            <p class="mt-4 text-gray-500 text-lg max-w-2xl mx-auto">
                Whether you're an individual EV owner or a growing business — EV Fixer has the right solution for you.
            </p>
        </div>

        <!-- Two Column Cards -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">

            <!-- ─── B2C Card ─── -->
            <div class="relative rounded-2xl overflow-hidden shadow-xl border border-gray-100 flex flex-col" id="b2c-card">
                <!-- Top accent bar -->
                <div class="h-2 bg-primary w-full"></div>

                <div class="bg-white p-8 md:p-10 flex flex-col flex-1">
                    <!-- Header -->
                    <div class="flex items-center space-x-4 mb-8">
                        <div class="w-14 h-14 rounded-xl bg-green-50 flex items-center justify-center text-primary border border-primary/20 flex-shrink-0">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs font-bold text-primary uppercase tracking-widest mb-1">B2C · Individual Customers</div>
                            <h3 class="text-2xl font-extrabold text-gray-900">For You & Your EV</h3>
                        </div>
                    </div>

                    <!-- Tagline -->
                    <p class="text-gray-500 mb-8 leading-relaxed">
                        Apne EV ki battery problem se pareshan hain? Ghar baithe repair karwayein — bilkul safe, fast, aur wallet-friendly.
                    </p>

                    <!-- Feature list -->
                    <ul class="space-y-4 mb-10 flex-1">
                        <li class="flex items-start space-x-3">
                            <div class="mt-0.5 w-6 h-6 rounded-full bg-green-50 border border-primary/25 flex items-center justify-center flex-shrink-0">
                                <svg class="w-3.5 h-3.5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <span class="font-semibold text-gray-900">EV Battery Repair</span>
                                <p class="text-sm text-gray-500 mt-0.5">Cell-level diagnosis, BMS repair, range restoration.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="mt-0.5 w-6 h-6 rounded-full bg-green-50 border border-primary/25 flex items-center justify-center flex-shrink-0">
                                <svg class="w-3.5 h-3.5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <span class="font-semibold text-gray-900">Doorstep Service</span>
                                <p class="text-sm text-gray-500 mt-0.5">Technician aapke ghar aaega — koi jhanjhat nahi.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="mt-0.5 w-6 h-6 rounded-full bg-green-50 border border-primary/25 flex items-center justify-center flex-shrink-0">
                                <svg class="w-3.5 h-3.5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <span class="font-semibold text-gray-900">40% Cost Savings vs New Battery</span>
                                <p class="text-sm text-gray-500 mt-0.5">Naya battery lena zaruri nahi — repair se bahut sasta.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="mt-0.5 w-6 h-6 rounded-full bg-green-50 border border-primary/25 flex items-center justify-center flex-shrink-0">
                                <svg class="w-3.5 h-3.5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <span class="font-semibold text-gray-900">Quick & Reliable Support</span>
                                <p class="text-sm text-gray-500 mt-0.5">Same-day diagnosis, 24/7 customer helpline.</p>
                            </div>
                        </li>
                    </ul>

                    <!-- Savings badge -->
                    <div class="flex items-center space-x-3 bg-green-50 rounded-xl border border-primary/20 px-5 py-4 mb-8">
                        <div class="text-3xl font-extrabold text-primary">40%</div>
                        <div>
                            <div class="text-sm font-bold text-gray-900">Average Cost Saved</div>
                            <div class="text-xs text-gray-500">vs. buying a new EV battery</div>
                        </div>
                    </div>

                    <!-- CTA -->
                    <a href="{{ route('book') }}"
                       id="b2c-book-service-btn"
                       class="inline-flex items-center justify-center space-x-2 w-full px-6 py-4 bg-primary hover:bg-primary-dark text-black font-bold uppercase tracking-wide rounded-xl shadow-[0_0_20px_rgba(117,209,24,0.35)] transition-all transform hover:-translate-y-1 text-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>Book Service</span>
                    </a>
                </div>
            </div>

            <!-- ─── B2B Card ─── -->
            <div class="relative rounded-2xl overflow-hidden shadow-xl border border-gray-800 flex flex-col" id="b2b-card">
                <!-- Top accent bar -->
                <div class="h-2 bg-gradient-to-r from-primary to-[#3fa800] w-full"></div>

                <div class="bg-[#121212] p-8 md:p-10 flex flex-col flex-1">
                    <!-- Header -->
                    <div class="flex items-center space-x-4 mb-8">
                        <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center text-primary border border-primary/25 flex-shrink-0">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs font-bold text-primary uppercase tracking-widest mb-1">B2B · Businesses & Dealers</div>
                            <h3 class="text-2xl font-extrabold text-white">For Your Business</h3>
                        </div>
                    </div>

                    <!-- Tagline -->
                    <p class="text-gray-400 mb-8 leading-relaxed">
                        Dealer hain ya fleet operator? Humara scalable B2B program aapke business ko zyada profitable banata hai — commission model ke saath.
                    </p>

                    <!-- Feature list -->
                    <ul class="space-y-4 mb-10 flex-1">
                        <li class="flex items-start space-x-3">
                            <div class="mt-0.5 w-6 h-6 rounded-full bg-primary/10 border border-primary/25 flex items-center justify-center flex-shrink-0">
                                <svg class="w-3.5 h-3.5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <span class="font-semibold text-white">Dealer Partnership Program</span>
                                <p class="text-sm text-gray-500 mt-0.5">Authorized partner banen — exclusive benefits payen.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="mt-0.5 w-6 h-6 rounded-full bg-primary/10 border border-primary/25 flex items-center justify-center flex-shrink-0">
                                <svg class="w-3.5 h-3.5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <span class="font-semibold text-white">Bulk Battery Repair & Maintenance</span>
                                <p class="text-sm text-gray-500 mt-0.5">Volume discounts on large-scale battery servicing.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="mt-0.5 w-6 h-6 rounded-full bg-primary/10 border border-primary/25 flex items-center justify-center flex-shrink-0">
                                <svg class="w-3.5 h-3.5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <span class="font-semibold text-white">Fleet Services</span>
                                <p class="text-sm text-gray-500 mt-0.5">E-rickshaw & delivery fleet AMC + priority servicing.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="mt-0.5 w-6 h-6 rounded-full bg-primary/10 border border-primary/25 flex items-center justify-center flex-shrink-0">
                                <svg class="w-3.5 h-3.5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <span class="font-semibold text-white">Commission-Based Referral Model</span>
                                <p class="text-sm text-gray-500 mt-0.5">Refer customers, earn attractive commissions every month.</p>
                            </div>
                        </li>
                    </ul>

                    <!-- Partner benefits strip -->
                    <div class="grid grid-cols-3 gap-3 mb-8">
                        <div class="bg-[#1a1a1a] border border-gray-800 rounded-xl p-3 text-center">
                            <div class="text-xl font-extrabold text-primary">15%</div>
                            <div class="text-xs text-gray-500 mt-0.5">Referral Commission</div>
                        </div>
                        <div class="bg-[#1a1a1a] border border-gray-800 rounded-xl p-3 text-center">
                            <div class="text-xl font-extrabold text-primary">Priority</div>
                            <div class="text-xs text-gray-500 mt-0.5">Service SLA</div>
                        </div>
                        <div class="bg-[#1a1a1a] border border-gray-800 rounded-xl p-3 text-center">
                            <div class="text-xl font-extrabold text-primary">Free</div>
                            <div class="text-xs text-gray-500 mt-0.5">Partner Onboarding</div>
                        </div>
                    </div>

                    <!-- CTA -->
                    <a href="{{ route('contact') }}"
                       id="b2b-partner-btn"
                       class="inline-flex items-center justify-center space-x-2 w-full px-6 py-4 bg-transparent hover:bg-primary/10 text-primary border-2 border-primary font-bold uppercase tracking-wide rounded-xl transition-all transform hover:-translate-y-1 text-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                        <span>Become a Partner</span>
                    </a>
                </div>
            </div>

        </div>

        <!-- Bottom trust bar -->
        <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="flex flex-col items-center p-5 rounded-xl bg-gray-50 border border-gray-100">
                <svg class="w-8 h-8 text-primary mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                <div class="font-extrabold text-gray-900 text-xl">Certified</div>
                <div class="text-xs text-gray-500 mt-1">Technicians</div>
            </div>
            <div class="flex flex-col items-center p-5 rounded-xl bg-gray-50 border border-gray-100">
                <svg class="w-8 h-8 text-primary mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <div class="font-extrabold text-gray-900 text-xl">24/7</div>
                <div class="text-xs text-gray-500 mt-1">Customer Support</div>
            </div>
            <div class="flex flex-col items-center p-5 rounded-xl bg-gray-50 border border-gray-100">
                <svg class="w-8 h-8 text-primary mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                <div class="font-extrabold text-gray-900 text-xl">Transparent</div>
                <div class="text-xs text-gray-500 mt-1">Pricing, No Hidden Costs</div>
            </div>
            <div class="flex flex-col items-center p-5 rounded-xl bg-gray-50 border border-gray-100">
                <svg class="w-8 h-8 text-primary mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                <div class="font-extrabold text-gray-900 text-xl">Doorstep</div>
                <div class="text-xs text-gray-500 mt-1">Pickup & Drop Service</div>
            </div>
        </div>
    </div>
</div>

<!-- Quick CTA / Lead Section -->
<div class="bg-primary border-y-4 border-[#121212]">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between text-black">
        <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl text-center lg:text-left">
            <span class="block">Need EV Repair?</span>
            <span class="block text-gray-800">Book your service appointment in 2 minutes.</span>
        </h2>
        <div class="mt-8 flex justify-center lg:mt-0 lg:flex-shrink-0">
            <div class="inline-flex rounded-md shadow-[0_0_20px_rgba(0,0,0,0.2)] hover:shadow-none transition-shadow">
                <a href="{{ route('book') }}" class="inline-flex items-center justify-center px-8 py-4 border border-transparent text-base font-bold uppercase tracking-wider rounded-md text-white bg-[#121212] hover:bg-[#1a1a1a] transition-colors transform hover:-translate-y-1">
                    Book Service Now
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Stats Row Dark -->
<div class="bg-[#1c1c1c] border-b border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-white">
            <div class="flex items-center">
                <svg class="h-10 w-10 text-primary mr-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/></svg>
                <div>
                    <div class="text-3xl font-extrabold">2,500+</div>
                    <div class="text-xs text-gray-500 uppercase tracking-widest mt-1">Batteries Fixed</div>
                </div>
            </div>
            <div class="flex items-center">
                <svg class="h-10 w-10 text-primary mr-4" fill="currentColor" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                <div>
                    <div class="text-3xl font-extrabold">100%</div>
                    <div class="text-xs text-gray-500 uppercase tracking-widest mt-1">Diagnostic Accuracy</div>
                </div>
            </div>
            <div class="flex items-center">
                <svg class="h-10 w-10 text-primary mr-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l-5.5 9h11L12 2zm0 3.84L13.93 9h-3.87L12 5.84zM17.5 13c-2.49 0-4.5 2.01-4.5 4.5s2.01 4.5 4.5 4.5 4.5-2.01 4.5-4.5-2.01-4.5-4.5-4.5zm0 7c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5zM3 21.5h8v-8H3v8zm2-6h4v4H5v-4z"/></svg>
                <div>
                    <div class="text-3xl font-extrabold">52+</div>
                    <div class="text-xs text-gray-500 uppercase tracking-widest mt-1">Partner Mechanics</div>
                </div>
            </div>
            <div class="flex items-center">
                <svg class="h-10 w-10 text-primary mr-4" fill="currentColor" viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"/></svg>
                <div>
                    <div class="text-3xl font-extrabold">State</div>
                    <div class="text-xs text-gray-500 uppercase tracking-widest mt-1">Wide Delivery</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
