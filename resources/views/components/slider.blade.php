<section class="slider relative w-full overflow-hidden">
    <!-- Slides -->
    <div class="slides flex transition-transform duration-700 ease-in-out" style="width: 300%;">
        <img src="{{ asset('images/ejem1.webp') }}" alt="Las Coloradas 1" class="w-full h-[500px] object-cover">
        <img src="{{ asset('images/ejem2.webp') }}" alt="Las Coloradas 2" class="w-full h-[500px] object-cover">
        <img src="{{ asset('images/ejem3.jpg') }}" alt="Las Coloradas 3" class="w-full h-[500px] object-cover">
    </div>

    <!-- Botones -->
    <button class="prev absolute top-1/2 left-4 -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full z-10">
        &#10094;
    </button>
    <button class="next absolute top-1/2 right-4 -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full z-10">
        &#10095;
    </button>

    <!-- Indicadores -->
    <div class="dots absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
        <span class="dot w-3 h-3 bg-gray-300 rounded-full cursor-pointer"></span>
        <span class="dot w-3 h-3 bg-gray-300 rounded-full cursor-pointer"></span>
        <span class="dot w-3 h-3 bg-gray-300 rounded-full cursor-pointer"></span>
    </div>
</section>
