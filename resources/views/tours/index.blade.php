@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12">
    <h1 class="text-3xl font-bold mb-8">Explore Our Tours</h1>
    <div class="grid grid-cols-3 gap-6">
        @foreach ($tours as $tour)
            <div class="bg-white shadow rounded overflow-hidden">
                <img src="{{ Storage::url($tour->featured_image) }}" 
                    alt="{{ $tour->name }}" 
                    class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold">{{ $tour->name }}</h2>
                    <p>{{ $tour->location->name }}</p>
                    <p class="mt-2 text-gray-600">${{ $tour->price }}</p>
                    <a href="{{ route('tours.show', $tour) }}" 
                        class="block mt-4 text-green-500 font-bold">
                        View Details
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-8">
        {{ $tours->links() }}
    </div>
</div>
@endsection
