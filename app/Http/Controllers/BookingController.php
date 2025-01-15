<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tour_id' => 'required|exists:tours,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'date' => 'required|date|after:today',
        ]);
    
        $validated['status'] = 'pending';
        $validated['payment_status'] = 'unpaid';
    
        Booking::create($validated);
    
        return redirect()->route('tours.index')
            ->with('success', 'Your booking was created successfully. Please proceed to payment.');
    }

}
