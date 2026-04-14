@extends('layouts.main')

@section('title', 'Company Gallery')

@section('content')
<div class="relative overflow-hidden bg-[#121212] py-20 border-b border-gray-800">
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(circle at top right, #75d118 0%, transparent 60%);"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <div class="inline-flex items-center space-x-2 text-primary font-bold text-sm tracking-widest uppercase mb-4">
            <span class="w-8 h-[2px] bg-primary"></span>
            <span>Inside EV Fixer</span>
        </div>
        <h1 class="text-4xl md:text-6xl font-extrabold text-white">Company Gallery</h1>
        <p class="mt-6 text-xl text-gray-400 max-w-2xl mx-auto font-sans">Take a peek inside our state-of-the-art diagnostic workshops, inventory warehouses, and showroom floors.</p>
    </div>
</div>

<div class="py-20 bg-[#121212] relative" x-data="{ filter: 'all' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Gallery Filters -->
        <div class="flex flex-wrap justify-center gap-4 mb-16">
            <button @click="filter = 'all'" :class="filter === 'all' ? 'px-6 py-2 rounded-full border border-primary text-black bg-primary font-bold text-sm uppercase tracking-wider transition-colors' : 'px-6 py-2 rounded-full border border-gray-700 text-gray-400 hover:text-white hover:border-gray-500 font-bold text-sm uppercase tracking-wider transition-colors'">All Photos</button>
            <button @click="filter = 'workshop'" :class="filter === 'workshop' ? 'px-6 py-2 rounded-full border border-primary text-black bg-primary font-bold text-sm uppercase tracking-wider transition-colors' : 'px-6 py-2 rounded-full border border-gray-700 text-gray-400 hover:text-white hover:border-gray-500 font-bold text-sm uppercase tracking-wider transition-colors'">Workshop</button>
            <button @click="filter = 'showroom'" :class="filter === 'showroom' ? 'px-6 py-2 rounded-full border border-primary text-black bg-primary font-bold text-sm uppercase tracking-wider transition-colors' : 'px-6 py-2 rounded-full border border-gray-700 text-gray-400 hover:text-white hover:border-gray-500 font-bold text-sm uppercase tracking-wider transition-colors'">Showroom</button>
        </div>

        <!-- CSS Grid Gallery -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            
            <!-- Gallery Item 1 -->
            <div x-show="filter === 'all' || filter === 'workshop'" x-transition class="group relative aspect-w-1 aspect-h-1 rounded-2xl overflow-hidden bg-gray-900 border border-gray-800 h-80">
                <img src="https://images.unsplash.com/photo-1616422285623-145453664c1e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="EV Workshop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter opacity-80 group-hover:opacity-100">
                <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-0 left-0 p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                    <span class="text-primary font-bold text-xs uppercase tracking-widest font-sans drop-shadow-md">Workshop</span>
                    <h3 class="text-xl font-bold text-white mt-1 drop-shadow-lg">Battery Diagnostics Bay</h3>
                </div>
            </div>

            <!-- Gallery Item 2 -->
            <div x-show="filter === 'all' || filter === 'showroom'" x-transition class="group relative aspect-w-1 aspect-h-1 rounded-2xl overflow-hidden bg-gray-900 border border-gray-800 h-80">
                <img src="https://images.unsplash.com/photo-1593941707882-a5bba14938cb?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Charging Station" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter opacity-80 group-hover:opacity-100">
                <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-0 left-0 p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                    <span class="text-primary font-bold text-xs uppercase tracking-widest font-sans drop-shadow-md">Showroom</span>
                    <h3 class="text-xl font-bold text-white mt-1 drop-shadow-lg">Fast Charging Hub</h3>
                </div>
            </div>

            <!-- Gallery Item 3 -->
            <div x-show="filter === 'all' || filter === 'workshop'" x-transition class="group relative aspect-w-1 aspect-h-1 rounded-2xl overflow-hidden bg-gray-900 border border-gray-800 h-80">
                <img src="https://images.unsplash.com/photo-1563812165997-17b5f54128f7?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Mechanic Tools" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter opacity-80 group-hover:opacity-100">
                <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-0 left-0 p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                    <span class="text-primary font-bold text-xs uppercase tracking-widest font-sans drop-shadow-md">Workshop</span>
                    <h3 class="text-xl font-bold text-white mt-1 drop-shadow-lg">Precision Tools</h3>
                </div>
            </div>

            <!-- Gallery Item 4 -->
            <div x-show="filter === 'all' || filter === 'showroom'" x-transition class="group relative aspect-w-1 aspect-h-1 rounded-2xl overflow-hidden bg-gray-900 border border-gray-800 h-80 md:col-span-2">
                <img src="https://images.unsplash.com/photo-1620803517812-70b7f8ad0b88?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" alt="EV Scooter Sales" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter opacity-80 group-hover:opacity-100">
                <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-[#121212]/20 to-transparent opacity-90"></div>
                <div class="absolute bottom-0 left-0 p-8 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                    <span class="text-primary font-bold text-xs uppercase tracking-widest font-sans drop-shadow-md">Showroom</span>
                    <h3 class="text-2xl font-bold text-white mt-2 drop-shadow-lg">New Arrivals: EV Scooters</h3>
                </div>
            </div>

            <!-- Gallery Item 5 -->
            <div x-show="filter === 'all' || filter === 'workshop'" x-transition class="group relative aspect-w-1 aspect-h-1 rounded-2xl overflow-hidden bg-gray-900 border border-gray-800 h-80">
                <img src="https://images.unsplash.com/photo-1616422285117-0d507b55acfb?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Engine bay" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter opacity-80 group-hover:opacity-100">
                <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-0 left-0 p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                    <span class="text-primary font-bold text-xs uppercase tracking-widest font-sans drop-shadow-md">Workshop</span>
                    <h3 class="text-xl font-bold text-white mt-1 drop-shadow-lg">Controller Fixes</h3>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="bg-[#1c1c1c] py-16 text-center border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center">
        <h2 class="text-2xl md:text-3xl font-bold text-white mb-6 md:mb-0 tracking-tight text-left">Seen enough? Let's fix your ride.</h2>
        <a href="{{ route('book') }}" class="inline-flex items-center justify-center px-8 py-4 text-base font-bold uppercase tracking-wider rounded-md text-black bg-primary hover:bg-primary-dark transition-colors shadow-[0_0_20px_rgba(117,209,24,0.3)]">
            Book Appointment
        </a>
    </div>
</div>
@endsection
