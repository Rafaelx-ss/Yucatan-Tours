@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h1 class="text-3xl font-bold text-gray-900">
                {{ $tour->name }}
            </h1>
        </div>
        <div class="border-t border-gray-200">
            <img src="{{ Storage::url($tour->featured_image) }}" 
                alt="{{ $tour->name }}" 
                class="w-full h-96 object-cover">
            
            <div class="px-4 py-5 sm:p-6">
                <div class="prose max-w-none">
                    {!! $tour->description !!}
                </div>
                
                <div class="mt-8">
                    <h2 class="text-2xl font-bold text-gray-900">
                        Book this tour
                    </h2>
                    
                    <form action="{{ route('bookings.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="tour_id" value="{{ $tour->id }}">
                        <!-- Add booking form fields -->
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
