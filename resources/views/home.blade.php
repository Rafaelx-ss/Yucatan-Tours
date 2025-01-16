@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12">
    <h1 class="text-3xl font-bold mb-8 bg-black text-white">Welcome to Yucatán Tours</h1>
    <p class="text-gray-700 mb-8">
        Discover the beauty of Yucatán with our exclusive tours. Explore The Pink Lakes, 
        Mayan ruins, and more!
    </p>
    <h2 class="text-2xl font-bold mb-4">Featured Tours</h2>
    <div class="grid grid-cols-3 gap-6">
        @foreach ($tours as $tour)
            <div class="bg-white shadow rounded overflow-hidden">
                <img src="{{ Storage::url($tour->featured_image) }}" 
                    alt="{{ $tour->name }}" 
                    class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold">{{ $tour->name }}</h3>
                    <p class="mt-2 text-gray-600">${{ $tour->price }}</p>
                    <a href="{{ route('tours.show', $tour) }}" 
                        class="block mt-4 text-green-500 font-bold">
                        Learn More
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
