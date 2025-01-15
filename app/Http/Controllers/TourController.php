<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::with('location')->latest()->paginate(12);
        return view('tours.index', compact('tours'));
    }

    public function show(Tour $tour)
    {
        return view('tours.show', compact('tour'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'duration' => 'required',
            'location_id' => 'required|exists:locations,id',
            'featured_image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('featured_image')) {
            $path = $request->file('featured_image')->store('tours', 'public');
            $validated['featured_image'] = $path;
        }

        Tour::create($validated);

        return redirect()->route('tours.index')
            ->with('success', 'Tour created successfully.');
    }
}
