@extends('layouts.main')

@section('title', 'Book a Service')

@section('content')
<div class="relative overflow-hidden bg-[#121212] py-16 px-4 sm:px-6 lg:py-24 lg:px-8 xl:pl-12 border-b border-gray-800">
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(circle at center, #75d118 0%, transparent 60%);"></div>
    <div class="max-w-3xl mx-auto relative z-10 bg-[#1c1c1c] p-8 md:p-12 rounded-2xl border border-gray-800 shadow-2xl">
        
        <div class="inline-flex items-center space-x-2 text-primary font-bold text-sm tracking-widest uppercase mb-4">
            <span class="w-8 h-[2px] bg-primary"></span>
            <span>Priority Support</span>
        </div>
        <h2 class="text-3xl font-extrabold text-white tracking-tight sm:text-4xl">
            Book EV Service
        </h2>
        <p class="mt-4 text-lg text-gray-400">
            Fill out the form below to schedule a diagnostic or repair session. Our team will contact you shortly to confirm the appointment.
        </p>

        @if(session('success'))
            <div class="mt-8 rounded-md bg-green-900/40 p-4 border border-green-800">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-green-300">
                            {{ session('success') }}
                        </p>
                    </div>
                </div>
            </div>
        @endif

        <form action="{{ route('leads.store') }}" method="POST" class="mt-9 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
            @csrf
            
            <div class="sm:col-span-2">
                <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Full Name</label>
                <div class="mt-1">
                    <input type="text" name="name" id="name" required class="py-3 px-4 block w-full bg-gray-900 text-white border border-gray-700 rounded-md shadow-sm focus:ring-primary focus:border-primary transition-colors" placeholder="John Doe">
                </div>
                @error('name')<p class="mt-1 text-sm text-red-500">{{ $message }}</p>@enderror
            </div>

            <div class="sm:col-span-2">
                <label for="phone" class="block text-sm font-medium text-gray-300 mb-2">Phone Number</label>
                <div class="mt-1">
                    <input type="text" name="phone" id="phone" required class="py-3 px-4 block w-full bg-gray-900 text-white border border-gray-700 rounded-md shadow-sm focus:ring-primary focus:border-primary transition-colors" placeholder="+91 9876543210">
                </div>
                @error('phone')<p class="mt-1 text-sm text-red-500">{{ $message }}</p>@enderror
            </div>

            <div class="sm:col-span-2">
                <label for="service" class="block text-sm font-medium text-gray-300 mb-2">Service Required</label>
                <div class="mt-1">
                    <select id="service" name="service" required class="py-3 px-4 block w-full bg-gray-900 text-white border border-gray-700 rounded-md shadow-sm focus:ring-primary focus:border-primary transition-colors">
                        <option value="Battery Repair" {{ request('service') == 'Battery Repair' ? 'selected' : '' }}>Battery Repair & Diagnostic</option>
                        <option value="Controller/Charger Repair" {{ request('service') == 'Controller/Charger Repair' ? 'selected' : '' }}>Controller or Charger Repair</option>
                        <option value="General Service" {{ request('service') == 'General Service' ? 'selected' : '' }}>General EV Service</option>
                        <option value="Parts/Sales Inquiry" {{ request('service') == 'Parts/Sales Inquiry' ? 'selected' : '' }}>Spare Parts / Sales Inquiry</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                @error('service')<p class="mt-1 text-sm text-red-500">{{ $message }}</p>@enderror
            </div>

            <div class="sm:col-span-2">
                <label for="location" class="block text-sm font-medium text-gray-300 mb-2">Your Location / City</label>
                <div class="mt-1">
                    <input type="text" name="location" id="location" required class="py-3 px-4 block w-full bg-gray-900 text-white border border-gray-700 rounded-md shadow-sm focus:ring-primary focus:border-primary transition-colors" placeholder="Your City & Area">
                </div>
                @error('location')<p class="mt-1 text-sm text-red-500">{{ $message }}</p>@enderror
            </div>

            <div class="sm:col-span-2 pt-4">
                <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-4 border border-transparent rounded-md shadow-[0_0_20px_rgba(117,209,24,0.3)] text-base font-bold text-black uppercase tracking-widest bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-[#1c1c1c] focus:ring-primary transition-all transform hover:-translate-y-1">
                    Submit Booking Request
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
