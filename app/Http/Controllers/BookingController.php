<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tour_id' => 'required|exists:tours,id',
            'date' => 'required|date|after:today',
            'number_of_people' => 'required|integer|min:1'
        ]);

        $booking = auth()->user()->bookings()->create($validated);

        return redirect()->route('bookings.show', $booking)
            ->with('success', 'Booking created successfully.');
    }

    public function processPayment(Request $request, Booking $booking)
    {
        try {
            $payment = $request->user()
                ->charge($booking->total * 100, $request->payment_method_id);

            $booking->update(['payment_status' => 'paid']);

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
