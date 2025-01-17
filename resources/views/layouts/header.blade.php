<header class="bg-red-300 text-black">
    <div class="container mx-auto flex justify-between items-center py-4">
        <!-- Logo Section -->
        <div class="flex items-center">
            <img src="{{ asset('images/coloradas.jpeg') }}" alt="Logo Las Coloradas" class="h-12 mr-4">
            <h1 class="text-lg font-bold"><a href="{{ url('/') }}">Las Coloradas Tours</a></h1>
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex items-center space-x-6">
            <!-- Dropdown Menu -->
            <div class="relative group">
                <button class="flex items-center space-x-1 hover:text-gray-500">
                    <span>Nuestros Tours</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="absolute left-0 mt-2 bg-white text-black py-2 rounded-lg shadow-lg hidden group-hover:block">
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Cozumel Turtle Sanctuary Private Tour</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Night Snorkel Tour</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Night Dive Cozumel</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Catamaran & Snorkeling Tour</a>
                </div>
            </div>
            <a href="#contact" class="hover:text-gray-500">Contacto</a>
            <a href="#faqs" class="hover:text-gray-500">FAQs</a>
            <a href="#blog" class="hover:text-gray-500">Blog</a>
        </nav>

        <!-- Action Buttons -->
        <div class="flex items-center space-x-4">
            <a href="tel:+123456789" class="border border-black px-4 py-2 rounded-lg hover:bg-black hover:text-white">Contact-Us</a>
            <!-- Mobile Menu Toggle -->
            <button id="mobile-menu-toggle" class="lg:hidden flex items-center justify-center bg-gray-700 p-2 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobile-menu" class="hidden bg-gray-900 text-white px-4 py-4 lg:hidden">
        <a href="#" class="block py-2">Nuestros Tours</a>
        <a href="#contact" class="block py-2">Contacto</a>
        <a href="#faqs" class="block py-2">FAQs</a>
        <a href="#blog" class="block py-2">Blog</a>
    </div>
</header>

<script>
    // JavaScript to toggle the mobile menu visibility
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
