<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Electric Vehicle Services & Sales') | EV Fixer</title>
    
    <!-- Core SEO Meta Tags -->
    <meta name="description" content="@yield('meta_description', 'EV Fixer - Premium Electric Vehicle aggregator offering battery repair, scooter servicing, and OEM spare parts.')">
    <meta name="keywords" content="EV repair, Electric Scooter sales, EV battery repair, E-rickshaw sales, BLDC motor repair, EV Fixer">
    
    <!-- Advanced Technical SEO -->
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph (Facebook / LinkedIn) -->
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'EV Fixer') | EV Fixer">
    <meta property="og:description" content="@yield('meta_description', 'EV Fixer - Premium Electric Vehicle aggregator offering battery repair, scooter servicing, and OEM spare parts.')">
    <meta property="og:image" content="@yield('og_image', asset('images/hero-scooters.png'))">
    <meta property="og:site_name" content="EV Fixer">
    
    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'EV Fixer') | EV Fixer">
    <meta name="twitter:description" content="@yield('meta_description', 'EV Fixer - Premium Electric Vehicle aggregator offering battery repair, scooter servicing, and OEM spare parts.')">
    <meta name="twitter:image" content="@yield('og_image', asset('images/hero-scooters.png'))">
    
    <!-- Schema Markup -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "LocalBusiness",
      "name": "EV Fixer",
      "telephone": "+91 6388780536",
      "address": {
        "@@type": "PostalAddress",
        "addressLocality": "India"
      }
    }
    </script>
    
    <!-- Google Fonts: Sora & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Sora:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Alpine.js for Mobile Menu -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Tailwind CSS v4 CDN -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    
    <style type="text/tailwindcss">
      @theme {
        --color-primary: #75d118;
        --color-primary-dark: #5fa813;
        --color-accent: #ffffff;
        --color-dark-bg: #121212;
        --color-dark-card: #1c1c1c;
        --font-sans: 'Inter', ui-sans-serif, system-ui, sans-serif;
        --font-heading: 'Sora', sans-serif;
      }
      body {
        background-color: var(--color-dark-bg);
        color: #f3f4f6;
      }
      h1, h2, h3, h4, h5, h6 {
        font-family: var(--font-heading) !important;
      }
    </style>
</head>
<body class="font-sans antialiased bg-dark-bg text-gray-200">
    <!-- Sticky Navbar -->
    <nav x-data="{ mobileMenuOpen: false }" class="sticky top-0 z-50 bg-[#121212]/90 backdrop-blur-md shadow-sm border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="text-2xl font-bold flex items-center">
                        <!-- Autoev style logo with green leaf icon -->
                        <svg class="h-6 w-6 text-primary mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L4 5v6.09c0 5.05 3.41 9.76 8 10.91 4.59-1.15 8-5.86 8-10.91V5l-8-3zm0 13l-4-4h2.5v-5h3v5H16l-4 4z" /></svg>
                        <span class="text-white tracking-wide">EV</span><span class="text-primary tracking-wide">Fixer</span>
                    </a>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-white border-b-2 border-primary pb-1 font-medium' : 'text-gray-400 hover:text-white transition-colors font-medium' }}">Home</a>
                    <a href="{{ route('products') }}" class="{{ request()->routeIs('products') ? 'text-white border-b-2 border-primary pb-1 font-medium' : 'text-gray-400 hover:text-white transition-colors font-medium' }}">Vehicles & Parts</a>
                    <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'text-white border-b-2 border-primary pb-1 font-medium' : 'text-gray-400 hover:text-white transition-colors font-medium' }}">Services</a>
                    <a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'text-white border-b-2 border-primary pb-1 font-medium' : 'text-gray-400 hover:text-white transition-colors font-medium' }}">Gallery</a>
                    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-white border-b-2 border-primary pb-1 font-medium' : 'text-gray-400 hover:text-white transition-colors font-medium' }}">Contact</a>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    <a href="{{ route('book') }}" class="text-sm bg-transparent border border-gray-600 hover:border-primary text-white px-5 py-2 rounded-full font-medium transition-all transform hover:scale-105">
                        Book a Service
                    </a>
                </div>
                <!-- Mobile Menu Button -->
                <div class="flex md:hidden items-center">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-300 hover:text-white focus:outline-none">
                        <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                        <svg x-show="mobileMenuOpen" class="w-6 h-6" x-cloak style="display: none;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div x-show="mobileMenuOpen" x-collapse x-cloak style="display: none;" class="md:hidden bg-[#1c1c1c] border-b border-gray-800 absolute w-full">
            <div class="px-4 pt-2 pb-6 space-y-1 sm:px-3 flex flex-col">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-white block px-3 py-3 rounded-md text-base font-semibold border-l-4 border-primary bg-black/20' : 'text-gray-400 hover:text-white block px-3 py-3 rounded-md text-base font-medium' }}">Home</a>
                <a href="{{ route('products') }}" class="{{ request()->routeIs('products') ? 'text-white block px-3 py-3 rounded-md text-base font-semibold border-l-4 border-primary bg-black/20' : 'text-gray-400 hover:text-white block px-3 py-3 rounded-md text-base font-medium' }}">Vehicles & Parts</a>
                <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'text-white block px-3 py-3 rounded-md text-base font-semibold border-l-4 border-primary bg-black/20' : 'text-gray-400 hover:text-white block px-3 py-3 rounded-md text-base font-medium' }}">Services</a>
                <a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'text-white block px-3 py-3 rounded-md text-base font-semibold border-l-4 border-primary bg-black/20' : 'text-gray-400 hover:text-white block px-3 py-3 rounded-md text-base font-medium' }}">Gallery</a>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-white block px-3 py-3 rounded-md text-base font-semibold border-l-4 border-primary bg-black/20' : 'text-gray-400 hover:text-white block px-3 py-3 rounded-md text-base font-medium' }}">Contact</a>
                <a href="{{ route('book') }}" class="mt-4 text-center block bg-primary text-black px-5 py-3 rounded-md font-bold uppercase transition-all">
                    Book a Service
                </a>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Zero Emissions Banner -->
    <div class="bg-primary text-black py-4 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex space-x-12 animate-pulse font-bold tracking-widest uppercase">
            <span>Zero Emissions</span>
            <span class="opacity-50">—</span>
            <span>Lower Costs</span>
            <span class="opacity-50">—</span>
            <span>Instant Torque</span>
            <span class="opacity-50">—</span>
            <span>Silent Operation</span>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-[#0a0a0a] text-gray-300 py-16 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="col-span-1 md:col-span-1">
                <a href="{{ route('home') }}" class="text-2xl font-bold flex items-center mb-4">
                    <svg class="h-6 w-6 text-primary mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L4 5v6.09c0 5.05 3.41 9.76 8 10.91 4.59-1.15 8-5.86 8-10.91V5l-8-3zm0 13l-4-4h2.5v-5h3v5H16l-4 4z" /></svg>
                    <span class="text-white">Auto</span><span class="text-primary">ev</span>
                </a>
                <p class="mt-4 text-sm text-gray-500 leading-relaxed">Autoev is leading the charge towards a sustainable future by offering premium EV solutions. Zero emissions, zero noise, 100% exhilaration.</p>
                <div class="mt-6 flex space-x-4">
                    <a href="#" class="text-gray-500 hover:text-white"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></a>
                    <a href="#" class="text-gray-500 hover:text-white"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
                </div>
            </div>
            <div>
                <h3 class="text-sm font-semibold mb-4 text-white uppercase tracking-wider">Company</h3>
                <ul class="space-y-3 text-sm text-gray-500">
                    <li><a href="#" class="hover:text-primary transition-colors">About Us</a></li>
                    <li><a href="#" class="hover:text-primary transition-colors">Vehicles</a></li>
                    <li><a href="#" class="hover:text-primary transition-colors">Services</a></li>
                    <li><a href="#" class="hover:text-primary transition-colors">Testimonials</a></li>
                    <li><a href="#" class="hover:text-primary transition-colors">Contact</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-sm font-semibold mb-4 text-white uppercase tracking-wider">Our Products</h3>
                <ul class="space-y-3 text-sm text-gray-500">
                    <li><a href="#" class="hover:text-primary transition-colors">Autoev R300</a></li>
                    <li><a href="#" class="hover:text-primary transition-colors">Autoev P150</a></li>
                    <li><a href="#" class="hover:text-primary transition-colors">Battery Packs</a></li>
                    <li><a href="#" class="hover:text-primary transition-colors">EV Chargers</a></li>
                    <li><a href="#" class="hover:text-primary transition-colors">Parts & Accs</a></li>
                </ul>
            </div>
            <div>
                <ul class="space-y-5 text-sm text-gray-400">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-3 mt-0.5 text-primary" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        <div>
                            <span class="block text-white font-medium mb-1">Showroom Location</span>
                            <span class="text-gray-500">123 EV Avenue, Green City</span>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-3 mt-0.5 text-primary" fill="currentColor" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                        <div>
                            <span class="block text-white font-medium mb-1">Make a Phone Call</span>
                            <span class="text-gray-500">+91 6388780536</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12 pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center text-xs text-gray-600">
            <div>&copy; {{ date('Y') }} Autoev EV Solutions. All rights reserved.</div>
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="#" class="hover:text-primary">Terms & Conditions</a>
                <a href="#" class="hover:text-primary">Privacy Policy</a>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/916388780536" target="_blank" class="fixed bottom-6 right-6 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transition-transform transform hover:scale-110 z-50">
        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.125-.339-.153-.878-.344-1.63-1.092-.931-.931-1.378-1.996-1.558-2.29-.18-.293-.019-.48.163-.661.16-.16.353-.393.528-.592.175-.201.233-.343.349-.572.116-.23.058-.432-.029-.607-.087-.175-.776-1.874-1.063-2.564-.28-.673-.564-.582-.776-.593-.199-.01-.429-.012-.66-.012s-.607.086-.925.433c-.318.347-1.214 1.186-1.214 2.89s1.243 3.348 1.417 3.58c.174.232 2.44 3.731 5.912 5.234.827.359 1.472.573 1.974.733.829.263 1.584.225 2.18.136.666-.101 2.05-.837 2.339-1.646.291-.809.291-1.503.204-1.646-.087-.143-.318-.23-.665-.403z"/>
        </svg>
    </a>
</body>
</html>
