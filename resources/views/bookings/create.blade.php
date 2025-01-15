@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12">
    <h1 class="text-2xl font-bold mb-6">Book a Tour</h1>
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="tour" class="block">Select Tour</label>
            <select name="tour_id" id="tour" class="w-full border rounded px-4 py-2">
                @foreach ($tours as $tour)
                    <option value="{{ $tour->id }}">{{ $tour->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="name" class="block">Your Name</label>
            <input type="text" name="name" id="name" class="w-full border rounded px-4 py-2" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block">Your Email</label>
            <input type="email" name="email" id="email" class="w-full border rounded px-4 py-2" required>
        </div>
        <div class="mb-4">
            <label for="phone" class="block">Your Phone</label>
            <input type="text" name="phone" id="phone" class="w-full border rounded px-4 py-2" required>
        </div>
        <div class="mb-4">
            <label for="date" class="block">Booking Date</label>
            <input type="date" name="date" id="date" class="w-full border rounded px-4 py-2" required>
        </div>
        <button type="submit" class="mt-4 bg-green-500 text-white px-4 py-2 rounded">Book Now</button>
    </form>
</div>
@endsection
